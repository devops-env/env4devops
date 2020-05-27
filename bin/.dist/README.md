# .dist

批处理文件运行所需的配置文件

| #    | 文件名     | 描述     |
| ---- | ---------- | -------- |
|      | config.cmd | 全局配置 |



## config.cmd

| #    | 项目         | 默认值                          | 说明         |
| ---- | ------------ | ------------------------------- | ------------ |
| 位置 |              |                                 |              |
|      | drive_letter | I                               | 盘符         |
|      | root_dir     | %drive_letter%:\env             | 环境根目录   |
| 版本 |              |                                 |              |
|      | php_v        | 7.4                             | PHP 大版本   |
|      | php_ver      | %php_v%.6                       | PHP 详细版本 |
| 参数 |              |                                 |              |
|      | php_addr     | 0.0.0.0                         | 监听地址     |
|      | php_port     | 8001,8002                       | 监听端口列表 |
|      | php_listen   | 192.168.100.4:80,127.0.0.1:8000 | 监听列表     |
|      | php_docroot  | %root_dir%/www                  | 文档根目录   |
|      | php_router   | %root_dir%/www/router.php       | 路由入口文件 |
| 目录 |              |                                 |              |
|      | soft_dir     | %root_dir%\win\ProgramFiles     | 软件目录     |
|      | php_dir      | %soft_dir%\php-%php_ver%        | PHP 目录     |
| 配置 |              |                                 |              |
|      | php_ini      | %php_dir%/php.ini               | PHP 配置地址 |
