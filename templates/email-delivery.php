<?php
/*
 * Template Name: Test email delivery page
 */

$fields = get_fields();

$emails =  $fields['data_email'];

$subject = "Beautiful Email by Pavel 5";

$htmlContent = file_get_contents("http://promx.webdev.acceptic.com/wp-content/themes/prorm/testing/partners.html");

// Set content-type header for sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From: Pavel' . "\r\n";

//var_dump($emails);
$i = 0;

foreach ($emails as $key => $value) {
   $to = $value["email_to"]; 
   $i++;
   
   // Send email
    if(mail($to,$subject,$htmlContent,$headers)):
        echo $i. ' ' . 'Email has sent successfully to: <b>' . $value["email_to"] . '</b><br>';
    else:
        echo  $i. ' ' .  'Email sending fail to: <b>'. $value["email_to"]. '</b><br>';
    endif;
   
}






?>