<?php 
    
    // header('Content-type:application/json');
    // header('Access-Control-Allow-Origin:*');
    // header('Access-Control-Allow-Methods:POST');
    // require("../../vendor/autoload.php");
    // use PHPMailer\PHPMailer\PHPMailer;
    // $phpmailer = new PHPMailer();
    // $phpmailer->isSMTP();
    // $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    // $phpmailer->SMTPAuth = true;
    // $phpmailer->Port = 2525;
    // $phpmailer->Username = '7583811602e112';
    // $phpmailer->Password = '1c028f6cfaea0f';
    // $phpmailer->setFrom('meghraj@krishaweb.com','Meghrajsinh Dodiya');
    // // $phpmailer->addAddress($userMail);
    // $phpmailer->isHTML(true);                                  
    // $phpmailer->Subject = 'Your Bill';
    // $phpmailer->Body    = "Your otp is" .$userOtp.".";
    // $phpmailer->send();
    // $data = json_decode(file_get_contents("php://input"),true);
    // echo $data. "rfjn";

    $to = "mihirdodiyamayur@gmail.com";
    $header = "From: mihirdodiyamayur@gmail.com";
    $subject = "Your Bill";
    $message = "mihir,mayur,  raj";

   if( mail($to, $subject, $message, $header)){
     echo "mail sent";
   }else {
    echo "mail not sent ";
   }
?>