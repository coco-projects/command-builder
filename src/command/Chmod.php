<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Chmod extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'chmod';
    }

    // 设置目标权限
    public function privilege(string $privilege): static
    {
        $this->addArgument($privilege);

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

    // 使用 RFILE 的模式而不是 MODE 值
    public function reference(string $rfile): static
    {
        $this->addOption('reference', $rfile);

        return $this;
    }

    // 递归更改文档和目录
    public function recursive(): static
    {
        $this->addFlag('R');

        return $this;
    }

    // 输出版本信息并退出
    public function version(): static
    {
        $this->addOption('version');

        return $this;
    }
}
