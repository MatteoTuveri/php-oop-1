<?php
$filemovie = file_get_contents('DB/movie_db.json');
$list = json_decode($filemovie, true);
$filegenre = file_get_contents('DB/genre_db.json');
$genres = json_decode($filegenre, true);
class Movie
{
    public $id;
    public $title;
    public $overview;
    public $vote_avarege;
    public $poster_path;
    public function __construct($id, $title, $overview, $vote_avarege, $poster_path)
    {
        $this->vote_avarege = $this->get_vote($vote_avarege);
        $this->poster_path = $poster_path;
        $this->title = $title;
        $this->overview = substr($overview, 0, 100) . '...';
        $this->id = $id;
    }
    public function get_vote($vote)
    {
        return round($vote / 2);
    }
}
$movies = movieList($list);
function movieList($list)
{
    $items = [];
    foreach ($list as $movie) {
        $movie = new Movie($movie['id'], $movie['title'], $movie['overview'], $movie['vote_average'], $movie['poster_path']);
        array_push($items, $movie);
    }
    return $items;
}
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