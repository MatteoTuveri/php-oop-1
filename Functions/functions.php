<?php
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