<?php

    include __DIR__ . '/../models/movie.php';    

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