<?php

    namespace Coco\commandBuilder\abstract;

abstract class SectionAbstract
{
    protected const NONE = 0;
    protected const SQ   = 1;
    protected const DQ   = 2;

    protected int $flag = self::NONE;

    abstract public function toString(): string;

    public function sq(): static
    {
        $this->flag = static::SQ;

        return $this;
    }

    public function dq(): static
    {
        $this->flag = static::DQ;

        return $this;
    }

    public function __toString()
    {
        return $this->toString();
    }
}
