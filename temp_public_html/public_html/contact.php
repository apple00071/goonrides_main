<?php
if(isset($_POST['submit'])):
    extract($_POST);
    $to   = 'info@go-onriders.com';
    $subject = "Contactus";
    $message = "
	 Dear Admin.\n
	 A new user submitted an enquiry data with the following details.\n
     Name        : $name\n
     Email       : $email\n
     Mobile Number     : $phone\n
     Comments    : $message\n
    ";
    $from = $email;
    $headers = "email:".$from;
    if(mail( $to,$subject,$message,$headers)):?>
        <script type="text/javascript">
        alert("Your enquiry successfully received"); 
        window.location="index.html"; 
        </script>
   <?php  endif;?>
 <?php endif;?>
