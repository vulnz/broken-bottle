start bin/curl.exe -o null http://localhost/dashboard/odessa//single.php?ip=1.1.1.1

 waitfor /T 10 pause 
start bin/curl.exe -o null http://localhost/dashboard/odessa//single.php?ip=1.1.1.2

 waitfor /T 10 pause 
