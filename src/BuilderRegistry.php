<?php

    namespace Coco\commandBuilder;

    use Coco\commandBuilder\abstract\CommandAbstract;

class BuilderRegistry extends CommandAbstract
{
    public static function getIns(): static
    {
        return new static();
    }

    public function raw(string|int|Builder $command): static
    {
        $this->command($command);

        return $this;
    }

    public function command(string|int|Builder $command): static
    {
        $this->sections[] = $command;

        return $this;
    }

    public function commandBash(string|int|Builder $command): static
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

    protected function buildCommand(): string
    {
        $value = '';

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
