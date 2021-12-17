<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of PrvniTrida
 *
 * @author Miloš
 */
class PrvniTrida {
    
    //put your code here vvvvv
    Public $var;
    Public $soucet;
    Public $pole = array();
    
    public function __construct($var) {
        $this->var = $var; 
    }
    public function vrat() {  
        $this->soucet   = count(get_object_vars($this));
        //$this->pole() = $this->var;
        $this->pole() = $this->soucet;    
        $this->soucet = count(get_object_vars($this));
        //$this->pole   = var_dump(get_object_vars($this));
        
        return 'Pocet promenzch je: '.$this->soucet."\n";
        ;
    }
    public function predejInstanci($PrvniTrida) {
        return $PrvniTrida->var;
    }            
}
