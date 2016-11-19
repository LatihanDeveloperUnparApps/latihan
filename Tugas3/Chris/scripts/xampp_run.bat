@echo off
SET LAUNCH_URL=localhost:1404
cd ..
start C:/xampp/php/php -S %LAUNCH_URL%
start explorer.exe "http://%LAUNCH_URL%"
cd scripts
exit