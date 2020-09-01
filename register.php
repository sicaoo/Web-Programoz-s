<?php
include "process.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
        .error {
            color: #ff3262;
        }
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

                font-size: 6px;
                padding-bottom: 3px;
                float: none;
                margin-left:unset;


            }
        .container,.main_registration{
            height: 700px;
            width:390px;
            align-items: unset;
            float:left;
            margin-left:unset;


        }
        .registration{
            width:290px;
            align-items: unset;
            float:left;

        }
        .registration input,label
        {
            margin-left:50px;
            font-size:12px;
            width:160px;
            float: left;
        }
        .container p{
            font-size: 11px;
        }
        .container signin p{
            width:290px;
            float: left;
            margin-left:30px;
        }
        .reg{
            margin-left:80px;
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
                <li><a href="index.php">Kezdőoldal</a></li>
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
            <form action="process.php" method="post" onsubmit="return Validate()" name="vform">

                <div class="container">

                    <h1 style="color: #000000; margin-left: 35%;">Regisztráció</h1>
                    <p>Töltse ki az adott mezőket, hogy regisztrálni tudjon. </p>
                    <hr>
                    <div class="main_registration">
                    <div class="registration">
                        <!-- username input -->
                        <label for="username"><b>Felhasználó név</b></label><br>
                        <input type="text" id="username" placeholder="Irja be a felhasználó nevét" required="required"
                               name="username" onblur="myFunction(this)" onfocus="turntogrey(this)">
                         <span id="availability"></span>
                        <span id="username_error"  class="error"></span><br><br>



                        <!-- password input -->
                             <label for="password_1"><b>Jelszó</b></label><br>
                        <span id="8_char" style="display: none; color:red;">Minimum 8 karakter</span>
                            <input type="password" id="password_1" placeholder="Irja be a jelszavát"
                                   name="password_1"  value="<?php echo $password_1; ?>" onblur="myFunction(this)" onfocus="turntogrey(this)"
                                   onclick="min_value(this)" onfocusout="go_back(this)" required="required">
                                   <span id="password_1_error" class="error"></span><br><br>
                        <!-- password confirm input -->
                            <label for="password_2"><b>Jelszó megerősítése</b></label><br>
                            <input type="password" id="password_2" placeholder="Irja be a jelszavát" required="required"
                                   name="password_2" value="<?php echo $password_2; ?>" onblur="myFunction(this)" onfocus="turntogrey(this)">
                                   <span id="password_2_error" class="error"></span><br><br>
                        <!-- lastname input -->
                            <label for="last_name"><b>Veztéknév</b></label><br>
                            <input type="text" id="last_name" placeholder="Irja be a  vezetéknevét" required="required"
                                   name="last_name" onblur="myFunction(this)" onfocus="turntogrey(this)">
                                    <span id="last_name_error" class="error"></span><br><br>
                        <!-- firstname input -->
                            <label for="first_name"><b>Keresztnév</b></label><br>
                            <input type="text" id="first_name" placeholder="Irja be a keresztnevét" required="required"
                                   name="first_name" onblur="myFunction(this)" onfocus="turntogrey(this)">
                                   <span id="first_name_error" class="error"></span><br><br>
                        <!-- email input -->
                            <label for="email"><b>Email</b></label><br>
                            <input type="text" id="email" placeholder="Irja be az email-jét" required="required"
                                   name="email" onblur="myFunction(this)" onfocus="turntogrey(this)">
                                   <span id="email_error" class="error"></span><br><br>
                        <!-- city input -->
                            <label for="city"><b>Város</b></label><br>
                            <input type="text" id="city" placeholder="Irja be a város nevét " required="required"
                                   name="city" onblur="myFunction(this)" onfocus="turntogrey(this)">
                                   <span id="city_error" class="error"></span><br><br>
                        <!-- address input -->
                            <label for="address"><b>Utca</b></label><br>
                            <input type="text" id="address" placeholder="Irja be az utca nevét és házszámot" required="required"
                                   name="address" onblur="myFunction(this)" onfocus="turntogrey(this)" >
                                    <span id="address_error" class="error"></span><br><br>

                        <input type="submit"  name="register" value="Regisztráció" class="reg" >
                        <div class="container signin" style="padding-top: 10px;">
                            <p>Van már fiokód? <a href="login.php" style="color:brown;">Jelentkezz be</a>.</p>
                        </div>
                    </div>
                    </div>
                </div>

            </form>
        </div>
        </div>

    <div id="footer">
        <p><a href="index.php">Kezdőoldal</a> | <a href="akciok.php">Akciók</a> |
            <a href="news.php">Újdonságok</a> |  <a href="contact.php">Kontakt</a></p>
        <p>Copyright &copy; éden </p>
    </div>
</div>

</body>

</html>
<script type="text/javascript">
    /* functions's definitons*/
    function myFunction(x) {
        x.style.background = "white";
    };

    function turntogrey(y) {
        y.style.background = "grey";
    };
    function min_value(c) {
        document.getElementById("8_char").style.display = "flex";
        document.getElementById("8_char").style.marginLeft="200px";
        document.getElementById("8_char").style.paddingTop="20px";

    };
    function go_back(d) {
        document.getElementById("8_char").style.display = "none";
    }
    </script>
<script>
   $(document).ready(function () {
       $('#username').blur(function () {
        var username=$(this).val();
        $.ajax({
            url:"check.php",
            method:"POST",
            data:{user_name1:username},
            dataType:"text",
            success:function(html)
            {
                $('#availability').html(html);
            }
        });
       });

   });
</script>
<script type="text/javascript" src="checking.js"></script>