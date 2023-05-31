<?php
    class Movie implements JsonSerializable {

        public $title;
        public $date;
        public $vote;
        public $category;

        function __construct($_title, $_date, $_vote, $_category) {

            $this->title = $_title;
            $this->date = $_date;
            $this->vote = $_vote;
            $this->category = $_category;

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
                'vote' => $this->vote,
                'category' => $this->category
            ];
        }
    }

?>