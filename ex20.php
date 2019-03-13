<?php
//Tester la soumission
if (isset($_POST['upload'])){
    // echo 'ok';
    // var_dump($_FILES['fichiers']);
    $_file_name = $_FILES['fichier']['name'];
    $_file_tmp_name = $_FILES['fichier']['tmp_name'];
    //destination = repertoire des images
    $destination= "images/".$_file_name;
    //methode pour déplacer les images
    if(move_uploaded_file($_file_tmp_name, $destination)){
        echo 'Fichier téléchargé...';
        //Redirection vers un site
        header('Location:http://beatrice-frant.fr');
    };
    //Validation côté Serveur sur les champs de saisie login et pwd
    if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pwd'])){
        //htmlspecialchars : decode tous caractères ou symboles en Texte
        $login = htmlspecialchars(trim(addslashes($_POST['login'])));
        $pwd = md5(htmlspecialchars(trim(addslashes($_POST['pwd']))));
        echo('Données prêtes pour la Bdd'.''.$login. ' ' .$pwd);
    }
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Formulaire</title>
</head>
<body>
<div class="container">
        <h2>Envoie de fichier</h2>
        <div class="form-group">
        <form action="" method="POST" enctype="multipart/form-data"> 
        </div>
        <div class="form-group">
        <!-- maxlength = taille max attendu -->
        Login<input type="text" name="login" maxlength=5>
        </div>
        <div class="form-group">
        Mot de passe<input type="password" name="pwd" maxlength=8><br>
        </div>
        <div class="form-group">
        <input type="file" name="fichier"><br>
        </div>
        <div class="form-group">
        <input type="submit" name="upload" value="Soumettre"><br>
        </form>
        </div>
</div>
</body>
</html>