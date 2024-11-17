<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Free extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'free';
    }

    // 以字节为单位显示输出
    public function bytes(): static
    {
        $this->addFlag('b');

        return $this;
    }

    // 以千字节为单位显示输出
    public function kilo(): static
    {
        $this->addOption('kilo');

        return $this;
    }

    // 以兆字节为单位显示输出
    public function mega(): static
    {
        $this->addOption('mega');

        return $this;
    }

    // 以吉字节为单位显示输出
    public function giga(): static
    {
        $this->addOption('giga');

        return $this;
    }

    // 以太字节为单位显示输出
    public function tera(): static
    {
        $this->addOption('tera');

        return $this;
    }

    // 以拍字节为单位显示输出
    public function peta(): static
    {
        $this->addOption('peta');

        return $this;
    }

    // 以 KiB 为单位显示输出
    public function kibi(): static
    {
        $this->addFlag('k');

        return $this;
    }

    // 以 MiB 为单位显示输出
    public function mebi(): static
    {
        $this->addFlag('m');

        return $this;
    }

    // 以 GiB 为单位显示输出
    public function gibi(): static
    {
        $this->addFlag('g');

        return $this;
    }

    // 以 TiB 为单位显示输出
    public function tebi(): static
    {
        $this->addOption('tebi');

        return $this;
    }

    // 以 PiB 为单位显示输出
    public function pebibytes(): static
    {
        $this->addOption('pebi');

        return $this;
    }

    // 显示人类可读的输出
    public function human(): static
    {
        $this->addFlag('h');

        return $this;
    }

    // 使用 1000 而不是 1024 的幂
    public function si(): static
    {
        $this->addOption('si');

        return $this;
    }

    // 显示详细的低内存和高内存统计
    public function lohi(): static
    {
        $this->addFlag('l');

        return $this;
    }

    // 显示 RAM + Swap 的总计
    public function total(): static
    {
        $this->addFlag('t');

        return $this;
    }

    // 每 N 秒重复打印
    public function seconds(int $n): static
    {
        $this->addOption('seconds', (string)$n);

        return $this;
    }

    // 重复打印 N 次，然后退出
    public function count(int $n): static
    {
        $this->addOption('count', (string)$n);

        return $this;
    }

    // 宽输出
    public function wide(): static
    {
        $this->addFlag('w');

        return $this;
    }
}
