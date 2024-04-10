<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\CommandAbstract;

class Sudo extends CommandAbstract
{
    public function __construct()
    {
        parent::__construct('sudo');
    }
}
