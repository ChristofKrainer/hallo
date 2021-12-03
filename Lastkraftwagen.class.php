<?php
require_once("Auto.class.php");
class Lastkraftwagen extends Auto{
    private $hoechstgeschwindigkeit = 120;
    public function beschleunigen($aenderung) {
        if ($this->getGeschwindigkeit() + $aenderung < $this->hoechstgeschwindigkeit) {
            $this->setGeschwindigkeit(
                $this->getGeschwindigkeit() + $aenderung);
            echo "Die aktuelle Geschwindigkeit des LKW beträgt "
                .$this->getGeschwindigkeit() ."<br />";
        }
        
        
    }
    //zum Bremsen
    public function bremsen($aenderung) {
        if ($this->getGeschwindigkeit() - $aenderung < 0) {
            $this->setGeschwindigkeit(0);
        }
        else {
            $this->setGeschwindigkeit($this->getGeschwindigkeit() - $aenderung);
        }
        echo "Die aktuelle Geschwindigkeit des LKW beträgt "
            .$this->getGeschwindigkeit() ."<br />";
    }
}
?>