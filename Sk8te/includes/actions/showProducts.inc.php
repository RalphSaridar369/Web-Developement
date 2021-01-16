<?php
    include_once './actions/dbh.inc.php';
    ?>

<?php 

    if(isset($_GET['search-submit']) && !empty($_GET['search'])){

        $SearchValue = $_GET['search'];
        $sql = 'SELECT * FROM products WHERE product_name LIKE %$SearchValue%;';

        $resultCheck = mysqli_query($conx,$sql);
        $result = mysqli_num_rows($resultCheck);

        if($result > 0){
            while ($row = mysqli_fetch_assoc($result)){

                echo "<div class='card col-md-3 col-sm-6' >
                <img class='card-img-top productimages' src='$Image'>
                <div class='card-body productsbodies'>
                    <h2>" . $row['product_name'] . "</h2>
                    <h4>" . $row['product_description'] . "</h4>
                    <h4>" . $row['product_price'] . " $</h4>
                    <button class='btn btn-sm btn-primary' onclick='addToChart(this,this.parentNode.childNodes[5].value)'>Add to chart</button>
                    <input type='number'pattern='[0-9]+' class='qty-val'>
                </div>
            </div>";

            }
        }

        else{

            echo "<h3>We Couldn't find what you're looking for :(</h3>";

        }

    }

    else{

    $sql = "SELECT * FROM products ;";
    $results = mysqli_query($conx,$sql);

    $resultCheck = mysqli_num_rows($results);

    if($resultCheck>0){
        while ($row = mysqli_fetch_assoc($results)){
            $Image = $row['product_image'];

            echo "<div class='card col-md-3 col-sm-6' >
                <img class='card-img-top productimages' src='$Image'>
                <div class='card-body productsbodies'>
                    <h2>" . $row['product_name'] . "</h2>
                    <h4>" . $row['product_description'] . "</h4>
                    <h4>" . $row['product_price'] . " $</h4>
                    <button class='btn btn-sm btn-primary' onclick='addToChart(this,this.parentNode.childNodes[5].value)'>Add to chart</button>
                    <input type='number' value='0' class='qty-val'>
                </div>
            </div>";
        }
    }

    else{
        echo "empty database";
     }
    }
    ?>