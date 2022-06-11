<?php
class Movie
{
    protected $titolo;
    protected $genere;
    protected $trama;

    function __construct($titolo, $genere, $trama)
    {
        $this->titolo = $titolo;
        $this->genere = $genere;
        $this->trama = $trama;
    }
    public function getTitolo()
    {
        return $this->titolo;
    }
    public function getGenere()
    {
        return $this->genere;
    }
    public function getTrama()
    {
        return $this->trama;
    }
}
