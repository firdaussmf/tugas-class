
<div class="cart">
    <h1>Cart</h1>

<?php 

    if (!isset($_SESSION['email'])) {
        header('location:index.php?menu=login');
    }
    if (!isset($_SESSION['cart'])) {
        echo '<h1>Keranjang Kosong</h1>';
    }
    if (isset($_GET['hapus'])) {
        $id = $_GET['hapus'];
        unset($_SESSION['cart'][$id]);
    }
    // $isikeranjang = count($_SESSION['cart']);
    // if ($isikeranjang == 0) {
    //     header('location:index.php');
        
    // }

    if (isset($_SESSION['cart'])) {
        $isikeranjang = count($_SESSION['cart']);
    } else {
        $isikeranjang = 0;
    }
    

    if (isset($_GET['add'])) {
        $id = $_GET['add'];
        // echo $id;
        $sql = "SELECT * FROM produk WHERE id = $id";
        // echo $sql;
        $hasil = mysqli_query($koneksi, $sql);
        $row = mysqli_fetch_array($hasil);
        // echo $row[1];
        // echo $row[3];
        
        $_SESSION['cart'][$id] = ['produk' => $row[1],
                            'harga' => $row[3],
                            'id' => $row[0],
                            'jumlah' => isset($_SESSION['cart'][$id]) ? $_SESSION['cart'][$id]['jumlah'] + 1 : 1        
                            ];
    }
?>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Hapus</th>
        </tr>
    </thead>
    <tbody>
            <?php
                $no = 1;
                foreach ($_SESSION['cart'] as $key) {
                    ?>
                    <tr>
                        <td><?= $no ++ ?></td>
                        <td><?= $key['produk'] ?></td>
                        <td><?= $key['harga']?></td>
                        <td><?= $key['jumlah'] ?></td>
                        <td><?= $key['jumlah'] * $key['harga']?></td>
                        <td><a href="?menu=cart&hapus=<?= $key['id'] ?>">Hapus</a></td>
                    </tr>
                    <?php
                }
            ?>
    </tbody>
</table>

</div>