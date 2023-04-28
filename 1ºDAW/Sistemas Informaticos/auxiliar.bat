@echo off
set ruta=%1
echo %ruta% , esta es su ruta
path=%path%%ruta%
path
pause