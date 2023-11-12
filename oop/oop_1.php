<?php 
class Human{
    public $age;
    function  person(){
        echo "Hello Nasrin  \n";
    //    echo $this->age;
    }
}

$data = new Human();
// $data->age="28";  //set method

//  echo $data->age;

$data->person();

?>