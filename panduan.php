<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Panduan Ujian</title>
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
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #ffffffcc;
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.05);
            border: 1px solid #eee;
            max-width: 600px;
        }

        h2 {
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
            color: #4a4a4a;
        }

        ol {
            padding-left: 20px;
        }

        li {
            margin-bottom: 12px;
            line-height: 1.6;
        }

        a.back {
            display: inline-block;
            text-decoration: none;
            background-color: var(--pink);
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 1em;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        a.back:hover {
            background-color: #f5b1bd;
        }

        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h2 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📘 Panduan Ujian Online</h2>
        <ol>
            <li>Login menggunakan akun yang telah terdaftar.</li>
            <li>Baca instruksi pada halaman ujian dengan teliti.</li>
            <li>Durasi ujian adalah 30 menit dan akan berhenti otomatis.</li>
            <li>Setiap soal hanya bisa dijawab sekali dan tidak bisa diubah.</li>
            <li>Hasil ujian langsung ditampilkan setelah selesai.</li>
        </ol>
        <div style="text-align:center;">
            <a href="dashboard.php" class="back">← Kembali ke Dashboard</a>
        </div>
    </div>
</body>
</html>
