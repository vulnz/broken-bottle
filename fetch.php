<?php
include 'config.php';
// Error and warrnings turn off
error_reporting(0);
//fetch.php

// Mysql connecton
//$connect = mysqli_connect("localhost", "root", "", "umbrella");
mysqli_set_charset($connect, 'utf8');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM info
  WHERE link LIKE '%".$search."%'
  OR ip LIKE '%".$search."%' 
  OR id LIKE '%".$search."%' 
  OR title LIKE '%".$search."%' 
  OR description LIKE '%".$search."%'
 ";
}
else
{
 $query = " ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive" style="max-width:3000px;">
   <table class="table table bordered">
    <tr>
     <th><b>Title</b></th>
     <th><b>Description</b></th>
     <th><b>IP</b></th>
     <th><b>URL</b></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["title"].'</td>
    <td >'.$row["description"].'</td>
    <td>'.$row["ip"].'</td>
    <td>'.$row["link"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo '';
}

?>
