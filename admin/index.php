<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/eden2/style/style.css" />
    <link rel="stylesheet" type="text/css" href="/eden2/style/style2.css">

    <meta name="description" content="">
    <meta name="author" content="">
    <title> </title>
<style>
form{
    padding-left: 10%;

}
    .first label,input{
        height:20px;

        font-size: larger;
        margin-top: 10px;
    }
    #second label,input{
        height:20px;
        font-size: larger;
        margin-top: 10px;
    }
    h4{
        color: #ac3939;
        font-size: large;
        font-weight: bold;
    }
</style>
</head>
<body>



<div id="main" style="width:90%; height:100%;">
    <div id="header" style="width:90%;">
        <div id="logo">
            <div id="logo_text" >
                <!-- class="logo_colour", allows you to change the colour of the text -->
                <h1><a href="index.php"><span class="logo_colour">Éden</span></a></h1>
                <h2>Online mag és virágüzlet</h2>
            </div>
            <div id="login">
                <a href="logout.php">Kijelentkezés</a>
            </div>
        </div>
        <div id="menubar" style="width:100%;">
            <ul id="menu" style="padding-right: 8%;font-weight: bold;">
                <li><a href="index.php">Főoldal</a></li>
                <li><a href="picture.php">Kép módosítás</a></li>
            </ul>
        </div>
    </div>


<div id="content" style="width:90%;height:100%;background-color: white; margin-left:
        auto;margin-right: auto; padding-top:2%;">
    <table border="1px solid black" style="margin:auto;">
        <?php
        include('C:\xampp\htdocs\eden2\db_config.php');
        $query2=mysqli_query($conn,"SELECT * FROM product");
        if(mysqli_num_rows($query2)!=0) {
            echo "<tr style='background-color: #97a392'>";
            echo"<td style='text-align: center;'>"."Id"."</td>";
            echo"<td style='width:100px; text-align: center;'>"."Név"."</td>";
            echo"<td style='text-align: center;' >"."Kategória"."</td>";
            echo"<td style='text-align: center;'>"."Ár"."</td>";
            echo"<td style='text-align: center;'>"."Leirás"."</td>";
            echo"<td style='width:20px'>"."Raktáron"."</td>";
            echo"<td style='text-align: center;'>"."Új"."</td>";
            echo"<td style='text-align: center;'>"."Olcsó"."</td>";
            echo "<td colspan='2' style='width: 200px;'>"."</td>";
            echo "</tr>";
            foreach($query2 as $row){


                echo "<tr>";
                echo"<td>".$row['product_id']."</td>";
                echo "<td style='width:100px;'>".$row['product_name']."</td>";
                echo"<td >".$row['product_type']."</td>";
                echo "<td>".$row['price']." din</td>";
                echo "<td style='width:300px;  text-align: justify;'>".$row['description']."</td>";
                echo "<td style='text-align: center;'>".$row['stock']."</td>";
                echo "<td>".$row['new']."</td>";
                echo "<td style='text-align: center;'>".$row['cheaper']."</td>";
                echo "<td><form action='delete.php' method='POST'><input type='hidden' name='delete' value='".$row['product_id']."'><input type='submit' value='DELETE' style='width:70px; height: 25px;'></form></td>";
                echo "<td><form action='index.php' method='POST'><input type='hidden'  name='update' value='".$row['product_id']."'><input type='submit' value='UPDATE' style='width:70px; height: 25px;'></form></td></tr>";
            }
        }
        ?>
    </table>
    <br>
    <br>

    <?php if(isset($_POST['update']))
    {
        $sql = "SELECT * FROM product WHERE product_id= ".$_POST['update'];
        $myData = mysqli_query($conn, $sql);
        if($myData)
        {
            foreach($myData as $row)
            {
                echo"<h4 style=' padding-left: 10%; padding-top: 3%;'>A kiválasztott elem módosítása</h4>";
                echo "<form action='updateset.php' method='post' id='second'>";
                echo "<label>Id: </label><input type='number' name='product_id' value='".$row['product_id']."'>"."<br>";
                echo "<label>Név: </label><input type='text' name='product_name' value='".$row['product_name']."'>"."<br>";
                echo "<label>Kategória: </label><input type='text' name='product_type' value='".$row['product_type']."'>"."<br>";
                echo "<label>Ár: </label><input type='number' name='price' value='".$row['price']."'>"."<br>";
                echo "<label>Leírás: </label><input type='text' name='description' value='".$row['description']."'>"."<br>";
                echo "<label>Raktáron: </label><input type='number' name='stock' value='".$row['stock']."'>"."<br>";
                echo "<label>Új: </label><input type='number' name='new' value='".$row['new']."'>"."<br>";
                echo "<label>Olcsó: </label><input type='number' name='cheaper' value='".$row['cheaper']."'>"."<br>";
                echo "<input type='submit' value='Mentés' style='width:70px; height: 25px;'>";
                echo "<input type='hidden' value='".$row['product_id']."' name='modosit'>";
                echo "</form>";
            }
        }
    }?>

    <form action="insert.php" method="post" style="padding-left:10%; padding-top: 5%; padding-bottom: 5%"  class="first">
        <h4>Új elem hozzáadása</h4>
        <label>Id: </label><input type="number" name="product_id"><br>
        <label>Neve: </label><input type="text" name="product_name"><br>
        <label>Kategória: </label><input type="text" name="product_type"><br>
        <label>Ár: </label><input  type="number" name="price"><br>
        <label>Leírás: </label><input  type="text" name="description"><br>
        <label>Raktáron: </label><input type="number" name="stock"><br>
        <label>Új: </label><input  type="number" name="new"><br>
        <label>Olcsó: </label><input  type="number" name="cheaper"><br>

        <input type="submit"  value="Küldés" style="width:70px; height: 25px;" >

    </form>

</div>


</div>

</body>

</html>
