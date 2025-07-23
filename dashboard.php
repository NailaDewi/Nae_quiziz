<?php
session_start();
if (!isset($_SESSION['role'])) {
    header("Location: login.php");
    exit();
}
$nama = $_SESSION['nama'];
$role = $_SESSION['role'];
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Dashboard - e-Quiziz</title>
    <style>
        :root {
            --latte: #f6efe9;
            --pink: #f8cfd5;
            --blue: #E7CCCC;
            --text-dark: #333;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, var(--latte), var(--blue));
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .dashboard-box {
            background-color: #ffffffcc;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
            text-align: center;
            width: 420px;
            border: 1px solid #eee;
        }

        h2 {
            color: var(--text-dark);
            margin-bottom: 25px;
        }

        .menu a {
            display: block;
            margin: 12px auto;
            padding: 12px 20px;
            background-color: var(--pink);
            color: white;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            width: 80%;
            transition: background-color 0.3s ease;
        }

        .menu a:hover {
            background-color: #f5b1bd;
        }

        .logout {
            margin-top: 25px;
            font-size: 0.9em;
        }

        .logout a {
            color: #5a9eea;
            text-decoration: none;
        }

        .logout a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="dashboard-box">
        <h2>Selamat Datang, <strong><?= htmlspecialchars($nama) ?></strong>!</h2>

        <div class="menu">
            <?php if ($role == 'admin'): ?>
                <a href="admin/soal.php">📚 Kelola Soal</a>
                <a href="admin/users.php">👥 Daftar User</a>
                <a href="admin/hasil.php">📊 Hasil Ujian</a>
            <?php else: ?>
                <a href="siswa/ujian.php">📝 Mulai Ujian</a>
                <a href="siswa/hasil_siswa.php">📈 Hasil Saya</a>
            <?php endif; ?>
            <a href="panduan.php">📘 Panduan Ujian</a>
        </div>


        <div class="logout">
            <a href="logout.php">🔓 Logout</a>
        </div>
    </div>
</body>

</html>