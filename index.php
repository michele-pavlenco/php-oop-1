<?php 
require_once __DIR__ . '/Classes/movies.php';
$movies = [
    [
        'titolo' => 'Interstellar',
        'genere' => 'Sci-fi/Avventura',
        'trama' => 'In un futuro non precisato, un drastico cambiamento climatico colpisce duramente l agricoltura. Il granturco è l unica coltivazione ancora in grado di crescere ed un gruppo di scienziati è intenzionato ad attraversare lo spazio per trovare nuovi luoghi adatti a coltivarlo.'
    ],
    [
        'titolo' => 'Il cavaliere oscuro',
        'genere' => 'Azione/Avventura',
        'trama' => 'Batman e Jim Gordon si alleano con il nuovo procuratore di Gotham City, Harvey Dent, per combattere il crimine organizzato che dilaga in città e fermare un pericoloso rapinatore, il Joker, che ha gettato la città nell anarchia.'
    ],
    [
        'titolo' => 'Tenet',
        'genere' => 'Azione/Sci-fi',
        'trama' => 'Un agente segreto riceve una sola parola come arma e viene inviato per prevenire l inizio della Terza Guerra Mondiale. Deve viaggiare nel tempo e piegare le leggi della natura per avere successo nella sua missione.'
    ]
];



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
           <?php
                foreach ($movies as $key => $value) { 
                    $new_movie = new Movie($value['titolo'], $value['genere'], $value['trama']);   
                     //echo $movie->getGenere()
           ?>
            <h1>
                <?php echo $new_movie->getTitolo(); ?>
            </h1>
            <span>
                <p style="color:red">
                    Genere: 
                </p>
                <?php echo $new_movie->getGenere(); ?>
            </span>
            <span>
                <p style="color:red">
                    Trama: 
                </p>
                <?php echo $new_movie->getTrama(); ?>
            </span>

<?php } ?>

        </div>
    </main>
    
</body>
</html>