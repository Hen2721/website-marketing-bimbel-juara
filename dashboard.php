<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel Dashboard</title>
</head>
<body>
    <!-- Header -->
    <header>
        <h1>Admin Panel Dashboard</h1>
    </header>

    <!-- Sidebar/Menu -->
    <aside>
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="daftar_siswa.php">Daftar Siswa</a></li>
            <li><a href="konfirmasi_siswa.php">Konfirmasi Siswa</a></li>
            <li><a href="edit_informasi.php">Edit Informasi</a></li>
        </ul>
    </aside>

    <!-- Content Area -->
    <main>
        <?php
        // Check the requested page and include the corresponding file
        $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';
        
        switch ($page) {
            case 'dashboard':
                include 'dashboard.php';
                break;
            case 'daftar_siswa':
                include 'daftar_siswa.php';
                break;
            case 'konfirmasi_siswa':
                include 'konfirmasi_siswa.php';
                break;
            case 'edit_informasi':
                include 'edit_informasi.php';
                break;
            default:
                include 'dashboard.php';
                break;
        }
        ?>
    </main>
</body>
</html>
