<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Pkill extends NamedCommand
{
    // 请求进程终止并重新加载配置
    const SIGN_1_HUP = 'HUP';

    // 中断进程，通常是用户按下 Ctrl+C 时发送的信号
    const SIGN_2_INT = 'INT';

    // 请求进程中止并且生成内核转储文档
    const SIGN_3_QUIT = 'QUIT';

    // 非法指令（通常是进程遇到未定义的指令时）
    const SIGN_4_ILL = 'ILL';

    // 死循环（调试时的陷阱信号）
    const SIGN_5_TRAP = 'TRAP';

    // 输入/输出异常
    const SIGN_6_IOT = 'IOT';

    // 总线错误
    const SIGN_7_BUS = 'BUS';

    // 浮点数异常
    const SIGN_8_FPE = 'FPE';

    // 强制终止进程
    const SIGN_9_KILL = 'KILL';

    // 用户定义的信号1
    const SIGN_10_USR1 = 'USR1';

    // 在进程中出现段错误时发送
    const SIGN_11_SEGV = 'SEGV';

    // 用户定义的信号2
    const SIGN_12_USR2 = 'USR2';

    // 管道错误
    const SIGN_13_PIPE = 'PIPE';

    // 定时器超时信号
    const SIGN_14_ALRM = 'ALRM';

    // 进程退出信号
    const SIGN_15_TERM = 'TERM';

    // 堆栈溢出
    const SIGN_16_STKFLT = 'STKFLT';

    // 子进程退出时父进程收到的信号
    const SIGN_17_CHLD = 'CHLD';

    // 恢复停止的进程
    const SIGN_18_CONT = 'CONT';

    // 停止进程
    const SIGN_19_STOP = 'STOP';

    // 请求进程暂停执行
    const SIGN_20_TSTP = 'TSTP';

    // 控制终端输入
    const SIGN_21_TTIN = 'TTIN';

    // 控制终端输出
    const SIGN_22_TTOU = 'TTOU';

    // 紧急信号
    const SIGN_23_URG = 'URG';

    // 超时信号
    const SIGN_24_XCPU = 'XCPU';

    // 文档大小限制超标
    const SIGN_25_XFSZ = 'XFSZ';

    // 实时定时器到期信号
    const SIGN_26_VTALRM = 'VTALRM';

    // 性能分析信号
    const SIGN_27_PROF = 'PROF';

    // 窗口改变信号
    const SIGN_28_WINCH = 'WINCH';

    // 定时器超时信号
    const SIGN_29_POLL = 'POLL';

    // 电源信号
    const SIGN_30_PWR = 'PWR';

    // 系统信号
    const SIGN_31_SYS = 'SYS';

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
    public function signal(string $sig): static
    {
        $this->addOption('signal', $sig);

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
