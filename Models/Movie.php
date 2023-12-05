<?php
class Movie
{
    private $id;
    private $title;
    private $overview;
    private $vote_avarege;
    private $poster_path;
    private $genres;
    private function __construct($id, $title, $overview, $vote_avarege, $poster_path, $genres)
    {
        $this->vote_avarege = $this->get_vote( $vote_avarege );
        $this->poster_path = $poster_path;
        $this->title = $title;
        $this->overview = substr($overview, 0, 100) . '...';
        $this->id = $id;
        $this->genres = $this->get_genre( $genres );
    }
    private function get_vote($vote)
    {
        $number=ceil($vote / 2);
        $string = '<p>';
        for ($i = 0; $i < 5; $i++){
            $string .= ($i<$number)? '<i class="fa-solid fa-star"></i>':'<i class="fa-regular fa-star"></i>';
        }
        $string .= '</p>';
        return $string;
    }

    private function get_genre($genres){
        $string = '<div>';
        foreach ($genres as $genre){
            $string .= '<span class="btn btn-primary me-1 mb-1">';
            $string .= $genre;
            $string .= '</span>';
        }
        $string .= '</div>';
        return $string; 
    }
    public function getCard(){
        $image_path = $this->poster_path;
        $title = $this->title;
        $overview = $this->overview;
        $vote = $this->vote_avarege;
        $genre = $this->genres;
        include __DIR__.'/../Views/Card.php';
    }
    public static function getMovieList($list,$genres){
        $items = [];
        foreach ($list as $movie) {
            $rnd_genres =[];
            foreach($movie['genre_ids'] as $genre){
                $index= rand(0, count($genres) -1);
                $rnd_genres[] = $genres[$index];
            }
            $movie = new Movie($movie['id'], $movie['title'], $movie['overview'], $movie['vote_average'], $movie['poster_path'],$rnd_genres);
            array_push($items, $movie);
        }
        return $items;
    }
}
$movies = Movie::getMovieList($list,$genres);

?>