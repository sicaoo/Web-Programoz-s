<?php
session_start();
include ('C:\xampp\htdocs\eden2\db_config.php');


if($_SERVER['REQUEST_METHOD'] == "POST")
{

    //Username and Password sent from Form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

   // $password = md5($password);
    $sql = "SELECT member_id,active,username FROM member WHERE username='".$username."'  limit 1";
    $res= $conn->query($sql);
    //If result match $username and $password Table row must be 1 row

    if($res->num_rows==1){

            // output data of each row
            if ($row = $res->fetch_assoc()) {
                if($row['username']=="admin") {
                    $sql1 = "UPDATE member SET active='1' where username='admin'";
                    var_dump($sql1);
                    $myData = mysqli_query($conn, $sql1);
                    ?>
                    <script type="text/javascript">
                    window.location.href = "/eden2/admin/index.php";
                     </script>
               <?php
                }

        }
        $sql3 = "UPDATE member SET active='1' where username='".$username."'";
        var_dump($sql3);
        $myData1 = mysqli_query($conn, $sql3);
        ?>

        <script type="text/javascript">
            window.location.href = "/eden2/costumer/index.php";
        </script>

        <?php
    }
    else{
        ?>
        <script type="text/javascript">
            alert("Sikertelen bejelentkezés");
            window.location.href = "/eden2/login.php";
        </script>
        <?php
    }



}


?>