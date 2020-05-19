
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
            <form method="post" action="#" id="search_form">
                <p>
                    <input class="search" type="text" name="search_field" placeholder="Adja meg a kulcsszavat....." />
                    <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
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
            <?php  require_once 'db.php';

            $j=count($id);
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
    <div id="footer">
        <p><a href="index.php">Kezdőoldal</a> | <a href="akciok.php">Akciók</a> | <a href="news.php">Újdonságok</a> | <a href="order.php">Megrendelés</a> | <a href="contact.php">Kontakt</a></p>
        <p>Copyright &copy; éden </p>
    </div>
</div>
</body>

</html>
