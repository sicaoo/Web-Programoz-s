<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="checking.js"></script>
    <style>
        label{
            color: #126841;
            font-style: italic;
        }
        label {
            display: inline-block;

        }


        .error {
            color: #3295ff;
        }
    </style>
    <script>
        function myFunction(x) {
            x.style.background = "white";
        };

        function turnToYellow(x) {
            x.style.background = "grey";
        };

    </script>
    <link rel="stylesheet" type="text/css" href="style/style.css" />

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
            <form id="urlap">
                <fieldset>
                    <legend>Személyes adatok</legend>
                    <label for="first_name">Keresztnév: </label><input type="text" id="first_name" name="first_name"  onchange="myFunction(this)" onfocus="turnToYellow(this)" >*<span id="first_name_error" class="error"></span><br><br>
                    <label for="last_name">Vezetéknév: </label><input type="text" id="last_name" name="last_name"  onchange="myFunction(this)" onfocus="turnToYellow(this)">*<span id="last_name_error" class="error"></span><br><br>
                    <label for="address">Lakcím: </label><input type="text" id="address" name="address"  onchange="myFunction(this)" onfocus="turnToYellow(this)">*<span id="address_error" class="error" ></span><br><br>
                    <label for="email">E-mail cím: </label><input type="email" id="email" name="email" onchange="myFunction(this)" onfocus="turnToYellow(this)">*<span id="email_error" class="error"  ></span><br><br>
                    <label for="telephone">Telefon: </label><input type="text" id="telephone" name="telephone"  onchange="myFunction(this)" onfocus="turnToYellow(this)">*<span id="telephone_error" class="error"></span><br><br>

                    <input type="submit" name="sg" value="Küld">
                    <input type="reset" name="rg" value="Mégse">
                </fieldset>

                <br><br>

                <fieldset>
                    <legend>Komment</legend>
                    <textarea name="comment" id="comment" rows="10" cols="50"></textarea>
                    <br>
                    <input type="submit" name="sg" value="Küld">
                    <input type="reset" name="rg" value="Mégse">
                </fieldset>
            </form>
        </div>
    </div>
    <div id="footer">
        <p><a href="index.php">Kezdőoldal</a> | <a href="akciok.html">Akciók</a> | <a href="news.php">Újdonságok</a> | <a href="order.php">Megrendelés</a> | <a href="contact.php">Kontakt</a></p>
        <p>Copyright &copy; éden </p>
    </div>
</div>
</body>

</html>
