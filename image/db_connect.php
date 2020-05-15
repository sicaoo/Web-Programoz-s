<?php
$host = "localhost";
$db_name = "test";
$username = "root";
$password = "";
 
try{
$connect=mysql_connect("localhost","root","") or die ("Couldn't connect");
$query89=mysql_query("SET NAMES 'UTF8'");
$query98=mysql_query("SET CHARACTER SET UTF8");
mysql_select_db("eden") or die ("Couldn't find db");
}
 
catch(PDOException $exception){
    //to handle connection error
    echo "Connection error: " . $exception->getMessage();
}
?>