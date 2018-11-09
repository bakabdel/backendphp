<?php
class Contry{
public $name;
public $code;
public $state;
public function __construct($name='',$code='',$state=[]){
    $this->name = $name;
    $this->code = $code;
    $this->state = $state;
}


}