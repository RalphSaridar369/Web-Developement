<?php
    include_once '../actions/dbh.inc.php';

    $productN = $_POST['PNAME'];
    $productI = $_POST['PIMAGE'];
    $productP = $_POST['PPRICE'];
    $productD = $_POST['PDESCRIPTION'];
    $productTI = $_POST['PTID'];

    $sql = "INSERT INTO products (product_name , product_image , product_price , product_description , product_type_id) 
    VALUES('$productN','$productI','$productP','$productD','$productTI');";    
    
    $result = mysqli_query($conx , $sql);
    header("Location:../products.php");

    ?>