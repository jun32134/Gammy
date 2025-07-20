<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mailling/src/Exception.php';
require 'mailling/src/PHPMailer.php';
require 'mailling/src/SMTP.php';

if (isset($_POST["send"])) {

  $mail = new PHPMailer(true);

    $mail->isSMTP();                              
    $mail->Host       = 'smtp.gmail.com';       
    $mail->SMTPAuth   = true;             
    $mail->Username   = 'gammy358@gmail.com';   
    $mail->Password   = 'qtzembixnzztupzz';      
    $mail->SMTPSecure = 'ssl';          
    $mail->Port       = 465;                                    

    $mail->setFrom( $_POST["email"], $_POST["name"]); 
    $mail->addAddress('gammy358@gmail.com');    
    $mail->addReplyTo($_POST["email"], $_POST["name"]);

    $mail->isHTML(true);               
    $mail->Subject = $_POST["subject"];   
    $mail->Body    = $_POST["message"]; 

    $mail->send();
    echo
    " 
    <script> 
     alert('Message was sent successfully!');
     document.location.href = 'contact.php';
    </script>
    ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="contact.css">
  <link rel="icon" href="img/icon.png" type="img/png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>CONTACT</title>
</head>
<body>
  <header class="homepage">
    <div class="title">
      <p class="head"><i class="fa-solid fa-rotate-left"></i><a href="home.php">  GO BACK</a></p>
    </div>
  </header>
  <div class="container">
    <form id="contact" action="contact.php" method="post">
      <h1><i class="fa-solid fa-envelope"></i>  GAMMY CONTACT</h1>

      <fieldset>
        <input placeholder="Enter your name" name="name" type="text" tabindex="1" autofocus>
      </fieldset>
      <fieldset>
        <input placeholder="Enter your email" name="email" type="email" tabindex="2">
      </fieldset>
      <fieldset>
        <input placeholder="Enter your topic" type="text" name="subject" tabindex="4">
      </fieldset>
      <fieldset>
        <textarea name="message" placeholder="Type your Message Details Here..." tabindex="5"></textarea>
      </fieldset>

      <fieldset>
        <button type="submit" name="send" id="contact-submit">Submit</button>
      </fieldset>

      <div class="alert">GAMMY will response in 2 days working time. </div>
    </form>
  </div>
</body>
</html>