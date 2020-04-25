<?php


    function sendEmailToUser($fromName,$from,$to){
        // $to = 'user@example.com'; 
        // $from = 'sender@example.com'; 
        // $fromName = 'SenderName'; 
         
        $subject = "Send HTML Email in PHP by CodexWorld"; 
         
        $htmlContent = file_get_contents("userEmailTemplate.html");
         
        // Set content-type header for sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
         
        // Additional headers 
        $headers .= 'From: '.$fromName.'<'.$from.'>' . "\r\n"; 
        $headers .= 'Cc: welcome@example.com' . "\r\n"; 
        $headers .= 'Bcc: welcome2@example.com' . "\r\n"; 
         
        // Send email 
        // mail($to, $subject, $htmlContent, $headers); 
        if(mail($to, $subject, $htmlContent, $headers)){ 
            echo 'Email has sent successfully.'; 
        }else{ 
           echo 'Email sending failed.'; 
        }

    }


?>