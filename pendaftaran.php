<!DOCTYPE html>
<html>
<head>
    <title>Daftar Bimbel</title>
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
            margin-top: 20px;
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
        .container-login input[type="date"] {
            width: 100%;
            height: 30px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            text-align: center;
            border-radius: 25px;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .container-login input[type="text"],
        .container-login input[type="password"] {
            width: 300px;
            height:30px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            text-align: center;
            border-radius: 25px;
        }
        
        .container-login input[type="submit"] {
            background-color: #DB2721;
            color: #ffffff;
            border: none;
            cursor: pointer;
            width: 130px;
            padding: 10px;
            border-radius: 5px;
        }
        .prompt-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 10px;
        }
        .dropdown-input {
        position: relative;
        }

        .dropdown-input select {
        width: 320px;
        height: 50px;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        text-align: center;
        color: #888; /* Set the placeholder font color */
        border-radius: 25px;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        }

        .dropdown-input select::-ms-expand {
        display: none;
        }

        .dropdown-input::after {
        widht: 300px;
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        pointer-events: none;
        }
                /* Hide the default spinner arrows on the date input */
        input[type="date"]::-webkit-inner-spin-button,
        input[type="date"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Style the date input to look like a regular text input */
        input[type="date"] {
            appearance: textfield;
            padding: 0.3em;
        }

        /* Hide the date picker button */
        #showDatePicker {
            display: none;
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
        <h2>Daftar Bimbel</h2>
        <form action="pendaftaran.php" method="POST">
            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" required><br>
            <input type="text" name="email" placeholder="Masukkan Email Anda" required><br>
            <input type="text" name="nomor" placeholder="Masukkan Nomor Anda (+62)" required><br>
            <input type="text" name="asal" placeholder="Asal Sekolah anda" required><br>
            <input type="text" name="kota" placeholder="Kota Kabupaten" required><br>
            <input type="text" id="tanggal" name="tanggal" placeholder="Tanggal lahir anda" required>
            <button type="button" id="showDatePicker">Show Date Picker</button>
            <div class="dropdown-input">
                <select name="semester" required>
                    <option value="">Pilih Semester Anda</option>
                    <option value="ganjil">Ganjil</option>
                    <option value="genap">Genap</option>
                </select>
                <select name="tahun" required>
                    <option value="">Pilih Jenjang Pendidikan</option>
                    <option value="tk">TK</option>
                    <option value="sd">SD</option>
                    <option value="smp">SMP</option>
                </select>
            </div>
            <div class="dropdown-input">
                <select name="program" required>
                    <option value="">Pilih Program Bimbel</option>
                    <option value="program1">Program 1</option>
                    <option value="program2">Program 2</option>
                    <option value="program3">Program 3</option>
                </select>
            </div>
            <input type="text" name="ortu" placeholder="Masukan Nama Orang Tua" required><br>
            <input type="text" name="ortunomor" placeholder="Nomor Orang Tua" required><br>

            <input type="text" name="total" placeholder="Total biaya" required><br>
            <div class="dropdown-input">
                <select name="metode" required>
                    <option value="">Pilih Metode Pembayaran</option>
                    <option value="Transfer">Transfer</option>
                    <option value="COD">Cash On Delivery</option>
                </select>
            </div>

<script>
    // Fetch program costs from the database and update the program cost and total cost
    document.getElementById("selectedProgram").addEventListener("change", function() {
        const selectedProgram = this.value;
        if (selectedProgram) {
            // You can fetch program costs using AJAX or fetch API
            // Example assuming you have an array named 'programCosts'
            const programCosts = {
                "program1": 1500000,
                "program2": 2000000,
                "program3": 2500000
            };

            const selectedCost = programCosts[selectedProgram];
            if (selectedCost) {
                document.getElementById("programCost").textContent = "Biaya Program: Rp " + selectedCost;
                const totalCost = calculateTotalCost(selectedCost);
                document.getElementById("totalCost").textContent = "Total Biaya: Rp " + totalCost;
            }
        }
    });

    // Function to calculate total cost based on selected program cost
    function calculateTotalCost(programCost) {
        // You can add additional cost calculations if needed
        // For example, adding costs for books, materials, etc.
        // For now, let's assume the program cost is the total cost
        return programCost;
    }
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const datePicker = document.getElementById("tanggal");
  const datePickerButton = document.getElementById("showDatePicker");

  datePickerButton.addEventListener("click", function() {
    datePicker.focus(); // Open the date picker when the button is clicked
  });

  datePicker.addEventListener("focus", function() {
    if (!datePicker.value) {
      datePicker.type = "date"; // Change the input type to 'date' to show the browser's date picker
    }
  });

  datePicker.addEventListener("blur", function() {
    if (!datePicker.value) {
      datePicker.type = "text"; // Change the input type back to 'text' when blurred if it's empty
    }
  });
});
</script>



            <input type="submit" value="Daftar Bimbel">
        </form>

        <?php
// Enable output buffering at the very beginning
ob_start();

// Include the database connection file
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $phone = $_POST['nomor'];
    $school = $_POST['asal'];
    $birthdate = $_POST['tanggal'];
    $semester = $_POST['semester'];
    $jenjang = $_POST['tahun'];
    $city = $_POST['kota'];
    $parentName = $_POST['ortu'];
    $parentPhone = $_POST['ortunomor'];
    $program = $_POST['program'];
    $total = $_POST['total'];
    $metode = $_POST['metode'];

    // Validate the form data (e.g., check for empty fields, validate email format, etc.)
    // ...

    // Insert data into the tdaftar table
    $sql = "INSERT INTO tdaftar (nama, email, no_hp, asal_sekolah, tgl_lahir, semester, jenjang, domisili, program_bimbel, nama_ortu, no_hp_ortu, total_biaya, metode_bayar) 
            VALUES ('$name', '$email', '$phone', '$school', '$birthdate', '$semester', '$jenjang','$city', '$program', '$parentName', '$parentPhone','$total','$metode')";

    if (mysqli_query($conn, $sql)) {
        // Registration successful
        mysqli_close($conn);

        // Redirect to a success page or display a success message using JavaScript
        echo '<script>alert("Pendaftaran Berhasil. anda akan diarahkan ke halaman pembayaran"); 
              window.location.href = "succes.php";</script>';
        exit();
    } else {
        // Registration failed
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);

// Flush the output buffer and send it to the browser
ob_end_flush();
?>
    </div>
</body>
</html>