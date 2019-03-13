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
    <table class="table table-striped">
        <tr>
            <th>Id</th><th>Nom</th><th>Prénom</th><th>Age</th>
        </tr>
        <?php 
        require_once('ex21bdd.php');
        // var_dump($res);
        while($donnees = mysqli_fetch_assoc($res)){
        ?>
        <tr>
            <td><?php echo $donnees['Id_personne'];?></td>
            <td><?php echo $donnees['Nom'];?></td>
            <td><?php echo $donnees['Prenom'];?></td>
            <td><?php echo $donnees['Age'];?></td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>