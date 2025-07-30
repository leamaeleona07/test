<?php

$books = [
    [ 
    'title' => 'Harry Potter',
    'author' => 'J.K Rowling'
    ],
    [ 
    'title' => 'The Hobbit',
    'author' => 'J.R.R Tolkien'
    ], 
    [
    'title' => 'Bigbang theory',
    'author' => 'The who'
    ],
];
    function filteredBook ($books){
         $filtered=[]; 
         
      foreach ($books as $book){
      if ($book ['title'] === 'Harry Potter')
        {
            $filtered [] = $book;
        }
        return $filtered;
        }

    }
    $harrypotterBooks = filteredBook($books);
    foreach ($harrypotterBooks as $book) {
    
        echo $book ['title'] . $book['author'];
        if ($book ['title'] === 'Harry Potter'){
        }

        echo "test";
}
