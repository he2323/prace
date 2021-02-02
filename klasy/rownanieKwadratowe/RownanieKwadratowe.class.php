<?php
class RownanieKwadratowe{
    private $a, $b, $c;
    
    private $x1, $x2, $x;

    public function liczDelta($a=0, $b=0, $c=0)
    {
        return pow($b,2)-4*$a*$c;
    }
    public function liczRownanie($a=0, $b=0, $c=0)
    {
        $delta=$this->liczDelta($a, $b, $c);
        $ujemneB = $b - ($b*2);
        if ($delta>0) {
            $x1 = ($ujemneB - sqrt($delta))/2*$a;
            $x2 = ($ujemneB + sqrt($delta))/2*$a;
            echo "x1: ".$x1."<br>";
            echo "x2: ".$x2."<br>";
            $pierwiastki = array($x1, $x2);
            return $pierwiastki;
        }
        else if ($delta==0) {
            
            $x = ($ujemneB - sqrt($delta))/2*$a;
            $pierwiastki = array($x, $x);
            return $pierwiastki;
        }
        else if ($delta<0) {
            return false;
        }
    }
}
?>