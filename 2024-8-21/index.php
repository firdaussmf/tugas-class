<?php
require_once("content.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Title</title>
</head>
<body>
    <img src="images/<?= $gambar; ?>" alt="">
    <img src="images/<?= $gambars[1]; ?>" alt="">
    <?php
        foreach ($gambars as $key) {
            echo "<h1>gambar</h>";
            echo "<img src='images/$key' alt=''>";
            echo '<img src="images/' . $key . '"alt="">';
        }
    ?>
</body>
</html>