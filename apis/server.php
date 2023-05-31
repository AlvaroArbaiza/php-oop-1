<?php

    class Movie implements JsonSerializable {

        public $title;
        public $date;
        public $vote;
        
        function __construct($_title, $_date, $_vote) {

            $this->title = $_title;
            $this->date = $_date;
            $this->vote = $_vote;
        }

        public function getMovie() {

            echo $this->title . '<br />'.
                $this->date . '<br />'.
                $this->vote;
        }

        public function jsonSerialize() {
            return [
                'title' => $this->title,
                'date' => $this->date,
                'vote' => $this->vote
            ];
        }
    }

    $movies = [
        $movie = new Movie('Superman', '12/01/2020', 9),
        $movie = new Movie('Ironman', '12/01/2020', 9),
        $movie = new Movie('Spiderman', '12/01/2020', 9),
        $movie = new Movie('Ultraman', '12/01/2020', 9),
        $movie = new Movie('Wonder Woman', '12/01/2020', 9)

    ];

    // $movie->getMovie();

    
    header('Content-Type: application/json');
    
    // trasformazione in file json da php, se array multidimensionale va true
    echo json_encode($movies, true);
    // var_dump($movies);
?>