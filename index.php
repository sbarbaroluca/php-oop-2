<?php require_once __DIR__ . '/classes/Client.php' ?>
<?php require_once __DIR__ . '/classes/Product.php' ?>
<?php require_once __DIR__ . '/classes/Category.php' ?>
<?php require_once __DIR__ . '/classes/Client_premium.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Online</title>
</head>
<body>
    <?php 
        $p1 = new Product('info', 'iphone', 700);
        var_dump($p1);

        $c1 = new Client('Marco', 'Piatti', 45);
        var_dump($c1);

        $p1 = new Premium('Luigi', 'Rossi', 65);
        var_dump($p1);
        
        echo $c1->getSconto().'%';
        echo $p1->getSconto().'%';
    ?>
</body>
</html>