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
        if ($this -> sottotitolo) {
            return $this -> titolo . ": " . $this -> sottotitolo;
        } else {
            return $this -> titolo;
        }
    }

    public function __toString() {
        if ($this -> regista) {
            return $this -> getFulltitolo() . " | " . $this -> regista;  
        } else {
            return $this -> getFulltitolo() . " | " . "???";
        }
    }
}

$F1 = new Film("Matrix", "");
$F2 = new Film("Fantozzi 2", "Il ritorno di fantozzi");
$F3 = new Film("Peter Pan", "Il ritorno dell'isola che non c'è");

$F3 -> regista = "Robin Budd";

echo $F1 . "<br>";
echo $F2 . "<br>";
echo $F3 . "<br>";
?>