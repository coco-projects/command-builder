<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Grep extends NamedCommand
{
    protected static string $name = 'grep';

    // 使用扩展正则表达式（例如 `+`、`?` 等）
    public function useExtendedRegex(): static
    {
        $this->addFlag('E');

        return $this;
    }

    // 使用基础正则表达式
    public function useBasicRegex(): static
    {
        $this->addFlag('G');

        return $this;
    }

    // 使用固定字符串
    public function useFixedStrings(): static
    {
        $this->addFlag('F');

        return $this;
    }

    // 使用 Perl 正则表达式
    public function usePerlRegex(): static
    {
        $this->addFlag('P');

        return $this;
    }

    // 从文档中获取 PATTERNS
    public function useFile(string $file): static
    {
        $this->addOption('file', $file);

        return $this;
    }

    // 忽略大小写
    public function ignoreCase(): static
    {
        $this->addFlag('i');

        return $this;
    }

    // 不忽略大小写
    public function noIgnoreCase(): static
    {
        $this->addFlag('no-ignore-case');

        return $this;
    }

    // 仅匹配整个单词
    public function matchWholeWords(): static
    {
        $this->addFlag('w');

        return $this;
    }

    // 仅匹配整行
    public function matchWholeLines(): static
    {
        $this->addFlag('x');

        return $this;
    }

    // 以 NUM 行匹配后停止
    public function maxCount(int $num): static
    {
        $this->addFlag('m', (string)$num);

        return $this;
    }

    // 打印字节偏移
    public function byteOffset(): static
    {
        $this->addFlag('b');

        return $this;
    }

    // 打印输出行的行号
    public function lineNumber(): static
    {
        $this->addFlag('n');

        return $this;
    }

    // 显示匹配的非空部分
    public function onlyMatching(): static
    {
        $this->addFlag('o');

        return $this;
    }

    // 静默操作（不产生正常输出）
    public function quiet(): static
    {
        $this->addFlag('q');

        return $this;
    }

    // 递归搜索目录
    public function recursive(): static
    {
        $this->addFlag('r');

        return $this;
    }

    // 在输出中打印文档名
    public function withFilename(): static
    {
        $this->addFlag('H');

        return $this;
    }

    // 不显示文档名
    public function noFilename(): static
    {
        $this->addFlag('h');

        return $this;
    }

    // 每个文档只打印不匹配的文档名
    public function filesWithoutMatch(): static
    {
        $this->addFlag('L');

        return $this;
    }

    // 每个文档只打印匹配的文档名
    public function filesWithMatches(): static
    {
        $this->addFlag('l');

        return $this;
    }

    // 只打印每个文档中选定行的计数
    public function count(): static
    {
        $this->addFlag('c');

        return $this;
    }

    // 设置处理目录的方式
    public function directoriesAction(string $action): static
    {
        $this->addOption('directories', $action);

        return $this;
    }

    // 设置处理设备的方式
    public function devicesAction(string $action): static
    {
        $this->addOption('devices', $action);

        return $this;
    }

    // 用 GLOB 匹配的文档进行搜索
    public function includeGlob(string $glob): static
    {
        $this->addOption('include', $glob);

        return $this;
    }

    // 跳过与 GLOB 匹配的文档
    public function excludeGlob(string $glob): static
    {
        $this->addOption('exclude', $glob);

        return $this;
    }

    // 跳过匹配文档的 FILE 的模式
    public function excludeFrom(string $file): static
    {
        $this->addOption('exclude-from', $file);

        return $this;
    }

    // 跳过与 GLOB 匹配的目录
    public function excludeDir(string $glob): static
    {
        $this->addOption('exclude-dir', $glob);

        return $this;
    }

    // 打印 NUM 行的前上下文
    public function beforeContext(int $num): static
    {
        $this->addFlag('B', (string)$num);

        return $this;
    }

    // 打印 NUM 行的后上下文
    public function afterContext(int $num): static
    {
        $this->addFlag('A', (string)$num);

        return $this;
    }

    // 打印 NUM 行的上下文
    public function contextLines(int $num): static
    {
        $this->addFlag('C', (string)$num);

        return $this;
    }

    // 使用标签作为标准输入文档名的前缀
    public function useLabel(string $label): static
    {
        $this->addOption('label', $label);

        return $this;
    }

    // 不进行二进制文档处理
    public function noBinary(): static
    {
        $this->addFlag('I');

        return $this;
    }

    // 设定分组的分隔符
    public function groupSeparator(string $sep): static
    {
        $this->addOption('group-separator', $sep);

        return $this;
    }

    // 不使用分隔符
    public function noGroupSeparator(): static
    {
        $this->addFlag('no-group-separator');

        return $this;
    }

    // 设置颜色高亮显示
    public function useColor(string $when): static
    {
        $this->addOption('color', $when);

        return $this;
    }

    // 处理文本文档
    public function asText(): static
    {
        $this->addFlag('a');

        return $this;
    }

    // 打印文档名后添加 0 字节
    public function nullPrint(): static
    {
        $this->addFlag('Z');

        return $this;
    }

    // 从引导符分割上下文
    public function initialTab(): static
    {
        $this->addFlag('T');

        return $this;
    }

    // 控制二进制文档处理
    public function binaryFiles(string $type): static
    {
        $this->addOption('binary-files', $type);

        return $this;
    }
}
