<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Uname extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'uname';
    }

    // 打印所有信息，按以下顺序排列
    public function all(): static
    {
        $this->addFlag('a');

        return $this;
    }

    // 打印内核名称
    public function kernelName(): static
    {
        $this->addFlag('s');

        return $this;
    }

    // 打印网络节点主机名
    public function nodeName(): static
    {
        $this->addFlag('n');

        return $this;
    }

    // 打印内核发布版本
    public function kernelRelease(): static
    {
        $this->addFlag('r');

        return $this;
    }

    // 打印内核版本
    public function kernelVersion(): static
    {
        $this->addFlag('v');

        return $this;
    }

    // 打印机器硬件名称
    public function machine(): static
    {
        $this->addFlag('m');

        return $this;
    }

    // 打印处理器类型（非便携）
    public function processor(): static
    {
        $this->addFlag('p');

        return $this;
    }

    // 打印硬件平台（非便携）
    public function hardwarePlatform(): static
    {
        $this->addFlag('i');

        return $this;
    }

    // 打印操作系统
    public function operatingSystem(): static
    {
        $this->addFlag('o');

        return $this;
    }
}
