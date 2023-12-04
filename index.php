<?php
include __DIR__ .'/Models/Movie.php';
include __DIR__.'/Functions/functions.php';
include __DIR__.'/server.php';

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Movies</title>
</head>

<body>
    <header></header>
    <main class="container">
        <div class="row">
            <?php foreach ($movies as $item) {?>
                
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="<?= $item->poster_path ?>" class="card-img-top" alt="<?= $item->title?>">
                        <div class="card-body">
                            <h3 class="card-title"><?= $item->title ?></h3>
                            <p class="card-text"><?= $item->overview ?></p>
                            <p class="card-text"><?= $item->vote_avarege ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </main>
    <footer></footer>

</body>

</html>