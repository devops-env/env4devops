@echo off
set drive_letter=I
set user_org=wuding
call %user_org%/git_config.cmd

%drive_letter%:
cd %drive_letter%:\env\www\git\%user_org%

::FOR %%G IN (%user_repos%) DO (git clone https://%site_name%.com/%user_org%/%%G.git)
FOR %%G IN (%user_repos%) DO (git clone git@%site_name%.com:%user_org%/%%G.git) 
