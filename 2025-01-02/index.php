<?php 

function halo($nama, $kelas):void{
    echo "Halo Dunia! Saya $nama $kelas";
    echo "<br>";
}
halo( "rizkyan",kelas: "XI rpl");
halo(nama:"andre", kelas:"X rpl");
halo(nama :"daus", kelas: "X rpl");
halo(nama :"aril",kelas: "XI RPL");
halo(nama :"shizo", kelas: "X RPL");
halo(nama :"rehan", kelas: "XI rpl");

function tambah ($a, $b):mixed{
    return $a + $b;
    }
    $hasil = tambah(10, 20);
    echo $hasil;

function sapa ($nama ="rizkyan"):void{
    echo "Halo $nama";
}
echo "<br>";
sapa();
sapa ("rizkyan");

// function faktorial ($n):int {
//     if ($n = 0 || $n = 1) {
//         return1;
//     } else {
//         return $n * faktorial($n - 1);
//     }
//     }
//     echo faktorial($n);

    
    
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <h1>Kalkulator Sederhana</h1>
    <form method="post" action="">
        <input type="number" name="angka1" placeholder="Masukkan angka pertama" required>
        <select name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">×</option>
            <option value="bagi">÷</option>
        </select>
        <input type="number" name="angka2" placeholder="Masukkan angka kedua" required>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];

        function kalkulator($a, $b, $op) {
            switch ($op) {
                case 'tambah':
                    return $a + $b;
                case 'kurang':
                    return $a - $b;
                case 'kali':
                    return $a * $b;
                case 'bagi':
                    return $a / $b;
                default:
                    return "Operasi tidak valid";
            }
        }

        $hasil = kalkulator($angka1, $angka2, $operasi);
        echo "<h2>Hasil: $hasil</h2>";
    }
    ?>
</body>
</html>