<?php
include 'tmpl/tmpl.tpl';
include 'config.php';

?> 

<form action="single.php" method="get">
<center><br> Range: <br> <input type="text" name="ip" value ="1.1.1.1"><br>
<br>

<input type="submit">
</form>
</body>
</html>
</center>


 <br><center>Working with<b><?php

error_reporting(1); // Remove warrning
  echo $_GET["ip"]; ?>
  
  
 </center>



<?php

$full_1 = "http://www.bing.com/search?q=IP:";
$full_2 = $_GET["ip"];
$full_3 = "&count=50&first=50&format=";
include ('simple_html_dom.php');
$full_all=$full_1.$full_2. $full_3.'rss';
$full_all2=$full_1.$full_2. "&count=50&first=50&format=rss";
$full_all3=$full_1.$full_2. "&count=50&first=100&format=rss";
$full_all4=$full_1.$full_2. "&count=50&first=150&format=rss";
$full_all5=$full_1.$full_2. "&count=50&first=200&format=rss";
$full_all6=$full_1.$full_2. "&count=50&first=250&format=rss";
$full_all7=$full_1.$full_2. "&count=50&first=300&format=rss";
$global_counter=1;


//Check for data validation
if ($full_2 < 1) {
    echo "<center>Please enter data</center>"; 
    exit(); }



$hits=0;
$xml = simplexml_load_file($full_all);
$parsed_results_array = array();
foreach($xml as $entry) {
    foreach($entry->item as $item) {
        // $parsed_results_array[] = json_decode(json_encode($item), true);
        $items['Title'] = (string) $item->title;
        $items['Description'] = (string) $item->description;
        $items['URL'] = (string) $item->link;

        $smartl= $items['URL'] = (string) $item->link;
        $smartd= $items['Description'] = (string) $item->description;
        $smartt= $items['Title'] = (string) $item->title;


$dbh = mysql_connect($host, $user, $pswd) or die("Can not connect to database");
mysql_select_db($database) or die("Can not connect to database");
mysql_query("SET NAMES UTF8");
$query = "INSERT INTO info (id,title,description,link,ip,reserved) VALUES ('1', '$smartt', '$smartd', '$smartl', '$full_2', 'comment')";
$res = mysql_query($query);
{


}



        $parsed_results_array[] = $items;
        $hits++;
        $global_counter++;

    }
}

echo '<pre><font color=red>Number of results <br>';
if ($hits > 40) {
    echo "Mote than 40"; }
    elseif ($hits<=40) {
    	    echo $hits;   }


echo "</font><br><br>";
print_r($parsed_results_array);

if ($hits < 43) {
    echo "Done"; 
    exit(); 

echo '<pre>';
print_r($parsed_results_array);



}

$hits=0;
$xml = simplexml_load_file($full_all2);
$parsed_results_array = array();
foreach($xml as $entry) {
    foreach($entry->item as $item) {
        // $parsed_results_array[] = json_decode(json_encode($item), true);
        $items['Title'] = (string) $item->title;
        $items['Description'] = (string) $item->description;
        $items['URL'] = (string) $item->link;


                $smartl= $items['URL'] = (string) $item->link;
        $smartd= $items['Description'] = (string) $item->description;
        $smartt= $items['Title'] = (string) $item->title;


        
        $dbh = mysql_connect($host, $user, $pswd) or die("Can not connect to database.");
mysql_select_db($database) or die("Can not connect to database.");
        mysql_query("SET NAMES UTF8");
		$query = "INSERT INTO info (id,title,description,link,ip,reserved) VALUES ('1', '$smartt', '$smartd', '$smartl', '$full_2', 'comment')";
		$res = mysql_query($query);

        $parsed_results_array[] = $items;
        $hits++;
        $global_counter++;


    }
}


echo '<pre>';
print_r($parsed_results_array);

if ($hits < 43) {
    echo "Работа завершенна"; 
    exit(); }

$hits=0;
$xml = simplexml_load_file($full_all3);
$parsed_results_array = array();
foreach($xml as $entry) {
    foreach($entry->item as $item) {
        // $parsed_results_array[] = json_decode(json_encode($item), true);
        $items['Title'] = (string) $item->title;
        $items['Description'] = (string) $item->description;
        $items['URL'] = (string) $item->link;


        $smartl= $items['URL'] = (string) $item->link;
        $smartd= $items['Description'] = (string) $item->description;
        $smartt= $items['Title'] = (string) $item->title;


        $dbh = mysql_connect($host, $user, $pswd) or die("Can not connect to database.");
mysql_select_db($database) or die("Can not connect to database.");
        mysql_query("SET NAMES UTF8");
		$query = "INSERT INTO info (id,title,description,link,ip,reserved) VALUES ('1', '$smartt', '$smartd', '$smartl', '$full_2', 'comment')";
		$res = mysql_query($query);

        $parsed_results_array[] = $items;
        $hits++;
        $global_counter++;

    }
}



echo '<pre>';
print_r($parsed_results_array);
if ($hits < 43) {
    echo "Работа завершенна"; 
    exit(); }

$hits=0;
$xml = simplexml_load_file($full_all4);
$parsed_results_array = array();
foreach($xml as $entry) {
    foreach($entry->item as $item) {
        // $parsed_results_array[] = json_decode(json_encode($item), true);
        $items['URL'] = (string) $item->title;
        $items['Description'] = (string) $item->description;
        $items['Title'] = (string) $item->link;


        $smartl= $items['URL'] = (string) $item->link;
        $smartd= $items['Description'] = (string) $item->description;
        $smartt= $items['Title'] = (string) $item->title;



        $dbh = mysql_connect($host, $user, $pswd) or die("Can not connect to database.");
mysql_select_db($database) or die("Can not connect to database.");
        mysql_query("SET NAMES UTF8");
		$query = "INSERT INTO info (id,title,description,link,ip,reserved) VALUES ('1', '$smartt', '$smartd', '$smartl', '$full_2', 'comment')";
		$res = mysql_query($query);

        $parsed_results_array[] = $items;
        $hits++;
        $global_counter++;

    }
}

echo '<pre>';
print_r($parsed_results_array);
echo '<pre>';
print_r($parsed_results_array);
if ($hits < 43) {
    echo "Done"; 
    exit(); }

$hits=0;
$xml = simplexml_load_file($full_all5);
$parsed_results_array = array();
foreach($xml as $entry) {
    foreach($entry->item as $item) {
        // $parsed_results_array[] = json_decode(json_encode($item), true);
        $items['Title'] = (string) $item->title;
        $items['Description'] = (string) $item->description;
        $items['URL'] = (string) $item->link;

        $smartl= $items['URL'] = (string) $item->link;
        $smartd= $items['Description'] = (string) $item->description;
        $smartt= $items['Title'] = (string) $item->title;



        $dbh = mysql_connect($host, $user, $pswd) or die("Can not connect to database.");
mysql_select_db($database) or die("Can not connect to database.");
        mysql_query("SET NAMES UTF8");
		$query = "INSERT INTO info (id,title,description,link,ip,reserved) VALUES ('1', '$smartt', '$smartd', '$smartl', '$full_2', 'comment')";
		$res = mysql_query($query);


        $parsed_results_array[] = $items;
        $hits++;
        $global_counter++;

    }
}

echo '<pre>';
print_r($parsed_results_array);


$hits=0;
$xml = simplexml_load_file($full_all6);
$parsed_results_array = array();
foreach($xml as $entry) {
    foreach($entry->item as $item) {
        // $parsed_results_array[] = json_decode(json_encode($item), true);
        $items['Title'] = (string) $item->title;
        $items['Description'] = (string) $item->description;
        $items['URL'] = (string) $item->link;



        $smartl= $items['URL'] = (string) $item->link;
        $smartd= $items['Description'] = (string) $item->description;
        $smartt= $items['Title'] = (string) $item->title;

        $dbh = mysql_connect($host, $user, $pswd) or die("Can not connect to database.");
mysql_select_db($database) or die("Can not connect to database.");
        mysql_query("SET NAMES UTF8");
		$query = "INSERT INTO info (id,title,description,link,ip,reserved) VALUES ('1', '$smartt', '$smartd', '$smartl', '$full_2', 'comment')";
		$res = mysql_query($query);


        $parsed_results_array[] = $items;
        $hits++;
        $global_counter++;

    }
}

echo '<pre>';
print_r($parsed_results_array);
echo '<pre>';
print_r($parsed_results_array);
if ($hits < 43) {
    echo "Done"; 
    exit(); }

$hits=0;
$xml = simplexml_load_file($full_all7);
$parsed_results_array = array();
foreach($xml as $entry) {
    foreach($entry->item as $item) {
        // $parsed_results_array[] = json_decode(json_encode($item), true);
        $items['Title'] = (string) $item->title;
        $items['Description'] = (string) $item->description;
        $items['URL'] = (string) $item->link;


                $smartl= $items['URL'] = (string) $item->link;
        $smartd= $items['Description'] = (string) $item->description;
        $smartt= $items['Title'] = (string) $item->title;

        $dbh = mysql_connect($host, $user, $pswd) or die("Can not connect to database.");
mysql_select_db($database) or die("Can not connect to database.");
        mysql_query("SET NAMES UTF8");
		$query = "INSERT INTO info (id,title,description,link,ip,reserved) VALUES ('1', '$smartt', '$smartd', '$smartl', '$full_2', 'comment')";
		$res = mysql_query($query);



        $parsed_results_array[] = $items;
        $hits++;
        $global_counter++;

    }



}


echo '<pre>';
print_r($parsed_results_array);
echo '<pre>';
print_r($parsed_results_array);



if ($hits < 43) {
    echo "Done"; 
    exit(); }


echo "All:<b> ";
echo $global_counter;
echo "</b> Results";

?>


