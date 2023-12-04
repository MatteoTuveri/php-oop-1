<?php
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

?>