<?php
for ($i=1; $i <= 10 ; $i++) {
    echo $i; 
 
}

echo "<br>";
for ($i=10; $i <= 1 ; $i++) { 
    echo $i;

}
echo "<br>";
$ganjil = 5&2;
echo $ganjil;

echo "<br>";
for ($i=1; $i <=100 ; $i++) { 

        $ganjil = $i & 2;
        if ($ganjil) {
            echo $ganjil=0;
        }
}
echo "<br>";
$kkn = 80;
$nilai =85 ;
if ($nilai > $kkn) {
    echo "lulus";
    # code...
}
else {
    echo "tidak lulus";
}

echo "<br>";
$status = "tidak lulus";

if ($nilai > $kkn) {
    $status = "lulus";
}

echo $status;
echo "<br>";

    $raport = 0;
    $tugas = 0;

    if ($tugas ==1) {
        $raport = 80;
    }

    echo $raport;
    echo "<br>";

    $bulan = 1;
    $tanggal = 5;

    $keterangan = "salah";

    if ($bulan > 0 ) {
        $keterangan = "benar";
        if ($tanggal > 0) {
            $keterangan = "benar";
        }
    }

    echo $keterangan;
?>