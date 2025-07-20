<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="img/icon.png" type="image/png">
    <title>SIGNUP</title>
</head>
<body>
    <header class="homepage">
        <div class="title">
            <p class="head">WELCOME TO GAMMY</p>
        </div>
    </header>
    <div class="menu">
        <?php
        $error = $success = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            $password = $_POST["password"];
            $repassword = $_POST["repassword"];

            if ($password !== $repassword) {
                $error = "Passwords do not match!";
            } else {
                $conn = new mysqli("localhost", "root", "", "gammy");

                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } else {
                    $stmt = $conn->prepare("INSERT INTO register (name, email, password) VALUES (?, ?, ?)");
                    if ($stmt) {
                        $stmt->bind_param("sss", $name, $email, $password);
                        if ($stmt->execute()) {
                            $success = "REGISTER SUCCESSFULLY :D";
                        } else {
                            $error = "Error: " . $stmt->error;
                        }
                        $stmt->close();
                    } else {
                        $error = "Error: " . $conn->error;
                    }
                    $conn->close();
                }
            }
        }
        ?>
        <form action="signup.php" method="post">
            <h1><i class="fa-solid fa-registered"></i> GAMMY SIGNUP</h1>
            <br><br>
            <div class="form-group">
                <label for="name"><i class="fa-solid fa-user"></i>  USERNAME</label>
                <input type="text" id="name" name="name" placeholder="Enter your username" required>
            </div>
            <div class="form-group">
                <label for="email"><i class="fa-solid fa-envelope"></i>  EMAIL</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="password"><i class="fa-solid fa-lock"></i>  PASSWORD</label>
                <input type="password" id="password" name="password" placeholder="Enter your password" required>
            </div>
            <div class="form-group">
                <label for="repassword"><i class="fa-solid fa-lock"></i>  CONFIRM PASSWORD</label>
                <input type="password" id="repassword" name="repassword" placeholder="Confirm your password" required>
            </div>
            <label for="showpassword">
                <input type="checkbox" id="showpassword" onclick="togglepassword()"> Show Password
            </label>
            <br><br>
            <button type="submit">Sign Up</button>
            <br><br>
            <h1 class="create-account">click <a href="login.php">here</a> to login.</h1>
        </form>
        <?php
        if ($error) {
            echo '<p style="color:red;">' . $error . '</p>';
        }
        if ($success) {
            echo '<p style="color:green;">' . $success . '</p>';
        }
        ?>
        <script src="signup.js"></script>
    </div>
</body>
</html>
