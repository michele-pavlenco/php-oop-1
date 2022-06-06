<?php 
require_once __DIR__ . '/Classes/movies.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop 1</title>
</head>
<body>
    <main>
        <div class="container">
            <?php foreach ($movies as $key => $value) {
                        $movie = new Movie($value['titolo'], $value['trama']);
                    ?>
                    <h1 >
                        Titolo:
                        <?php echo $movie->getTitle(); ?>

                    </h1>
                    <p>
                        Genere:
                        <?php echo $movie->getGenere(); ?>
                    </p>
                    <p>
                        Trama:
                        <?php echo $movie->getTrama(); ?>
                    </p>
                    <?php } ?>

        </div>
    </main>
    
</body>
</html>