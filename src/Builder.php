<?php

    namespace Coco\commandBuilder;

    use Coco\commandBuilder\sections\Argument;
    use Coco\commandBuilder\sections\Flag;
    use Coco\commandBuilder\sections\Option;
    use Coco\commandBuilder\sections\Subcommand;

class Builder
{
    protected string             $command;
    protected bool               $withBash   = false;
    protected string|int|Builder $subcommand = '';
    protected array              $sections   = [];

    public function __construct($command)
    {
        $this->command = $command;
    }

    public function addFlag(string $key, string|int|Builder $value = ''): Flag
    {
        $section = new Flag($key, $value);

        $this->sections[] = $section;

        return $section;
    }

    public function addOption(string $key, string|int|Builder $value = ''): Option
    {
        $section = new Option($key, $value);

        $this->sections[] = $section;

        return $section;
    }

    public function addArgument(string|int|Builder $value): Argument
    {
        $section = new  Argument($value);

        $this->sections[] = $section;

        return $section;
    }

    public function setSubcommand(string|int|Builder $value): Subcommand
    {
        $section = new  Subcommand($value);

        $this->sections[] = $section;

        return $section;
    }

    public function withBash(): static
    {
        $this->withBash = true;

        return $this;
    }

    public function build(callable $callback): string
    {
        call_user_func_array($callback, [$this]);

        return $this;
    }

    public function __toString(): string
    {
        $value = implode('', [
            $this->command,
            trim($this->subcommand) ? ' ' . trim($this->subcommand) : '',
        ]);

        foreach ($this->sections as $k => $v) {
            $t = (string)$v;
            if ($t) {
                $value .= ' ' . $t;
            }
        }

        if ($this->withBash) {
            $value = "$($value)";
        }

        return $value;
    }
}
