<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Sudo extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'sudo';
    }
}
