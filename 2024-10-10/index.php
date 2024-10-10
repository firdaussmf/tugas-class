<form action="" method="post">
    nama:
    <input type="text" name="nama" placeholder="Masukkan Nama Anda">
    alamat:
    <input type="text" name="alamat" placeholder="Masukkan Alamat Anda">
    <input type="submit" value="simpan" name="simpan">
</form>

<?php

$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'sekolah';

$koneksi = mysqli_connect($host, $user, $password, $database);

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    // echo $nama;
    $sql = "INSERT INTO siswa VALUES ('','$nama','$alamat')";
    echo $sql;
}

$querry = "SELECT * FROM siswa";
// echo $querry;

$result = mysqli_query($koneksi, $querry);
// var_dump($result);

$nama = mysqli_fetch_assoc($result);
// var_dump($nama);

echo '<h1>Data Siswa</h1>';
echo '<table border= 1>';
echo '<thead>
    <tr>
            <th>Id</th>
            <th>nama</th>
            <th>alamat</th>
        </tr>
        </thead>
        <tbody>';


while ($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>' . $row[0] . '</td>';
    echo '<td>' . $row[1] . '</td>';
    echo '<td>' . $row[2] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';




echo '<h1>Data Kelas</h1>';
echo '<table border= 1>';
echo '<thead>
    <tr>
            <th>Id</th>
            <th>Kelas</th>
            <th>Keterangan</th>
        </tr>
        </thead>
        <tbody>';


while ($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>' . $row[0] . '</td>';
    echo '<td>' . $row[1] . '</td>';
    echo '<td>' . $row[2] . '</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';