<?php

    $sql = "SELECT * FROM products;";
    $results = mysqli_query($conx , $sql);
    $datas = array();

    // dakhalna l database b aleb array
    if(mysqli_num_rows($results)>0)
        while($row = mysqli_fetch_assoc($result)){
            $datas[]=$row;
        }

    // to print it 

    foreach ($datas as $data){
        echo $data['product_name'];
    }

    header("Location:../products.php");


    ?>