<form class="form-inline" method="POST" action="includes/email.php">
        <div class="row" >
            <h2 style="margin:auto;padding-bottom:2rem;">Contact Us!</h2>
            <div class="input-group mb-2 mr-sm-2 col-xl-12">
                 <input type="email" class="form-control "  id="inlineFormInputGroupUsername2" placeholder="Email" name="email">
            </div>

            <?php

            if(isset($_GET['mailtransfer'])){
                if($_GET['mailtransfer']=="e-error" || empty($_GET['mailtransfer'])){
                    echo "<span class='alert alert-danger'>Please insert a valid email</span>";
                    $errormessage="Invalid Email Form";
                    sleep(1);
                    echo "<script type='text/javascript'> alert('$errormessage');</script>"
                    ;
                }
            }


                ?>

            <div class="input-group mb-2 mr-sm-2 col-xl-12">
                 <input type="text" class="form-control " maxlength="150" rows="2" cols="5"  id="inlineFormInputGroupUsername1" placeholder="text" name="message">
            </div>

            <?php

            if(isset($_GET['mailtransfer'])){
                if($_GET['mailtransfer']=="m-error"){
                    echo "<span class='alert alert-danger '>The mail form is empty</span>";
                    $errormessage="Invalid Mail Form";
                    sleep(1);
                    echo "<script type='text/javascript'> alert('$errormessage'); </script>"
                    ;
                }

                if($_GET['mailtransfer']=='success'){
                    sleep(1);
                    echo "<script type='text/javascript'> alert('Success');</script>";                    
                }
            }



             ?>

            <div class="input-group mb-2 mr-sm-2 col-xl-12">
                 <input type="submit" class="btn btn-primary "  id="inlineFormInputGroupUsername3" value="submit" style="background-color:transparent!important;border-color:orange!important;color:orange!important;"name="mailsubmit">
            </div>
        </div>
</form>

