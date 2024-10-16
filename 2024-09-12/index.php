
<form action="" method="POST">
<input type="text" name="name" placeholder="masukan nama" >
<input type="text" name="alamat" placeholder="masukan alamat" >
<input type="email" name="email"placeholder="amasukan email" >
<input type="password" name="password"placeholder="masukan password" >
<input type="number" name="bulan"placeholder="masukan bulan">
<input type="number" name="tanggal"placeholder="masukan tanggal">
<input type="submit" value="kirim" name="tombol">
</form>

<?php
if (isset($_POST["tombol"])) {
   
// echo "rpl";
$name =$_POST["name"];
$bulan = $_POST["bulan"];
$tanggal = $_POST["tanggal"];
$alamat =$_POST["alamat"];
$email =$_POST["email"];
$password =$_POST["password"];

echo $name;
echo "<br>";
echo $alamat;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $bulan;
echo "<br>";
echo $tanggal;
echo "<br>";


}

$keterangan = "salah";

if ($bulan > 0 && $bulan < 13) {
    // $keterangan = "benar";
    if ($tanggal > 0 && $tanggal < 32) {
        // $keterangan = "benar";
        if ($bulan == 3 && $tanggal > 20 && $tanggal < 32) {
            $keterangan = "Aries";
        }
        if ($bulan == 4 && $tanggal > 0 && $tanggal < 20) {
            $keterangan = "Aries";
        }

        if ($bulan == 4 && $tanggal > 19 && $tanggal < 31) {
            $keterangan = "Taurus";
        }
        if ($bulan == 5 && $tanggal > 0 && $tanggal < 21) {
            $keterangan = "Taurus";
        }

        if ($bulan == 5 && $tanggal > 20 && $tanggal < 32) {
            $keterangan = "Gemini";
        }
        if ($bulan == 6 && $tanggal > 0 && $tanggal < 21) {
            $keterangan = "Gemini";
        }

        if ($bulan == 6 && $tanggal > 20 && $tanggal < 31) {
            $keterangan = "Cancer";
        }
        if ($bulan == 7 && $tanggal > 0 && $tanggal < 23) {
            $keterangan = "Cancer";
        }

        if ($bulan == 7 && $tanggal > 22 && $tanggal < 32) {
            $keterangan = "Leo";
        }
        if ($bulan == 8 && $tanggal > 0 && $tanggal < 23) {
            $keterangan = "Leo";
        }

        if ($bulan == 8 && $tanggal > 22 && $tanggal < 32) {
            $keterangan = "Virgo";
        }
        if ($bulan == 9 && $tanggal > 0 && $tanggal < 23) {
            $keterangan = "Virgo";
        }

        if ($bulan == 9 && $tanggal > 22 && $tanggal < 31) {
            $keterangan = "Libra";
        }
        if ($bulan == 10 && $tanggal > 0 && $tanggal < 23) {
            $keterangan = "Libra";
        }

        if ($bulan == 10 && $tanggal > 22 && $tanggal < 32) {
            $keterangan = "Scorpio";
        }
        if ($bulan == 11 && $tanggal > 0 && $tanggal < 22) {
            $keterangan = "Scorpio";
        }

        if ($bulan == 11 && $tanggal > 23 && $tanggal < 31) {
            $keterangan = "Sagitarius";
        }
        if ($bulan == 12 && $tanggal > 0 && $tanggal < 22) {
            $keterangan = "Sagitarius";
        }

        if ($bulan == 12 && $tanggal > 21 && $tanggal < 32) {
            $keterangan = "Capricorn";
        }
        if ($bulan == 1 && $tanggal > 0 && $tanggal < 20) {
            $keterangan = "Capricorn";
        }

        if ($bulan == 1 && $tanggal > 19 && $tanggal < 32) {
            $keterangan = "Aquarius";
        }
        if ($bulan == 2 && $tanggal > 0 && $tanggal < 19) {
            $keterangan = "Aquarius";
        }

        if ($bulan == 2 && $tanggal > 18 && $tanggal < 31) {
            $keterangan = "Pisces";
        }
        if ($bulan == 3 && $tanggal > 0 && $tanggal < 21) {
            $keterangan = "Pisces";
        }
    }
}
echo "zodiak anda adalah ;","<br>";
echo $keterangan;

?>
