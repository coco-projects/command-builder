<?php

    namespace Coco\commandBuilder\abstract;

abstract class CommandAbstract
{
    protected array $sections = [];
    protected array $end      = [];

    abstract protected function buildCommand(): string;

    public function __toString(): string
    {
        return $this->buildCommand();
    }
}
