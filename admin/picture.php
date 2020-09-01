

<!DOCTYPE html>
<html>
<head>
    <title>Ajax Image Insert Update Delete in Mysql Database using PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/eden2/style/products.css" />

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
            <ul id="menu" style="font-weight: normal; margin-right:12%; font-size: small;" >
                <li><a href="index.php">Főoldal</a></li>
                <li><a href="picture.php">Kép módosítás</a></li>

            </ul>
        </div>
    </div>
    <div id="content" style="width:90%;height:2300px;background-color: white; margin-left:
        auto;margin-right: auto; padding-top:2%;">
<div class="container" style="width:900px; height:2300px;" >
   <!-- <div align="right">
        <button type="button" name="add" id="add" class="btn btn-success">Add</button>
    </div>-->


    <br/>
    <div id="image_data">

    </div>
</div>
</div>

</div>
</body>
</html>

<div id="imageModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Image</h4>
            </div>
            <div class="modal-body">
                <form id="image_form" method="post" enctype="multipart/form-data" >
                    <p><label>Select Image</label>
                        <input type="file" name="image" id="image" /></p><br />
                    <input type="hidden" name="action" id="action" value="insert" />
                    <input type="hidden" name="image_id" id="image_id" />
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script src="picture.js"></script>