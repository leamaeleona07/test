<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1> Recommend movies </h1>
    <?php
        $movies = [
             [
            'name' => 'Stranger things',
            'author' => 'Donald',
            'releasedYear' => '1998',
            'url' => 'https://example.com'
             ], 
             [
            'name' => 'Business Proposal',
            'author' => 'Lea',
            'releasedYear' => '2004',
            'url' => 'https://example.com'
             ], 
            ]
               ?>        
            <ul>
                <?php foreach ($movies as $movie) : ?>
                    <li> 
                        <a href ="<?= ['url'] ;?>"> 
                        <?=$movie['name'] ;?> 
                     </li>
                    <?php endforeach; ?>   
            </ul>
</body>
</html>



