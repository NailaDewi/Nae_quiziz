<?php
session_start();
include "../config/koneksi.php";

if (!isset($_SESSION['id']) || $_SESSION['role'] != 'siswa') {
    header("Location: ../login.php");
    exit();
}

$id = $_SESSION['id'];
$data = mysqli_query($conn, "SELECT * FROM hasil WHERE id_user=$id ORDER BY id DESC LIMIT 1");
$row = mysqli_fetch_assoc($data);

// Konversi waktu pengerjaan ke format menit:detik
$durasi = (int) $row['waktu'];
$menit = floor($durasi / 60);
$detik = $durasi % 60;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Ujian - e-Quiziz</title>
    <style>
        :root {
            --latte: #f8f4ef;
            --pink: #f7d5dd;
            --blue: #E7CCCC;
            --gray: #f2f2f2;
            --dark: #333;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, var(--latte), var(--blue));
            color: var(--dark);
        }

        .container {
            max-width: 600px;
            margin: 80px auto;
            padding: 40px;
            background-color: white;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
        }

        h2 {
            font-size: 2.2em;
            margin-bottom: 30px;
            color: #444;
        }

        .score-box {
            background-color: var(--pink);
            border-radius: 10px;
            padding: 20px;
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .score-box p {
            margin: 10px 0;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: white;
            background-color: #9abdc6;
            padding: 12px 25px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #88acb7;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📋 Hasil Ujian Anda</h2>
        <div class="score-box">
            <p>✅ Benar: <strong><?= $row['benar'] ?></strong></p>
            <p>❌ Salah: <strong><?= $row['salah'] ?></strong></p>
            <p>🏆 Nilai: <strong><?= $row['nilai'] ?></strong></p>
            <p>⏱ Waktu Pengerjaan: <strong><?= $menit ?> menit <?= $detik ?> detik</strong></p>
        </div>
        <a href="../dashboard.php">⬅ Kembali ke Dashboard</a>
    </div>
</body>
</html>
