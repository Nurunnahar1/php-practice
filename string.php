<?php 
function country($name){
    echo "I live in : ".$name;
}
country("Bangladesh");
country("Makka");
country("India");
echo "</br>";
echo strlen("Bangladesh is a country name.I live here.");
echo "</br>";
echo strtoupper("Bangladesh is a country name.I live here.");
echo "</br>";
echo strtolower("BanBangladesh is a country name.I live here.gladesh");
echo "</br>";
echo ucwords("Bangladesh is a country name.I live here.");



echo "</br>";
echo "</br>";
$str1 = trim("Bangladesh     ");  //space remove by trimming
$str2 = trim("   Beautiful");
echo $str1.$str2;




echo "</br>";
echo "</br>";
$name1= "My country name is Bangladesh. I love Bangladesh. Bangladesh is a beautiful countery.";
echo str_replace("Bangladesh","USA", $name1);



echo "</br>";
echo "</br>";
$str5 = "Bangladesh";
echo chunk_split($str5,3,'-');