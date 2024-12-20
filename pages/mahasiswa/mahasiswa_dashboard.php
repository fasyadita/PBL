<?php
session_start();

// Cek apakah pengguna sudah login dan memiliki role 'mahasiswa'
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'mahasiswa') {
    header('Location: ../login.php'); // Arahkan ke halaman login jika bukan mahasiswa
    exit;
}
// Menambahkan fitur logout
if (isset($_GET['logout'])) {
    session_destroy();  // Hapus sesi
    header('Location: http://localhost/PBL/login.php'); // Arahkan ke halaman login setelah logout
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa Dashboard</title>
    <link rel="stylesheet" href="../view/style/Mahasiswacss.css">
</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <a class="navbar-brand" href="#"></a>
        <img src="../view/img/jti.png">
        <p>Sistem Informasi Tata Tertib</p>
        <span class="navbar-toggler-icon"></span>
    </nav>

    <div class="container">

        <!-- Sidebar -->
        <div class="sidebar">
            <div class="logo"></div>
            <div class="user-info">
                <img src="../view/img/siswi1.jpeg" alt="Foto Mahasiswa">
                <table>
                    <tr>
                        <td>Nama Mahasiswa</td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                    </tr>
                </table>
                <br>
            </div>
            <ul class="menu">
                <p>MAIN MENU</p>
                <li>Periode: 2024/2025</li>
                <li>Dashboard</li>
                <li>Riwayat Pelanggaran</li>
                <li>Ganti Password</li>
                <li><a href="?logout=true">Logout</a></li> <!-- Menambahkan link logout -->
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header1">
                <h1>Dashboard</h1>
            </div>
            <div class="notif">
                <h4>Notifikasi!</h4>
                    <div class="garis"></div>
                    <p> Halo! Vera Efita Hudi Putri, kamu mendapatkan laporan pelanggaran</p>
                </div>
            <div class="content">
                
                <h2>Informasi Mahasiswa</h2>
                <p class="info">Info! Berikut adalah biodata diri anda</p>
                
                <div class="biodata">
                    <img src="../view/img/siswi1.jpeg" alt="Foto Mahasiswa">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>: Vera Efita Hudi Putri</td>
                        </tr>
                        <tr>
                            <td>NIM</td>
                            <td>: 2341760047</td>
                        </tr>
                        <tr>
                            <td>TTL</td>
                            <td>: Tuban, 22 September 2004</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: Perempuan</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: jln. Senggani no 43D</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>: efitaraa22@gmail.com</td>
                        </tr>
                    </table>
                </div>
                <div class="buttons">
                    <button>Print</button>
                    <button>PDF</button>
                </div>
                
            </div>
            
        </div>
    </div>
    </div>
</body>

</html>
