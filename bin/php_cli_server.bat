@echo off
call conf/config.cmd
FOR %%G IN (%php_call%) DO (
    call conf/php/%%G.cmd
)

echo Web Server
REM php.net/features.commandline.webserver

FOR %%G IN (%php_port%) DO (
    start %php_dir%\php.exe -c %php_ini% -S %php_addr%:%%G -t %php_docroot% %php_router%
)

FOR %%G IN (%php_listen%) DO (
    start %php_dir%\php.exe -c %php_ini% -S %%G -t %php_docroot% %php_router%
)
