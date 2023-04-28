@echo off
cls
:inicio
echo que quiere hacer, quitar, anadir o salir?
set /p action=
echo ===============================================
if "%action%" == "anadir" (
	echo donde quiere guardar el archivo?
	set /p direccion=
	cd %direccion%
	echo ===============================================
	echo como se va a llamar el archivo ?
	set /p nombre=
	echo ===============================================
	mk %nombre%
) else (
		if "%action%" == "quitar" (
			echo donde esta el archivo para borrar?
			set /p direccion=
			echo ===============================================
			cd %direccion%
			echo como se llama el archivo ?
			set /p nombre=
			echo ===============================================
			del %nombre%
	) else (
		if "%action%"=="salir" (
			Exit
		)
			echo no hay ningun valor valido.
			echo ===============================================
	)
)

goto inicio