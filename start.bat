@echo off
setlocal enabledelayedexpansion

:: Diretório de destino
set DEST_DIR=c:\xampp\htdocs\projeto-eliel\

:: Verifica se você está no diretório correto
if "%CD%"=="%DEST_DIR%" (
    echo Você já está no diretório correto.
    goto executeScripts
) else (
    echo Você não está no diretório correto. Copiando arquivos para %DEST_DIR%...
    :: Se o diretório de destino não existir, cria-o
    if not exist "%DEST_DIR%" (
        mkdir "%DEST_DIR%"
    )
    :: Copia os arquivos para o diretório de destino
    xcopy . "%DEST_DIR%" /E /I /H
    echo Arquivos copiados!
    goto executeScripts
)



:executeScripts
cd C:\xampp

start "" C:\xampp\xampp-control.exe 
start "" mysql\bin\mysqld --defaults-file=mysql\bin\my.ini
start /B apache\bin\httpd.exe 


goto endScript

start browser http://localhost/projeto-eliel

:endScript
exit