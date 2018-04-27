<?php
include 'tmpl/tmpl.tpl';
include 'config.php';
?> 
	

<form action="range.php" method="get">
<center>
<br> IP Range Begins: <br> <input type="text" name="ip1"  value ="1.1.1.1" ><br>
<br> IP Range Ends: <br> <input type="text" name="ip2"  value ="1.1.1.2"><br>
<br>

<input type="submit">
<br>
<br> <a href=start.bat>Generate BAT</a><br>
<br> <a href=range.txt>Download IP ( optional)</a>


</form>
</body>
</html>


<br> IP Range BeginsP<br> <b><?php echo $_GET["ip1"]; ?><br></b>
 IP Range Ends <br> <b><?php echo $_GET["ip2"]; ?><br></b>


<?php


$ip1 = $_GET["ip1"];
$ip2 = $_GET["ip2"];

if ($ip2 < 1 or $ip1 <1) {
    echo "<font color=red>Enter data</font>"; 
    exit(); }

unlink('range.txt'); // Удаляем старый файл
unlink('start.bat'); // Удаляем старый файл

for ($ip = ip2long($ip1); $ip<=ip2long($ip2); $ip++)
{


$myfile = fopen("range.txt", "a+") or die("can not open file!"); // Write to file
$txt = long2ip($ip) . "\n";
fwrite($myfile, $txt);

$batfile = fopen("start.bat", "a+") or die("can not open start.bat!"); // Write to file
$batch_text = "start bin/curl.exe -o null http://".$_SERVER['SERVER_NAME'].$folder."/single.php?ip=";
$batch_text2 = long2ip($ip) . "\n\n";
$batch_text3 = " waitfor /T 10 pause \n";
$allbatch = $batch_text. $batch_text2. $batch_text3;
fwrite($batfile, $allbatch);



    echo long2ip($ip) . "\n<br>";
}
fclose($myfile);
fclose($batfile);
?>
</center>
