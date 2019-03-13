<?php

// $b = 0;
function afficher($a){
    global $b;

    $b = $a + 5;
    echo $b;
}
// afficher(2);
// echo $b;
$text = 'Le temps est beau';
if (isset($text)){
    //isset si var existe
    echo 'ok';
}else{
    echo "ko";
}

if (!empty($text)){
    //!empty si la var a du contenu
    echo 'ok';
}else{
    echo "ko";
}
//  echo phpversion();
echo date('d-m-y');



?>