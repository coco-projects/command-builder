<?php

    declare(strict_types = 1);

    namespace Coco\commandBuilder\sections;

    use Coco\commandBuilder\abstract\SectionAbstract;
    use Coco\commandBuilder\Builder;

    //raw
class Param extends SectionAbstract
{
    protected string|int|Builder $value = '';

    public function __construct(string|int|Builder $value)
    {
        $this->value = $value;
    }

    public function toString(): string
    {
        switch ($this->flag) {
            case static::SQ:
                $value = "'" . strtr($this->value, ["'" => "\'",]) . "'";
                break;

            case static::DQ:
                $value = '"' . strtr($this->value, ['"' => '\"',]) . '"';
                break;

            default:
                $value = $this->value;
                break;
        }

        return trim($value);
    }
}
