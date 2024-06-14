<?php

require_once 'vehicle.php';

class car extends vehicle{

    private $engine_horsepower;

    public function car($name,$type,$release_year,$engine_horsepower){
        parent::vehicle($name,$type,$release_year);
        $this->engine_horsepower=$engine_horsepower;
    }  
    public function exibirDetalhes(){
        $this->name = 'Bugatti Chiron Super Sport 300+';
        $this->type =  'sport car';
        $this->release_year = 2016;
        $this->engine_horsepower = '1.500hp';
    }
 }

?>