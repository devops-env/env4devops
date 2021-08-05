@echo off
call conf/config.cmd
FOR %%G IN (%php_cgi_call%) DO (
    call conf/php-cgi/%%G.cmd
)

echo run PHP-CGI

FOR %%G IN (%php_bind%) DO (
    start %php_dir%\php-cgi.exe -b %%G -c %php_ini%
)

FOR %%G IN (%php_cgi_port%) DO (
    start %php_dir%\php-cgi.exe -b %php_cgi_addr%:%%G -c %php_ini%
)
::exit
