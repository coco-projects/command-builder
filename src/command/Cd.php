<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Cd extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'cd';
    }

    public function target(string $dir): static
    {
        $this->addArgument($dir);

        return $this;
    }
}
