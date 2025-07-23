<?php
session_start();
include "config/koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$pass'");
    $data = mysqli_fetch_assoc($query);

    if ($data) {
        $_SESSION['id'] = $data['id'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['role'] = $data['role'];
        header("Location: dashboard.php");
    } else {
        $error = "Login gagal! Username atau password salah.";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - e-Quiziz</title>
    <style>
        :root {
            --latte: #f6efe9;
            --pink: #f8cfd5;
            --blue: #E7CCCC;
            --text-dark: #444;
            --box-shadow: rgba(0, 0, 0, 0.05);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, sans-serif;
            background: linear-gradient(145deg, var(--latte), var(--blue));
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            background: #ffffffcc;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 20px var(--box-shadow);
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
            color: #fff;
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

        .error {
            background-color: #ffe6e9;
            color: #b3364a;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 8px;
            font-size: 0.9em;
        }

        a {
            display: inline-block;
            margin-top: 15px;
            font-size: 0.9em;
            color: #5588aa;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Masuk ke e-Quiziz</h2>
        <?php if (!empty($error)) echo "<div class='error'>$error</div>"; ?>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <a href="index.php">← Kembali ke Beranda</a>
    </div>
</body>
</html>
