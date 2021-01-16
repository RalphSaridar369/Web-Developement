<?php
    if(isset($_POST['mailsubmit'])){

        $email=$_POST['email'];
        $message=$_POST['message'];

        if(empty($email)){
            header("Location:../index.php?mailtransfer=e-empty");
            exit();
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header("Location:../index.php?mailtransfer=e-error");
            exit();
        }
        else if(empty($message)){
            header("Location:../index.php?mailtransfer=m-error");
            exit();
        }
        else {
            mail("ralphsaridar@hotmail.com","mail_sent_from_sk8ter",$message,$email);
            header("Location:../index.php?mailtransfer=success");
            exit();
        }
    }
    ?>