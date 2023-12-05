<?php
class Genre
{   
    private array $genres;

    private function __construct($genresList){
        $this->genres = $genresList;
    }
    public static function getGenres($list,$genres){
        $items = [];
        foreach ($list as $movie) {
            $rnd_genres =[];
            foreach($movie['genre_ids'] as $genre){
                $index= rand(0, count($genres) -1);
                $rnd_genres[] = $genres[$index];
            }
            $genre = new Genre($rnd_genres);
            array_push($items, $movie);
        }
        return $items;
    }
}
?>