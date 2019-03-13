<?php
// 1er test sur l'exo 5
$tabBannieres = 
    ['images/ban3.jpg','images/ban2.jpg','images/ban1.jpg'];

$aleatoire = array_rand($tabBannieres);
echo "<img src='".$tabBannieres[$aleatoire]."'>";

var_dump($tabBannieres);


$tabs = [
    ['id' => 1, 'nom' => 'Simon', 'age' => 80, 'url' => 'images/img1.jpg'],
    ['id' => 2, 'nom' => 'Landry', 'age' => 25,  'url' => 'images/img2.jpg'],
    ['id' => 3, 'nom' => 'Pierre', 'age' => 42,  'url' => 'images/img3.jpg'],
    ['id' => 4, 'nom' => 'Claire', 'age' => 50,  'url' => 'images/img4.jpg']
];
for($i = 0; $i < count($tabs); $i++){
echo $tabs[$i]['id'].' ' .$tabs[$i]['nom'].' '.$tabs[$i]['age']. ' '.$tabs[$i]['url'].'<br>';
}


// 2e test sur l'exo 5
$tabBanniere=[ 
1 =>['monsite1.com', 'images/ban1.jpg', 'desc1'],
2 =>['monsite2.com', 'images/ban2.jpg', 'desc2'],
3 =>['monsite3.com', 'images/ban4.jpg', 'desc3'],
];

$banAleatoire = array_rand($tabBanniere);
echo $tabBanniere[$banAleatoire][0]."<br>".
"<img src='".$tabBanniere[$banAleatoire][1]."' />"
."<br>".$tabBanniere[$banAleatoire][2];


?>