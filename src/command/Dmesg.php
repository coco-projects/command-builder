<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Dmesg extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'dmesg';
    }

    // 清除内核环缓冲区
    public function clear(): static
    {
        $this->addFlag('C');

        return $this;
    }

    // 读取并清除所有消息
    public function readClear(): static
    {
        $this->addFlag('c');

        return $this;
    }

    // 禁用打印消息到控制台
    public function consoleOff(): static
    {
        $this->addFlag('D');

        return $this;
    }

    // 启用打印消息到控制台
    public function consoleOn(): static
    {
        $this->addFlag('E');

        return $this;
    }

    // 使用指定文档代替内核日志缓冲区
    public function file(string $file): static
    {
        $this->addOption('F', $file);

        return $this;
    }

    // 限制输出到定义的设施
    public function facility(string $list): static
    {
        $this->addOption('f', $list);

        return $this;
    }

    // 人类可读的输出
    public function human(): static
    {
        $this->addFlag('H');

        return $this;
    }

    // 显示内核消息
    public function kernel(): static
    {
        $this->addFlag('k');

        return $this;
    }

    // 彩色显示消息
    public function color(string $when = 'auto'): static
    {
        if ($when) {
            $this->addOption('L', $when);
        } else {
            $this->addFlag('L');
        }

        return $this;
    }

    // 限制输出到定义的级别
    public function level(string $list): static
    {
        $this->addOption('l', $list);

        return $this;
    }

    // 设置打印到控制台的消息级别
    public function consoleLevel(string $level): static
    {
        $this->addOption('n', $level);

        return $this;
    }

    // 不将输出通过分页程序处理
    public function noPager(): static
    {
        $this->addFlag('P');

        return $this;
    }

    // 强制在多行消息的每一行输出时间戳
    public function forcePrefix(): static
    {
        $this->addFlag('p');

        return $this;
    }

    // 打印原始消息缓冲区
    public function raw(): static
    {
        $this->addFlag('r');

        return $this;
    }

    // 不转义不可打印字符
    public function noEscape(): static
    {
        $this->addOption('noescape');

        return $this;
    }

    // 强制使用 syslog(2) 而不是 /dev/kmsg
    public function syslog(): static
    {
        $this->addFlag('S');

        return $this;
    }

    // 查询内核环缓冲区的缓冲区大小
    public function bufferSize(string $size): static
    {
        $this->addOption('s', $size);

        return $this;
    }

    // 显示用户空间消息
    public function userspace(): static
    {
        $this->addFlag('u');

        return $this;
    }

    // 等待新的消息
    public function follow(): static
    {
        $this->addFlag('w');

        return $this;
    }

    // 等待并仅打印新消息
    public function followNew(): static
    {
        $this->addFlag('W');

        return $this;
    }

    // 解码设施和级别为可读字符串
    public function decode(): static
    {
        $this->addFlag('x');

        return $this;
    }

    // 显示打印消息之间的时间增量
    public function showDelta(): static
    {
        $this->addFlag('d');

        return $this;
    }

    // 以可读格式显示本地时间和时间增量
    public function reltime(): static
    {
        $this->addFlag('e');

        return $this;
    }

    // 显示人类可读的时间戳（可能不准确）
    public function ctime(): static
    {
        $this->addFlag('T');

        return $this;
    }

    // 不在消息中显示任何时间戳
    public function noTime(): static
    {
        $this->addFlag('t');

        return $this;
    }

    // 使用给定格式显示时间戳
    public function timeFormat(string $format): static
    {
        $this->addOption('time-format', $format);

        return $this;
    }

    // 显示自指定时间以来的行
    public function since(string $time): static
    {
        $this->addOption('since', $time);

        return $this;
    }

    // 显示在指定时间之前的行
    public function until(string $time): static
    {
        $this->addOption('until', $time);

        return $this;
    }
}
