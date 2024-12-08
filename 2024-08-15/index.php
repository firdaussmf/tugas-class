<?php
    require_once("content.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $sekolah; ?></title>
</head>
<body>
    <h1><?= $judul; ?></h1>
    <p><?= $isi; ?></p>
    <hr>
    <h1><?= $jadwal; ?></h1>
    <table border="1">
        <thead>
            <tr>
                <th><?= $hari[0];?></th>
                <th><?= $hari[1];?></th>
                <th><?= $hari[2];?></th>
                <th><?= $hari[3];?></th>
                <th><?= $hari[4];?></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $pelajaran[10];?></td>
                <td><?= $pelajaran[4];?></td>
                <td><?= $pelajaran[7];?></td>
                <td><?= $pelajaran[3];?></td>
                <td><?= $pelajaran[2];?></td>
            </tr>
            <tr>
                <td><?= $pelajaran[7];?></td>
                <td><?= $pelajaran[1];?></td>
                <td><?= $pelajaran[0];?></td>
                <td><?= $pelajaran[11];?></td>
                <td><?= $pelajaran[12];?></td>
            </tr>
            <tr>
                <td><?= $pelajaran[7];?></td>
                <td><?= $pelajaran[8];?></td>
                <td><?= $pelajaran[10];?></td>
                <td><?= $pelajaran[6];?></td>
                <td><?= $pelajaran[5];?></td>
            </tr>
            <tr>
                <td><?= $pelajaran[1];?></td>
                <td><?= $pelajaran[5];?></td>
                <td><?= $pelajaran[3];?></td>
                <td><?= $pelajaran[7];?></td>
                <td><?= $pelajaran[7];?></td>
            </tr>
            <tr>
                <td><?= $pelajaran[7];?></td>
                <td><?= $pelajaran[3];?></td>
                <td><?= $pelajaran[5];?></td>
                <td><?= $pelajaran[0];?></td>
                <td><?= $pelajaran[12];?></td>
            </tr>
        </tbody>
    </table>

    <hr>
    <img src="images/<?= $gambar[0];?>" width="250" alt="">
</body>
</html>