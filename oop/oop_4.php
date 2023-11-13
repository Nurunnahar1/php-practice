<?php 
class ParentClass{
    protected $name;
    function __construct($name){
        $this->name = $name;
        $this->sayHi();

    }
    // function sayHi(){
    //     echo "Hello from {$this->name}!\n";
    // }

    function sayHi2(){
        echo "Hello from {$this->name}!\n";
    }
}

class ChildClass extends ParentClass{
    function sayHi(){
        parent::sayHi2();
        echo "Hi";
    }
}

$data =  new ChildClass("Nasrin");


?>