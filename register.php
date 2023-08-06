<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
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
            height:30px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            text-align: center;
            border-radius: 10px;
            font-size: 15px;
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
    margin-top: 10px;
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
        <h2>Daftar Akun</h2>
        <form action="register.php" method="POST">
            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" required><br>
            <input type="text" name="nomor" placeholder="Masukkan Nomor Anda (+62)" required><br>
            <input type="text" name="email" placeholder="Masukkan Email Anda" required><br>
            <input type="password" name="password" placeholder="Masukkan Kata Sandi" required><br>
            <input type="password" name="passkonfirm" placeholder="Konfirmasi Kata Sandi" required><br>
            <input type="submit" value="Daftar">
        </form>
        <div class="prompt-container">
            <p>Sudah Punya Akun?</p>
            <a href="login.php" class="prompt">Login</a>
        </div>
    </div>
    <?php
    include 'koneksi.php'; // Include the database connection file
    // ... (database connection code)
    
   
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['nama'];
    $phone = $_POST['nomor'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['passkonfirm'];

    // Validate the form data (e.g., check for empty fields, validate email format, etc.)
    // ...

    // Check if the email already exists in the database
    $sql = "SELECT * FROM tregister WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Email already exists
        echo "Email already exists. Please choose a different email.";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO tregister (nama, no_hp, email, password) VALUES ('$name', '$phone', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            // Registration successful
            mysqli_close($conn); // Close the database connection

            // Redirect to login.php
            header("Location: login.php");
            exit();
        } else {
            // Registration failed
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn); // Close the database connection
?>
    

</body>
</html>
