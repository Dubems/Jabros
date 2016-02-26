
<?php
 function sendMail()
 {
     if (!empty($_POST['email']) && !empty($_POST['name']) && !empty($_POST['message'])) {
         $email = $_POST['email'];
         $message = $_POST['message'];
         $to = 'nriagudubem@yahoo.com' . ', ';
         $to .= 'nrigudubem@gmail.com';
         $header = 'From:' . $email;
         $subject = 'jabros.com.ng';

         mail($to, $subject, $message, $header);
         echo "your message was sent successfully!   We would get back to you soon..";
         }
     }

sendMail();

