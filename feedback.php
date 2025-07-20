<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="send.css">
    <link rel="icon" href="img/icon.png" type="img/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>FEEDBACK</title>
</head>
<body>
    <header class="homepage">
        <div class="title">
            <p class="head"><i class="fa-solid fa-rotate-left"></i><a href="home.php">  GO BACK</a></p>
        </div>
    </header>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gammyui = isset($_POST["gammyui"]) ? (int)$_POST["gammyui"] : 0;
    $gammyperform = isset($_POST["gammyperform"]) ? (int)$_POST["gammyperform"] : 0;
    $gammyinfo = isset($_POST["gammyinfo"]) ? (int)$_POST["gammyinfo"] : 0;
    $gammymenu = isset($_POST["gammymenu"]) ? (int)$_POST["gammymenu"] : 0;
    $gammyrec = isset($_POST["gammyrec"]) ? (int)$_POST["gammyrec"] : 0;
    $gammysurvey = isset($_POST["gammysurvey"]) ? (int)$_POST["gammysurvey"] : 0;

    $conn = new mysqli("localhost", "root", "", "gammy");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO feedback (gammyui, gammyperform, gammyinfo, gammymenu, gammyrec, gammysurvey) 
    VALUES (?, ?, ?, ?, ?, ?)");

    if ($stmt) {
        $stmt->bind_param("iiiiii", $gammyui, $gammyperform, $gammyinfo, $gammymenu, $gammyrec, $gammysurvey);
        if ($stmt->execute()) {
            echo "<div class='center-message'><b>SEND SUCCESSFULLY :D</b></div>";
        } else {
            echo "<b>Error: " . $stmt->error . "</b>";
        }
        $stmt->close();
    } else {
        echo "<b>Error: " . $conn->error . "</b>";
    }

    $conn->close();
}
?>
</body>
</html>