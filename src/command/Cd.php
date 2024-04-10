<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\CommandAbstract;

class Cd extends CommandAbstract
{
    public function __construct()
    {
        parent::__construct('cd');
    }

    public function target(string $dir): static
    {
        $this->addArgument($dir);

        return $this;
    }
}
