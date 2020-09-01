<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="product_style.css">;


    <style>
        @media (max-width: 390px) {
            body {
                width: 390px;
                margin: 0px;
                padding: 0px;

            }

            main {
                width: 400px;

            }

            #main, #logo, #menubar, #site_content, #footer {
                margin-left: auto;
                margin-right: auto;
            }


            #logo {
                float: left;
                width: 390px;
            }

            #logo_text {
                padding-top: unset;
                font-size: 8px;
                padding-left: 15px;
            }

            #login {
                float: right;
                padding-top: 40px;
                padding-right: 50px;

            }

            #login a {

                width: 70px;
                font-size: 8px;
            }

            #header {
                width: 390px;
                overflow: hidden;
                margin: 25px auto 0 auto;
            }

            #menubar {
                width: 390px;
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

            #site_content {
                width: 390px;
            }

            #content {
                font-size: 8px;
                width: 330px;
                float: none;
            }

            .sidebar {
                font-size: 10px;
                width: 330px;
                float: none;
            }

            #searchBar {
                width: 80px;
                height: 22px;
            }

            #searchBtn {
                width: 40px;
                height: 22px;
            }

            #footer {
                width: 390px;
                height: 80px;
            }

            a#footer {

                font-size: 6px;
                padding-bottom: 3px;
                float: none;
                margin-left: unset;

            }
            .container{
                width: 300px;
            }
            .row{
                padding: unset;

                width:300px;
                align-items: flex-start;
            }


            .row h2{
                text-align: justify;
            }
            .back_products {
                padding-left:35px;
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
                <h1><a href="/eden2/index.php"><span class="logo_colour">Éden</span></a></h1>
                <h2>Online mag és virágüzlet</h2>
            </div>
            <div id="login">
                <a href="/eden2/register.php" >Regisztráció</a>
                <a href="/eden2/login.php" >Bejelentkezés</a>
            </div>
        </div>
        <div id="menubar">
            <ul id="menu">
                <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                <li><a href="/eden2/index.php">Kezdőoldal</a></li>
                <li><a href="/eden2/akciok.php">Akciók</a></li>
                <li><a href="/eden2/news.php">Újdonságok</a></li>
                <li><a href="/eden2/contact.php">Kontakt</a></li>
            </ul>
        </div>
    </div>
    <div id="site_content">
        <div class="sidebar">
            <h1>Keresés</h1>
            <form  action="/eden2/search.php" method="post" id="search_form">
                <p>
                    <input type="submit" id="searchBtn"  value=">>"  />
                    <input id="searchBar" type="text" name="search" placeholder="Keresés" maxlength="25"/>

                </p>
            </form>
            <h1>Kategóriák</h1>
            <ul>
                <li><a href="/eden2/viragmagok.php">Virágmagok</a></li>
                <li><a href="/eden2/vetomagok.php">Vetőmagok</a></li>
                <li><a href="/eden2/kaktuszok.php">Kaktuszok</a></li>
                <li><a href="/eden2/fak.php">Fák</a></li>
            </ul>



        </div>

        <div id="content">
            <div class="container mt-5">
                <div class="row">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <?php
                        include ('C:\xampp\htdocs\eden2\db_config.php');
                        $sql = "SELECT product_name,product_type, description, stock,price, image,cheaper 
                FROM product
                WHERE product_name='Minidor zöldbab';";
                        $result = $conn->query($sql);
                        $row = $result->fetch_assoc();
                        echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'" class="d-block w-100" alt="Kép megjelenítési probléma" style="margin-top:3%; height:430px" />';

                        echo " </div>";
                        echo " <div class='col-md-4' style='margin-left:5% ;'>";

                        echo" <div class='row'>";
                        echo"<h2>". $row['product_name']."</h2>";
                        echo "</div>";

                        echo" <div class='row'>";
                        echo"<h2>". $row['product_type']."</h2>";
                        echo "</div>";

                        echo" <div class='row'>";
                        if($row['cheaper']==0)
                        {
                            echo"<h1><i class='fa fa-inr' aria-hidden='true'>".  $row['price']." din"."</i></h1>";
                            echo"<br>";
                            echo"<br>";
                        }
                        else
                        {
                            echo  "<h3><del>".  $row['price']." din"."</del></h3>";
                            echo"<br>";
                            echo"<br>";
                            echo "<h2 class='text-success'>   30% kedvezmény</h2>";
                        }
                        echo "</div>";

                        echo" <div class='row'>";
                        echo "<p class='text-justify'>". $row['description']."</p>";
                        echo "</div>";

                        echo "</div>";

                        ?>

                    </div>
                    <div class="back_products">
                        <button type="button" class="btn btn-success"><a href="/eden2/vetomagok.php">Vissza</a></button>
                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <p><a href="/eden2/index.php">Kezdőoldal</a> | <a href="/eden2/akciok.php">Akciók</a> |
                <a href="/eden2/news.php">Újdonságok</a> | <a href="contact.php">Kontakt</a></p>
            <p>Copyright &copy; éden </p>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>