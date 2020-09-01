<?php

$db=@mysqli_connect("localhost","root","","eden");

$username = "";
$password_1 = "";
$password_2 = "";
$first_name = "";
$last_name = "";
$city="";
$address="";
if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password_1 = $_POST['password_1'];
    $password_2 = $_POST['password_2'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $address = $_POST['address'];


  $sql_u = "SELECT member_id FROM member where username='$username'";
    $res_u = mysqli_query($db, $sql_u);

   /* if (mysqli_num_rows($res_u) > 0) {
        $row = mysqli_fetch_assoc($res_u);
        if ($username==$row['username'])
        {
            $username="Username already exists";
        }
        $username_error = "";
        //header("Location:register.php");
    }

    else*/
    if(mysqli_num_rows($res_u) <= 0) {
        $password=md5($password_1);
        //$password = md5($password_1);
        $query = "INSERT INTO member (username,password,first_name,last_name,email,city,address)
        VALUES ('$username','$password','$first_name','$last_name','$email','$city','$address')";
        $result = mysqli_query($db, $query) or die($query);
        ?>
        <script type="text/javascript">
            alert("Sikeres regisztráció");
            window.location.href = "register.php";
        </script>
  <?php

    }
}
    ?>
