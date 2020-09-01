<?php
include ('C:\xampp\htdocs\eden2\db_config.php');
$sql = "SELECT member_id,active,username FROM member WHERE username='admin'";
$res= $conn->query($sql);
if ($res->num_rows > 0) {
    if ($row = $res->fetch_assoc()) {
        if ($row['username'] == "admin") {
            $sql1 = "UPDATE member SET active='0' where username='admin'";
            var_dump($sql1);
            $myData = mysqli_query($conn, $sql1);
            ?>
            <script type="text/javascript">
                window.location.href = "/eden2/index.php";
            </script>
<?php
        }
    }
}

?>