<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php


define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');

define('DATABASE', 'eden');
// Create connection
$conn = new mysqli(HOST, USER,PASS, DATABASE);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT product_id, product_name,product_type, description, price, image  FROM product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
    while ($row = $result->fetch_assoc()) {

        echo '<div class="product-list__item">
                                <img src="'.$row['image'] . '" class="product-list__picture" alt="">
                                <div class="product-list__title">' . $row['product_name'] . '</div>
                                <div class="product-list__description">' . $row['description'] . '</div>
                                <div class="product-list__price">' . $row['price'] . ' din.</div>
                            </div>';
}
}

?>
</body>
</html>