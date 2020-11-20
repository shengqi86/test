<?php
$a=new Client();
$a->setTime('2018-02-11 12:01:23');
$a->getGreeting();

class Client {
    var $Hour;
    var $date;
    
    function __construct(){
        echo "instance".PHP_EOL;
        $this->Hour=date('H');
    }
    
    function getGreeting(){
        if($this->Hour>=0 && $this->Hour<12){
            echo 'Good morning'.PHP_EOL;
        }
        if($this->Hour>=12 && $this->Hour<18){
            echo 'Good afternoon'.PHP_EOL;
        }
        if($this->Hour>=18 && $this->Hour<=23){
            echo 'Good evening'.PHP_EOL;
        }
    }
    function setTime($date){
        if(!$this->isDate($date)){
            echo 'not a date';
            return false;
        }
        $this->date=$date;
        $this->Hour=date("H",strtotime($date));
    }
    
    function isDate($date){
        return (date('Y-m-d H:i:s', strtotime($date)) == $date);
    }
}
