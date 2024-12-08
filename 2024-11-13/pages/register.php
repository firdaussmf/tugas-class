<div class="register">
    <h1>Register</h1>
    <form action="" method="post">
        <input type="email" name="email" reqiured placeholder="Masukkan Email" id="">
        <input type="password" name="password" reqiured placeholder="Masukkan Password" id="">
        <input type="submit" name="register" value="register" id="">
    </form>
</div>

<?php 

    if (isset($_POST['register'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo $email, $password;
        $sql = "INSERT INTO customer (email,password) VALUES ('$email','$password')";
        echo $sql;
        mysqli_query($koneksi, $sql);

        header('location:index.php?menu=login');
    }

?>