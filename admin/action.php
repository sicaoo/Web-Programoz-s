<?php
//action.php
if(isset($_POST["action"]))
{
    $connect = @mysqli_connect("localhost", "root", "", "eden");
    if($_POST["action"] == "fetch")
    {
        $query = "SELECT * FROM product ORDER BY product_id ";
        $result = mysqli_query($connect, $query);
        $output = '
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="10%">ID</th>
     <th width="20%">Név</th>
     <th width="40%">Kép</th>
     <th width="10%">Változtatás</th>
     <th width="10%">Eltávolítás</th>
    </tr>
  ';
        while($row = mysqli_fetch_array($result))
        {
            $output .= '

    <tr>
     <td>'.$row["product_id"].'</td>
     <td>'.$row["product_name"].'</td>
     <td>
      <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="60" width="75" class="img-thumbnail" />
     </td>
     <td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'.$row["product_id"].'">Változtatás</button></td>
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="'.$row["product_id"].'">Törlés</button></td>
    </tr>
   ';
        }
        $output .= '</table>';
        echo $output;
    }

    if($_POST["action"] == "insert") {
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $query = "INSERT INTO prodact (image) VALUES ('$file')";
        if (mysqli_query($connect, $query)) {
            echo 'A kép fel lett töltve';
        }
    }
    if($_POST["action"] == "update")
    {
        $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
        $query = "UPDATE product SET image = '$file' WHERE product_id = '".$_POST["image_id"]."'";
        if(mysqli_query($connect, $query))
        {
            echo 'A kép módosítva lett';
        }
    }
    if($_POST["action"] == "delete")
    {
        $query = "DELETE  FROM product WHERE product_id = '".$_POST["image_id"]."'";
        if(mysqli_query($connect, $query))
        {
            echo 'A kép ki lett törölve';
        }
    }
}
?>