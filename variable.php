<?php
//===============process -1===============
    // $age = 28;   //global scope
    // function getAge(){
    // }
    // getAge();
    // echo $age."</br>";

//===============process -2===============
    // $age = 28;   //global scope
    // function getAge(){
    //     global $age;
    // }
    // getAge();
    // echo $age."</br>";


//===============process -3===============
    // $age = 28;   //global scope
    // function getAge(){
    //     echo $GLOBALS['age'];
    // }
    // getAge();
 

//===============process -4===============
    // function getName(){
    //     $name = "Nurunnahar";  //local scope
    //     echo $name;
    // }
    // getName() ;

//===============process -5===============
 
function getAge(){
   static $age = 28;
    echo $age,"\n";
    $age++;
}
getAge();
getAge();
getAge();
getAge();