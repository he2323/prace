<?php
class Trojkat
{
    public $h; //wysokosc
    public $a; //podstawa
    public function __construct()
    {
        echo "<br>";
        echo "wywolano konstruktor trojkat"."<br>";
        $this->_h = rand(1, 100);
        $this->_a = rand(1, 100);
        echo "h = ".$this->_h;
        echo "<br>";
        echo "a = ".$this->_a;
        echo "<br>";

    }
    public function poleTrojkata()
    {
        
        return "pole = ".($this->_a*$this->_h)/2;
    }
    public function getInfo()
    {
        return "wysokosc jest rowna ".$this->_h."<br>"."podstawa jest rowna ".$this->_a.
        "<br>"."pole trojkata jest rowne ".$this->poleTrojkata()."<br>";
    }



}


?>
