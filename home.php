<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true){
    header("Location: login.html");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="home.css">
        <link rel="icon" href="img/icon.png" type="image/png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <title>GAMMY</title>
    </head>
    <body>
        <header class="homepage">
            <div class="title">
                <p><i class="fa-solid fa-envelope"></i><a class="head" href="contact.php">  CONTACT</a></p>
                <p><i class="fa-solid fa-square-poll-vertical"></i><a class="head" href="https://docs.google.com/forms/d/e/1FAIpQLSe_9SPntqzud-mEGZjInHht8efWqmtd1GcBiI1dEFyj5lff5w/viewform?usp=sf_link">  SURVEY</a></p>
                <p><i class="fa-solid fa-arrow-right-from-bracket"></i><a class="head" href="logout.php">  LOGOUT</a></p>
            </div>
        </header>
        <div class="menu">
            <h1 class="listname">GAMMY</h1>
            <br><br>
            <p><i class="fa-solid fa-circle-info"></i> <a class="link" href="info.php">  GAMMY INFO</a></p>
            <p><i class="fa-solid fa-bars"></i><a class="link" href="menu.php">  GAMMY MENU</a></p>
            <p><i class="fa-solid fa-thumbs-up"></i><a class="link" href="recommendations.php">  GAMMY TREND RECOMMENDATIONS</a></p>
            <p><i class="fa-solid fa-user"></i><a class="link" href="survey.php">  GAMMY USER RECOMMENDATIONS</a></p>
            <p><i class="fa-solid fa-comment"></i><a class="link" href="feedback.html">  GAMMY FEEDBACK</a></p>
        </div>
        <a href="help.html">
            <img src="img/help.png" class="moving-icon" alt="loading">
        </a>
    </body>
</html>