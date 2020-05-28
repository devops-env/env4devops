set drive_letter=I
set root_dir=%drive_letter%:\env

REM version
set php_v=7.4
set php_ver=%php_v%.6
set nginx_ver=1.18.0


REM argument
set php_addr=0.0.0.0
set php_port=8000
::set php_port=8002,
::set php_listen=192.168.100.4:80,127.0.0.1:8000
set php_listen=
::set php_docroot=E:\env
::set php_docroot=%root_dir%/www/work/static-site/cdn
::set php_docroot=%root_dir%/www/work/urlnk/astrophp/web
set php_docroot=%root_dir%/www
set php_router=%root_dir%/www/router.php
::set php_router=
set php_bind=127.0.0.1:9000,192.168.100.4:9001
set php_cgi_addr=127.0.0.1
::set php_cgi_port=9002,9003
set php_cgi_port=


REM directory
set soft_dir=%root_dir%\win\ProgramFiles

set php_dir=%soft_dir%\php-%php_ver%
set nginx_dir=%soft_dir%\nginx-%nginx_ver%


REM configuration
set php_ini=%php_dir%/php.ini
::set php_ini=%data_dir%/php/php.ini
::set nginx_conf=%data_dir%\nginx\conf\nginx.conf
set nginx_conf=conf/nginx.conf
