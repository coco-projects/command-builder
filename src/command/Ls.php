<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Ls extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'ls';
    }

    // 设置目标目录
    public function target(string $dir): static
    {
        $this->addArgument($dir);

        return $this;
    }

    // 打印所有信息（不忽略以 . 开头的条目）
    public function all(): static
    {
        $this->addFlag('a');

        return $this;
    }

    // 打印几乎所有信息（不列出 . 和 ..）
    public function almostAll(): static
    {
        $this->addFlag('A');

        return $this;
    }

    // 与 -l 一起使用，打印每个文档的作者
    public function author(): static
    {
        $this->addOption('author');

        return $this;
    }

    // 打印 C 风格转义字符，用于不可视字符
    public function escape(): static
    {
        $this->addFlag('b');

        return $this;
    }

    // 与 -l 一起使用，按 SIZE 调整打印时的大小
    public function blockSize(string $size): static
    {
        $this->addOption('block-size', $size);

        return $this;
    }

    // 不列出以 ~ 结尾的条目
    public function ignoreBackups(): static
    {
        $this->addFlag('B');

        return $this;
    }

    // 与 -lt 一起使用：按 ctime 排序，并显示；与 -l 一起使用：显示 ctime 并按名称排序
    public function ctime(): static
    {
        $this->addFlag('c');

        return $this;
    }

    // 按列列出条目
    public function byColumns(): static
    {
        $this->addFlag('C');

        return $this;
    }

    // 将输出着色；WHEN 可以是 'always'、'auto' 或 'never'
    public function color(string $when = 'always'): static
    {
        $this->addOption('color', $when);

        return $this;
    }

    // 列出目录本身，而不是其内容
    public function directory(): static
    {
        $this->addFlag('d');

        return $this;
    }

    // 生成适合 Emacs 的 dired 模式输出
    public function dired(): static
    {
        $this->addFlag('D');

        return $this;
    }

    // 不排序
    public function forceUnsorted(): static
    {
        $this->addFlag('f');

        return $this;
    }

    // 在条目后附加指示符（如 */=>@|）
    public function classify(): static
    {
        $this->addFlag('F');

        return $this;
    }

    // 同样的功能，但不附加 '*'
    public function fileType(): static
    {
        $this->addOption('file-type');

        return $this;
    }

    // 指定输出格式
    public function format(string $word): static
    {
        $this->addOption('format', $word);

        return $this;
    }

    // 类似于 -l --time-style=full-iso
    public function fullTime(): static
    {
        $this->addOption('full-time');

        return $this;
    }

    // 类似于 -l，但不列出所有者
    public function groupLess(): static
    {
        $this->addFlag('g');

        return $this;
    }

    // 在文档之前分组目录
    public function groupDirectoriesFirst(): static
    {
        $this->addOption('group-directories-first');

        return $this;
    }

    // 在长格式中，不打印组名
    public function noGroup(): static
    {
        $this->addFlag('G');

        return $this;
    }

    // 与 -l 和 -s 一起使用，打印可读大小
    public function humanReadable(): static
    {
        $this->addFlag('h');

        return $this;
    }

    // 使用 1000 的幂而非 1024
    public function si(): static
    {
        $this->addFlag('si');

        return $this;
    }

    // 按命令行显示符号链接
    public function dereferenceCommandLine(): static
    {
        $this->addOption('dereference-command-line');

        return $this;
    }

    // 遍历每个命令行符号链接，指向目录时跟随
    public function dereferenceSymlinkToDir(): static
    {
        $this->addOption('dereference-command-line-symlink-to-dir');

        return $this;
    }

    // 不列出以模式匹配的条目（-a 或 -A 覆盖此选项）
    public function hidePattern(string $pattern): static
    {
        $this->addOption('hide', $pattern);

        return $this;
    }

    // 超链接文档名；WHEN 可以是 'always'、'auto' 或 'never'
    public function hyperlink(string $when = 'always'): static
    {
        $this->addOption('hyperlink', $when);

        return $this;
    }

    // 在条目名后附加指示符
    public function indicatorStyle(string $word): static
    {
        $this->addOption('indicator-style', $word);

        return $this;
    }

    // 打印每个文档的索引号
    public function inode(): static
    {
        $this->addFlag('i');

        return $this;
    }

    // 不列出与模式匹配的条目
    public function ignorePattern(string $pattern): static
    {
        $this->addOption('I', $pattern);

        return $this;
    }

    // 默认使用 1024 字节块进行磁盘使用
    public function kibibytes(): static
    {
        $this->addFlag('k');

        return $this;
    }

    // 使用长列表格式
    public function longFormat(): static
    {
        $this->addFlag('l');

        return $this;
    }

    // 显示符号链接的信息，而不是链接本身
    public function dereference(): static
    {
        $this->addFlag('L');

        return $this;
    }

    // 用逗号分隔的条目填充宽度
    public function commaSeparated(): static
    {
        $this->addFlag('m');

        return $this;
    }

    // 类似于 -l，但列出数字用户和组 ID
    public function numericUidGid(): static
    {
        $this->addFlag('n');

        return $this;
    }

    // 不转义打印条目名称
    public function literal(): static
    {
        $this->addFlag('N');

        return $this;
    }

    // 类似于 -l，但不列出组信息
    public function ownerOnly(): static
    {
        $this->addFlag('o');

        return $this;
    }

    // 在目录后添加 / 指示符
    public function indicatorStyleSlash(): static
    {
        $this->addFlag('p');

        return $this;
    }

    // 用 ? 替代不可视字符
    public function hideControlChars(): static
    {
        $this->addFlag('q');

        return $this;
    }

    // 以原样显示不可视字符
    public function showControlChars(): static
    {
        $this->addOption('show-control-chars');

        return $this;
    }

    // 用双引号括起条目名称
    public function quoteName(): static
    {
        $this->addFlag('Q');

        return $this;
    }

    // 使用指定的引号样式
    public function quotingStyle(string $word): static
    {
        $this->addOption('quoting-style', $word);

        return $this;
    }

    // 反转排序顺序
    public function reverse(): static
    {
        $this->addFlag('r');

        return $this;
    }

    // 递归列出子目录
    public function recursive(): static
    {
        $this->addFlag('R');

        return $this;
    }

    // 打印每个文档的分配大小，单位为块
    public function size(): static
    {
        $this->addFlag('s');

        return $this;
    }

    // 按文档大小排序，从大到小
    public function sortBySize(): static
    {
        $this->addFlag('S');

        return $this;
    }

    // 按 WORD 排序，而不是按名称
    public function sort(string $word): static
    {
        $this->addOption('sort', $word);

        return $this;
    }

    // 改变默认使用的修改时间
    public function time(string $word): static
    {
        $this->addOption('time', $word);

        return $this;
    }

    // 使用指定的时间格式
    public function timeStyle(string $style): static
    {
        $this->addOption('time-style', $style);

        return $this;
    }

    // 按时间排序，从最新开始
    public function sortByTime(): static
    {
        $this->addFlag('t');

        return $this;
    }

    // 假设制表符停在每 COLS 的位置而不是 8
    public function tabSize(int $cols): static
    {
        $this->addOption('T', (string)$cols);

        return $this;
    }

    // 按访问时间排序
    public function accessTime(): static
    {
        $this->addFlag('u');

        return $this;
    }

    // 不排序；按目录顺串行出条目
    public function unsorted(): static
    {
        $this->addFlag('U');

        return $this;
    }

    // 在文本中自然排序（版本）号
    public function naturalSort(): static
    {
        $this->addFlag('v');

        return $this;
    }

    // 设置输出宽度为 COLS。0 表示无限制
    public function width(int $cols): static
    {
        $this->addOption('w', (string)$cols);

        return $this;
    }

    // 按行列出条目，而不是按列
    public function listByLines(): static
    {
        $this->addFlag('x');

        return $this;
    }

    // 按条目扩展名排序
    public function sortByExtension(): static
    {
        $this->addFlag('X');

        return $this;
    }

    // 打印每个文档的安全上下文
    public function context(): static
    {
        $this->addFlag('Z');

        return $this;
    }

    // 每行列出一个文档
    public function oneFilePerLine(): static
    {
        $this->addFlag('1');

        return $this;
    }
}
