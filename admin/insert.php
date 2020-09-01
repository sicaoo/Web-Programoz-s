<?php

include('C:\xampp\htdocs\eden2\db_config.php');
if (isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['product_type'])
    && isset($_POST['price'])&& isset($_POST['description']) &&
    isset($_POST['stock']) && isset($_POST['new'])&& isset($_POST['cheaper'])) {
    $product_id=$_POST['product_id'];
    $name = $_POST['product_name'];
    $type= $_POST['product_type'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    $new = $_POST['new'];
    $cheaper = $_POST['cheaper'];




    $sql = "INSERT INTO product (product_id, product_name,product_type,price,description,stock,new,cheaper)
 VALUES('$product_id','$name', '$type', '$price', '$description','$stock','$new','$cheaper')";
    $myData = mysqli_query($conn, $sql);
    if ($myData) {
        echo "Sikeres hozzáadás";
        header("refresh:2; url=index.php");

    }
    else {
        echo "Nem sikerült hozzáadni";
        header("refresh:2; url=index.php");
    }
}
?>