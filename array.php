<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
        <?php
        $movies = [
                "Stranger things", 
                "Business Proposal",
                "Taxi Driver"
        ];   
            ?>        
            <ul>
                <?php foreach ($movies as $movie) : ?>
                <li><?= $movie?></li>
                <?php endforeach; ?>
            </ul>
</body>
</html>



