<?php
include '../koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    // Update status in tdaftar table
    $updateQuery = "UPDATE tdaftar SET status = 'Confirmed' WHERE id_daftar = '$id'";
    $conn->query($updateQuery);

    // Insert data into tpendaftaran table
    $studentQuery = "SELECT nama FROM tdaftar WHERE id_daftar = '$id'";
    $studentResult = $conn->query($studentQuery);
    $studentData = $studentResult->fetch_assoc();

    $nama = $studentData['nama'];
    $insertQuery = "INSERT INTO tpendaftaran (id_siswa, nama, status) VALUES ('$id', '$nama', 'Confirmed')";
    $conn->query($insertQuery);

    echo json_encode(array('success' => true));
} else {
    echo json_encode(array('success' => false));
}

$conn->close();
?>
