<?php
require_once 'vehicle.php';

class motorcycle extends vehicle{

protected $engine_displacement;

public function motorcycle($name,$type,$relase_year,$engine_displacement){
    parent:: vehicle($name,$type,$relase_year);
    $this->engine_displacement=$engine_displacement;
}

public function exibirDetalhes(){
    $this->name = 'Suzuki Hayabusa';
    $this->type =  'motorcycle';
    $this->release_year = 1999;
    $this->engine_displacement = '1340c';
}


}




?>