<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Nohup extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'nohup';
    }

    public function runBackend(): static
    {
        $this->addEnd('&');

        return $this;
    }
}
