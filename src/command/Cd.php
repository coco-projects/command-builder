<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Cd extends NamedCommand
{
    protected static string $name = 'cd';

    public function target(string $dir): static
    {
        $this->addArgument($dir);

        return $this;
    }
}
