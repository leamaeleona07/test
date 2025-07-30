<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>testing lang</title>

    <style>
        body {
                 display: grid
;
    place-items: center;
    font-family: sans-serif;
    margin: 0;
    height: fit-content;
        }
        </style>
</head>
<body>

    <?php
      $title = "Have u tried hiking?";
      $read = true;

      if ($read) {
        $message = "yes, i have";
       }
       else {
        $message = "no, i haven't";
       }
        ?>
    <h1>
        <?=  $message; ?>
         </h1>
        
</body>
</html> 