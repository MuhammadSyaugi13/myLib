<?php 

namespace Ogi\Belajar;

class Costumer {

    
    private $name = "ogi";

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayHello(String $name): string
    {
        return "Hello $name, my name is $this->name";
    }





}