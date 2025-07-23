<?php
include "config/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($conn, "INSERT INTO users (nama, username, password, role) VALUES ('$nama', '$username', '$password', 'siswa')");
    $sukses = true;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Registrasi - e-Quiziz</title>
    <style>
        :root {
            --latte: #f6efe9;
            --pink: #f8cfd5;
            --blue: #E7CCCC;
            --text-dark: #333;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(145deg, var(--latte), var(--blue));
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .register-box {
            background-color: #ffffffcc;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
            width: 360px;
            text-align: center;
            border: 1px solid #eee;
        }

        h2 {
            margin-bottom: 25px;
            color: var(--text-dark);
            font-weight: 600;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1.5px solid #ddd;
            border-radius: 10px;
            background-color: #fffdfc;
            transition: border-color 0.3s ease;
            font-size: 14px;
        }

        input:focus {
            border-color: var(--pink);
            outline: none;
        }

        button {
            background-color: var(--pink);
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #f5b1bd;
        }

        .success {
            background-color: #e8fce8;
            border: 1px solid #a3dca3;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 8px;
            color: #3a833a;
            font-size: 0.95em;
        }

        a {
            color: #5a9eea;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .back {
            margin-top: 15px;
            display: inline-block;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <div class="register-box">
        <h2>📝 Registrasi Siswa</h2>
        <?php if (!empty($sukses)) : ?>
            <div class="success">
                Registrasi berhasil! <a href='login.php'>Klik untuk login</a>
            </div>
        <?php endif; ?>
        <form method="post">
            <input type="text" name="nama" placeholder="Nama Lengkap" required><br>
            <input type="text" name="username" placeholder="Username" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit">Daftar</button>
        </form>
        <div class="back">
            <a href="index.php">← Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>
