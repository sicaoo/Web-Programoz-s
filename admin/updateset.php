<?php
include('C:\xampp\htdocs\eden2\db_config.php');
if(isset($_POST['product_id']) && isset($_POST['product_name']) && isset($_POST['product_type'])
    && isset($_POST['price'])&& isset($_POST['description']) &&
    isset($_POST['stock']) && isset($_POST['new'])&& isset($_POST['cheaper']) && isset($_POST['modosit']))
{
    $modosit = $_POST['modosit'];

    $sql = "UPDATE product SET product_id='$_POST[product_id]',product_name='$_POST[product_name]',product_type='$_POST[product_type]',
 price='$_POST[price]', description='$_POST[description]', stock='$_POST[stock]',  new='$_POST[new]',
  cheaper='$_POST[cheaper]' WHERE product_id='$_POST[modosit]'";
    var_dump($sql);
    $myData = mysqli_query($conn, $sql);
    if($myData)
    {
        echo "Sikeres update!";
        header("refresh:2; url=index.php");
    }
    else
    {
        echo "Gond van";
        header("refresh:2; url=index.php");
    }
}
else
{
    echo "Nincs adat";
    header("refresh:2; url=index.php");
}
?>