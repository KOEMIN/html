<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Keliling Lingkaran</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            min-width: 350px;
        }

        .lingkaran {
            border: 2px solid #3498db;
            border-radius: 50%;
            margin: 20px auto;
            position: relative;
            overflow: hidden;
        }

        .lingkaran::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            background-color: #e74c3c;
            top: 50%;
            transform: translateY(-50%);
        }

        form {
            width: 100%;
        }

        label,
        input,
        button {
            display: block;
            margin-bottom: 10px;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: magenta;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Hitung Keliling Lingkaran</h2>
        <form method="post">
            <label for="jari_jari">Jari-jari (cm):</label>
            <input type="number" name="jari_jari" id="jari_jari" required>
            <button type="submit">Hitung</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $jari_jari = $_POST["jari_jari"];
            $keliling = 2 * 3.14 * $jari_jari;

            echo "<p>Keliling lingkaran dengan jari-jari " . $jari_jari . " cm adalah: " . round($keliling, 2) . " cm</p>";
            echo "<div class='lingkaran' style='width: " . (2 * $jari_jari) . "px; height: " . (2 * $jari_jari) . "px;'></div>";
        }
        ?>
    </div>
</body>

</html>