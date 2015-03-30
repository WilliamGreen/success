<?php 

$link = mysqli_connect('localhost', 'root', 'cabbage123'); 

if (!$link) 

{ 

  $output = 'Unable to connect to the database server.'; 

  include 'output.html.php'; 

  exit(); 

} 

 

if (!mysqli_set_charset($link, 'utf8')) 

{ 

  $output = 'Unable to set database connection encoding.'; 

  include 'output.html.php'; 

  exit(); 

} 

 

if (!mysqli_select_db($link, 'success')) 

{ 

  $output = 'Unable to locate the success database.'; 

  include 'output.html.php'; 

  exit(); 

} 

 

$result = mysqli_query($link, 'SELECT bname FROM business');  

if (!$result)  

{  

  $error = 'Error fetching jokes: ' . mysqli_error($link);  

  include 'error.html.php';  

  exit();  

}  

  

while ($row = mysqli_fetch_array($result))  

{  

  $businesses[] = $row['bname'];  

}  

  

include 'businesses.html.php';  

?>