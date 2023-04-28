chcp 1252
@echo off
cls
REM QUE OPERACION VAMOS A REALIZAR + O -
echo **********************************************
echo ** PROGRAMA PARA PONER O QUITAR ATRIBUTOS   **
echo **********************************************
ECHO .
ECHO .
ECHO .
echo 1- introduce la operacion
echo 2- introduce el nombre de archivo
echo 3- introduce la ruta del archivo
echo 4- introduce el atributo
echo 5- Ejecutar la orden
echo 6- salir
echo .
echo .
echo .
echo introduzca un valor
:inicio
set /p valor=
if "%action%"==1 (
	goto operacion
)
if "%action%"==2 (
	goto archivo
)
if "%action%"==3 (
	goto ruta
)
if "%action%"==4 (
	goto atributo
)
if "%action%"==6 (
	goto salir
)
:operacion

echo introduzca la operacion a realizar

set /p operacion

if "%operacion%"=="añadir" (
	goto inicio
)
if "%operacion%"=="quitar" (
	goto inicio
)
goto inicio

:archivo



:ruta



:atributo



:salir


