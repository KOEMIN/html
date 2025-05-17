<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="244311052">
    <meta name="author" content="Muhammad Raufa Hafid Widodo">
    <title>Upload File</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data">
        <p><label>Pilih gambar yang akan diupload: </label><br>
            <input type="file" name="gambar" value="Pilih gambar" id="gambar">
        </p>
        <input type="submit" value="Upload gambar" name="submit">
    </form>

    <?php
if (isset($_POST['submit'])) {
    if (isset($_FILES['gambar']) && $_FILES['gambar']['tmp_name'] != "") {
        $target_dir = 'gambar/';
        $target_file = $target_dir . basename($_FILES['gambar']['name']);
        $uploadOk = 1;
        $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Cek apakah file adalah gambar asli
        $check = getimagesize($_FILES['gambar']['tmp_name']);
        if ($check !== false) {
            echo "File berupa gambar - " . $check['mime'] . ".<br>";
            $uploadOk = 1;
        } else {
            echo "File bukan gambar.<br>";
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            echo "Maaf, file sudah ada.<br>";
            $uploadOk = 0;
        }

        if ($_FILES['gambar']['size'] > 500000) {
            echo "Maaf, ukuran file terlalu besar.<br>";
            $uploadOk = 0;
        }

        if (!in_array($tipeGambar, ['jpg', 'png', 'jpeg', 'gif'])) {
            echo "Maaf, hanya format JPG, JPEG, PNG, dan GIF yang diperbolehkan.<br>";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            echo "File tidak berhasil diupload.<br>";
        } else {
            if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target_file)) {
                echo "File " . htmlspecialchars(basename($_FILES['gambar']['name'])) . " berhasil diupload.";
            } else {
                echo "Terjadi kesalahan saat mengupload file.";
            }
        }
    } else {
        echo "Tidak ada file yang dipilih.<br>";
    }
}
?>

</body>

</html>
