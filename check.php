<?php
include ('db_config.php');
if(isset($_POST["user_name1"]))
{
$sql="Select * from member where username= '".$_POST["user_name1"]."'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
    echo '<span class="text-danger" style="color: red;">Felhasznaló név foglalt</span>';
}
else
{
    echo '<span class="text-succesr" style="color: darkgreen;">Felhasznaló név szabad</span>';
}
}


?>