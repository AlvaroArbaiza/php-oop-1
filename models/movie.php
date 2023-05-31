<?php

    // classe per la creazione di Movies
    class Movie implements JsonSerializable {

        // variables
        public $title;
        public $date;
        public $vote;
        public $category;

        // constructor
        function __construct($_title, $_date, $_vote, $_category) {

            $this->title = $_title;
            $this->date = $_date;
            $this->vote = $_vote;
            $this->category = $_category;

        }

        // method
        public function getMovie() {

            echo $this->title . '<br />'.
                $this->date . '<br />'.
                $this->vote;
        }

        // function per ottenere solo queste variabili durante la trasformazion in json
        public function jsonSerialize() {
            return [
                'title' => $this->title,
                'date' => $this->date,
                'vote' => $this->vote,
                'category' => $this->category
            ];
        }
    }

?>