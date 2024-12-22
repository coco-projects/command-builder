<?php

    namespace Coco\commandBuilder\command;

    use Coco\commandBuilder\abstract\NamedCommand;

    class Curl extends NamedCommand
    {
        protected static function resolveName(): string
        {
            return 'curl';
        }

        public function url(string $url): static
        {
            $this->addArgument($url);

            return $this;
        }

        // 强制静默模式
        public function silent(): static
        {
            $this->addOption('silent')->noMark();

            return $this;
        }

        // 连接通过抽象 Unix 域套接字
        public function connectViaAbstractUnixSocket(string $path): static
        {
            $this->addOption('abstract-unix-socket', $path)->noMark();

            return $this;
        }

        // 启用 alt-svc 及其缓存文档
        public function enableAltSvc(string $file): static
        {
            $this->addOption('alt-svc', $file)->noMark();

            return $this;
        }

        // 选择任意身份验证方法
        public function useAnyAuth(): static
        {
            $this->addOption('anyauth')->noMark();

            return $this;
        }

        // 上传时将数据附加到目标文档
        public function appendToTargetFile(): static
        {
            $this->addOption('append')->noMark();

            return $this;
        }

        // 使用 AWS V4 签名身份验证
        public function useAwsSigv4(string $provider, string $region, string $service): static
        {
            $this->addOption('aws-sigv4', "$provider:$region:$service")->noMark();

            return $this;
        }

        // 使用 HTTP 基本身份验证
        public function useBasicAuth(): static
        {
            $this->addOption('basic')->noMark();

            return $this;
        }

        // CA 证书以验证对等方
        public function useCaCert(string $file): static
        {
            $this->addOption('cacert', $file)->noMark();

            return $this;
        }

        // CA 目录以验证对等方
        public function useCaPath(string $dir): static
        {
            $this->addOption('capath', $dir)->noMark();

            return $this;
        }

        // 客户端证书文档和密码
        public function useCert(string $certificate, string $password = null): static
        {
            $this->addOption('cert', $password ? "$certificate:$password" : $certificate)->noMark();

            return $this;
        }

        // 验证服务器证书的状态
        public function verifyCertStatus(): static
        {
            $this->addOption('cert-status')->noMark();

            return $this;
        }

        // 证书类型（DER/PEM/ENG）
        public function setCertType(string $type): static
        {
            $this->addOption('cert-type', $type)->noMark();

            return $this;
        }

        // 使用 SSL 密码
        public function useCiphers(string $list): static
        {
            $this->addOption('ciphers', $list)->noMark();

            return $this;
        }

        // 请求压缩的响应
        public function requestCompressedResponse(): static
        {
            $this->addOption('compressed')->noMark();

            return $this;
        }

        // 向文档读取配置
        public function readConfigFile(string $file): static
        {
            $this->addOption('config', $file)->noMark();

            return $this;
        }

        // 允许最大连接时间
        public function setConnectTimeout(int $seconds): static
        {
            $this->addOption('connect-timeout', $seconds)->noMark();

            return $this;
        }

        // 连接到主机
        public function connectTo(string $host1, int $port1, string $host2, int $port2): static
        {
            $this->addOption('connect-to', "$host1:$port1:$host2:$port2")->noMark();

            return $this;
        }

        // 断点续传的偏移量
        public function continueAt(int $offset): static
        {
            $this->addOption('continue-at', $offset)->noMark();

            return $this;
        }

        // 发送 cookie
        public function sendCookies(string $dataOrFile): static
        {
            $this->addOption('cookie', $dataOrFile)->noMark();

            return $this;
        }

        // 将 cookie 写入文档
        public function writeCookiesToFile(string $filename): static
        {
            $this->addOption('cookie-jar', $filename)->noMark();

            return $this;
        }

        // 创建必要的本地目录层次结构
        public function createDirs(): static
        {
            $this->addOption('create-dirs')->noMark();

            return $this;
        }

        // 生成文档的权限（八进制）
        public function setCreateFileMode(int $mode): static
        {
            $this->addOption('create-file-mode', $mode)->noMark();

            return $this;
        }

        // 上传时将 LF 转换为 CRLF
        public function convertLFtoCRLF(): static
        {
            $this->addOption('crlf')->noMark();

            return $this;
        }

        // 从给定文档获取 CRL 列表
        public function getCrlFile(string $file): static
        {
            $this->addOption('crlfile', $file)->noMark();

            return $this;
        }

        // 请求 EC TLS 密钥交换算法
        public function setCurves(string $algorithmList): static
        {
            $this->addOption('curves', $algorithmList)->noMark();

            return $this;
        }

        // HTTP POST 数据
        public function postData(string $data): static
        {
            $this->addOption('data', $data)->noMark();

            return $this;
        }

        // HTTP POST ASCII 数据
        public function postAsciiData(string $data): static
        {
            $this->addOption('data-ascii', $data)->noMark();

            return $this;
        }

        // HTTP POST 二进制数据
        public function postBinaryData(string $data): static
        {
            $this->addOption('data-binary', $data)->noMark();

            return $this;
        }

        // HTTP POST 原始数据
        public function postRawData(string $data): static
        {
            $this->addOption('data-raw', $data)->noMark();

            return $this;
        }

        // URL 编码的 HTTP POST 数据
        public function postUrlEncodedData(string $data): static
        {
            $this->addOption('data-urlencode', $data)->noMark();

            return $this;
        }

        // 启用 GSS-API 委托权限
        public function delegation(string $level): static
        {
            $this->addOption('delegation', $level)->noMark();

            return $this;
        }

        // 使用 HTTP 摘要身份验证
        public function useDigestAuth(): static
        {
            $this->addOption('digest')->noMark();

            return $this;
        }

        // 禁用 .curlrc
        public function disableCurlrc(): static
        {
            $this->addOption('disable')->noMark();

            return $this;
        }

        // 禁用 EPRT 或 LPRT
        public function disableEprt(): static
        {
            $this->addOption('disable-eprt')->noMark();

            return $this;
        }

        // 禁用 EPSV
        public function disableEpsv(): static
        {
            $this->addOption('disable-epsv')->noMark();

            return $this;
        }

        // 禁止在 URL 中使用用户名
        public function disallowUsernameInUrl(): static
        {
            $this->addOption('disallow-username-in-url')->noMark();

            return $this;
        }

        // 指定用于 DNS 请求的接口
        public function dnsInterface(string $interface): static
        {
            $this->addOption('dns-interface', $interface)->noMark();

            return $this;
        }

        // 指定用于 DNS 请求的 IPv4 地址
        public function setDnsIPv4Address(string $address): static
        {
            $this->addOption('dns-ipv4-addr', $address)->noMark();

            return $this;
        }

        // 指定用于 DNS 请求的 IPv6 地址
        public function setDnsIPv6Address(string $address): static
        {
            $this->addOption('dns-ipv6-addr', $address)->noMark();

            return $this;
        }

        // 使用的 DNS 服务器地址
        public function setDnsServers(string $addresses): static
        {
            $this->addOption('dns-servers', $addresses)->noMark();

            return $this;
        }

        // 验证 DOH 服务器证书的状态
        public function verifyDohCertStatus(): static
        {
            $this->addOption('doh-cert-status')->noMark();

            return $this;
        }

        // 允许不安全的 DOH 服务器连接
        public function allowInsecureDohServerConnections(): static
        {
            $this->addOption('doh-insecure')->noMark();

            return $this;
        }

        // 解析通过 DOH 的主机名称
        public function resolveHostNamesOverDoh(string $url): static
        {
            $this->addOption('doh-url', $url)->noMark();

            return $this;
        }

        // 将接收的头部写入文档
        public function dumpHeaderToFile(string $filename): static
        {
            $this->addOption('dump-header', $filename)->noMark();

            return $this;
        }

        // EGD 套接字路径
        public function setEgdFile(string $file): static
        {
            $this->addOption('egd-file', $file)->noMark();

            return $this;
        }

        // 使用密码引擎
        public function useEngine(string $name): static
        {
            $this->addOption('engine', $name)->noMark();

            return $this;
        }

        // 从文档传递 ETag
        public function etagCompare(string $file): static
        {
            $this->addOption('etag-compare', $file)->noMark();

            return $this;
        }

        // 从请求中解析 ETag 并将其保存到文档
        public function etagSave(string $file): static
        {
            $this->addOption('etag-save', $file)->noMark();

            return $this;
        }

        // 等待 100-继续的最长时间
        public function expect100Timeout(int $seconds): static
        {
            $this->addOption('expect100-timeout', $seconds)->noMark();

            return $this;
        }

        // 在 HTTP 错误时静默失败
        public function failSilently(): static
        {
            $this->addFlag('f');

            return $this;
        }

        // 在第一次传输错误时失败
        public function failEarly(): static
        {
            $this->addOption('fail-early')->noMark();

            return $this;
        }

        // 在 HTTP 错误时失败，但保留正文
        public function failWithBody(): static
        {
            $this->addOption('fail-with-body')->noMark();

            return $this;
        }

        // 启用 TLS False Start
        public function enableTlsFalseStart(): static
        {
            $this->addOption('false-start')->noMark();

            return $this;
        }

        // 使用指定的多部分 MIME 数据
        public function specifyMultipartMimeData(string $name, string $content): static
        {
            $this->addOption('form', "$name=$content")->noMark();

            return $this;
        }

        // 指定多部分 MIME 数据字符串
        public function specifyMultipartMimeString(string $name, string $string): static
        {
            $this->addOption('form-string', "$name=$string")->noMark();

            return $this;
        }

        // 账户数据字符串
        public function ftpAccount(string $data): static
        {
            $this->addOption('ftp-account', $data)->noMark();

            return $this;
        }

        // 替换 USER [name] 的字符串
        public function ftpAlternativeToUser(string $command): static
        {
            $this->addOption('ftp-alternative-to-user', $command)->noMark();

            return $this;
        }

        // 如果未存在则创建远程目录
        public function ftpCreateDirs(): static
        {
            $this->addOption('ftp-create-dirs')->noMark();

            return $this;
        }

        // 控制 CWD 的使用方法
        public function ftpMethod(string $method): static
        {
            $this->addOption('ftp-method', $method)->noMark();

            return $this;
        }

        // 使用 PASV/EPSV 而不是 PORT
        public function useFtpPasv(): static
        {
            $this->addOption('ftp-pasv')->noMark();

            return $this;
        }

        // 使用指定的地址而不是 PASV
        public function useFtpPort(string $address): static
        {
            $this->addOption('ftp-port', $address)->noMark();

            return $this;
        }

        // 在 PASV 之前发送 PRET
        public function sendPretBeforePasv(): static
        {
            $this->addOption('ftp-pret')->noMark();

            return $this;
        }

        // 跳过 PASV 的 IP 地址
        public function skipPasvIp(): static
        {
            $this->addOption('ftp-skip-pasv-ip')->noMark();

            return $this;
        }

        // 在身份验证后发送 CCC
        public function sendCccAfterAuthenticating(): static
        {
            $this->addOption('ftp-ssl-ccc')->noMark();

            return $this;
        }

        // 设置 CCC 模式
        public function setFtpSslCccMode(string $mode): static
        {
            $this->addOption('ftp-ssl-ccc-mode', $mode)->noMark();

            return $this;
        }

        // 对 FTP 登录要求 SSL/TLS
        public function requireFtpSslControl(): static
        {
            $this->addOption('ftp-ssl-control')->noMark();

            return $this;
        }

        // 获取数据时输出
        public function getDataOutput(): static
        {
            $this->addFlag('G');

            return $this;
        }

        // 禁用 URL 串行和 range
        public function disableGlobOff(): static
        {
            $this->addFlag('g');

            return $this;
        }

        // IPV6 尝试优先于 IPv4 的时间
        public function setHappyEyeballsTimeout(int $milliseconds): static
        {
            $this->addOption('happy-eyeballs-timeout-ms', $milliseconds)->noMark();

            return $this;
        }

        // 发送 HAProxy PROXY 协议 v1 头
        public function sendHaproxyProtocol(): static
        {
            $this->addOption('haproxy-protocol')->noMark();

            return $this;
        }

        // 仅显示文档信息
        public function showDocumentInfoOnly(): static
        {
            $this->addFlag('I');

            return $this;
        }

        // 传递自定义头部到服务器
        public function passCustomHeader(string $header): static
        {
            $this->addOption('header', $header)->noMark();

            return $this;
        }

        // 显示帮助信息
        public function showHelp(string $category): static
        {
            $this->addOption('help', $category)->noMark();

            return $this;
        }

        // 可接受的主机公钥的 MD5 哈希值
        public function setHostpubmd5(string $md5): static
        {
            $this->addOption('hostpubmd5', $md5)->noMark();

            return $this;
        }

        // 启用 HSTS 及其缓存文档
        public function enableHsts(string $file): static
        {
            $this->addOption('hsts', $file)->noMark();

            return $this;
        }

        // 允许 HTTP 0.9 响应
        public function allowHttp09Responses(): static
        {
            $this->addOption('http0.9')->noMark();

            return $this;
        }

        // 使用 HTTP 1.0
        public function useHttp1_0(): static
        {
            $this->addFlag('0');

            return $this;
        }

        // 使用 HTTP 1.1
        public function useHttp1_1(): static
        {
            $this->addOption('http1.1')->noMark();

            return $this;
        }

        // 使用 HTTP 2
        public function useHttp2(): static
        {
            $this->addOption('http2')->noMark();

            return $this;
        }

        // 在没有 HTTP/1.1 升级的情况下使用 HTTP 2
        public function useHttp2PriorKnowledge(): static
        {
            $this->addOption('http2-prior-knowledge')->noMark();

            return $this;
        }

        // 使用 HTTP v3
        public function useHttp3(): static
        {
            $this->addOption('http3')->noMark();

            return $this;
        }

        // 忽略远程资源的大小
        public function ignoreContentLength(): static
        {
            $this->addOption('ignore-content-length')->noMark();

            return $this;
        }

        // 包含协议响应头部
        public function includeResponseHeaders(): static
        {
            $this->addFlag('i');

            return $this;
        }

        // 允许不安全的 server 连接
        public function allowInsecureServerConnections(): static
        {
            $this->addFlag('k');

            return $this;
        }

        // 使用指定的网络接口
        public function useNetworkInterface(string $name): static
        {
            $this->addOption('interface', $name)->noMark();

            return $this;
        }

        // 将主机名称解析为 IPv4 地址
        public function useIpv4(): static
        {
            $this->addFlag('4');

            return $this;
        }

        // 将主机名称解析为 IPv6 地址
        public function useIpv6(): static
        {
            $this->addFlag('6');

            return $this;
        }

        // 忽略来自文档的会话 cookie
        public function junkSessionCookies(): static
        {
            $this->addFlag('j');

            return $this;
        }

        // 保持活动探测的间隔时间
        public function setKeepaliveTime(int $seconds): static
        {
            $this->addOption('keepalive-time', $seconds)->noMark();

            return $this;
        }

        // 私钥文档名
        public function useKey(string $key): static
        {
            $this->addOption('key', $key)->noMark();

            return $this;
        }

        // 私钥文档类型（DER/PEM/ENG）
        public function setKeyType(string $type): static
        {
            $this->addOption('key-type', $type)->noMark();

            return $this;
        }

        // 启用 Kerberos 安全级别
        public function enableKerberos(string $level): static
        {
            $this->addOption('krb', $level)->noMark();

            return $this;
        }

        // 转换为 libcurl 等效代码
        public function dumpLibcurlCode(string $file): static
        {
            $this->addOption('libcurl', $file)->noMark();

            return $this;
        }

        // 限制传输速度
        public function limitTransferSpeed(string $rate): static
        {
            $this->addOption('limit-rate', $rate)->noMark();

            return $this;
        }

        // 仅列出模式
        public function listOnly(): static
        {
            $this->addFlag('l');

            return $this;
        }

        // 强制使用 RANGE 的本地端口号
        public function forceLocalPortRange(string $numOrRange): static
        {
            $this->addOption('local-port', $numOrRange)->noMark();

            return $this;
        }

        // 跟随重定向
        public function followRedirects(): static
        {
            $this->addFlag('L');

            return $this;
        }

        // 像 --location 一样发送身份验证到其他主机
        public function locationTrusted(): static
        {
            $this->addOption('location-trusted')->noMark();

            return $this;
        }

        // 服务器登录选项
        public function setLoginOptions(string $options): static
        {
            $this->addOption('login-options', $options)->noMark();

            return $this;
        }

        // 原始邮件地址
        public function mailAuth(string $address): static
        {
            $this->addOption('mail-auth', $address)->noMark();

            return $this;
        }

        // 邮件发件地址
        public function mailFrom(string $address): static
        {
            $this->addOption('mail-from', $address)->noMark();

            return $this;
        }

        // 收件地址
        public function mailRecipient(string $address): static
        {
            $this->addOption('mail-rcpt', $address)->noMark();

            return $this;
        }

        // 允许 RCPT TO 命令对某些收件人失败
        public function allowRcptFail(): static
        {
            $this->addOption('mail-rcpt-allowfails')->noMark();

            return $this;
        }

        // 显示完整手册
        public function showManual(): static
        {
            $this->addFlag('M');

            return $this;
        }

        // 最大文档大小限制
        public function setMaxFileSize(int $bytes): static
        {
            $this->addOption('max-filesize', $bytes)->noMark();

            return $this;
        }

        // 最大重定向次数
        public function setMaxRedirs(int $num): static
        {
            $this->addOption('max-redirs', $num)->noMark();

            return $this;
        }

        // 允许传输的最大时间
        public function setMaxTime(int $seconds): static
        {
            $this->addOption('max-time', $seconds)->noMark();

            return $this;
        }

        // 将给定 URL 处理为 metalink XML 文档
        public function processAsMetalink(string $url): static
        {
            $this->addOption('metalink')->noMark();

            return $this;
        }

        // 使用 HTTP Negotiate (SPNEGO) 身份验证
        public function useNegotiateAuth(): static
        {
            $this->addOption('negotiate')->noMark();

            return $this;
        }

        // 必须从 .netrc 文档中读取用户名和密码
        public function mustReadNetrc(): static
        {
            $this->addFlag('n');

            return $this;
        }

        // 为 netrc 指定文档
        public function setNetrcFile(string $filename): static
        {
            $this->addOption('netrc-file', $filename)->noMark();

            return $this;
        }

        // 使用 .netrc 或 URL
        public function useNetrcOptional(): static
        {
            $this->addOption('netrc-optional')->noMark();

            return $this;
        }

        // 为下一个 URL 使用其单独的选项集
        public function useNextOptions(): static
        {
            $this->addOption('next')->noMark();

            return $this;
        }

        // 禁用 ALPN TLS 扩展
        public function disableAlpn(): static
        {
            $this->addOption('no-alpn')->noMark();

            return $this;
        }

        // 禁用输出流的缓冲
        public function disableBuffer(): static
        {
            $this->addFlag('N');

            return $this;
        }

        // 禁用 TCP keepalive
        public function disableTcpKeepalive(): static
        {
            $this->addOption('no-keepalive')->noMark();

            return $this;
        }

        // 禁用 NPN TLS 扩展
        public function disableNpn(): static
        {
            $this->addOption('no-npn')->noMark();

            return $this;
        }

        // 不显示进度条
        public function noProgressMeter(): static
        {
            $this->addOption('no-progress-meter')->noMark();

            return $this;
        }

        // 禁用 SSL 会话 ID 重用
        public function disableSessionIdReuse(): static
        {
            $this->addOption('no-sessionid')->noMark();

            return $this;
        }

        // 列出不使用代理的主机
        public function listOfNoProxy(string $noProxyList): static
        {
            $this->addOption('noproxy', $noProxyList)->noMark();

            return $this;
        }

        // 使用 HTTP NTLM 身份验证
        public function useNtlmAuth(): static
        {
            $this->addOption('ntlm')->noMark();

            return $this;
        }

        // 使用带 winbind 的 HTTP NTLM 身份验证
        public function useNtlmWithWinbind(): static
        {
            $this->addOption('ntlm-wb')->noMark();

            return $this;
        }

        // OAuth 2 Bearer Token
        public function oauth2Bearer(string $token): static
        {
            $this->addOption('oauth2-bearer', $token)->noMark();

            return $this;
        }

        // 将输出写入文档而不是 stdout
        public function outputToFile(string $file): static
        {
            $this->addOption('output', $file)->noMark();

            return $this;
        }

        // 在指定目录保存文档
        public function outputDir(string $dir): static
        {
            $this->addOption('output-dir', $dir)->noMark();

            return $this;
        }

        // 以并行方式执行传输
        public function performTransfersInParallel(): static
        {
            $this->addFlag('Z');

            return $this;
        }

        // 并行传输时不等待复用
        public function parallelImmediate(): static
        {
            $this->addOption('parallel-immediate')->noMark();

            return $this;
        }

        // 最大并行量
        public function setParallelMax(int $max): static
        {
            $this->addOption('parallel-max', $max)->noMark();

            return $this;
        }

        // 私钥的密码短语
        public function passphraseForPrivateKey(string $phrase): static
        {
            $this->addOption('pass', $phrase)->noMark();

            return $this;
        }

        // 在 URL 路径中不压缩 .. 串行
        public function pathAsIs(): static
        {
            $this->addOption('path-as-is')->noMark();

            return $this;
        }

        // 文档/哈希值公钥验证对等方
        public function pinnedPublicKey(string $hashes): static
        {
            $this->addOption('pinnedpubkey', $hashes)->noMark();

            return $this;
        }

        // 从文档中读取 CRL 列表
        public function setCrlFile(string $file): static
        {
            $this->addOption('crlfile', $file)->noMark();

            return $this;
        }

        // 指定文档
        public function setLimitRate(string $speed): static
        {
            $this->addOption('limit-rate', $speed)->noMark();

            return $this;
        }

        // 以字节的范围检索
        public function setRange(string $range): static
        {
            $this->addOption('range', $range)->noMark();

            return $this;
        }

        // 执行 HTTP 原始操作
        public function rawHttp(): static
        {
            $this->addOption('raw')->noMark();

            return $this;
        }

        // 设置引用 URL
        public function setReferer(string $url): static
        {
            $this->addOption('referer', $url)->noMark();

            return $this;
        }

        // 使用头部提供的文档名
        public function useHeaderProvidedFilename(): static
        {
            $this->addOption('remote-header-name')->noMark();

            return $this;
        }

        // 将输出写入名为远程文档的文档
        public function remoteName(): static
        {
            $this->addOption('remote-name')->noMark();

            return $this;
        }

        // 使用远程文档名为所有 URL
        public function remoteNameAll(): static
        {
            $this->addOption('remote-name-all')->noMark();

            return $this;
        }

        // 设置远程文档的时间
        public function remoteTime(): static
        {
            $this->addOption('remote-time')->noMark();

            return $this;
        }

        // 指定请求命令以使用
        public function specifyRequestCommand(string $command): static
        {
            $this->addOption('request', $command)->noMark();

            return $this;
        }

        // 指定请求的目标
        public function specifyRequestTarget(string $target): static
        {
            $this->addOption('request-target', $target)->noMark();

            return $this;
        }

        // 将主机+端口解析为此地址
        public function resolveHostPortToAddress(string $host, int $port, string $address): static
        {
            $this->addOption('resolve', "$host:$port:$address")->noMark();

            return $this;
        }

        // 如果发生瞬时问题，则重试请求
        public function retryRequest(int $num): static
        {
            $this->addOption('retry', $num)->noMark();

            return $this;
        }

        // 在连接被拒绝时重试
        public function retryOnConnectionRefused(): static
        {
            $this->addOption('retry-connrefused')->noMark();

            return $this;
        }

        // 在重试之间等待时间
        public function retryDelay(int $seconds): static
        {
            $this->addOption('retry-delay', $seconds)->noMark();

            return $this;
        }

        // 仅在此期间重试
        public function retryMaxTime(int $seconds): static
        {
            $this->addOption('retry-max-time', $seconds)->noMark();

            return $this;
        }

        // SASL PLAIN 身份验证的身份
        public function saslAuthzid(string $identity): static
        {
            $this->addOption('sasl-authzid', $identity)->noMark();

            return $this;
        }

        // 启用 SASL 身份验证中的初始响应
        public function saslIr(): static
        {
            $this->addOption('sasl-ir')->noMark();

            return $this;
        }

        // SPNEGO 服务名称
        public function setServiceName(string $name): static
        {
            $this->addOption('service-name', $name)->noMark();

            return $this;
        }

        // 在转移后使用格式输出
        public function writeOut(string $format): static
        {
            $this->addOption('write-out', $format)->noMark();

            return $this;
        }

        // 将随机数据读取到文档
        public function randomFile(string $file): static
        {
            $this->addOption('random-file', $file)->noMark();

            return $this;
        }

        // 在传输速度低于此值时停止
        public function speedLimit(string $speed): static
        {
            $this->addOption('speed-limit', $speed)->noMark();

            return $this;
        }

        // 在此时间内触发 'speed-limit' 中止
        public function speedTime(int $seconds): static
        {
            $this->addOption('speed-time', $seconds)->noMark();

            return $this;
        }

        // 尝试 SSL/TLS
        public function trySsl(): static
        {
            $this->addOption('ssl')->noMark();

            return $this;
        }

        // 允许安全漏洞以改善互操作性
        public function allowSslAllowBeast(): static
        {
            $this->addOption('ssl-allow-beast')->noMark();

            return $this;
        }

        // 禁用证书撤销检查
        public function disableSslNoRevoke(): static
        {
            $this->addOption('ssl-no-revoke')->noMark();

            return $this;
        }

        // 强制使用 SSL/TLS
        public function requireSsl(): static
        {
            $this->addOption('ssl-reqd')->noMark();

            return $this;
        }

        // 忽略缺少/离线证书 CRL 分发点
        public function ignoreSslRevokeBestEffort(): static
        {
            $this->addOption('ssl-revoke-best-effort')->noMark();

            return $this;
        }

        // 使用 SSLv2
        public function useSslV2(): static
        {
            $this->addFlag('2');

            return $this;
        }

        // 使用 SSLv3
        public function useSslV3(): static
        {
            $this->addFlag('3');

            return $this;
        }

        // 将标准错误重定向到指定文档
        public function redirectStderr(string $file): static
        {
            $this->addOption('stderr', $file)->noMark();

            return $this;
        }

        // 启用 HTTP header 的样式输出
        public function enableStyledOutput(): static
        {
            $this->addOption('styled-output')->noMark();

            return $this;
        }

        // 抑制代理 CONNECT 响应头
        public function suppressConnectHeaders(): static
        {
            $this->addOption('suppress-connect-headers')->noMark();

            return $this;
        }

        // 使用 TCP Fast Open
        public function useTcpFastOpen(): static
        {
            $this->addOption('tcp-fastopen')->noMark();

            return $this;
        }

        // 使用 TCP_NODELAY 选项
        public function useTcpNoDelay(): static
        {
            $this->addOption('tcp-nodelay')->noMark();

            return $this;
        }

        // 设置 telnet 选项
        public function setTelnetOption(string $opt, $value): static
        {
            $this->addOption('telnet-option', "$opt=$value")->noMark();

            return $this;
        }

        // 设置 TFTP BLKSIZE 选项
        public function setTftpBlksize(int $value): static
        {
            $this->addOption('tftp-blksize', $value)->noMark();

            return $this;
        }

        // 不发送任何 TFTP 选项
        public function tftpNoOptions(): static
        {
            $this->addOption('tftp-no-options')->noMark();

            return $this;
        }

        // 根据时间条件传输
        public function timeCondition(string $time): static
        {
            $this->addOption('time-cond', $time)->noMark();

            return $this;
        }

        // 设置允许的最大 TLS 版本
        public function setMaxTlsVersion(string $version): static
        {
            $this->addOption('tls-max', $version)->noMark();

            return $this;
        }

        // 设置 TLS 1.3 加密套件
        public function setTls13Ciphers(string $ciphers): static
        {
            $this->addOption('tls13-ciphers', $ciphers)->noMark();

            return $this;
        }

        // TLS 身份验证类型
        public function tlsAuthType(string $type): static
        {
            $this->addOption('tlsaauthtype', $type)->noMark();

            return $this;
        }

        // TLS 密码短语
        public function tlsPassword(string $password): static
        {
            $this->addOption('tlspassword', $password)->noMark();

            return $this;
        }

        // TLS 用户名
        public function tlsUsername(string $name): static
        {
            $this->addOption('tlsuser', $name)->noMark();

            return $this;
        }

        // 使用 TLSv1 或更高版本
        public function useTlsV1(): static
        {
            $this->addFlag('1');

            return $this;
        }

        // 使用 TLSv1.0 或更高版本
        public function useTlsV1_0(): static
        {
            $this->addOption('tlsv1.0')->noMark();

            return $this;
        }

        // 使用 TLSv1.1 或更高版本
        public function useTlsV1_1(): static
        {
            $this->addOption('tlsv1.1')->noMark();

            return $this;
        }

        // 使用 TLSv1.2 或更高版本
        public function useTlsV1_2(): static
        {
            $this->addOption('tlsv1.2')->noMark();

            return $this;
        }

        // 使用 TLSv1.3 或更高版本
        public function useTlsV1_3(): static
        {
            $this->addOption('tlsv1.3')->noMark();

            return $this;
        }

        // 请求压缩传输编码
        public function requestCompressedTransferEncoding(): static
        {
            $this->addOption('tr-encoding')->noMark();

            return $this;
        }

        // 写调试跟踪到文档
        public function writeTrace(string $file): static
        {
            $this->addOption('trace', $file)->noMark();

            return $this;
        }

        // 像跟踪一样写，但没有十六进制输出
        public function traceAscii(string $file): static
        {
            $this->addOption('trace-ascii', $file)->noMark();

            return $this;
        }

        // 向跟踪/详细输出添加时间戳
        public function addTimestampsToTrace(): static
        {
            $this->addOption('trace-time')->noMark();

            return $this;
        }

        // 通过此 Unix 域套接字连接
        public function connectThroughUnixSocket(string $path): static
        {
            $this->addOption('unix-socket', $path)->noMark();

            return $this;
        }

        // 上传本地文档到目标
        public function uploadFile(string $file): static
        {
            $this->addOption('upload-file', $file)->noMark();

            return $this;
        }

        // URL 工作
        public function setUrl(string $url): static
        {
            $this->addOption('url', $url)->noMark();

            return $this;
        }

        // 使用 ASCII/文本传输
        public function useAscii(): static
        {
            $this->addFlag('B');

            return $this;
        }

        // 服务器用户名和密码
        public function useUser(string $user, string $password): static
        {
            $this->addOption('user', "$user:$password")->noMark();

            return $this;
        }

        // 向服务器发送 User-Agent
        public function sendUserAgent(string $name): static
        {
            $this->addOption('user-agent', $name)->noMark();

            return $this;
        }

        // 使操作更加啰嗦
        public function verbose(): static
        {
            $this->addFlag('v');

            return $this;
        }

        // 显示版本号并退出
        public function showVersion(): static
        {
            $this->addFlag('V');

            return $this;
        }
    }
