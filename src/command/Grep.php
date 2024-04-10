<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\CommandAbstract;

class Grep extends CommandAbstract
{
    public function __construct()
    {
        parent::__construct('grep');
    }
}
