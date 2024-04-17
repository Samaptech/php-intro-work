<?php
echo "<h1>HI SAMEER</h1>";

$a =  150;
$b = 30;

echo $a + $b ,"<br>";

$name = "Sameer";
echo $name . "<br>";

$b = true;
echo $b . "<br>";

$weight = 15.2;
echo $weight;

var_dump($weight);
var_dump($name);
var_dump($a);
var_dump($b);
var_dump($name);

$fruits = array('apple', 'mango' , 'banana','orange','apricort');
echo $fruits[0]."<br>";
echo $fruits[1]."<br>";
echo $fruits[2]."<br>";
echo $fruits[3]."<br>";
echo $fruits[4]."<br>";

for($i=0; $i<5; $i++){
    echo $i. " " .$fruits[$i]." ";
}


$j = 0;
while($j<5){
    echo $fruits[$j]." ";
    $j++;
}

$a = 11;
do{
        echo $a;
        $a++;
}
while($a <= 10);

function average($num1 , $num2){
    return($num1 + $num2)/2;
}

echo average(20 , 20)." ";
echo average(50 , 50);


?>