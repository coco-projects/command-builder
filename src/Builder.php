<?php

    namespace Coco\commandBuilder;

    use Coco\commandBuilder\abstract\CommandAbstract;
    use Coco\commandBuilder\sections\Argument;
    use Coco\commandBuilder\sections\Flag;
    use Coco\commandBuilder\sections\Option;
    use Coco\commandBuilder\sections\SubCommand;

class Builder extends CommandAbstract
{
    protected string             $command;
    protected string|int|Builder $subCommand = '';

    public function __construct(string|int|Builder $command)
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
        $section = new Argument($value);

        $this->sections[] = $section;

        return $section;
    }

    public function setSubCommand(string|int|Builder $value): SubCommand
    {
        $section = new SubCommand($value);

        $this->sections[] = $section;

        return $section;
    }

    public function addEnd(string|int|Builder $value): SubCommand
    {
        $section = new SubCommand($value);

        $this->end[] = $section;

        return $section;
    }

    public function build(callable $callback): string
    {
        call_user_func_array($callback, [$this]);

        return $this;
    }

    protected function buildCommand(): string
    {
        $value = implode('', [
            $this->command,
            trim($this->subCommand) ? ' ' . trim($this->subCommand) : '',
        ]);

        foreach ($this->sections as $k => $v) {
            $t = trim((string)$v);
            if ($t) {
                $value .= ' ' . $t;
            }
        }

        foreach ($this->end as $k => $v) {
            $t = trim((string)$v);
            if ($t) {
                $value .= ' ' . $t;
            }
        }

        return $value;
    }
}
