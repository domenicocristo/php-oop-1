<?php
class Film {
    public $titolo;
    public $sottotitolo;
    public $regista;

    public function __construct($titolo, $sottotitolo) {
        $this -> titolo = $titolo;
        $this -> sottotitolo = $sottotitolo;
    }
    
    public function getFulltitolo() {
        return $this -> titolo . " " . $this -> sottotitolo;
    }

    public function __toString() {
        return $this -> getFulltitolo() . " | " . $this -> regista;
    }
}

$F1 = new Film("Matrix", "");
$F2 = new Film("Fantozzi 2:", "Il ritorno di fantozzi");
$F3 = new Film("Peter Pan:", "Il ritorno dell'isola che non c'è");

$F1 -> regista = "???";
$F2 -> regista = "???";
$F3 -> regista = "Robin Budd";

echo $F1 . "<br>";
echo $F2 . "<br>";
echo $F3 . "<br>";
?>