<?php

    include __DIR__ . '/../models/movie.php';    
    include __DIR__ . '/../models/category.php';    

    // array con oggetti Movie che hanno a loro volta un array di oggetti Categorys
    $movies = [

        $movie = new Movie('Superman', '12/01/2020', 9, 
            [
                new Category('Horror'),
                new Category('Comic')
            ]
        ),
        $movie = new Movie('Ironman', '12/01/2020', 9, 
            [
                new Category('Comic'),
                new Category('Historic')
            ]
        ),
        $movie = new Movie('Spiderman', '12/01/2020', 9, 
            [
                new Category('Comic'),
                new Category('Musical')
            ]
        ),
        $movie = new Movie('Ultraman', '12/01/2020', 9, 
            [
                new Category('Horror'),
                new Category('Animation')
            ]
        ),
        $movie = new Movie('Wonder Woman', '12/01/2020', 9, 
            [
                new Category('Romantic'),
                new Category('Horror')
            ]
        )

    ];
    
    header('Content-Type: application/json');
    
    // trasformazione in file json da php, se array multidimensionale va true
    echo json_encode($movies, true);
?>