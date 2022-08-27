<?php
    $angka = [4,2,7,9,1,32,43,64];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
    <style>
        body{
            background-color: black;
        }
        div{
            width: 50px;
            height: 50px;
            background-color: aqua;
            text-align: center;
            float: left;
            margin: 5px;
            line-height: 50px;            
        }
    </style>
</head>

<body>
    <?php
    for($i = 0; $i < 8; $i++) { ?>
    <div> <?php echo $angka[$i];?></div>
    <?php } ?>
</body>
</html>