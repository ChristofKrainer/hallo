<?php
abstract class Auto {
    //ein Attribut, eine Eigenschaft
    private $geschwindigkeit = 0;
    protected function setGeschwindigkeit($geschwindigkeit){
        $this->geschwindigkeit=$geschwindigkeit;
    }
    protected function getGeschwindigkeit(){
        return $this->geschwindigkeit;
    }
    

    //zum Bremsen
    
    public abstract function beschleunigen($aenderung);

}

?>
