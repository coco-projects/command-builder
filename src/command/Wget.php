<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

class Wget extends NamedCommand
{
    protected static function resolveName(): string
    {
        return 'wget';
    }

    public function url(string $url): static
    {
        $this->addArgument($url);

        return $this;
    }

    // 显示 Wget 的版本并退出
    public function showVersion(): static
    {
        $this->addFlag('V');

        return $this;
    }

    // 打印此帮助信息
    public function printHelp(): static
    {
        $this->addFlag('h');

        return $this;
    }

    // 启动后进入后台
    public function goToBackground(): static
    {
        $this->addFlag('b');

        return $this;
    }

    // 执行 `.wgetrc` 风格的命令
    public function executeCommand(string $command): static
    {
        $this->addOption('execute', $command);

        return $this;
    }

    // 将日志消息写入 FILE
    public function outputFile(string $file): static
    {
        $this->addOption('output-file', $file);

        return $this;
    }

    // 将消息追加到 FILE
    public function appendOutput(string $file): static
    {
        $this->addOption('append-output', $file);

        return $this;
    }

    // 打印大量调试信息
    public function debug(): static
    {
        $this->addFlag('d');

        return $this;
    }

    // 静默模式（无输出）
    public function quiet(): static
    {
        $this->addFlag('q');

        return $this;
    }

    // 详细输出（默认）
    public function verbose(): static
    {
        $this->addFlag('v');

        return $this;
    }

    // 关闭详细输出，但不安静
    public function noVerbose(): static
    {
        $this->addOption('no-verbose');

        return $this;
    }

    // 输出带宽类型
    public function reportSpeed(string $type): static
    {
        $this->addOption('report-speed', $type);

        return $this;
    }

    // 下载本地或外部 FILE 中找到的 URL
    public function inputFile(string $file): static
    {
        $this->addOption('input-file', $file);

        return $this;
    }

    // 将输入文档视为 HTML
    public function forceHtml(): static
    {
        $this->addFlag('F');

        return $this;
    }

    // 将 HTML 输入文档链接解析为 URL
    public function baseUrl(string $url): static
    {
        $this->addOption('base', $url);

        return $this;
    }

    // 指定要使用的配置文档
    public function configFile(string $file): static
    {
        $this->addOption('config', $file);

        return $this;
    }

    // 不读取任何配置文档
    public function noConfig(): static
    {
        $this->addOption('no-config');

        return $this;
    }

    // 将 URL 拒绝原因记录到 FILE
    public function rejectedLog(string $file): static
    {
        $this->addOption('rejected-log', $file);

        return $this;
    }

    // 设置重试次数
    public function tries(int $number): static
    {
        $this->addOption('tries', $number);

        return $this;
    }

    // 即使连接被拒绝也重试
    public function retryConnrefused(): static
    {
        $this->addOption('retry-connrefused');

        return $this;
    }

    // 重试特定 HTTP 错误
    public function retryHttpError(string $errors): static
    {
        $this->addOption('retry-on-http-error', $errors);

        return $this;
    }

    // 将文档写入 FILE
    public function outputDocument(string $file): static
    {
        $this->addOption('output-document', $file);

        return $this;
    }

    // 跳过将下载到现有文档的下载
    public function noClobber(): static
    {
        $this->addOption('nc');

        return $this;
    }

    // 恢复部分下载的文档
    public function continueDownload(): static
    {
        $this->addFlag('c');

        return $this;
    }

    // 从零开始下载指定偏移量
    public function startPos(int $offset): static
    {
        $this->addOption('start-pos', $offset);

        return $this;
    }

    // 选择进度条类型
    public function progress(string $type): static
    {
        $this->addOption('progress', $type);

        return $this;
    }

    // 在任何详细模式下显示进度条
    public function showProgress(): static
    {
        $this->addOption('show-progress');

        return $this;
    }

    // 不重新检索文档，除非比本地新
    public function timestamping(): static
    {
        $this->addFlag('N');

        return $this;
    }

    // 不使用条件的 if-modified-since 获取请求
    public function noIfModifiedSince(): static
    {
        $this->addOption('no-if-modified-since');

        return $this;
    }

    // 不根据服务器上的时间戳设置本地文档的时间戳
    public function noUseServerTimestamps(): static
    {
        $this->addOption('no-use-server-timestamps');

        return $this;
    }

    // 打印服务器响应
    public function serverResponse(): static
    {
        $this->addFlag('S');

        return $this;
    }

    // 不下载任何内容
    public function spider(): static
    {
        $this->addOption('spider');

        return $this;
    }

    // 设置所有超时值
    public function timeout(int $seconds): static
    {
        $this->addOption('timeout', $seconds);

        return $this;
    }

    // 设置 DNS 查找超时
    public function dnsTimeout(int $secs): static
    {
        $this->addOption('dns-timeout', $secs);

        return $this;
    }

    // 设置连接超时
    public function connectTimeout(int $secs): static
    {
        $this->addOption('connect-timeout', $secs);

        return $this;
    }

    // 设置读取超时
    public function readTimeout(int $secs): static
    {
        $this->addOption('read-timeout', $secs);

        return $this;
    }

    // 在检索之间等待秒数
    public function wait(int $seconds): static
    {
        $this->addOption('wait', $seconds);

        return $this;
    }

    // 在重试获取时等待 1 .. SECONDS
    public function waitretry(int $seconds): static
    {
        $this->addOption('waitretry', $seconds);

        return $this;
    }

    // 在检索之间随机等待
    public function randomWait(): static
    {
        $this->addOption('random-wait');

        return $this;
    }

    // 显式关闭代理
    public function noProxy(): static
    {
        $this->addOption('no-proxy');

        return $this;
    }

    // 设置检索配额
    public function quota(int $number): static
    {
        $this->addOption('quota', $number);

        return $this;
    }

    // 绑定到本地地址
    public function bindAddress(string $address): static
    {
        $this->addOption('bind-address', $address);

        return $this;
    }

    // 限制下载速率
    public function limitRate(string $rate): static
    {
        $this->addOption('limit-rate', $rate);

        return $this;
    }

    // 禁用缓存 DNS 查找
    public function noDnsCache(): static
    {
        $this->addOption('no-dns-cache');

        return $this;
    }

    // 限制文档名中的字符
    public function restrictFileNames(string $os): static
    {
        $this->addOption('restrict-file-names', $os);

        return $this;
    }

    // 忽略文档/目录的大小
    public function ignoreCase(): static
    {
        $this->addOption('ignore-case');

        return $this;
    }

    // 仅连接 IPv4 地址
    public function inet4Only(): static
    {
        $this->addFlag('4');

        return $this;
    }

    // 仅连接 IPv6 地址
    public function inet6Only(): static
    {
        $this->addFlag('6');

        return $this;
    }

    // 首先连接到指定的地址族
    public function preferFamily(string $family): static
    {
        $this->addOption('prefer-family', $family);

        return $this;
    }

    // 设置 FTP 和 HTTP 用户
    public function user(string $user): static
    {
        $this->addOption('user', $user);

        return $this;
    }

    // 设置 FTP 和 HTTP 密码
    public function password(string $pass): static
    {
        $this->addOption('password', $pass);

        return $this;
    }

    // 提示输入密码
    public function askPassword(): static
    {
        $this->addOption('ask-password');

        return $this;
    }

    // 指定请求用户名和密码的处理程序
    public function useAskpass(string $command): static
    {
        $this->addOption('use-askpass', $command);

        return $this;
    }

    // 关闭 IRI 支持
    public function noIri(): static
    {
        $this->addOption('no-iri');

        return $this;
    }

    // 使用 ENC 作为 IRI 的本地编码
    public function localEncoding(string $enc): static
    {
        $this->addOption('local-encoding', $enc);

        return $this;
    }

    // 使用 ENC 作为默认远程编码
    public function remoteEncoding(string $enc): static
    {
        $this->addOption('remote-encoding', $enc);

        return $this;
    }

    // 在覆盖之前删除文档
    public function unlink(): static
    {
        $this->addOption('unlink');

        return $this;
    }

    // 打开扩展文档属性存储元数据
    public function xattr(): static
    {
        $this->addOption('xattr');

        return $this;
    }

    // 不创建目录
    public function noDirectories(): static
    {
        $this->addOption('nd');

        return $this;
    }

    // 强制创建目录
    public function forceDirectories(): static
    {
        $this->addFlag('x');

        return $this;
    }

    // 不创建主机目录
    public function noHostDirectories(): static
    {
        $this->addOption('nH');

        return $this;
    }

    // 使用协议名称作为目录
    public function protocolDirectories(): static
    {
        $this->addOption('protocol-directories');

        return $this;
    }

    // 将文档保存到 PREFIX/..
    public function directoryPrefix(string $prefix): static
    {
        $this->addOption('directory-prefix', $prefix);

        return $this;
    }

    // 忽略 NUMBER 远程目录组件
    public function cutDirs(int $number): static
    {
        $this->addOption('cut-dirs', $number);

        return $this;
    }

    // 设置 HTTP 用户
    public function httpUser(string $user): static
    {
        $this->addOption('http-user', $user);

        return $this;
    }

    // 设置 HTTP 密码
    public function httpPassword(string $pass): static
    {
        $this->addOption('http-password', $pass);

        return $this;
    }

    // 禁用服务器缓存数据
    public function noCache(): static
    {
        $this->addOption('no-cache');

        return $this;
    }

    // 更改默认页面名称
    public function defaultPage(string $name): static
    {
        $this->addOption('default-page', $name);

        return $this;
    }

    // 保存 HTML/CSS 文档，并使用适当的扩展名
    public function adjustExtension(): static
    {
        $this->addFlag('E');

        return $this;
    }

    // 忽略 'Content-Length' 头字段
    public function ignoreLength(): static
    {
        $this->addOption('ignore-length');

        return $this;
    }

    // 在头部中插入字符串
    public function header(string $string): static
    {
        $this->addOption('header', $string);

        return $this;
    }

    // 选择压缩
    public function compression(string $type): static
    {
        $this->addOption('compression', $type);

        return $this;
    }

    // 每页允许的最大重定向
    public function maxRedirect(int $number): static
    {
        $this->addOption('max-redirect', $number);

        return $this;
    }

    // 设置代理用户名
    public function proxyUser(string $user): static
    {
        $this->addOption('proxy-user', $user);

        return $this;
    }

    // 设置代理密码
    public function proxyPassword(string $pass): static
    {
        $this->addOption('proxy-password', $pass);

        return $this;
    }

    // 包含 'Referer: URL' 头部
    public function referer(string $url): static
    {
        $this->addOption('referer', $url);

        return $this;
    }

    // 保存 HTTP 头部到文档
    public function saveHeaders(string $file): static
    {
        $this->addOption('save-headers', $file);

        return $this;
    }

    // 识别为 AGENT 而不是 Wget/VERSION
    public function userAgent(string $agent): static
    {
        $this->addOption('user-agent', $agent);

        return $this;
    }

    // 禁用 HTTP keep-alive（持久连接）
    public function noHttpKeepAlive(): static
    {
        $this->addOption('no-http-keep-alive');

        return $this;
    }

    // 不使用 cookies
    public function noCookies(): static
    {
        $this->addOption('no-cookies');

        return $this;
    }

    // 从 FILE 加载 cookies
    public function loadCookies(string $file): static
    {
        $this->addOption('load-cookies', $file);

        return $this;
    }

    // 将 cookies 保存到 FILE
    public function saveCookies(string $file): static
    {
        $this->addOption('save-cookies', $file);

        return $this;
    }

    // 加载和保存会话（非永久性）cookies
    public function keepSessionCookies(): static
    {
        $this->addOption('keep-session-cookies');

        return $this;
    }

    // 使用 POST 方法，发送 STRING 作为数据
    public function postData(string $string): static
    {
        $this->addOption('post-data', $string);

        return $this;
    }

    // 使用 POST 方法，发送 FILE 的内容
    public function postFile(string $file): static
    {
        $this->addOption('post-file', $file);

        return $this;
    }

    // 使用指定的 HTTP 方法
    public function method(string $httpMethod): static
    {
        $this->addOption('method', $httpMethod);

        return $this;
    }

    // 发送 STRING 作为数据。必须设置 --method
    public function bodyData(string $string): static
    {
        $this->addOption('body-data', $string);

        return $this;
    }

    // 发送 FILE 的内容。必须设置 --method
    public function bodyFile(string $file): static
    {
        $this->addOption('body-file', $file);

        return $this;
    }

    // 在选择本地文档名时遵循 Content-Disposition 头部
    public function contentDisposition(): static
    {
        $this->addOption('content-disposition');

        return $this;
    }

    // 在服务器错误上输出接收的内容
    public function contentOnError(): static
    {
        $this->addOption('content-on-error');

        return $this;
    }

    // 发送基本 HTTP 认证的信息而不需要等待服务器的挑战
    public function authNoChallenge(): static
    {
        $this->addOption('auth-no-challenge');

        return $this;
    }

    // 选择安全协议
    public function secureProtocol(string $protocol): static
    {
        $this->addOption('secure-protocol', $protocol);

        return $this;
    }

    // 仅遵循安全 HTTPS 链接
    public function httpsOnly(): static
    {
        $this->addOption('https-only');

        return $this;
    }

    // 不验证服务器的证书
    public function noCheckCertificate(): static
    {
        $this->addOption('no-check-certificate');

        return $this;
    }

    // 客户端证书文档
    public function certificate(string $file): static
    {
        $this->addOption('certificate', $file);

        return $this;
    }

    // 客户端证书类型
    public function certificateType(string $type): static
    {
        $this->addOption('certificate-type', $type);

        return $this;
    }

    // 私钥文档
    public function privateKey(string $file): static
    {
        $this->addOption('private-key', $file);

        return $this;
    }

    // 私钥类型
    public function privateKeyType(string $type): static
    {
        $this->addOption('private-key-type', $type);

        return $this;
    }

    // CA 文档的捆绑文档
    public function caCertificate(string $file): static
    {
        $this->addOption('ca-certificate', $file);

        return $this;
    }

    // 存储 CA 的目录
    public function caDirectory(string $dir): static
    {
        $this->addOption('ca-directory', $dir);

        return $this;
    }

    // 包含 CRL 的文档
    public function crlFile(string $file): static
    {
        $this->addOption('crl-file', $file);

        return $this;
    }

    // 公钥或 SHA256 哈希值
    public function pinnedPubkey(string $fileOrHashes): static
    {
        $this->addOption('pinnedpubkey', $fileOrHashes);

        return $this;
    }

    // 设置 GnuTLS 或 OpenSSL 的优先级字符串
    public function ciphers(string $str): static
    {
        $this->addOption('ciphers', $str);

        return $this;
    }

    // 禁用 HSTS
    public function noHsts(): static
    {
        $this->addOption('no-hsts');

        return $this;
    }

    // HSTS 数据库的路径
    public function hstsFile(string $path): static
    {
        $this->addOption('hsts-file', $path);

        return $this;
    }

    // 设置 FTP 用户
    public function ftpUser(string $user): static
    {
        $this->addOption('ftp-user', $user);

        return $this;
    }

    // 设置 FTP 密码
    public function ftpPassword(string $pass): static
    {
        $this->addOption('ftp-password', $pass);

        return $this;
    }

    // 不删除 '.listing' 文档
    public function noRemoveListing(): static
    {
        $this->addOption('no-remove-listing');

        return $this;
    }

    // 关闭 FTP 文档名通配符
    public function noGlob(): static
    {
        $this->addOption('no-glob');

        return $this;
    }

    // 禁用“被动”传输模式
    public function noPassiveFtp(): static
    {
        $this->addOption('no-passive-ftp');

        return $this;
    }

    // 保留远程文档权限
    public function preservePermissions(): static
    {
        $this->addOption('preserve-permissions');

        return $this;
    }

    // 在递归时获取链接的文档（非目录）
    public function retrSymlinks(): static
    {
        $this->addOption('retr-symlinks');

        return $this;
    }

    // 使用隐式 FTPS
    public function ftpsImplicit(): static
    {
        $this->addOption('ftps-implicit');

        return $this;
    }

    // 恢复在控制连接中启动的 SSL/TLS 会话
    public function ftpsResumeSsl(): static
    {
        $this->addOption('ftps-resume-ssl');

        return $this;
    }

    // 仅加密控制信道
    public function ftpsClearDataConnection(): static
    {
        $this->addOption('ftps-clear-data-connection');

        return $this;
    }

    // 如果 FTPS 不受支持，则回退到 FTP
    public function ftpsFallbackToFtp(): static
    {
        $this->addOption('ftps-fallback-to-ftp');

        return $this;
    }

    // 保存请求/响应数据到 .warc.gz 文档
    public function warcFile(string $filename): static
    {
        $this->addOption('warc-file', $filename);

        return $this;
    }

    // 在 WARC 信息记录中插入字符串
    public function warcHeader(string $string): static
    {
        $this->addOption('warc-header', $string);

        return $this;
    }

    // 设置 WARC 文档的最大大小
    public function warcMaxSize(int $number): static
    {
        $this->addOption('warc-max-size', $number);

        return $this;
    }

    // 写入 CDX 索引文档
    public function warcCdx(): static
    {
        $this->addOption('warc-cdx');

        return $this;
    }

    // 不存储在此 CDX 文档中列出的记录
    public function warcDedup(string $filename): static
    {
        $this->addOption('warc-dedup', $filename);

        return $this;
    }

    // 不压缩 WARC 文档
    public function noWarcCompression(): static
    {
        $this->addOption('no-warc-compression');

        return $this;
    }

    // 不计算 SHA1 摘要
    public function noWarcDigests(): static
    {
        $this->addOption('no-warc-digests');

        return $this;
    }

    // 不在 WARC 记录中存储日志文档
    public function noWarcKeepLog(): static
    {
        $this->addOption('no-warc-keep-log');

        return $this;
    }

    // 临时文档所在的位置
    public function warcTempDir(string $directory): static
    {
        $this->addOption('warc-tempdir', $directory);

        return $this;
    }

    // 指定递归下载
    public function recursive(): static
    {
        $this->addFlag('r');

        return $this;
    }

    // 设置最大递归深度
    public function level(int $number): static
    {
        $this->addOption('level', $number);

        return $this;
    }

    // 下载后在本地删除文档
    public function deleteAfter(): static
    {
        $this->addOption('delete-after');

        return $this;
    }

    // 使下载的 HTML 或 CSS 中的链接指向本地文档
    public function convertLinks(): static
    {
        $this->addFlag('k');

        return $this;
    }

    // 仅转换 URL 的文档部分
    public function convertFileOnly(): static
    {
        $this->addOption('convert-file-only');

        return $this;
    }

    // 在写入文档前最多旋转 N 个备份文档
    public function backups(int $n): static
    {
        $this->addOption('backups', $n);

        return $this;
    }

    // 在转换文档 X 之前备份为 X.orig
    public function backupConverted(): static
    {
        $this->addFlag('K');

        return $this;
    }

    // 简化选项 -N -r -l inf --no-remove-listing
    public function mirror(): static
    {
        $this->addFlag('m');

        return $this;
    }

    // 获取显示 HTML 页所需的所有图像等
    public function pageRequisites(): static
    {
        $this->addFlag('p');

        return $this;
    }

    // 打开严格（SGML）处理 HTML 注释
    public function strictComments(): static
    {
        $this->addOption('strict-comments');

        return $this;
    }

    // 接受扩展名的逗号分隔列表
    public function accept(string $list): static
    {
        $this->addOption('accept', $list);

        return $this;
    }

    // 拒绝扩展名的逗号分隔列表
    public function reject(string $list): static
    {
        $this->addOption('reject', $list);

        return $this;
    }

    // 正则表达式匹配接受的 URL
    public function acceptRegex(string $regex): static
    {
        $this->addOption('accept-regex', $regex);

        return $this;
    }

    // 正则表达式匹配拒绝的 URL
    public function rejectRegex(string $regex): static
    {
        $this->addOption('reject-regex', $regex);

        return $this;
    }

    // 正则表达式类型
    public function regexType(string $type): static
    {
        $this->addOption('regex-type', $type);

        return $this;
    }

    // 接受域的逗号分隔列表
    public function domains(string $list): static
    {
        $this->addOption('domains', $list);

        return $this;
    }

    // 拒绝域的逗号分隔列表
    public function excludeDomains(string $list): static
    {
        $this->addOption('exclude-domains', $list);

        return $this;
    }

    // 从 HTML 文档中跟随 FTP 链接
    public function followFtp(): static
    {
        $this->addOption('follow-ftp');

        return $this;
    }

    // 逗号分隔的被跟随 HTML 标签列表
    public function followTags(string $list): static
    {
        $this->addOption('follow-tags', $list);

        return $this;
    }

    // 被忽略的 HTML 标签的逗号分隔列表
    public function ignoreTags(string $list): static
    {
        $this->addOption('ignore-tags', $list);

        return $this;
    }

    // 访问外部主机进行递归
    public function spanHosts(): static
    {
        $this->addFlag('H');

        return $this;
    }

    // 仅跟随相对链接
    public function relative(): static
    {
        $this->addFlag('L');

        return $this;
    }

    // 允许的目录列表
    public function includeDirectories(string $list): static
    {
        $this->addOption('include-directories', $list);

        return $this;
    }

    // 使用重定向 URL 的最后一个组件指定的名称
    public function trustServerNames(): static
    {
        $this->addOption('trust-server-names');

        return $this;
    }

    // 要排除的目录列表
    public function excludeDirectories(string $list): static
    {
        $this->addOption('exclude-directories', $list);

        return $this;
    }

    // 不升级到父目录
    public function noParent(): static
    {
        $this->addOption('np');

        return $this;
    }
}
