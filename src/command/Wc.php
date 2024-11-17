<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Wc extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'wc';
    }

    // 打印字节计数
    public function bytes(): static
    {
        $this->addFlag('c');

        return $this;
    }

    // 打印字符计数
    public function chars(): static
    {
        $this->addFlag('m');

        return $this;
    }

    // 打印行计数
    public function lines(): static
    {
        $this->addFlag('l');

        return $this;
    }

    // 从文档中读取输入，文档名以NUL结束
    public function files0From(string $file): static
    {
        $this->addOption('files0-from', $file);

        return $this;
    }

    // 打印最大行长度
    public function maxLineLength(): static
    {
        $this->addFlag('L');

        return $this;
    }

    // 打印单词计数
    public function words(): static
    {
        $this->addFlag('w');

        return $this;
    }
}
