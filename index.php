<?php
session_start();
if (isset($_SESSION['role'])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>e-Quiziz</title>
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, var(--latte), var(--blue));
            margin: 0;
            padding: 0;
            color: var(--text-dark);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            background-color: #ffffffcc;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.05);
            border: 1px solid #eee;
        }

        h1 {
            font-size: 2.8em;
            margin-bottom: 30px;
            font-weight: 600;
            color: #4a4a4a;
        }

        a {
            display: inline-block;
            text-decoration: none;
            background-color: var(--pink);
            color: #fff;
            padding: 12px 24px;
            border-radius: 10px;
            font-size: 1.1em;
            margin: 10px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #f5b1bd;
        }

        footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2em;
            }
            a {
                font-size: 1em;
                padding: 10px 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Selamat Datang di <strong>Nae-Quiziz</strong></h1>
    <a href="login.php">🔐 Login</a>
    <a href="register.php">📝 Daftar Siswa</a>
    <a href="profil.php">🏫 Profil Sekolah</a>
    <footer>&copy; <?= date('Y') ?> e-Quiziz - Sistem Ujian Online</footer>
</div>

</body>
</html>
