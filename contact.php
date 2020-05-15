<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <link rel="stylesheet" type="text/css" href="style/style2.css">

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
                <li class="selected"><a href="index.php">Kezdőoldal</a></li>
                <li><a href="akciok.php">Akciók</a></li>
                <li><a href="news.php">Újdonságok</a></li>
                <li><a href="order">Megrendelés</a></li>
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
                <li><a href="#">Vetőmagok</a></li>
                <li><a href="#">Kaktuszok</a></li>
                <li><a href="#">Fák</a></li>
            </ul>
            <h1>Latest News</h1>
            <h4>New Website Launched</h4>
            <h5>January 1st, 2010</h5>
            <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>


        </div>
        <div id="content">
            <h1>Elérhetőségeink</h1>
            <div class="contentcont">
            <img src="style/67872.png" alt="Lokació" width="100px" height="100px">
            <span>Szabadka<br>21000<br>Zentai út 20</span>
            </div>
            <br>
            <br>
            <br>
            <div class="contentcont">
            <img src="style/phone.png" alt="phone icon" width="100px" height="100px">
            <span>Vezetékes: 021-855-555<br>Mobil: 0617778877</span></div>
            <br><br>
            <br>
            <br>
            <div class="contentcont">
            <img src="style/8807.png" alt="email" width="100px" height="100px">
                <span><br>eden@gmail.com</span></div>

        </div>
    </div>
    <div id="footer">
        <p><a href="index.php">Kezdőoldal</a> | <a href="akciok.html">Akciók</a> | <a href="news.php">Újdonságok</a> | <a href="order.php">Megrendelés</a> | <a href="contact.php">Kontakt</a></p>
        <p>Copyright &copy; éden </p>
    </div>
</div>
</body>

</html>
