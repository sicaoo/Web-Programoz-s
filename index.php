
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/style.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <meta name="description" content="">
    <meta name="author" content="">
    <title> </title>

</head>
<body>



<div id="main">
    <div id="header">
        <div id="logo">
            <div id="logo_text">
                <!-- class="logo_colour", allows you to change the colour of the text -->
                <h1><a href="index.php"><span class="logo_colour">Éden</span></a></h1>
                <h2>Online mag és virágüzlet</h2>
            </div>
        </div>
        <div id="menubar">
            <ul id="menu">
                <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                <li><a href="index.php">Kezdőoldal</a></li>
                <li><a href="akciok.html">Akciók</a></li>
                <li><a href="news.php">Újdonságok</a></li>
                <li><a href="order.php">Megrendelés</a></li>
                <li><a href="contact.php">Kontakt</a></li>
            </ul>
        </div>
    </div>
    <div id="site_content">
        <div class="sidebar">
            <h1>Keresés</h1>
            <form method="post" action="#" id="search_form">
                <p>
                    <input class="search" type="text" name="search_field" placeholder="Adja meg a kulcsszavat....." />
                    <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
                </p>
            </form>
            <h1>Kategóriák</h1>
            <ul>
                <li><a href="#viragmagok">Virágmagok</a></li>
                <li><a href="#vetomagok">Vetőmagok</a></li>
                <li><a href="#kaktuszok">Kaktuszok</a></li>
                <li><a href="#fak">Fák</a></li>
            </ul>



        </div>
        <div id="content">
		<style>
		.a{
		border:1px solid #808080;
		padding:10px;
		float:center;
		text-align:center;
		line-height:150%;
		

		}
		.b{
			background-color:#90ee90;
			border:1px solid #808080;
			margin 5px;
		}
		.b img {
		
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 50%;
		}
		img:hover {
		box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
		}

		</style>
        <?php
		 header('Content-Type: text/html; charset=utf-8');

	
	echo"<div id=\"viragmagok\">";
$connect=mysql_connect("localhost","root","") or die ("Couldn't connect");
$query89=mysql_query("SET NAMES 'UTF8'");
$query98=mysql_query("SET CHARACTER SET UTF8");
mysql_select_db("eden") or die ("Couldn't find db");


$id = array();
$resultid = mysql_query("SELECT product_id FROM product");
while ($row = mysql_fetch_assoc($resultid)) {
   $id = array_merge($id, array_map('trim', explode(",", $row['product_id']))); //ID to array
}
$name = array();
$resultname = mysql_query("SELECT product_name FROM product");
while ($row = mysql_fetch_assoc($resultname)) {
   $name= array_merge($name, array_map('trim', explode(",", $row['product_name']))); // name to array
}
$description = array();
$resultdescription = mysql_query("SELECT description FROM product");
while ($row = mysql_fetch_assoc($resultdescription)) {
   $description= array_merge($description, array_map('trim', explode(",", $row['description']))); //descriptionto array
}
$price = array();
$resultprice = mysql_query("SELECT price FROM product");
while ($row = mysql_fetch_assoc($resultprice)) {
   $price= array_merge($price, array_map('trim', explode(",", $row['price']))); //price to array
}
$discount = array();
$resultdiscount = mysql_query("SELECT discount FROM product");
while ($row = mysql_fetch_assoc($resultdiscount)) {
   $discount= array_merge($discount, array_map('trim', explode(",", $row['discount']))); //discount to array
}
$product_type = array();
$resultpt = mysql_query("SELECT product_type FROM product");
while ($row = mysql_fetch_assoc($resultpt)) {
   $product_type= array_merge($product_type, array_map('trim', explode(",", $row['product_type']))); // product type to array
}



		
$j=count($id);
for ($i=0; $i<$j ; $i++)
{	
	
	
		if ($product_type[$i]=='virágmag'){
		echo "<div class=\"b\">";
		$db = mysqli_connect("localhost","root","","eden"); 
		$sql = "SELECT id,file FROM images WHERE id=$i";
		$sth = $db->query($sql);
		$image=array();
		$result=mysqli_fetch_array($sth);
		echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['file'] ).'" />';
		echo "</div>";
		
		echo "<div class=\"a\">";
		echo "A termék kódja:".$id[$i]. "<br> ";
		echo "Neve:".$name[$i] . "<br>";
		echo "Leírás:".$description[$i]. "<br>";
		echo "Ára:".$price[$i]. "rsd  <br>";
		echo "Raktáron:".$discount[$i]. "<br>";
		echo "<br>";
		echo "</div>";
				
	}
}
echo "</div>"; 

echo"<div id=\"vetomagok\">";
for ($i=0; $i<$j ; $i++)
{	
	
	
		if ($product_type[$i]=='vetőmag'){
		echo "<div class=\"b\">";
		$db = mysqli_connect("localhost","root","","eden"); 
		$sql = "SELECT id,file FROM images WHERE id=$i";
		$sth = $db->query($sql);
		$image=array();
		$result=mysqli_fetch_array($sth);
		echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['file'] ).'" />';
		echo "</div>";
		
		echo "<div class=\"a\">";
		echo "A termék kódja:".$id[$i]. "<br> ";
		echo "Neve:".$name[$i] . "<br>";
		echo "Leírás:".$description[$i]. "<br>";
		echo "Ára:".$price[$i]. "rsd  <br>";
		echo "Raktáron:".$discount[$i]. "<br>";
		echo "<br>";
		echo "</div>";
				
	}
}
echo "</div>"; 

echo"<div id=\"kaktuszok\">";
for ($i=0; $i<$j ; $i++)
{	
	
	
		if ($product_type[$i]=='kaktusz'){
		echo "<div class=\"b\">";
		$db = mysqli_connect("localhost","root","","eden"); 
		$sql = "SELECT id,file FROM images WHERE id=$i";
		$sth = $db->query($sql);
		$image=array();
		$result=mysqli_fetch_array($sth);
		echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['file'] ).'" />';
		echo "</div>";
		
		echo "<div class=\"a\">";
		echo "A termék kódja:".$id[$i]. "<br> ";
		echo "Neve:".$name[$i] . "<br>";
		echo "Leírás:".$description[$i]. "<br>";
		echo "Ára:".$price[$i]. "rsd  <br>";
		echo "Raktáron:".$discount[$i]. "<br>";
		echo "<br>";
		echo "</div>";
				
	}
}
echo "</div>"; 
	echo"<div id=\"fak\">";	
	for ($i=0; $i<$j ; $i++)
{	
	
	
		if ($product_type[$i]=='fa'){
		echo "<div class=\"b\">";
		$db = mysqli_connect("localhost","root","","eden"); 
		$sql = "SELECT id,file FROM images WHERE id=$i";
		$sth = $db->query($sql);
		$image=array();
		$result=mysqli_fetch_array($sth);
		echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['file'] ).'" />';
		echo "</div>";
		
		echo "<div class=\"a\">";
		echo "A termék kódja:".$id[$i]. "<br> ";
		echo "Neve:".$name[$i] . "<br>";
		echo "Leírás:".$description[$i]. "<br>";
		echo "Ára:".$price[$i]. "rsd  <br>";
		echo "Raktáron:".$discount[$i]. "<br>";
		echo "<br>";
		echo "</div>";
				
	}
}
echo "</div>";
?>


		</div>
        </div>
    </div>
    <div id="footer">
        <p><a href="index.php">Kezdőoldal</a> | <a href="akciok.html">Akciók</a> | <a href="news.php">Újdonságok</a> | <a href="order.php">Megrendelés</a> | <a href="contact.php">Kontakt</a></p>
        <p>Copyright &copy; éden </p>
    </div>
</div>
</body>

</html>
