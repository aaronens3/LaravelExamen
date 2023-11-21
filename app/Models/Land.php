<?php

class Land extends Robot(){
    protected $autonomy
    protected $wheels


public function __construct($name = " ", $funcionality = " ", $speed = " ", $material = " ")
    parent::__construct($name, $funcionality, $speed, $material){
        $this-> autonomy = $autonomy
        $this-> wheels = $wheels
    }
}