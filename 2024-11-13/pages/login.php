<div class="login">
    <h1>Login</h1>
    <form action="" method="post">
        <input type="email" name="email" reqiured placeholder="Masukkan Email" id="">
        <input type="password" name="password" reqiured placeholder="Masukkan Password" id="">
        <input type="submit" name="login" value="login" id="">
    </form>
</div>

<?php 

    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM customer WHERE email = '$email' AND password = '$password'";
        // echo $sql;
        $hasil = mysqli_query($koneksi,$sql);
        $baris = mysqli_num_rows($hasil);
        echo $baris;
        if ($baris > 0) {
            $_SESSION['email'] = $email;
            header(header: "location:index.php");
        }
        else{
            echo "<h1> Email / Password Anda Salah </h1>";
        }
    }

?>