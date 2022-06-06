<?php
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

class Movie {
    public $titolo ;
    public $genere ;
    public $trama ;

    function __construct($_titolo, $genere, $trama){
        $this->titolo = $_titolo;
        $this->genere = $_genere;
        $this->trama = $_trama ;  
     }
     public function getTitle(){
         return $this->title;
     }
     public function getGenere(){
        return $this->genere;
    }
     public function getTrama(){
        return $this->trama;
    }
}
?>