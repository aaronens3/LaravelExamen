<?php

class Aerial extends Robot(){
    protected $autonomy;
    protected $power_unit;


public function __construct($name = " ", $funcionality = " ", $speed = " ", $material = " ")
    parent::__construct($name, $funcionality, $speed, $material){
        $this-> autonomy = $autonomy
        $this-> power_unit = $power_unit
    }
}
