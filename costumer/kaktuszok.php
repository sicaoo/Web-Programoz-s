

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/eden2/style/style.css" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title> </title>
    <style>
    @media (max-width: 390px) {
    body {
    width:390px;
    margin:0px;
    padding:0px;

    }
    main{
    width:400px;

    }

    #main, #logo, #menubar, #site_content, #footer
    {
    margin-left: auto;
    margin-right: auto;
    }



    #logo {
    float:left;
    width: 390px;

    }
    #logo_text{
    padding-top: unset;
    font-size: 8px;
    padding-left: 15px;
    }
    #login{

    float:left;
    padding-top: 40px;
    padding-left: 250px;

    }
    #login a{

    width:55px;
    font-size:8px;

    }
    #header
    {
    width: 390px;
    height: 300px;
    overflow: hidden;
    margin: 25px auto 0 auto;
    }

    #menubar
    { width: 390px;
    height: 100px;
    margin-top: 200px;
    padding-top: 4px;
    padding-left: 4px;
    background-color: rgba(128, 128, 128, 0.85);
    font-weight: bolder;
    }
    ul#menu {
    font-size: 8px;
    padding-bottom: 3px;
    float: none;
    width: 100%;
    }
    #site_content{
    width:330px;
    }
    #content{
    font-size: 8px;
    width:330px;
    float: none;
    }
    .sidebar{
    font-size: 10px;
    width:330px;
    float:none;
    }
    #searchBar{
    width:80px;
    height:10px;
    }
    #searchBtn{
    width:40px;
    height:22px;
    }
    #footer{
    width:390px;
    height:80px;
    }
    a#footer {

    font-size: 6px;
    padding-bottom: 3px;
    float: none;
    margin-left:unset;

    }
    .a{
    font-size:11px;
    width:139px;

    }
    .b img
    {
        width:157px;
    height:300px;
    }

    .pay_button button{
    margin-left: -20px;
    }
    .rounded-circle{
    width:50px;
    height:30px;
    padding-top: 18px;
    }

    }
    </style>
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
            <div id="login">
                <a href="logout.php" >Kijelentkezés</a>
            </div>
        </div>
        <div id="menubar">
            <ul id="menu">
                <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                <li><a href="index.php">Kezdőoldal</a></li>
                <li><a href="akciok.php">Akciók</a></li>
                <li><a href="news.php">Újdonságok</a></li>
                <li><a href="order.php">Megrendelés</a></li>
                <li><a href="contact.php">Kontakt</a></li>
            </ul>
        </div>
    </div>
    <div id="site_content">
        <div class="sidebar">
            <h1>Keresés</h1>
            <form  action="/eden2/costumer/search.php" method="post" id="search_form">
                <p>
                    <input type="submit" id="searchBtn"  value=">>"  />
                    <input id="searchBar" type="text" name="search" placeholder="Keresés" maxlength="25"/>

                </p>
            </form>
            <h1>Kategóriák</h1>
            <ul>
                <li><a href="viragmagok.php">Virágmagok</a></li>
                <li><a href="vetomagok.php">Vetőmagok</a></li>
                <li><a href="kaktuszok.php">Kaktuszok</a></li>
                <li><a href="fak.php">Fák</a></li>
            </ul>



        </div>
        <div id="content">


            <h1 style="text-align: center;padding-bottom: 50px; text-decoration: underline;font-weight: bold;">
                Kaktuszok</h1>
            <?php  include ('C:\xampp\htdocs\eden2\db_config.php');

            echo"<div id=\"kaktuszok\">";
            $sql = "SELECT product_id,product_name,product_type, description, stock,price, image,cheaper,new
                FROM product
                WHERE product_type='Kaktusz';";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo"<div class=p_contain>";
                    echo "<div class=b>";
                    echo "<div class=b>";
                    if($row['cheaper']==1){
                        echo "<div class=rounded-circle>";
                        echo"Akción";
                        echo" </div>";
                    }
                    elseif($row['new']==1){
                        echo "<div class=rounded-circle style='background-color:#ff5900;color:black;'>";
                        echo "Új árú";
                        echo" </div>";
                    }
                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"  alt="kép megjelenítési probléma" />';
                    echo "</div>";?>
                        <form method="post" action="order.php?action=add&id=<?php echo $row["product_id"]; ?>">
                   <?php
                    echo "<div class=a>";
                    echo" <b>Neve: </b>" . $row["product_name"]. "<br>";
                    echo "<b>Tipus: </b>".$row["product_type"]. "<br>";
                    echo "<b>Raktáron: </b>".$row["stock"]." darab". "<br>";
                    echo"<b>Ára: </b>".$row["price"]." din"."<br> ";
                    echo"<input type='hidden' name='hidden_name' value='".$row["product_name"]."'>";
                    echo"<input type='hidden' name='hidden_price' value='".$row["price"]."'>";
                    echo "</div>";
                    echo "</div>";

                    echo "<div class=pay_button>";
                    $name= $row['product_name'];
                    $php_dot='.php';
                    echo"<button type=text><a href='/eden2/c_products/kaktuszok/".$name.$php_dot."'>Tovább</a></button>";
                    echo"<br>";
                    echo"<button type='submit' name='add' class='btn btn-success' style='background-color: orange; border-color:orange; color:black;'>Kosárba</button>";
                    echo"</div>";
                    echo"</form>";
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }

            echo "</div>";
            ?>
        </div>
    </div>
    <div id="footer">
        <p><a href="/eden2/costumer/index.php">Kezdőoldal</a> | <a href="/eden2/costumer/akciok.php">Akciók</a> | <a href="/eden2/costumer/news.php">Újdonságok</a> | <a href="/eden2/costumer/order.php">Megrendelés</a> | <a href="/eden2/costumer/contact.php">Kontakt</a></p>
        <p>Copyright &copy; éden </p>
    </div>
</div>
</body>

</html>
