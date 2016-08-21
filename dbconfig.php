<?php
$host = "localhost";
$user = "azshaikh_panama";
$password = "fernando999";
$database = "azshaikh_panamaDB";

$con = mysql_connect($host,$user,$password);
 
 
 $dbcon = mysql_select_db($database);
 
 if ( !$con ) {
  die("Connection failed : " . mysql_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }
?>