<?php
session_start();
include "../config/koneksi.php";
if ($_SESSION['role'] != 'siswa') exit("Akses ditolak!");

if (isset($_POST['submit'])) {
    $benar = 0;
    $salah = 0;

    $soal = mysqli_query($conn, "SELECT * FROM soal");
    $jumlah_soal = mysqli_num_rows($soal);

    while ($row = mysqli_fetch_assoc($soal)) {
        $id = $row['id'];
        $jawaban = strtoupper($_POST["jawab_$id"] ?? '');
        if ($jawaban == strtoupper($row['jawaban'])) {
            $benar++;
        } else {
            $salah++;
        }
    }

    $nilai = round(($benar / $jumlah_soal) * 100);
    $durasi = $_POST['durasi'] ?? 0; // dalam detik

    $id_user = $_SESSION['id'];
    mysqli_query($conn, "INSERT INTO hasil (id_user, benar, salah, nilai, waktu) VALUES ($id_user, $benar, $salah, $nilai, $durasi)");

    header("Location: selesai.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Ujian Online - e-Quiziz</title>
    <style>
        :root {
            --latte: #f6efe9;
            --pink: #f9d7e1;
            --blue: #E7CCCC;
            --gray: #f9f9f9;
            --dark: #444;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(to right, var(--latte), var(--blue));
            color: var(--dark);
        }

        .container {
            max-width: 800px;
            margin: 40px auto;
            background-color: #ffffffdd;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.05);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 2em;
            color: #333;
        }

        .soal {
            margin-bottom: 25px;
            background-color: var(--gray);
            border-left: 6px solid var(--pink);
            padding: 20px;
            border-radius: 10px;
        }

        .soal p {
            margin: 0 0 10px;
        }

        .soal label {
            display: block;
            margin: 6px 0;
            cursor: pointer;
        }

        .soal input[type="radio"] {
            margin-right: 8px;
        }

        button[name="submit"] {
            display: block;
            margin: 30px auto 0;
            padding: 12px 30px;
            background-color: var(--pink);
            color: white;
            border: none;
            font-size: 1em;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[name="submit"]:hover {
            background-color: #f3bfc9;
        }

        #timer {
            font-weight: bold;
            font-size: 18px;
            color: #d9534f;
            margin-bottom: 15px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>📝 Ujian Online</h2>
        <form method="post" id="formUjian">
            <input type="hidden" name="durasi" id="durasi">
            <div id="timer">Memulai timer...</div>

            <?php
            $no = 1;
            $data = mysqli_query($conn, "SELECT * FROM soal");
            while ($d = mysqli_fetch_assoc($data)):
            ?>
                <div class="soal">
                    <p><strong><?= $no++ ?>. <?= htmlspecialchars($d['soal']) ?></strong></p>
                    <label><input type="radio" name="jawab_<?= $d['id'] ?>" value="A"> A. <?= htmlspecialchars($d['a']) ?></label>
                    <label><input type="radio" name="jawab_<?= $d['id'] ?>" value="B"> B. <?= htmlspecialchars($d['b']) ?></label>
                    <label><input type="radio" name="jawab_<?= $d['id'] ?>" value="C"> C. <?= htmlspecialchars($d['c']) ?></label>
                    <label><input type="radio" name="jawab_<?= $d['id'] ?>" value="D"> D. <?= htmlspecialchars($d['d']) ?></label>
                </div>
            <?php endwhile; ?>
            <button name="submit">Selesai Ujian</button>
        </form>
    </div>

    <script>
        let totalSeconds = 1800; // 30 menit
        let timerDisplay = document.getElementById('timer');
        let durasiInput = document.getElementById('durasi');

        function updateTimer() {
            let minutes = Math.floor(totalSeconds / 60);
            let seconds = totalSeconds % 60;
            timerDisplay.innerHTML = `Sisa waktu: ${minutes} menit ${seconds} detik`;
            durasiInput.value = 1800 - totalSeconds;

            if (totalSeconds <= 0) {
                clearInterval(countdown);
                alert("Waktu habis! Ujian akan disubmit otomatis.");
                document.getElementById('formUjian').submit();
            }

            totalSeconds--;
        }

        let countdown = setInterval(updateTimer, 1000);
    </script>
</body>
</html>
