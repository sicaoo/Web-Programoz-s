<?php
include('C:\xampp\htdocs\eden2\db_config.php');
var_dump($_POST['delete']);
if(isset($_POST['delete']))
{
    $torles = $_POST['delete'];

    $sql = "DELETE FROM product WHERE product_id =".$torles;
    $myData = mysqli_query($conn, $sql);
    if($myData)
    {
        echo "Sikeres törlés!";
        header("refresh:2; url=index.php");
    }
    else{
        echo "Nem sikerült a törlés.";
        header("refresh:2; url=index.php");
    }
}
?>