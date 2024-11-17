<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Ps extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'ps';
    }

    // 显示所有进程（包括其他用户的进程）
    public function showAll(): static
    {
        $this->addFlag('a');

        return $this;
    }

    // 显示当前终端的进程
    public function showTerminal(): static
    {
        $this->addFlag('t');

        return $this;
    }

    // 显示包括父进程在内的树状结构
    public function showTree(): static
    {
        $this->addFlag('T');

        return $this;
    }

    // 显示所有进程（包括无终端的进程）
    public function showEvery(): static
    {
        $this->addFlag('e');

        return $this;
    }

    // 显示完整的命令行信息
    public function fullCommandLine(): static
    {
        $this->addFlag('f');

        return $this;
    }

    // 显示进程的详细信息
    public function longFormat(): static
    {
        $this->addFlag('l');

        return $this;
    }

    // 显示当前用户的进程
    public function showUser(): static
    {
        $this->addFlag('u');

        return $this;
    }

    // 显示线程信息
    public function showThreads(): static
    {
        $this->addFlag('L');

        return $this;
    }

    // 显示进程的环境变量
    public function showEnvironment(): static
    {
        $this->addFlag('e');

        return $this;
    }

    // 显示进程状态信息（如内存、CPU 使用）
    public function showStatus(): static
    {
        $this->addFlag('s');

        return $this;
    }

    // 显示进程的 PID（进程ID）
    public function showPid(): static
    {
        $this->addFlag('p');

        return $this;
    }

    // 显示进程的 CPU 时间
    public function showCpuTime(): static
    {
        $this->addFlag('c');

        return $this;
    }

    // 显示进程的优先级
    public function showPriority(): static
    {
        $this->addFlag('p');

        return $this;
    }

    // 显示进程的信息（基于某个指定的 PID）
    public function pid(int $pid): static
    {
        $this->addFlag('p', $pid);

        return $this;
    }

    // 显示进程命令的完整路径
    public function fullPath(): static
    {
        $this->addFlag('P');

        return $this;
    }

    // 按照 CPU 占用排序
    public function sortByCpu(): static
    {
        $this->addOption('sort', '%cpu');

        return $this;
    }

    // 按照内存占用排序
    public function sortByMemory(): static
    {
        $this->addOption('sort', '%mem');

        return $this;
    }

    // 显示进程的资源使用情况
    public function resourceUsage(): static
    {
        $this->addFlag('v');

        return $this;
    }
}
