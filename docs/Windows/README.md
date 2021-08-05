# Windows



> 系统属性 > 高级系统设置 > 环境变量 > 系统变量

- O:\System\ProgramFiles\php-7.3.20-nts;
- C:\ProgramData\ComposerSetup\bin;
- C:\Program Files\Git\cmd;
- C:\Program Files\Git\usr\bin;
- C:\Program Files\Redis\;
- O:\System\ProgramFiles(x86)\gettext-iconv\bin;
- O:\System\ProgramFiles(x86)\Bitvise SSH Client;
- O:\System\ProgramFiles\PuTTY\;



> 搜索 > 网站 > 下载 > 程序 > 平台 > 版本

- O:\System\ProgramFiles(x86)\nginx-1.18.0\nginx.exe
- O:\System\ProgramFiles(x86)\nginx-1.19.6\nginx.exe



> 运行/搜索：服务
>
> 系统配置 > 服务
>
> 任务管理器 > 服务

MySQL

```sh
"C:\Program Files\MySQL\MySQL Server 5.7\bin\mysqld.exe" --defaults-file="C:\ProgramData\MySQL\MySQL Server 5.7\my3307.ini" MySQL3307

"C:\Program Files\MySQL\MySQL Server 5.7\bin\mysqld" --defaults-file="C:\ProgramData\MySQL\MySQL Server 5.7\my3308.ini" MySQL3308

"C:\Program Files\MySQL\MySQL Server 5.7\bin\mysqld.exe" --defaults-file="C:\ProgramData\MySQL\MySQL Server 5.7\my.ini" MySQL57
```

Redis

```sh
"C:\Program Files\Redis\redis-server.exe" --service-run "C:\Program Files\Redis\redis.windows-service.conf"

"C:\Program Files\Redis\redis-server.exe" --service-run 6380.conf --service-name redisService3
```



> 开始 > 所有程序 > 启动
>
> 系统配置 > 启动