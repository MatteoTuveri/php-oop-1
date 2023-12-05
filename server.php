<?php
$filemovie = file_get_contents(__DIR__.'/DB/movie_db.json');
$list = json_decode($filemovie, true);
$filegenre = file_get_contents(__DIR__.'/DB/genre_db.json');
$genres = json_decode($filegenre, true);
?>