
<doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day-19</title>
    <link rel="stylesheet" href="assest/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container">
            <a href="action.php?pages=home" class="navbar-brand">Logo</a>
            <ul class="navbar-nav ml-auto">


                <li class="nav-item"><a href="action.php?page=allProducts" class="nav-link">All Products</a></li>
                <?php foreach ($categories as $category) { ?>
                    <li class="nav-item"><a href="action.php?pages=categoryProducts&&category_id=<?php echo $category['id'] ?>" class="nav-link"><?php echo $category['name']?> </a> </li>

                <?php } ?>


            </ul>
        </div>
    </nav>
