<?php

    namespace Coco\commandBuilder\abstract;

    use Coco\commandBuilder\Builder;

class CommandAbstract extends Builder
{
    public static function getIns(): static
    {
        return new static();
    }
}
