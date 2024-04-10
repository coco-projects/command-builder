<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\CommandAbstract;

class Ls extends CommandAbstract
{
    public function __construct()
    {
        parent::__construct('ls');
    }

    public function target(string $dir): static
    {
        $this->addArgument($dir);

        return $this;
    }

    public function readable(): static
    {
        $this->addFlag('h');

        return $this;
    }
}
