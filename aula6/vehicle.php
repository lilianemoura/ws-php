<?php

class vehicle {

    protected $name;
    protected $type;
    protected $release_year;

    public function vehicle($name, $type, $release_year){
        $this->name = $name;
        $this->type = $type;
        $this->release_year = $release_year;

    }

    public function speedUp($speed, $time){
        return $speed/$time;
    }
}






?>