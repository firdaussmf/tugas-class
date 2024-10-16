
<?php
$judul ="belajar php";
$judul1="siswa rpl";
$judul2="smkn 2 buduran";
echo $judul1;
$juduls=["belajar php","siswa rpl","smkn 2 buduran"];
echo $juduls[0];
for ($i=0; $i < 3; $i++) { 
    # code...
    echo "<br>";
    echo $i;
    echo $juduls[$i];
}
foreach ($juduls as $key => $value) {
    echo "<br>";
    echo $key;
    # code...
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?=$judul2?></h1>
    <h2><?=$judul1?></h2>
    <h2><?=$judul1?></h2>
    <h2><?php echo$judul2?></h2>
    <h1><?=$juduls[1];?></h1>
    <h1><?=$juduls[2];?></h1>

    <?php
    for ($i=0; $i < 3; $i++) { 
        # code...
        echo "<h1>";
        echo $juduls[$i];
        echo "</h1>";

    }
    ?>


    <?php
    foreach ($juduls as $key => $value) {
        # code...
    
        echo "<h2>";
        echo "$key";
        echo "</h2>";
        
    }
    ?>

    <?php
    for ($i=0; $i <=10; $i++) { 
        # code...
        
        echo "<h$i>";
        echo "smkn 2 buduran";
        echo "</h$i>";
        

    }
    ?>
<?php
for ($i=6; $i >=0; $i--) { 
    # code...
    echo "<h$i>","smkn 2 budaran 1"."</h$i>";
}
?>
</body>
</html>
