<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Chown extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'chown';
    }

    // 设置用户和组
    public function userAndGroup(string $userAndGroup): static
    {
        $this->addArgument($userAndGroup);

        return $this;
    }

    // 设置目标目录
    public function target(string $dir): static
    {
        $this->addArgument($dir);

        return $this;
    }

    // 类似于 verbose，但仅在更改时报告
    public function changes(): static
    {
        $this->addFlag('c');

        return $this;
    }

    // 抑制大多数错误消息
    public function silent(): static
    {
        $this->addFlag('f');

        return $this;
    }

    // 为每个处理的文档输出诊断信息
    public function verbose(): static
    {
        $this->addFlag('v');

        return $this;
    }

    // 影响每个符号链接的引用（这是默认行为），而不是符号链接本身
    public function dereference(): static
    {
        $this->addOption('dereference');

        return $this;
    }

    // 影响符号链接而非任何引用的文档（仅对可以修改符号链接所有权的系统有用）
    public function noDereference(): static
    {
        $this->addFlag('h');

        return $this;
    }

    // 仅当当前所有者和/或组与这里指定的匹配时，才更改每个文档的所有者和/或组
    public function from(string $currentOwnerAndGroup): static
    {
        $this->addOption('from', $currentOwnerAndGroup);

        return $this;
    }

    // 不将 '/' 特殊处理（默认为否）
    public function noPreserveRoot(): static
    {
        $this->addOption('no-preserve-root');

        return $this;
    }

    // 递归操作时，禁止对 '/' 进行操作
    public function preserveRoot(): static
    {
        $this->addOption('preserve-root');

        return $this;
    }

    // 使用 RFILE 的所有者和组，而不是指定 OWNER:GROUP 值
    public function reference(string $rfile): static
    {
        $this->addOption('reference', $rfile);

        return $this;
    }

    // 递归操作文档和目录
    public function recursive(): static
    {
        $this->addFlag('R');

        return $this;
    }

    // 如果命令行参数是指向目录的符号链接，则遍历它
    public function traverseSymbolicLinkToDirectory(): static
    {
        $this->addFlag('H');

        return $this;
    }

    // 遇到的每个指向目录的符号链接都遍历
    public function traverseEverySymbolicLinkToDirectory(): static
    {
        $this->addFlag('L');

        return $this;
    }

    // 不遍历任何符号链接（默认）
    public function noTraverseSymbolicLinks(): static
    {
        $this->addFlag('P');

        return $this;
    }
}
