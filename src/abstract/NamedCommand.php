<?php

    namespace Coco\commandBuilder\abstract;

    use Coco\commandBuilder\Builder;

class NamedCommand extends Builder
{
    protected static function resolveName(): string
    {
    }

    public static function getIns(?string $name = null): static
    {
        if (is_null($name)) {
            $name = static::resolveName();
        }

        return new static($name);
    }
}
