<?php

use Core\App;

$x= "Hello World<br>";
    $y=5;
    $p=9;
    $hola="<br>Sóc Iris i tinc uns ulls molt bonics<br><br>";
    echo $x.$hola;
    echo "Resultat:" . $y + $p;

//    $books2 = [
//        "Dune",
//        "The Hobbit",
//        "The Lord of the Rings: The fellowship of the ring",
//        "Harry Potter: The Philosopher's Stone",
//        "A Song of Ice and Fire: A Game of Thrones",
//        "Foundation",
//        "Do Androids Dreams of Electric Sheep?"
//    ];
//    $books = [
//        [
//            "name" => "Dune",
//            "author" => "Frank Herbert",
//            "releaseYear" => "1965"
//        ],
//        [
//            "name" => "The Hobbit",
//            "author" => "J. R. R. Tolkien",
//            "releaseYear" => "1937"
//        ],
//        [
//            "name" => "The Lord of the Rings: The Fellowship of the Ring",
//            "author" => "J. R. R. Tolkien",
//            "releaseYear" => "1954"
//        ],
//        [
//            "name" => "Harry Potter: The Philosopher's Stone",
//            "author" => "J. K. Rowling",
//            "releaseYear" => "1997"
//        ],
//        [
//            "name" => "A Song of Ice and Fire: A Game of Thrones",
//            "author" => "George R. R. Martin",
//            "releaseYear" => "1996"
//        ],
//        [
//            "name" => "Foundation",
//            "author" => "Isaac Asimov",
//            "releaseYear" => "1951"
//        ],
//        [
//            "name" => "Do Androids Dream of Electric Sheep?",
//            "author" => "Philip K. Dick",
//            "releaseYear" => "1968"
//        ]
//    ];
//    function filterByAuthor($books, $author) {
//        $filteredAuthors = [];
//        foreach ($books as $book) {
//            if ($book["author"] == $author) {
//                $filteredAuthors[] = $book;
//            }
//        }
//        return $filteredAuthors;
//    }
//
//    function filterByYear($books) {
//        $filteredYear = [];
//        foreach ($books as $book) {
//            if ($book["releaseYear"] >= 1990) {
//                $filteredYear[] = $book;
//            }
//        }
//        return $filteredYear;
//    }
//
//    $filteredBooksyear = array_filter($books, function ($book){
//        return $book["releaseYear"] >= 1950 && $book["releaseYear"] <= 1996;
//    });

        $books = App::get('database')->selectAll('books');
        require '../resources/views/index.blade.php'
    ?>