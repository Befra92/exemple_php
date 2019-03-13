<?php 

//ternaire
$x = -2;

//le cas qui n'est pas vérifier par la condition
$phrase = ($x >= 0 ? 'x est positive' : '$x est négative');

echo $phrase;
echo '<br>';

//boucles

for($i=0; $i<10; $i++){
    echo 'numero : ' . $i. '<br>';
    if ($i == 3){
       break; 
    }
}
echo '<br>';
//Boucle while

$j = 0;
while($j < 10){
    echo 'numero : ' . $j. '<br>';
    $j++;
}
echo '<br>';

//Boucle do while
$j=0; //initialisation
do{
    echo 'numero : ' . $j. '<br>';
    $j++;

}while($j < 10);
echo '<br>';


?>