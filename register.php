<?php
	header('Content-Type: text/html; charset=utf-8');
	$connect=mysql_connect("localhost","root","") or die ("Couldn't connect");
	$db=mysql_select_db("eden",$connect);
	
	if(isset($_POST['submit']))
	{

	$first_name=$_POST['first_name'];
	$address=$_POST['address'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$telephone=$_POST['telephone'];
	$queryreg = mysql_query("INSERT INTO member (first_name, address , last_name, email, telephone)
			VALUES ('$first_name','$address','$last_name', '$email', '$telephone')");
	}
	echo "adatait sikeresen felvettuk";
?>