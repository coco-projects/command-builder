<?php

    declare(strict_types = 1);

    namespace Coco\commandBuilder\sections;

    use Coco\commandBuilder\abstract\SectionAbstract;
    use Coco\commandBuilder\Builder;

    // list
class Subcommand extends SectionAbstract
{
    protected string|int|Builder $value = '';

    public function __construct(string|int|Builder $value)
    {
        $this->value = $value;
    }

    public function toString(): string
    {
        return trim($this->value);
    }
}
