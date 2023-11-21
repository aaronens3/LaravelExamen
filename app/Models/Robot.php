<?php 

class Robot(){
    protected $name
    protected $funcionality
    protected $speed
    protected $material
}

public function __construct($name =" ", $funcionality = " ", $speed = " ", $material = " "){
    $this-> name = $name;
    $this-> funcionality = $funcionality;
    $this-> speed = $speed;
    $this-> material = $material;
}
