<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAtihan Array</title>
    <style>
        .kotak {
            width: 80px;
            height: 80px;
            background-color: salmon;
            text-align: center;
            line-height: 80px;
            margin: 5px;
            float: left;
            transition: .5s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>
<body>

<?php 
    $angka = [1,2,3,4,5,6,7,8,9];
?>
<?php foreach( $angka as $ang) : ?>
    <div class="kotak"> <?php echo $ang; ?></div>
<?php endforeach; ?>

<p>

<?php $angka2 = [[10,11,12],[13,14,15],[16,17,18]]; ?>
<?php foreach( $angka2 as $an ) : ?>
    <?php foreach ( $an as $a ) : ?>
        <div class="kotak"> <?php echo $a; ?></div>
    <?php endforeach; ?>
<?php endforeach; ?>
</body>
</html>