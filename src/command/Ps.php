<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Ps extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'ps';
    }

    public function aux(): static
    {
        $this->addFlag('aux');

        return $this;
    }

    public function ef(): static
    {
        $this->addFlag('ef');

        return $this;
    }

    // 显示所有终端机下执行的程序，除了阶段作业领导者之外
    public function showAllExceptJobLeader(): static
    {
        $this->addFlag('a');

        return $this;
    }

    // 显示所有程序
    public function showAll(): static
    {
        $this->addFlag('A');

        return $this;
    }

    // 显示 CLS 和 PRI 栏位
    public function showClsAndPri(): static
    {
        $this->addFlag('c');

        return $this;
    }

    // 列出程序时，显示每个程序真正的指令名称
    public function showCommandNameOnly(): static
    {
        $this->addFlag('c');

        return $this;
    }

    // 指定执行指令的名称，并列出该指令的程序的状况
    public function matchCommandName(string $commandName): static
    {
        $this->addFlag('C', $commandName);

        return $this;
    }

    // 显示所有程序，但不包括阶段作业领导者的程序
    public function showExceptJobLeader(): static
    {
        $this->addFlag('d');

        return $this;
    }

    // 此选项的效果和指定 "A" 选项相同
    public function showAllEffectively(): static
    {
        $this->addFlag('e');

        return $this;
    }

    // 列出程序时，显示每个程序所使用的环境变量
    public function showEnvironmentVariables(): static
    {
        $this->addFlag('e');

        return $this;
    }

    // 显示 UID, PPID, C 与 STIME 栏位
    public function showUidPpidCStime(): static
    {
        $this->addFlag('f');

        return $this;
    }

    // 用 ASCII 字符显示树状结构，表达程序间的相互关系
    public function showTreeStructure(): static
    {
        $this->addFlag('f');

        return $this;
    }

    // 此选项的效果和指定 "-G" 选项相同
    public function matchProcessGroupByName(string $groupName): static
    {
        $this->addOption('g', $groupName);

        return $this;
    }

    // 排序选项
    public function sort(string $field): static
    {
        $this->addOption('sort', $field);

        return $this;
    }

    // 显示现行终端机下的所有程序，包括群组领导者的程序
    public function showAllInCurrentTerminal(): static
    {
        $this->addFlag('g');

        return $this;
    }

    // 列出属于该群组的程序的状况
    public function matchGroupId(int $gid): static
    {
        $this->addFlag('G', $gid);

        return $this;
    }

    // 不显示标题列
    public function noHeaders(): static
    {
        $this->addFlag('h');

        return $this;
    }

    // 显示树状结构，表示程序间的相互关系
    public function showHierarchy(): static
    {
        $this->addFlag('H');

        return $this;
    }

    // 采用工作控制的格式显示程序状况
    public function showJobControlFormat(): static
    {
        $this->addFlag('j');

        return $this;
    }

    // 采用详细的格式来显示程序状况
    public function showDetailedFormat(): static
    {
        $this->addFlag('l');

        return $this;
    }

    // 列出栏位的相关信息
    public function listColumnInfo(): static
    {
        $this->addFlag('L');

        return $this;
    }

    // 显示所有的执行绪
    public function showAllThreads(): static
    {
        $this->addFlag('m');

        return $this;
    }

    // 以数字来表示 USER 和 WCHAN 栏位
    public function showUserAndWchanAsNumbers(): static
    {
        $this->addFlag('n');

        return $this;
    }

    // 显示所有的程序，除了执行 ps 指令终端机下的程序之外
    public function showAllExceptPsTerminal(): static
    {
        $this->addFlag('N');

        return $this;
    }

    // 指定程序识别码，并列出该程序的状况
    public function matchPid(int $pid): static
    {
        $this->addFlag('p', $pid);

        return $this;
    }

    // 只列出现行终端机正在执行中的程序
    public function showRunningInTerminal(): static
    {
        $this->addFlag('r');

        return $this;
    }

    // 指定阶段作业的程序识别码，并列出隶属该阶段作业的程序的状况
    public function matchJobId(int $jobId): static
    {
        $this->addFlag('s', $jobId);

        return $this;
    }

    // 采用程序信号的格式显示程序状况
    public function showSignalFormat(): static
    {
        $this->addFlag('s');

        return $this;
    }

    // 列出程序时，包括已中断的子程序资料
    public function includeInterruptedSubprocesses(): static
    {
        $this->addFlag('S');

        return $this;
    }

    // 指定终端机编号，并列出属于该终端机的程序的状况
    public function matchTerminalNumber(string $tty): static
    {
        $this->addFlag('t', $tty);

        return $this;
    }

    // 显示现行终端机下的所有程序
    public function showCurrentTerminalProcesses(): static
    {
        $this->addFlag('T');

        return $this;
    }

    // 此选项的效果和指定 "-U" 选项相同
    public function matchEffectiveUserId(string $uid): static
    {
        $this->addOption('u', $uid);

        return $this;
    }

    // 以用户为主的格式来显示程序状况
    public function showUserFormat(): static
    {
        $this->addFlag('u');

        return $this;
    }

    // 列出属于该用户的程序的状况
    public function matchUserId(string $uid): static
    {
        $this->addFlag('U', $uid);

        return $this;
    }

    // 列出属于该用户的程序的状况
    public function matchUserName(string $username): static
    {
        $this->addOption('U', $username);

        return $this;
    }

    // 采用虚拟内存的格式显示程序状况
    public function showVirtualMemoryFormat(): static
    {
        $this->addFlag('v');

        return $this;
    }

    // 显示版本信息
    public function showVersionInfo(): static
    {
        $this->addFlag('V');

        return $this;
    }

    // 采用宽阔的格式来显示程序状况
    public function showWideFormat(): static
    {
        $this->addFlag('w');

        return $this;
    }

    // 显示所有程序，不以终端机来区分
    public function showAllWithoutTerminal(): static
    {
        $this->addFlag('x');

        return $this;
    }

    // 采用旧式的 Linux i386 登陆格式显示程序状况
    public function showOldLinuxFormat(): static
    {
        $this->addFlag('X');

        return $this;
    }

    // 配合选项 "-l" 使用时，不显示 F(flag) 栏位，并以 RSS 栏位取代 ADDR 栏位
    public function replaceAddrWithRss(): static
    {
        $this->addFlag('y');

        return $this;
    }

    // 设置每列的最大字符数
    public function setMaxCharactersPerColumn(int $cols): static
    {
        $this->addOption('cols', $cols);

        return $this;
    }

    // 设置显示画面的列数
    public function setDisplayLines(int $lines): static
    {
        $this->addOption('lines', $lines);

        return $this;
    }

    // 淘汰老程序的判定
    public function selectOldProcesses(): static
    {
        $this->addFlag('F');

        return $this;
    }

    // 显示过程的保留信息
    public function showRetainedInfo(): static
    {
        $this->addFlag('H');

        return $this;
    }

    // 在线帮助
    public function showHelp(): static
    {
        $this->addFlag('help');

        return $this;
    }
}
