
<?php
include ('C:\xampp\htdocs\eden2\db_config.php');
include ('C:\xampp\htdocs\eden2\log\log.php');

$sql = "SELECT member_id,active,username FROM member WHERE active='1'  limit 1";
$res= $conn->query($sql);
if($res->num_rows==1){


    $sql3 = "UPDATE member SET active='0' ";
    var_dump($sql3);
    $myData1 = mysqli_query($conn, $sql3);
    ?>

    <script type="text/javascript">
        window.location.href = "/eden2/index.php";
    </script>

    <?php
}
?>