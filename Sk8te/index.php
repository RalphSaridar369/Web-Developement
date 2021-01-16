<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">        <link rel="stylesheet"  type="text/css"  href="assets/css/style.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sk8te</title>
        <meta name="viewport" content="width=device-width, initial-scale=1 , shrink-to-fit=no">
        <link href="./assets/css/aos.css"  type="text/css" rel="stylesheet">
        <link href="./assets/css/style.css" type="text/css" rel="stylesheet">
        <style>
        @media (max-width:400){

        #gif{
            height:100px!important;
            margin-left:0%!important;
            }

        .img-fluid.three{
            margin-left:1px!important;
        }

        }
        </style>
        </head>
    <body data-spy="scroll" data-target="#navbarResponsive">

    <!-- Start Home Section -->

    <div id="home">
        <?php
            include_once 'includes/navbar.php';
            ?>
    </div>

    <!-- End Home Section -->
    
    <!-- Start Carousel Section -->
    
    <div id="Carousel" class="no-padding">
        <?php
            include_once 'includes/carousel.php';
            ?>  
    </div>
    <!-- End Carousel Section -->

    <!-- Start About us -->

    <div id="team">
        <?php
        include_once 'includes/about.php';
            ?>
    </div>
    <!--End About us -->

    <!-- Start What's New -->

    <div id="new">
        <?php
            include_once 'includes/new.php';
            ?>
    </div>

    <!--Start Contact-Us -->
        
        <div id="contact-us">
            <?php
                include_once 'includes/contact.php';
                ?>
        </div>


    <!-- End Contact-Us -->

        <script src="assets/js/aos.js"></script>
        <script>
             AOS.init({ 
                  duration:600 , easing:'ease' ,delay:100
             });
        </script>
        <script src="https://use.fontawesome.com/releases/v5.6.1/js/all.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    </body>
</html>