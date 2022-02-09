<?php 

namespace Ogi\Belajar;

class Costumer {

    
    private string $name;

    public function __construct(String $name)
    {
        $this->name = $name;
    }

    public function sayHello(String $name): string
    {
        return "Hello $name, my name is $this->name";
    }





}