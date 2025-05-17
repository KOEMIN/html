<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Hari</title>
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
            width: 300px;
        }

        .hari-list {
            list-style-type: none;
            padding: 0;
        }

        .hari-list li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .hari-list li:last-child {
            border-bottom: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Daftar Hari</h2>
        <ul class="hari-list">
            <?php
            $hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");

            foreach ($hari as $h) {
                echo "<li>" . $h . "</li>";
            }
            ?>
        </ul>
    </div>
</body>

</html>