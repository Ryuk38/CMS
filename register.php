<?php
$servername = "localhost"; 
$username = "root";
$password = "root"; 
$dbname = "cms"; 
$port = "3307"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $usnm = $_POST['username'];
        $psswd = $_POST['password'];
        $user_type = 1;

        $conn = new mysqli($servername, $username, $password, $dbname,$port);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {

            $check = "SELECT username FROM login where username='$usnm'";
            $result = $conn->query($check);
            if ($result->num_rows > 0) {
                echo '<script>alert("Username already exists. Choose a different username!!!"); window.location.href="register.php";</script>';
            } else {
                $sql = $conn->prepare("INSERT INTO login(username,pass,user_type)  VALUES (?, ?, ?)");
                $sql->bind_param("ssi", $usnm, $psswd, $user_type);
                if ($sql->execute()) {
                    echo '<script>alert("Registration successful."); window.location.href="login.php";</script>';
                } else {
                    echo '<script>alert("Error: ' . $stmt->error . '"); window.location.href="register.php";</script>';
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LMS | Register</title>
    <style>
        body {
            background-image: url("images/open-bg (2).jpg");
            background-size: cover;
            background-position: center;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue",
                sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }

        .register-container {
            background: rgba(0, 0, 0, 0.7);
            /* Semi-transparent background */
            padding: 50px;
            border-radius: 10px;
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .register-container h2 {
            text-align: center;
            font-size: 35px;
            margin-bottom: 40px;
        }

        .register-container label {
            display: block;
            margin-top: 20px;
            font-size: 18px;
        }

        .register-container input[type="text"],
        .register-container input[type="password"] {
            width: 95%;
            padding: 12px;
            margin-top: 10px;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            font-size: 16px;
        }

        .register-container input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .register-container input:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.2);
        }

        .register-container button {
            width: 100%;
            padding: 12px;
            margin-top: 30px;
            border: none;
            border-radius: 5px;
            background-color: #ff4500;
            /* Orange color */
            color: white;
            font-size: 20px;
            cursor: pointer;
        }

        .register-container button:hover {
            background-color: #ff6347;
            /* Lighter orange */
        }

        .register-container p {
            text-align: center;
            margin-top: 30px;
            font-size: 18px;
        }

        .register-container a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="register.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Type your username" required />
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Type your password" required />

            <button type="submit">Register</button>
        </form>
        <a href="login.php">
            <p style="margin-top: 30px">Already have an account? Login</p>
        </a>
    </div>
</body>

</html>
