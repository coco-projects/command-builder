<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Pkill extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'pkill';
    }

    // 进程名
    public function pattern(string $pattern): static
    {
        $this->addArgument($pattern);

        return $this;
    }

    // 发送信号（可以是数字或名称）
    public function sendSignal(string $sig): static
    {
        $this->addFlag('signal', $sig);

        return $this;
    }

    // 显示被杀掉的进程
    public function echoKilled(): static
    {
        $this->addFlag('e');

        return $this;
    }

    // 匹配进程的数量
    public function countMatchingProcesses(): static
    {
        $this->addFlag('c');

        return $this;
    }

    // 使用完整进程名称匹配
    public function matchFullProcessName(): static
    {
        $this->addFlag('f');

        return $this;
    }

    // 匹配列出的进程组 ID
    public function matchProcessGroupIds(string $pgid): static
    {
        $this->addOption('pgroup', $pgid);

        return $this;
    }

    // 匹配真实组 ID
    public function matchRealGroupIds(string $gid): static
    {
        $this->addOption('group', $gid);

        return $this;
    }

    // 不区分大小写匹配
    public function ignoreCase(): static
    {
        $this->addFlag('i');

        return $this;
    }

    // 选择最近启动的进程
    public function selectNewest(): static
    {
        $this->addFlag('n');

        return $this;
    }

    // 选择最早启动的进程
    public function selectOldest(): static
    {
        $this->addFlag('o');

        return $this;
    }

    // 选择超过指定秒数的进程
    public function selectOlderThan(int $seconds): static
    {
        $this->addFlag('O', $seconds);

        return $this;
    }

    // 仅匹配给定父进程的子进程
    public function matchChildProcessesOfParent(string $ppid): static
    {
        $this->addOption('parent', $ppid);

        return $this;
    }

    // 匹配会话 ID
    public function matchSessionIds(string $sid): static
    {
        $this->addOption('session', $sid);

        return $this;
    }

    // 按控制终端匹配
    public function matchByControllingTerminal(string $tty): static
    {
        $this->addOption('terminal', $tty);

        return $this;
    }

    // 匹配有效 ID
    public function matchEffectiveId(string $id): static
    {
        $this->addOption('euid', $id);

        return $this;
    }

    // 匹配真实 ID
    public function matchRealId(string $id): static
    {
        $this->addOption('uid', $id);

        return $this;
    }

    // 精确匹配命令名称
    public function matchExactCommandName(): static
    {
        $this->addFlag('x');

        return $this;
    }

    // 从文档读取 PIDs
    public function readPidsFromFile(string $file): static
    {
        $this->addOption('pidfile', $file);

        return $this;
    }

    // 如果 PID 文档未被锁定则失败
    public function failIfPidFileNotLocked(): static
    {
        $this->addFlag('L');

        return $this;
    }

    // 匹配运行状态
    public function matchRunStates(string $state): static
    {
        $this->addOption('runstates', $state);

        return $this;
    }

    // 匹配与指定 PID 处于相同命名空间的进程
    public function matchProcessesInSameNamespace(string $pid): static
    {
        $this->addOption('ns', $pid);

        return $this;
    }

    // 列出将考虑的命名空间
    public function listNamespaces(string $namespaces): static
    {
        $this->addOption('nslist', $namespaces);

        return $this;
    }
}
