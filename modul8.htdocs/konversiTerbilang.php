<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angka ke Terbilang</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #e0f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        label,
        input,
        button {
            display: block;
            margin: 15px auto;
            width: 80%;
            padding: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #4caf50;
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            padding: 20px;
            background-color: #d1e8fe;
            /* Warna latar belakang yang berbeda */
            border-radius: 8px;
            border: 2px solid #a3c2eb;
            /* Border yang lebih menonjol */
            text-align: center;
            /* Teks di tengah */
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.1);
            /* Efek bayangan */
        }

        .result p {
            margin: 8px 0;
            font-size: 1.1em;
            /* Ukuran font sedikit lebih besar */
        }

        .result strong {
            font-size: 1.3em;
            /* Ukuran font terbilang lebih besar */
            color: #336699;
            /* Warna teks terbilang */
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Angka ke Terbilang</h2>
        <form method="post">
            <label for="angka">Masukkan Angka (1-9):</label>
            <input type="number" name="angka" id="angka" min="1" max="9" required>
            <button type="submit">Konversi</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $angka = $_POST["angka"];

            switch ($angka) {
                case 1:
                    $terbilang = "satu";
                    break;
                case 2:
                    $terbilang = "dua";
                    break;
                case 3:
                    $terbilang = "tiga";
                    break;
                case 4:
                    $terbilang = "empat";
                    break;
                case 5:
                    $terbilang = "lima";
                    break;
                case 6:
                    $terbilang = "enam";
                    break;
                case 7:
                    $terbilang = "tujuh";
                    break;
                case 8:
                    $terbilang = "delapan";
                    break;
                case 9:
                    $terbilang = "sembilan";
                    break;
                default:
                    $terbilang = "Angka di luar jangkauan";
            }

            echo "<div class='result'>";
            echo "<p>Angka: " . $angka . "</p>";
            echo "<p>Terbilang: <strong>" . $terbilang . "</strong></p>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>