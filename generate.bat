@ECHO OFF
ECHO Generating default (english) page...
C:\xampp\php\php.exe -f  src/index.php en > index.html

ECHO Generating chinese page...
C:\xampp\php\php.exe -f  src/index.php zh > zh/index.html

ECHO Generating korian page...
C:\xampp\php\php.exe -f  src/index.php ko > ko/index.html

ECHO Generating russian page...
C:\xampp\php\php.exe -f src/index.php ru > ru/index.html

ECHO Generating japanese page...
C:\xampp\php\php.exe -f src/index.php jp > jp/index.html

ECHO Done.
pause