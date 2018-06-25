@ECHO OFF
ECHO Generating default (English) page...
C:\xampp\php\php.exe -f  src/index.php en > index-test.html
ECHO Done.
pause
