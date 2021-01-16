<head>
    <style>
        @media (max-width:800px){
        #gif{
            height:300px!important;
            width:300px!important;
            margin-left:10%!important;
        }
        #contact-logo{
            margin-left:5px!important;
            height:50px;
        }
        .col-3 h4{
            font-size:1rem;
            margin-top:0!important;           
        }
        .col-3.text p{
            font-size:.8rem;
            margin-top:0!important;
            max-width:50px!important;           
        }
        .col-3{
            padding-right:5px!important;
            padding-left:5px!important;
        }
    }
    </style>
</head>
<div data-aos="fade-right" >
    <div class="col-12">
      <img src="assets/images/cool.gif" style="margin-left:37%; padding-bottom:2rem; height:400px; width:400px;" id="gif"> 
    </div>
</div>
<div style="background-image:">
<?php
     include_once 'contactform.php'; 
    ?>

<footer class="mt-5" style="background-image:url(assets/images/contact-bg.jpg);background-size:cover;image-opacity:.4;height:30vh;">
    <div class="row " style="display:flex;justify-content:space-around;padding-top:2rem;">
        <div class="col-3">
            <img id="contact-logo" src="assets/images/logo.png">  
        </div>
        <div class="col-3"style="color:orange;">
            <h4>Number/Branches</h4>
            888-888-8888
            London-Africa
        </div> 
        <div class="col-3"style="color:orange;">
            <h4>Emails/</h4>
            abc@hotmail.com
            xyz@hotmail.com
        </div>  
    </div>
</footer>
</div>