<?php

    declare(strict_types = 1);

    namespace Coco\commandBuilder\sections;

    use Coco\commandBuilder\abstract\SectionAbstract;
    use Coco\commandBuilder\Builder;

    //--a=bb
    //--a
class Option extends SectionAbstract
{
    protected string             $key    = '';
    protected string|int|Builder $value  = '';
    protected bool               $noMark = false;

    public function __construct(string $key, string|int|Builder $value = '')
    {
        $this->key   = $key;
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

        if (empty($this->value)) {
            return implode('', [
                '--',
                trim($this->key),
            ]);
        } else {
            return implode('', [
                '--',
                trim($this->key),
                $this->noMark ? ' ' : '=',
                trim($value),
            ]);
        }
    }

    public function noMark(): static
    {
        $this->noMark = true;

        return $this;
    }
}
