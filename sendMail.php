<?php

    require_once 'databaseConnection.php'; 
    require_once 'config.php'; 
    require 'vendor/autoload.php';
    function SendMail($fname,$lname,$email,$vkey)
    {
        // Sending email
        $to=$email;
    
        // If you're using Composer (recommended)
        
        $email = new \SendGrid\Mail\Mail(); 
        $email->setFrom("rishabhgarg@noncense.in", "Rishu");
        $email->setSubject("Email Verification");
        $email->addTo("$to","User Details");
        $email->addContent("text/plain","This is message from XKCD Comics.");
        $email->addContent(
            "text/html", "<h3>Hey $fname $lname, you're almost ready to start enjoing<strong> XKCD Comics</strong>.Simply verify your email address with your one time password.</h3><br><h3>Verification OTP:<br>$vkey</h3><br><br><h5>Thank you.</h5>"
        );
        $sendgrid = new \SendGrid(SENDGRID_API_KEY);
        try {
            $response = $sendgrid->send($email);
            // print $response->statusCode() . "\n";
            // print_r($response->headers());
            // print $response->body() . "\n";
            if($response->statusCode()===202){
                    header('location:thankyou.php');
            }
            else{
                 echo "<h3>OOPs.! Email not send.</h3>";
            }
        
        } catch (Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }
        
    }
?>