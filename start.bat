@echo off


:: Se não estiver no diretório correto, copie os arquivos
echo Você não está no diretório correto. Copiando arquivos para c:\xampp\htdocs\meu_projeto...
if not exist "c:\xampp\htdocs\projeto-eliel\" mkdir "c:\xampp\htdocs\projeto-eliel"
xcopy . "c:\xampp\htdocs\projeto-eliel\" /E /I /H
echo Arquivos copiados!
goto exe

:executeScripts
start cmd /c "@echo off && C:\xampp\apache_start.bat"
start cmd /c "@echo off && C:\xampp\mysql_start.bat"
goto endScript


:endScript
exit