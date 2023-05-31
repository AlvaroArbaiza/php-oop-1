<?php

    class Movie {

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
    }

    $movie = new Movie('Romina', '10/12/1994', 10);

    $movie->getMovie();
?>