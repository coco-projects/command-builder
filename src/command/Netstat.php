<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Netstat extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'netstat';
    }

    // 显示路由表
    public function showRoutingTable(): static
    {
        $this->addFlag('r');

        return $this;
    }

    // 显示指定接口的接口表
    public function showInterfaceTable(string $iface): static
    {
        $this->addFlag('I', $iface);

        return $this;
    }

    // 显示所有接口的接口表
    public function showInterfaceTableAll(): static
    {
        $this->addFlag('i');

        return $this;
    }

    // 显示多播组成员
    public function showMulticastGroups(): static
    {
        $this->addFlag('g');

        return $this;
    }

    // 显示网络统计信息（类似于SNMP）
    public function showStatistics(): static
    {
        $this->addFlag('s');

        return $this;
    }

    // 显示伪装的连接
    public function showMasqueradedConnections(): static
    {
        $this->addFlag('M');

        return $this;
    }

    // 显示详细信息
    public function verbose(): static
    {
        $this->addFlag('v');

        return $this;
    }

    // 不截断IP地址
    public function wide(): static
    {
        $this->addFlag('W');

        return $this;
    }

    // 不解析名称
    public function noResolveNames(): static
    {
        $this->addFlag('n');

        return $this;
    }

    // 不解析主机名
    public function noResolveHostnames(): static
    {
        $this->addOption('numeric-hosts');

        return $this;
    }

    // 不解析端口名
    public function noResolvePorts(): static
    {
        $this->addOption('numeric-ports');

        return $this;
    }

    // 不解析用户名
    public function noResolveUsers(): static
    {
        $this->addOption('numeric-users');

        return $this;
    }

    // 解析硬件名称
    public function symbolic(): static
    {
        $this->addFlag('N');

        return $this;
    }

    // 显示更多信息
    public function extend(): static
    {
        $this->addFlag('e');

        return $this;
    }

    // 显示PID/程序名称
    public function showPrograms(): static
    {
        $this->addFlag('p');

        return $this;
    }

    // 显示定时器
    public function showTimers(): static
    {
        $this->addFlag('o');

        return $this;
    }

    // 连续显示列表
    public function continuous(): static
    {
        $this->addFlag('c');

        return $this;
    }

    // 显示正在监听的服务器套接字
    public function showListeningSockets(): static
    {
        $this->addFlag('l');

        return $this;
    }

    // 显示转发信息库（默认）
    public function showFib(): static
    {
        $this->addFlag('F');

        return $this;
    }

    // 显示路由缓存而不是FIB
    public function showCache(): static
    {
        $this->addFlag('C');

        return $this;
    }

    // 显示SELinux安全上下文
    public function showSelinuxContext(): static
    {
        $this->addFlag('Z');

        return $this;
    }

    // 显示所有套接字（默认：连接中的）
    public function showAllConnections(): static
    {
        $this->addFlag('a');

        return $this;
    }
}
