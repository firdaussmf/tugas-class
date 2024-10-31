<?php 
$identitas = ["nama"=>"M fathoni firdaus",
"Alamat"=>"SIdokerto",
"Telepon"=>"089673202333",
"Email"=>"dausganteng@gmail.com",
"fb"=>"dausGG",
"ig"=>"dausGACOR",
"tiktok"=>"fufufafa"];

$sekolah = ["tk"=>"Darussalam",
"sd"=>"sidokerto",
"smp"=>"smp pgri 1",
"smk"=>"smkn 2 buduran,",
"S1"=>"Unesa",
"S2"=>"unair",
"S3"=>"ITS"];

$hobi = ["ngaji","makan"];

$skil = ["c++"=>"Expert",
"Html"=>"Newbie",
"Css"=>"Intermediate",
"PHP"=>"newbie"];

$deskripsi = "Saya adalah seorang yang jago dalam banyak hal <br>
Saya rajin sholat dan ingin masuk surga <br>
Saya suka bangun pagi <br>
Saya tidak suka begadang <br>
Saya hebat dalam bermain game dan GG GAMING";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar riwayat hidup</title>
    <style>
        
        .container {
            width: 800px;
            margin: auto;
            /* display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center; */
        }

        /* table {
            margin: 10px auto;
            border-collapse: collapse;
            width: 80%;
        }

        th, td {
            padding: 8px;
            border: 1px solid #000;
        } */
    </style>
</head>
<body>
    <div class="container">
        <h1>Daftar Riwayat Hidup</h1>
        <h2>Data Diri </h2>
        <table border="1px">
            <thead>
                <tr>
                    <th>Data</th>
                    <th>Deskripsi</th>
                </tr>
                <tbody>
                    <?php 
                        foreach ($identitas as $key => $value) {
                            ?>
                            <tr>
                                <td><?= $key ?></td>
                                <td><?= $value?></td>
                            </tr>
                            <?php
                        }
                    ?>
                </tbody>
            </thead>
        </table>
        <hr>
        <h2>Riwayat Pendidikan</h2>
            <table border="1px">
                <thead>
                    <tbody>
                        <tr>
                            <th>Pendidikan</th>
                            <th>Nama Sekolah</th>
                        </tr>
                        <?php 
                            foreach ($sekolah as $key => $value) {
                                ?>
                                <tr>
                                    <td><?= $key ?></td>    
                                    <td><?= $value ?></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </thead>
            </table>
            <hr>
            <h2>skil coding</h2>
            <table border="1px">
                <thead>
                    <tbody>
                        <tr>
                            <th>skil</th>
                            <th>Level</th>
                        </tr>
                        <?php 
                            foreach ($skil as $key => $value) {
                                ?>
                                <tr>
                                    <td><?= $key?></td>
                                    <td><?= $value?></td>
                                </tr>
                                <?php
                            }
                        ?>
                    </tbody>
                </thead>
            </table>
            <hr>
            <h2>hoby</h2>
                <ul>
            <?php 
                foreach ($hobi as $key) {
                    ?>
                        <li><?= $key ?></li>
            <?php
                }
                ?></ul>
            <hr>
            <h2>tetang aku</h2>
            <p><?= $deskripsi ?></p>
        </div>
</body>
</html>