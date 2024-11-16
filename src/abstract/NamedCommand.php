<?php

    namespace Coco\commandBuilder\abstract;

    use Coco\commandBuilder\Builder;

class NamedCommand extends Builder
{
    protected static string $name;

    public static function getIns(): static
    {
        return new static(static::$name);
    }
}
