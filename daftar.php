<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Daftar Bimbel</title>
    <!---Custom CSS File--->
    <link rel="stylesheet" href="daftar.css" />
  </head>
<body>
    <section class="container">
      <header>Form Registrasi Bimbel</header>
      <form action="daftar.php" method="POST" class="form">
        <div class="input-box">
          <label>Nama Lengkap</label>
          <input type="text" name="nama" placeholder="Masukan Nama Lengkap " required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text"  name="email" placeholder="Alamat E-mail anda" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Nomor HP</label>
            <input type="number" name="nomor" placeholder="Nomor Handphone" required />
          </div>
          <div class="input-box">
            <label>Tanggal Lahir</label>
            <input type="date"  name="tanggal" placeholder="Tanggal Lahir Anda" required />
          </div>
        </div>
                <div class="gender-box">
        <h3>Jenjang Pendidikan</h3>
        <div class="gender-option">
            <div class="gender">
            <input type="radio" id="check-male" name="tahun" value="TK" checked />
            <label for="check-male">TK</label>
            </div>
            <div class="gender">
            <input type="radio" id="check-female" name="tahun" value="SD" />
            <label for="check-female">SD</label>
            </div>
            <div class="gender">
            <input type="radio" id="check-other" name="tahun" value="SMP" />
            <label for="check-other">SMP</label>
            </div>
        </div>
        </div>

        
        <div class="input-box address">
          <label>Data Akademik</label>
          <input type="text"  name="asal" placeholder="Asal Sekolah" required />
          <div class="column">
            <div class="select-box">
              <select name="semester">
                <option hidden>Pilih Semester</option>
                <option>Ganjil</option>
                <option>Genap</option>
              </select>
            </div>
            <div class="select-box">
              <select name="program">
                <option hidden>Pilih Program Bimbel</option>
                <option>Online</option>
                <option>Offline</option>
              </select>
            </div>
            
          </div>
          <div class="column">
            <input type="text" name="kota" placeholder="Kota Asal" required />
            <input type="text" name="ortu" placeholder="Nama Orang Tua" required />
            <input type="number" name="ortunomor" placeholder="Nomor Orang Tua" required />
          </div>
          <div class="select-box">
            <select name="metode">
              <option hidden>Pilih Metode Pembayaran</option>
              <option>Transfer</option>
              <option>Cash on Delivery</option>
            </select>
          </div>
  
          <input type="text" name="total" placeholder="Total Biaya" required />
        </div>
        <input type="submit" value="Daftar Bimbel">
      </form>
    </section>
</body>
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
    $birthdate = $_POST['tanggal'];
    $school = $_POST['asal'];
    $jenjang = $_POST['tahun'];
    $semester = $_POST['semester'];
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

</html>