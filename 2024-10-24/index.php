<?php

$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'sekolah';
$koneksi = mysqli_connect($host, $user, $password, $database);

if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
    $id = $_GET['id'];
    // echo $menu;
    // echo $id;

    if ($menu == 'edit') {
        $sql = "SELECT * FROM siswa WHERE id=$id";
        echo $sql;
    }
}

?>


<form action="" method="post">
    nama:
    <input type="text" name="nama" placeholder="Masukkan Nama Anda">
    alamat:
    <input type="text" name="alamat" placeholder="Masukkan Alamat Anda">
    <input type="submit" value="simpan" name="simpan">
</form>


<?php  
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    // echo $nama;
    $sql = "INSERT INTO siswa VALUES ('','$nama','$alamat')";
    // echo $sql;
    mysqli_query($koneksi, $sql);
}

if (isset($_GET['menu'])) {
    $menu=$_GET['menu'];
    $id=$_GET['id'];
    // echo $menu;
    // echo $id;

    if ($menu=='hapus') {
        $sql="DELETE FROM siswa WHERE id=$id";
        // echo  $sql;
        mysqli_query($koneksi,$sql);
    }
}

$querry = "SELECT * FROM siswa";
// echo $querry;

$result = mysqli_query($koneksi, $querry);
// var_dump($result);

// $nama = mysqli_fetch_assoc($result);
// var_dump($nama);

echo '<h1>Data Siswa</h1>';
echo '<table border= 1>';
echo '<thead>
    <tr>
            <th>Id</th>
            <th>nama</th>
            <th>alamat</th>
            <th>hapus</th>
            <th>edit</th>
        </tr>
        </thead>
        <tbody>';


while ($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>' . $row[0] . '</td>';
    echo '<td>' . $row[1] . '</td>';
    echo '<td>' . $row[2] . '</td>';
    echo '<td><a href="?id='.$row[0].'&menu=hapus">hapus</a></td>';
    echo '<td><a href="?id='.$row[0].'&menu=edit">edit</a></td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';




echo '<h1>Data Kelas</h1>';
$querry = 'SELECT * FROM kelas';
$result = mysqli_query($koneksi, $querry);

echo '<table border= 1>';
echo '<thead>
    <tr>
            <th>Id</th>
            <th>Kelas</th>
            <th>Keterangan</th>
            <th>hapus</th>
            <th>edit</th>
        </tr>
        </thead>
        <tbody>';


while ($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>' . $row[0] . '</td>';
    echo '<td>' . $row[1] . '</td>';
    echo '<td>' . $row[2] . '</td>';
    echo '<td>hapus</td>';
    echo '<td>edit</td>';
    echo '</tr>';
}
echo '</tbody>';
echo '</table>';

?>