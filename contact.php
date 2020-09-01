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
            padding-left: 170px;

        }
        #login a{

            width:55px;
            font-size:8px;

        }
        #header
        {
            width: 390px;
            mag
            overflow: hidden;
            margin: 25px auto 0 auto;
        }

        #menubar
        { width: 390px;
            height: 50px;
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

            font-size: 8px;
            padding-bottom: 3px;
            float: none;
            margin-left:unset;

        }
        .contentcont{

            width:160px;
            margin: 0 50% 0 0;
            padding-left:25px ;
            float:left;
            font-size: 8px;


        }
        .contentcont img{
           width:40px;
            height:40px;



        }
        .contentcont span{
            font-size: 10px;
            width:160px;
            margin:  0 50% 0 0;
            padding: 0 0 0 0;
            float:left;
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
                <a href="register.php" >Regisztráció</a>
                <a href="login.php" >Bejelentkezés</a>
            </div>
        </div>
        <div id="menubar">
            <ul id="menu">
                <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                <li class="selected"><a href="index.php">Kezdőoldal</a></li>
                <li><a href="akciok.php">Akciók</a></li>
                <li><a href="news.php">Újdonságok</a></li>
                <li><a href="contact.php">Kontakt</a></li>
            </ul>
        </div>
    </div>
    <div id="site_content">
        <div class="sidebar">
            <h1>Keresés</h1>
            <form  action="search.php" method="post" id="search_form">
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
            <h1>Elérhetőségeink</h1>
            <div class="contentcont">
            <img src="style/67872.png" alt="Lokació" width="100px" height="100px">
            <span>Szabadka<br>24000<br>Zentai út 20</span>
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
            <div class="contentcont">
                <img src="style/open1.png" alt="open" width="100px" height="100px">

                <span><br>Hetköznapokon: 8:00-16:00</span></div>
            <div class="contentcont">
                <img src="style/delivery.png" alt="open" width="100px" height="100px">
                <span>Szállítasi idő: 2-3 nap<br> Szállítási díj: 250din</span></div>

        </div>
    </div>
    <div id="footer">
        <p><a href="index.php">Kezdőoldal</a> | <a href="akciok.php">Akciók</a> |
            <a href="news.php">Újdonságok</a>| <a href="contact.php">Kontakt</a></p>
        <p>Copyright &copy; éden </p>
    </div>
</div>
</body>

</html>
