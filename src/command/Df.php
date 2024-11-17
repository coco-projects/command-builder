<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Df extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'df';
    }

    // 包括伪文档系统、重复文档系统和无法访问的文档系统
    public function all(): static
    {
        $this->addFlag('a');

        return $this;
    }

    // 按照指定的块大小显示大小信息
    public function blockSize(string $size): static
    {
        $this->addOption('block-size', $size);

        return $this;
    }

    // 显示文档的统计信息而不是挂载点
    public function direct(): static
    {
        $this->addOption('direct');

        return $this;
    }

    // 打印以 1024 的幂为单位的大小（例如 1023M）
    public function humanReadable(): static
    {
        $this->addFlag('h');

        return $this;
    }

    // 打印以 1000 的幂为单位的大小（例如 1.1G）
    public function si(): static
    {
        $this->addFlag('H');

        return $this;
    }

    // 列出 inode 信息而不是块使用情况
    public function inodes(): static
    {
        $this->addFlag('i');

        return $this;
    }

    // 类似于 block-size=1K
    public function blockK(): static
    {
        $this->addFlag('k');

        return $this;
    }

    // 限制列表到本地文档系统
    public function local(): static
    {
        $this->addFlag('l');

        return $this;
    }

    // 在获取使用信息之前不会调用 sync（默认）
    public function noSync(): static
    {
        $this->addOption('no-sync');

        return $this;
    }

    // 使用 FIELD_LIST 定义的输出格式
    public function output(string $fieldList): static
    {
        $this->addOption('output', $fieldList);

        return $this;
    }

    // 使用 POSIX 输出格式
    public function portability(): static
    {
        $this->addFlag('P');

        return $this;
    }

    // 在获取使用信息之前调用 sync
    public function sync(): static
    {
        $this->addOption('sync');

        return $this;
    }

    // 省略所有对可用空间无显着意义的条目，并生成总计
    public function total(): static
    {
        $this->addOption('total');

        return $this;
    }

    // 限制列表到特定类型的文档系统
    public function type(string $type): static
    {
        $this->addOption('t', $type);

        return $this;
    }

    // 打印文档系统类型
    public function printType(): static
    {
        $this->addOption('T');

        return $this;
    }

    // 限制列表到不是特定类型的文档系统
    public function excludeType(string $type): static
    {
        $this->addOption('x', $type);

        return $this;
    }
}
