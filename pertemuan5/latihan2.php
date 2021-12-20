<?php
//  Pengulangan pada array
//  gunakan for , khusus untuk array foreach

$angka = [213411, 232, 112, 345, 5, 333, 7, 8, 454, 767, 899];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        div {
            width: 80px;
            height: 80px;
            background-color: salmon;
            text-align: center;
            line-height: 80px;
            margin: 5px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php for( $i = 0; $i < count($angka); $i++) : ?>
        <div><?php echo $angka[$i]; ?></div>
    <?php endfor; ?>

    <div class="clear"> </div>

    <?php foreach( $angka as $a  ) : ?>
        <div><?php echo $a; ?></div>
    <?php endforeach; ?>
</body>
</html>