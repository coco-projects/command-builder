<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Kill extends NamedCommand
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
        return 'kill';
    }

    // 发送的信号名称或编号
    public function signal(string $signal): static
    {
        $this->addFlag('s', $signal)->noMark();

        return $this;
    }

    // 发送信号到特定进程ID
    public function sendToPid(int $pid): static
    {
        $this->addArgument((string)$pid);

        return $this;
    }

    // 打印信号名称
    public function listAllSignal(): static
    {
        $this->addFlag('l');

        return $this;
    }

    // 不仅限于当前 UID 的进程
    public function allProcesses(): static
    {
        $this->addFlag('a');

        return $this;
    }

    // 仅打印指定进程的 PID，且不发送信号
    public function onlyPrintPid(): static
    {
        $this->addFlag('p');

        return $this;
    }

    // 打印将要用 kill 发送信号的 PID
    public function verbose(): static
    {
        $this->addOption('verbose');

        return $this;
    }

    // 使用 sigqueue(3) 发送信号，而不是 kill(2)
    public function queue(int $value): static
    {
        $this->addOption('queue', (string)$value)->noMark();

        return $this;
    }

    // 在发送信号之前等待指定的毫秒数
    public function timeout(int $milliseconds, string $signal): static
    {
        $this->addOption('timeout', (string)$milliseconds . ' ' . $signal)->noMark();

        return $this;
    }
}
