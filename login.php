<?php
session_start(); // Start the session

// Check if the user is already logged in
if (isset($_SESSION['email'])) {
    // Redirect the user to the dashboard or any other protected page
    header("Location: index.html");
    exit();
}

include 'koneksi.php'; // Include the database connection file

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the submitted username and password
    $email = $_POST['username'];
    $password = $_POST['password'];

    // Validate the username and password (e.g., check if they are not empty)
    // ...

    // Perform the necessary authentication and validation checks
    $sql = "SELECT * FROM tadmin WHERE id = '$id' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Login successful
        $_SESSION['email'] = $email;

        // Redirect the user to the dashboard or any other protected page
        header("Location: index.php");
        exit();
    } else {
        // Login failed
        $loginError = "Invalid username or password";
    }
}

mysqli_close($conn); // Close the database connection
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            padding: 0px;
            margin: 0px;
        }
        
        header {
            background-color: #FEBD59;
            padding: 10px;
        }
        
        .logo {
            width: 150px;
            height: auto;

        }
        
        .container-login {
            margin-top: 150px;
            width: 300px;
            padding: 20px;
            border-radius: 5px;
            display: inline-block;
            align-items: center;
        }
        
        .container-login h2 {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
        }
        
        .container-login input[type="text"],
        .container-login input[type="password"] {
            width: 100%;
            height: 30px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            text-align: center;
            border-radius: 25px;
        }
        
        .container-login input[type="submit"] {
            background-color: #07B594;
            color: #ffffff;
            border: none;
            cursor: pointer;
            width: 100px;
            padding: 10px;
            border-radius: 5px;
        }
        .prompt-container {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 0px;
}
    </style>
    <nav>
        <header>
            <img src="images/header.svg" alt="Logo" class="logo">
        </header>
    </nav>
</head>
<body>
    <div class="container-login">
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Masukkan Email" required><br>
            <input type="password" name="password" placeholder="Masukkan Kata Sandi" required><br>
            <input type="submit" value="Login">
        </form>
    </div>
    <div class="prompt-container">
            <p>Belum Punya Akun?</p>
            <a href="dashboard.php" class="prompt">Daftar</a>
        </div>
</body>
</html>
