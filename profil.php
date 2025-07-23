<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Profil Sekolah</title>
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
            text-align: center;
        }

        h2 {
            font-size: 2em;
            margin-bottom: 20px;
            color: #4a4a4a;
        }

        p {
            line-height: 1.6;
            margin-bottom: 12px;
        }

        .btn {
            display: inline-block;
            text-decoration: none;
            background-color: var(--pink);
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 1em;
            margin: 10px 5px 0 5px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
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
        <h2>🏫 Profil Sekolah</h2>
        <p><strong>Nama:</strong> SMKN 2 Padang</p>
        <p><strong>Alamat:</strong> Jl. Dr. Sutomo No. 5, Kel. Simpang Haru, Kec. Padang Timur, Padang, Sumatera Barat</p>
        <p><strong>Visi:</strong> Terwujudnya Lulusan Berkarakter, Terampil, dan Berwawasan Global Serta Berbudaya Lingkungan</p>
        <a class="btn" href="http://smkn2padang.sch.id/" target="_blank">🌐 Website Sekolah</a>
        <a class="btn" href="index.php">🏠 Kembali ke Beranda</a>
    </div>
</body>
</html>
