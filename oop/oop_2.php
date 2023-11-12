<?php 
class Human{
    public $name;
    public $age;
    function __construct($personName,$personAge=0){    //optional parameter
        echo "New Human object is created\n";
        $this->name = $personName;
        $this->age = $personAge;
    }

    function sayHi(){
        echo "Nasrin\n";
        $this->sayName();
    }

    // function sayName(){
    //     echo "My Name is {$this->name}.I am {$this->age} years old\n";
    // }


    function sayName(){

        if($this->age){
            echo "My Name is {$this->name}.I am {$this->age} years old\n";
            
        }else{
            echo "My Name is {$this->name}.";
        }
    }
}

$h1 = new Human("Nurunnahar","28");
$h2 = new Human("Nasrin",);

// $h1->sayHi();
$h1->sayName();
$h2->sayName();
?>