<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Nilai Huruf</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: gray;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .input-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            min-width: 300px;
            height: 200px;
        }

        .result-card {
            background-color: gray;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 200px;
            height: 200px;
            display: flex;
            flex-direction: column;
            text-align: center;
            align-items: center;
            justify-content: center;
        }

        form {
            width: 100%;
        }

        label,
        input,
        button {
            display: block;
            margin-bottom: 10px;
            width: calc(100%);
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: mediumseagreen;
            color: white;
            border: none;
            cursor: pointer;
        }

        .predikat {
            font-size: 2em;
            font-weight: bold;
            background-color: #3498db;
            padding: 2px;
            width: 40px;
            height: 40px;
            border-radius: 20px;
        }

        .nilai-besar {
            font-size: 5em;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="input-form">
            <h2>Konversi Nilai Huruf</h2>
            <form method="post">
                <label for="nilai">Nilai Angka:</label>
                <input type="number" name="nilai" id="nilai" required>
                <button type="submit">Konversi</button>
            </form>
        </div>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai = $_POST["nilai"];

            if ($nilai >= 0 && $nilai <= 100) {
                if ($nilai >= 90) {
                    $huruf = "A";
                } elseif ($nilai >= 80) {
                    $huruf = "B";
                } elseif ($nilai >= 70) {
                    $huruf = "C";
                } elseif ($nilai >= 60) {
                    $huruf = "D";
                } else {
                    $huruf = "E";
                }

                echo "<div class='result-card'>";
                echo "<p class='predikat'>" . $huruf . "</p>";
                echo "<p class='nilai-besar'>" . $nilai . "</p>";
                echo "</div>";
            } else {
                echo "<p style='color: red;'>Nilai harus antara 0 dan 100.</p>";
            }
        }
        ?>
    </div>
</body>

</html>