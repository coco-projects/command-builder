<?php

    namespace Coco\commandBuilder;

    use Coco\commandBuilder\command\Sudo;

class BuilderRegistry
{
    protected array $sections = [];

    public static function init(string|int|Builder $command, $withSudo = false): static
    {
        if ($withSudo) {
            return (new static(Sudo::getIns()))->withCommand($command);
        }

        return new static($command);
    }

    protected function __construct(string|int|Builder $command)
    {
        $this->sections[] = $command;
    }

    public function withCommand(string|int|Builder $command): static
    {
        $this->sections[] = $command;

        return $this;
    }

    public function baseCommand(string|int|Builder $command): static
    {
        $this->sections[] = "$($command)";

        return $this;
    }

    public function or(): static
    {
        $this->sections[] = '||';

        return $this;
    }

    public function and(): static
    {
        $this->sections[] = '&&';

        return $this;
    }

    public function inputRedirection(): static
    {
        $this->sections[] = '<';

        return $this;
    }

    public function outputRedirection(): static
    {
        $this->sections[] = '>';

        return $this;
    }

    public function outputRedirectionAppend(): static
    {
        $this->sections[] = '>>';

        return $this;
    }

    public function pipe(): static
    {
        $this->sections[] = '|';

        return $this;
    }


    public function ampersand(): static
    {
        $this->sections[] = '&';

        return $this;
    }

    public function semicolon(): static
    {
        $this->sections[] = ';';

        return $this;
    }

    public function __toString(): string
    {
        $value = '';

        foreach ($this->sections as $k => $v) {
            if ($t = (string)$v) {
                $value .= ' ' . $t;
            }
        }

        return $value;
    }
}
