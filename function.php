<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h1> Recommend movies </h1>
    <?php
        $movies = [
             [
            'movie' => 'Stranger things',
            'author' => 'Enola',
            'releasedYear' => '1998',
            'url' => 'https://example.com'

             ], 
             [
            'movie' => 'Business Proposal',
            'author' => 'Lea',
            'releasedYear' => '2004',
            'url' => 'https://example.com'
             ], 
             [
            'movie' => 'Taxi Driver',
            'author' => 'Enola',
            'releasedYear' => '1999',
            'url' => 'https://example.com'
             ],
            ];
            $FilteredByAuthor = function  ($movies, $author) {     

                $filteredMovies =  [];
                
                foreach ($movies as $movie) {
                    if ($movie['author'] === 'Enola') {
                        $filteredMovies [] = $movie;
                    
                    }
                }
                     return $filteredMovies; 

            };
            $filteredMovies = $FilteredByAuthor ($movies, 'Enola');
            //only executed when the function is called
               ?>        
            <ul>
                <?php foreach ($filteredMovies as $movie) :?>
                    <?php if ($movie ['author'] === 'Enola') :?> 
                    <li> 
                        <a href ="<?= $movie['url']; ?>"> </a>
                        <?=$movie['movie'] ;?> (<?= $movie['releasedYear'] ?>) - By <?= $movie ['author'] ;?>
                     </li>
                     <?php endif; ?>
                    <?php endforeach; ?>   
            </ul> 
</body>
</html>