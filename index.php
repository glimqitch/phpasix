<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Demo ASIX</title>
    </head>
    <body>
        <h1>
            <?php
                $x= "Hello World<br>";
                $y=5;
                $p=9;
                $hola="<br>Sóc Iris i tinc els ulls molt bonics<br><br>";
                echo $x.$hola;
                echo "Resultat:" . $y + $p;

            $books2 = [
                    "Dune",
               "The Hobbit",
             "The Lord of the Rings: The fellowship of the ring",
           "Harry Potter: The Philosopher's Stone",
         "A Song of Ice and Fire: A Game of Thrones",
       "Foundation",
     "Do Androids Dreams of Electric Sheep?"
                ];
             $books = [
                         [
                             "name" => "Dune",
                             "author" => "Frank Herbert",
                             "releaseYear" => "1965"
                         ],
                     [
                         "name" => "The Hobbit",
                         "author" => "J. R. R. Tolkien",
                         "releaseYear" => "1937"
                     ],
                     [
                         "name" => "The Lord of the Rings: The Fellowship of the Ring",
                         "author" => "J. R. R. Tolkien",
                         "releaseYear" => "1954"
                     ],
                     [
                         "name" => "Harry Potter: The Philosopher's Stone",
                         "author" => "J. K. Rowling",
                         "releaseYear" => "1997"
                     ],
                     [
                         "name" => "A Song of Ice and Fire: A Game of Thrones",
                         "author" => "George R. R. Martin",
                         "releaseYear" => "1996"
                     ],
                     [
                         "name" => "Foundation",
                         "author" => "Isaac Asimov",
                         "releaseYear" => "1951"
                     ],
                     [
                         "name" => "Do Androids Dream of Electric Sheep?",
                         "author" => "Philip K. Dick",
                         "releaseYear" => "1968"
                     ]
                 ];
             function filterByAuthor($books, $author) {
                 $filteredAuthors = [];
                 foreach ($books as $book) {
                     if ($book["author"] == $author) {
                         $filteredAuthors[] = $book;
                     }
                 }
                 return $filteredAuthors;
             }

            function filterByYear($books) {
                $filteredYear = [];
                foreach ($books as $book) {
                    if ($book["releaseYear"] >= 1990) {
                        $filteredYear[] = $book;
                    }
                }
                return $filteredYear;
            }

            $filteredBooksyear = array_filter($books, function ($book){
                return $book["releaseYear"] >= 1950 && $book["releaseYear"] <= 1996;
            });
            ?>
        </h1>
        <hr>
        <p><b>Llista de llibres:</b></p>
        <ul>
            <?php foreach($books2 as $book) : ?>
                <li><?= $book ?></li>
            <?php endforeach; ?>
        </ul>
        <p><b>Llista de llibres de Tolkien en filtre:</b></p>
        <ul>
            <?php foreach(filterByAuthor($books, "J. R. R. Tolkien") as $book) : ?>
                <li><?= $book['name']?> (<?= $book['releaseYear']?>) - By <?= $book['author']?></li>
            <?php endforeach; ?>
        </ul>
        <p><b>Llista de llibres a partir del 1990:</b></p>
        <?php foreach(filterByYear($books) as $book) : ?>
            <li><?= $book['name']?> (<?= $book['releaseYear']?>) - By <?= $book['author']?></li>
        <?php endforeach; ?>

        <p><b>Llista de llibres entre 1950 i 1996:</b></p>
        <?php foreach($filteredBooksyear as $book) : ?>
            <li><?= $book['name']?> (<?= $book['releaseYear']?>) - By <?= $book['author']?></li>
        <?php endforeach; ?>

    </body>
</html>