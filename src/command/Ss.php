<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Ss extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'ss';
    }

    // 显示帮助信息
    public function showHelp(): static
    {
        $this->addFlag('h');

        return $this;
    }

    // 输出版本信息
    public function showVersion(): static
    {
        $this->addFlag('V');

        return $this;
    }

    // 不解析服务名称
    public function doNotResolveServiceNames(): static
    {
        $this->addFlag('n');

        return $this;
    }

    // 解析主机名称
    public function resolveHostNames(): static
    {
        $this->addFlag('r');

        return $this;
    }

    // 显示所有套接字
    public function showAllSockets(): static
    {
        $this->addFlag('a');

        return $this;
    }

    // 显示正在监听的套接字
    public function showListeningSockets(): static
    {
        $this->addFlag('l');

        return $this;
    }

    // 显示计时器信息
    public function showTimerInfo(): static
    {
        $this->addFlag('o');

        return $this;
    }

    // 显示详细的套接字信息
    public function showDetailedSocketInfo(): static
    {
        $this->addFlag('e');

        return $this;
    }

    // 显示套接字内存使用情况
    public function showSocketMemoryUsage(): static
    {
        $this->addFlag('m');

        return $this;
    }

    // 显示正在使用套接字的进程
    public function showProcessesUsingSocket(): static
    {
        $this->addFlag('p');

        return $this;
    }

    // 显示正在使用套接字的线程
    public function showThreadsUsingSocket(): static
    {
        $this->addFlag('T');

        return $this;
    }

    // 显示内部 TCP 信息
    public function showInternalTcpInfo(): static
    {
        $this->addFlag('i');

        return $this;
    }

    // 显示内部 tipc 套接字信息
    public function showInternalTipcInfo(): static
    {
        $this->addFlag('tipcinfo');

        return $this;
    }

    // 显示套接字使用情况摘要
    public function showSocketUsageSummary(): static
    {
        $this->addFlag('s');

        return $this;
    }

    // 显示 tos 和优先级信息
    public function showTosAndPriorityInfo(): static
    {
        $this->addFlag('tos');

        return $this;
    }

    // 显示 cgroup 信息
    public function showCgroupInfo(): static
    {
        $this->addFlag('cgroup');

        return $this;
    }

    // 显示 bpf 过滤器套接字信息
    public function showBpfFilterInfo(): static
    {
        $this->addFlag('b');

        return $this;
    }

    // 持续显示已销毁的套接字
    public function displayDestroyedSockets(): static
    {
        $this->addFlag('E');

        return $this;
    }

    // 显示任务 SELinux 安全上下文
    public function showTaskSelinuxContext(): static
    {
        $this->addFlag('Z');

        return $this;
    }

    // 显示任务和套接字 SELinux 安全上下文
    public function showTaskAndSocketSelinuxContext(): static
    {
        $this->addFlag('z');

        return $this;
    }

    // 切换到指定的网络命名空间名称
    public function switchToNetworkNamespace(string $namespaceName): static
    {
        $this->addFlag('N', $namespaceName);

        return $this;
    }

    // 显示仅 IPv4 套接字
    public function showIpv4Sockets(): static
    {
        $this->addFlag('4');

        return $this;
    }

    // 显示仅 IPv6 套接字
    public function showIpv6Sockets(): static
    {
        $this->addFlag('6');

        return $this;
    }

    // 显示 PACKET 套接字
    public function showPacketSockets(): static
    {
        $this->addFlag('0');

        return $this;
    }

    // 显示仅 TCP 套接字
    public function showTcpSockets(): static
    {
        $this->addFlag('t');

        return $this;
    }

    // 显示仅 MPTCP 套接字
    public function showMptcpSockets(): static
    {
        $this->addFlag('M');

        return $this;
    }

    // 显示仅 SCTP 套接字
    public function showSctpSockets(): static
    {
        $this->addFlag('S');

        return $this;
    }

    // 显示仅 UDP 套接字
    public function showUdpSockets(): static
    {
        $this->addFlag('u');

        return $this;
    }

    // 显示仅 DCCP 套接字
    public function showDccpSockets(): static
    {
        $this->addFlag('d');

        return $this;
    }

    // 显示仅 RAW 套接字
    public function showRawSockets(): static
    {
        $this->addFlag('w');

        return $this;
    }

    // 显示仅 Unix 域套接字
    public function showUnixDomainSockets(): static
    {
        $this->addFlag('x');

        return $this;
    }

    // 显示仅 TIPC 套接字
    public function showTipcSockets(): static
    {
        $this->addFlag('tipc');

        return $this;
    }

    // 显示仅 vsock 套接字
    public function showVsockSockets(): static
    {
        $this->addFlag('vsock');

        return $this;
    }

    // 显示仅 XDP 套接字
    public function showXdpSockets(): static
    {
        $this->addFlag('xdp');

        return $this;
    }

    // 显示指定类型的套接字
    public function showSocketsByFamily(string $family): static
    {
        $this->addFlag('f', $family);

        return $this;
    }

    // 强制关闭套接字，并显示被关闭的套接字
    public function killSockets(): static
    {
        $this->addFlag('K');

        return $this;
    }

    // 不显示标题行
    public function suppressHeaderLine(): static
    {
        $this->addFlag('H');

        return $this;
    }

    // 将套接字的数据打印为单行
    public function printDataInOneLine(): static
    {
        $this->addFlag('O');

        return $this;
    }

    // 显示各种 inet 套接字选项
    public function showInetSocketOptions(): static
    {
        $this->addFlag('inet-sockopt');

        return $this;
    }

    // 查询特定的套接字类型
    public function querySockets(string $query): static
    {
        $this->addFlag('query', $query);

        return $this;
    }

    // 导出 TCP 套接字的原始信息到指定文档
    public function dumpRawTcpInfoToFile(string $file): static
    {
        $this->addFlag('D', $file);

        return $this;
    }

    // 从指定文档读取过滤信息
    public function filterFromFile(string $file): static
    {
        $this->addFlag('F', $file);

        return $this;
    }
}
