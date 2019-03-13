<?php

// $texte = "Le temps est beau !";

// file_put_contents("file.txt", $texte);
// echo "fichier créé";

// $phrase = file_get_contents("file.txt");
// echo $phrase;

//file est un tableau
// $tab = file('file.txt');
// foreach($tab as $t){
//     echo $t.'<br>';
// }



// $data = fopen('file.txt','r');
// if (!$data){
//     echo "Impossible d'ouvrir le fichier";
// }else{
//     while($d=fgetc($data)){
//         echo $d;
//     }  
// }


// $data = fopen('file.txt', 'a');
// if ($data){
//      $texte = 'Il était une fois une histoire';
//      $texte1 = 'UN LION DANS LA SAVANE';
//      $texte2 = 'UN CHIEN DANS LA SAVANE';
//     // fwrite($data, $texte.PHP_EOL);//garde dans le file.txt sans écraser
//     fwrite($data, $texte2);
// }
// fclose($data);



//créer un fichier qui affiche et récupère le nbre de vue et l'affiche
touch('compteur.txt');
$data = fopen('compteur.txt', 'r+');
$nb = fgets($data);
if($nb ==""){
    $nb=0;
}
$nb++;
fseek($data,0);
fputs($data,$nb);
fclose($data);

echo ("$nb fois");


?>
