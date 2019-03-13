<?php require_once('data.php');?>
<!-- <?php include('data.php');?> -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inclusion PHP</title>
</head>
<body>
    <h2>Noms stagiaires</h2>
    <ul>
    <?php var_dump($tab);?>
    <?php for($i = 0; $i < sizeof($tab); $i++){
        // echo $i'<li>'.$i.'=>'.$tab[$i].'</li>';
        echo '<li>'.$tab[$i].'</li>';
    }
        ?>
    </ul>
</body>
</html>