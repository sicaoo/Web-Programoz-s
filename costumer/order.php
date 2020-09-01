<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/eden2/style/style.css" />
    <link rel="stylesheet" type="text/css" href="/eden2/style/style3.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">
    <meta name="author" content="">
    <title> </title>
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

                float: left;
                padding-top: 40px;
                padding-left: 250px;

            }

            #login a {

                width: 55px;
                font-size: 8px;

            }

            #header {
                width: 390px;
                height: 300px;
                overflow: hidden;
                margin: 25px auto 0 auto;
            }

            #menubar {
                width: 390px;
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

            #site_content {
                width: 330px;
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
                height: 10px;
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
            #content h1{
                text-align: center;
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

<?php

$connect = mysqli_connect("localhost", "root", "", "eden");
if(isset($_POST["add"]))
{
    if(isset($_SESSION["cart"]))
    {
        $item_array_id = array_column($_SESSION["cart"], "product_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"]
            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script>window.location="order.php"</script>';
        }
        else
        {
            echo '<script>alert("Már hozzá lett adva")</script>';
            echo '<script>window.location="order.php"</script>';
        }
    }
    else
    {
        $item_array = array(
            'product_id' => $_GET["id"],
            'item_name' => $_POST["hidden_name"],
            'product_price' => $_POST["hidden_price"],

        );
        $_SESSION["cart"][0] = $item_array;
    }
}
if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["cart"] as $keys => $values)
        {
            if($values["product_id"] == $_GET["id"])
            {
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("El lett távolítva")</script>';
                echo '<script>window.location="order.php"</script>';
            }
        }
    }
}
?>

            <h1 style="text-align: center;padding-bottom: 50px; text-decoration: underline;font-weight: bold;">
                Megrendelés</h1>
<div class="table-responsive">
    <table style="border: 3px solid grey; margin-left: 15%;">
        <tr style="padding:10px; border: 3px solid grey;">
            <th style="padding:10px;">Id</th>
            <th style="padding:10px;">Termék neve</th>
            <th style="padding:10px;" >Ára</th>
            <th style="padding:10px;" >Törlés</th>
        </tr>
        <?php
        if(!empty($_SESSION["cart"]))
        {
            $total = 0;
            foreach($_SESSION["cart"] as $keys => $values)
            {
                ?>
                <tr style="text-align: center; border: 3px solid grey;">
                    <td><?php echo $values["product_id"]; ?></td>
                    <td><?php echo $values["item_name"]; ?></td>
                    <td> <?php echo $values["product_price"]." din"; ?></td>

                    <td><a href="order.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span class="text-danger">X</span></a></td>
                </tr>
                <?php
                $total = $total +  $values["product_price"];
            }
            ?>
            <tr>
                <td colspan="2" align="right">Összesen+szállítási díj(250 din)</td>
                <td align="right"> <?php echo number_format($total+250, 2)." din"; ?></td>
                <td></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
        </div>
    </div>
    <div id="footer">
        <p><a href="/eden2/costumer/index.php">Kezdőoldal</a> | <a href="/eden2/costumer/akciok.php">Akciók</a> | <a href="/eden2/costumer/news.php">Újdonságok</a> | <a href="/eden2/costumer/order.php">Megrendelés</a> | <a href="/eden2/costumer/contact.php">Kontakt</a></p>
        <p>Copyright &copy; éden </p>
    </div>
</div>
</body>
</html>
