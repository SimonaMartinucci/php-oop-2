<?php 

require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Type.php';
require_once __DIR__ . '/data/db.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>php-oop-2</title>
</head>
<body>

<div class="container d-flex flex-wrap my-3 mx-4">
    <?php foreach ($db as $prod): ?>
    <div class="card me-4 mb-4" style="width: 18rem;">
        <img src="<?php echo $prod->image ?>" class="card-img-top" alt="<?php echo $prod->name ?>">
        <div class="card-body">
            <h3><?php echo $prod->name ?></h3>
            <?php $prod->printType() ?>
            <?php $prod->category->printCategory() ?>
        </div>
    </div>
    <?php endforeach; ?> 
</div>

</body>
</html>