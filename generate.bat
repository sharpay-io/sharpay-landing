@ECHO OFF
ECHO Generating default (english) page...
C:\xampp\php\php.exe -f  src/index.php en > index.new.html

ECHO Generating chinese page...
C:\xampp\php\php.exe -f  src/index.php zh > zh/index.new.html

ECHO Generating korian page...
C:\xampp\php\php.exe -f  src/index.php ko > ko/index.new.html

ECHO Generating russian page...
C:\xampp\php\php.exe -f src/index.php ru > ru/index.new.html

ECHO Generating japanese page...
C:\xampp\php\php.exe -f src/index.php jp > jp/index.new.html

ECHO Done.
pause