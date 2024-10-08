selesaikan perhitungnan ini 5 +3 * 7 / 4 - 9 % 8 menggunkana function
<?php

   

$x = modulo(7,5);
$x = tambah($x, kali(8,4)); 
$y = bagi(9,3);
$z = kurang($x ,$y);
echo $z;

echo "<br>";
// $hsil = tambah (a:5 b: kali(a: 3,b:7));
// $hasil = bagi (a:$hasil,b:4);
// $hasil =kurang(a:$hasil, b:9);

    function kali($a, $b) {
        $c = $a * $b;
        return $c;
    }
    echo "<br>";

    echo kali(5,2) + 5;

    echo "<br>";

    function tambah($q, $l) {
        $r = $q + $l;
        return $r;
    }
    echo tambah(7,10)* 7 / 4 - 9 % 8;

    echo "<br>";

    function kurang($f, $g) {
        $e = $f - $g;
        return $e;
    }
    kurang(99,1);

    echo "<br>";

    function bagi($x, $p) {
        $o = $x / $p;
        return $o;
    }
    bagi(15,3);

    echo "<br>";

    function modulo($a, $b) {
        $c = $a % $b;
        return $c;
    }
    modulo (5,3);

?>