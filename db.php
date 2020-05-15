<?php
require_once "db_config.php";


$connect = new mysqli(HOST,USER,PASS,DATABASE);
/*if($connect -> connect_errno) {
    echo $connect -> connect__error;
}
// Get data from database
$sql = "SELECT product_id, product_name,product_type, description, price, image  FROM product";
if ($result = $connect -> query($sql)) {
    while ($row = $result -> fetch_assoc()) {
        $products[] = $row;
    }
}
$sql_str = "";
if (!empty($products)) {
    foreach ($products as $key => $value) {
        echo '<div class="product-list__item">
                                <img src="'.$value['image'].'" class="product-list__picture" alt="">
                                <div class="product-list__title">'.$value['product_name'].'</div>
                                <div class="product-list__description">'.$value['description'].'</div>
                                <div class="product-list__price">'.$value['price'].' din.</div>
                            </div>';
    }
}
else {
    echo '<p class="products-error"> Products not found </p>';
}*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

?>







