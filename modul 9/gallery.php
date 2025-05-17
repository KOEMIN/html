<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galerry</title>
</head>
<style>
    .galerry{
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
    }
    .galerry img{
        width: 200px;
        height: 150px;
        object-fit: cover;
        border: 2px solid #ccc;
        border-radius: 5px;
    }
</style>
<body>
    <h2>Galery Gambar</h2>
    <div class="galerry">
  <?php
$fileList = glob('gambar/*');
foreach ($fileList as $filename) {
    if (is_file($filename)) {
        echo '<img src="' . $filename . '" alt="gambar" style="width:200px; height:150px; margin:10px;">';
    }
}
?>

        ?>
    </div>
    
</body>
</html>