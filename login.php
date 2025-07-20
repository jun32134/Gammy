<?php
session_start();

$error = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $conn = new mysqli("localhost", "root", "", "gammy");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("SELECT * FROM register WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if ($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if ($data["password"] === $password) {
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                $_SESSION['username'] = $data["username"]; 
                header("Location: home.php");
                exit;
            } else {
                $error = "Invalid Email or Password!";
            }
        } else {
            $error = "Invalid Email or Password!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="img/icon.png" type="image/png">
    <title>LOGIN</title>
</head>
<body>
    <header class="homepage">
        <div class="title">
            <p class="head">WELCOME TO GAMMY</p>
        </div>
    </header>
    <div class="menu">
        <form action="login.php" method="post">
            <h1 class="form-title"><i class="fa-solid fa-right-to-bracket"></i> GAMMY LOGIN</h1>
            <br><br>
            <div class="form-group">
                <label for="email"><i class="fa-solid fa-envelope"></i>  EMAIL</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password"><i class="fa-solid fa-lock"></i>  PASSWORD</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <label for="showpassword">
                <input type="checkbox" id="showpassword" onclick="togglepassword()"> Show Password
            </label>
            <br><br>
            <button type="submit">LOGIN</button>
            <br><br>
            <h1 class="create-account">click <a href="signup.php">here</a> to create an account. </h1>
            <?php
            if ($error) {
                echo '<p style="color:red;">' . $error . '</p>';
            }
            ?>
        </form>
        <script src="login.js"></script>
    </div>
</body>
</html>
