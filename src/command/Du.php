<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Du extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'du';
    }

    // 每行输出以 NUL 结束，而不是换行
    public function null(): static
    {
        $this->addFlag('0');

        return $this;
    }

    // 写入所有文档的计数，而不仅仅是目录
    public function all(): static
    {
        $this->addFlag('a');

        return $this;
    }

    // 打印明显大小而不是磁盘使用情况
    public function apparentSize(): static
    {
        $this->addOption('apparent-size');

        return $this;
    }

    // 按指定的块大小显示大小信息
    public function blockSize(string $size): static
    {
        $this->addOption('block-size', $size);

        return $this;
    }

    // 等价于 'apparent-size block-size=1'
    public function bytes(): static
    {
        $this->addFlag('b');

        return $this;
    }

    // 生成一个总计
    public function total(): static
    {
        $this->addFlag('c');

        return $this;
    }

    // 仅解引用命令行中列出的符号链接
    public function dereferenceArgs(): static
    {
        $this->addFlag('D');

        return $this;
    }

    // 仅打印指定深度下的目录总计
    public function maxDepth(int $n): static
    {
        $this->addFlag('d', (string)$n);

        return $this;
    }

    // 从文档中总结 NUL 终止的文档名
    public function files0From(string $file): static
    {
        $this->addOption('files0-from', $file);

        return $this;
    }

    // 等价于 dereference-args (-D)
    public function dereferenceArgsEquivalent(): static
    {
        $this->addFlag('H');

        return $this;
    }

    // 以人类可读格式打印大小（例如，1K 234M 2G）
    public function humanReadable(): static
    {
        $this->addFlag('h');

        return $this;
    }

    // 列出 inode 使用信息而不是块使用
    public function inodes(): static
    {
        $this->addOption('inodes');

        return $this;
    }

    // 类似于 block-size=1K
    public function blockK(): static
    {
        $this->addFlag('k');

        return $this;
    }

    // 解引用所有符号链接
    public function dereference(): static
    {
        $this->addFlag('L');

        return $this;
    }

    // 如果硬链接多次计数大小
    public function countLinks(): static
    {
        $this->addFlag('l');

        return $this;
    }

    // 类似于 block-size=1M
    public function blockM(): static
    {
        $this->addFlag('m');

        return $this;
    }

    // 不跟随任何符号链接（这是默认值）
    public function noDereference(): static
    {
        $this->addFlag('P');

        return $this;
    }

    // 对于目录，不包括子目录的大小
    public function separateDirs(): static
    {
        $this->addOption('separate-dirs');

        return $this;
    }

    // 类似 -h，但使用 1000 的幂而不是 1024
    public function si(): static
    {
        $this->addOption('si');

        return $this;
    }

    // 仅显示每个参数的总计
    public function summarize(): static
    {
        $this->addFlag('s');

        return $this;
    }

    // 排除小于 SIZE 的条目（如果为正数），或排除大于 SIZE 的条目（如果为负数）
    public function threshold(string $size): static
    {
        $this->addOption('t', $size);

        return $this;
    }

    // 显示目录或其子目录中任何文档的最后修改时间
    public function time(): static
    {
        $this->addOption('time');

        return $this;
    }

    // 用 WORD 代替修改时间显示时间
    public function timeWord(string $word): static
    {
        $this->addOption('time', $word);

        return $this;
    }

    // 使用 STYLE 显示时间，STYLE 可以是不同格式
    public function timeStyle(string $style): static
    {
        $this->addOption('time-style', $style);

        return $this;
    }

    // 排除与 FILE 中任何模式匹配的文档
    public function excludeFrom(string $file): static
    {
        $this->addOption('X', $file);

        return $this;
    }

    // 排除与 PATTERN 匹配的文档
    public function excludePattern(string $pattern): static
    {
        $this->addOption('exclude', $pattern);

        return $this;
    }

    // 跳过不同文档系统上的目录
    public function oneFileSystem(): static
    {
        $this->addFlag('x');

        return $this;
    }
}
