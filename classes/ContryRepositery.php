<?php
require 'Contry.php';
require 'State.php';
class ContryRepositery{
 private static $contries = array();
 
 protected static function initilizate(){
     array_push(self::$contries, new Contry('Maroc','ma', array(new State('Rabat'), new State('Tanger'), new State('Errachidia') )));
     array_push(self::$contries, new Contry('France','fr', array(new State('Paris'), new State('Toulouse') )) );
     array_push(self::$contries, new Contry('Alemane','al', array(new State('Berlin')) ) );
     array_push(self::$contries, new Contry('Canada','ca' ) );
 }
 public static function getContries(){
    if(count(self::$contries)===0)
    {
        self::initilizate();
    }
    return self::$contries;
}


} 