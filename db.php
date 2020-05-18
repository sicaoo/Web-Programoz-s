<?php
header('Content-Type: text/html; charset=utf-8');



$connect=mysql_connect("localhost","root","") or die ("Couldn't connect");
$query89=mysql_query("SET NAMES 'UTF8'");
$query98=mysql_query("SET CHARACTER SET UTF8");
mysql_select_db("eden") or die ("Couldn't find db");


$id = array();
$resultid = mysql_query("SELECT product_id FROM product");
while ($row = mysql_fetch_assoc($resultid)) {
    $id = array_merge($id, array_map('trim', explode(",", $row['product_id']))); //ID to array
}
$name = array();
$resultname = mysql_query("SELECT product_name FROM product");
while ($row = mysql_fetch_assoc($resultname)) {
    $name= array_merge($name, array_map('trim', explode(",", $row['product_name']))); // name to array
}
$description = array();
$resultdescription = mysql_query("SELECT description FROM product");
while ($row = mysql_fetch_assoc($resultdescription)) {
    $description= array_merge($description, array_map('trim', explode(";", $row['description']))); //descriptionto array
}
$price = array();
$resultprice = mysql_query("SELECT price FROM product");
while ($row = mysql_fetch_assoc($resultprice)) {
    $price= array_merge($price, array_map('trim', explode(",", $row['price']))); //price to array
}
$discount = array();
$resultdiscount = mysql_query("SELECT discount FROM product");
while ($row = mysql_fetch_assoc($resultdiscount)) {
    $discount= array_merge($discount, array_map('trim', explode(",", $row['discount']))); //discount to array
}
$product_type = array();
$resultpt = mysql_query("SELECT product_type FROM product");
while ($row = mysql_fetch_assoc($resultpt)) {
    $product_type= array_merge($product_type, array_map('trim', explode(",", $row['product_type']))); // product type to array
}

//insert to database
if(isset($_POST['submit'])){
    $sql = "INSERT INTO member (first_name, last_name,address,email,phone)
        VALUES ('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["address"]."','".$_POST["email"]."','".$_POST["telephone"]."')
        FROM eden";

        alert("Sikeresen hozzáadva");
}





?>



