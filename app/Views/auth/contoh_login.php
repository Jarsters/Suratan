<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php if(session('email')) : ?>
        <!-- <?php 
            echo("<br>"."Nama: ".session('nama')."<br>");
            echo("Email: ".session('email')."<br>");
            echo("Alamat: ".session('alamat'));
        ?> -->

        <p>Nama: <?= session('nama') ?></p>
        <p>Email: <?= session('email') ?></p>
        <p>Alamat: <?= session('alamat') ?></p>
    <?php else : ?>
        <?php
            echo("Data kosong!");
        ?>
    <?php endif; ?>
    
</body>
</html>