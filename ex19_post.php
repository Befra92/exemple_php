<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <form action="traitement2.php" method="POST">
    <div class="form-group">
    Pseudo : <input type="text" name="pseudo"></br>
    </div>
    <div class="form-group">
    Age : <input type="text" name="age"></br>
    </div>
    <div class="form-group">
    Mot de passe : <input type="password" name="pwd"></br>
    </div>
    <div class="form-group">
    Message : <textarea name="message"></textarea></br>
    </div>
    <div class="form-group">
    Formation :<select name="formation" id="">
    <option value="">Choisir</option>
    <option value="dam">DAM</option>
    <option value="php">PHP</option>
    <option value="reseaux">Réseaux</option>
    </select>
    </div>
    <div class="form-group">
    Modules :<select name="modules[]" multiple id="">
    <option value="">Choisir</option>
    <option value="dam">HTML</option>
    <option value="php">CSS</option>
    <option value="reseaux">NODEJS</option>
    </select>
    </div>
    <div class="form-group">
    <input type="checkbox" name="jours['lundi']">Lundi
    <input type="checkbox" name="jours['mardi']">Mardi
    <input type="checkbox" name="jours['mercredi']">Mercredi
    <input type="checkbox" name="jours['jeudi']">Jeudi
    </div>
    <div class="form-group">
    <input type="radio" name="sexe" value="masculin">M
    <input type="radio" name="sexe" value="feminin">F
    </div>
    <button type="submit" name="envoie">Soumettre</button>
    </form>
    </div>
</body>
</html>