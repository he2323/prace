
<?php
class Odcinek{

private $startX;
private $startY;
private $endX;
private $endY;


//mam problem w zadaniu, nie wywołuje mi tego konstruktora i nie wiem jak to naprawić pracowałem nad tym i wykonałem wiele prób, liczę na małą pomoc
public function __constuct($startX1, $startY1, $endX1, $endY1)
{
    echo "konstruktor odcinka <br>";
    $this->startX = $startX1;
    $this->startY = $startY1; 
    $this->endX = $endX1;
    $this->endY = $endY1;
}
public function liczDlugosc()
{
    return sqrt((pow(($this->endX - $this->startX), 2)+pow(($this->endY - $this->startY), 2)));
}
}
?>