@echo off
REM Simple server runner for Toko Buku Laravel App
REM This script starts the built-in PHP server on port 9000

cd /d "%~dp0"
echo Starting Toko Buku application on http://127.0.0.1:9000
php -S 127.0.0.1:9000 -t public
