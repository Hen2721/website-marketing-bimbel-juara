<?php
include '../koneksi.php';

$query = "SELECT * FROM tdaftar";
$result = $conn->query($query);

$students = [];
while ($row = $result->fetch_assoc()) {
    $students[] = $row;
}

echo json_encode($students);
$conn->close();
?>
