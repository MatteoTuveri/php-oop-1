<?php
class Movie{
    public $id;
    public $title;
    public $overview;
    public $vote_avarege;
    public $poster_path;
    public function __construct($id,$title,$overview,$vote_avarege,$poster_path){
        $this->vote_avarege =$vote_avarege;
        $this->poster_path = $poster_path;
        $this->title = $title;
        $this->overview = $overview;
        $this->id = $id;
    }
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

</body>

</html>