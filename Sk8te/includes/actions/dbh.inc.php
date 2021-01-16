<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename ="sk8te";

    $conx = new mysqli($servername,$username,$password,$databasename);

    if($conx->connect_error){
        die("connection failed: " . $conx->connect_error);
    }

 /*   else{
        echo "connected successfully. <br> ";
    }

    ?>

<form method="POST" enctype="multipart/form-data" action="includes/dbh.inc.php">
    <input type="file" name="file">
    <button type="submit" name="submit">Upload</button>
</form>  */