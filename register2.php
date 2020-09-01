<?php

include("db_config.php");

if (isset($_POST['username'])&& isset($_POST['password_1'])&& isset($_POST['password_2'])&&
    isset($_POST['first_name'])&& isset($_POST['last_name']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['city']))
{

    $username =$_POST['username'];
    $password_1 =$_POST['password_1'];
    $password_2 =$_POST['password_2'];
    $first_name =$_POST['first_name'];
    $last_name =$_POST['last_name'];
    $email =$_POST['email'];
    $address =$_POST['address'];
    $city =$_POST['city'];



  $sql_u="SELECT member_id FROM member where username='$username'";
    $res_u=mysqli_query($conn,$sql_u) or die (mysqli_error($conn));

    if(mysqli_num_rows($res_u)>0)
    {
        $name_error="true";
    }
    else {
        $sql = "INSERT INTO member (username,password,first_name,last_name,email, address,city) VALUES
('$username','$password','$first_name','$last_name','$email','$address','$city')";


        $myData = mysqli_query($conn, $sql);

        if ($myData) {
            echo("Sikeres regisztráció");

        } else {
            echo("Sikertelen regisztráció");


        }
    }
}
else{
    echo"What the fuck";}
?>