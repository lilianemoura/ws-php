<?php
class veiculo {

    protected $name;
    protected $brand;

    public function veiculo($name,$brand){
        $this->name=$name;
        $this->brand=$brand;
    }

    public function speedUp($speed,$time){
        return $speed/$time;
    }


}