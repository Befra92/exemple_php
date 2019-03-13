<?php
echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js">
    <title>Document</title>
</head>
<body>
<h1>titre</h1>';


$tabs = [
    ['id' => 1, 'nom' => 'Simon', 'age' => 80, 'url' => 'images/img1.jpg'],
    ['id' => 2, 'nom' => 'Landry', 'age' => 25,  'url' => 'images/img1.jpg'],
    ['id' => 3, 'nom' => 'Pierre', 'age' => 42,  'url' => 'images/img1.jpg'],
    ['id' => 4, 'nom' => 'Claire', 'age' => 50,  'url' => 'images/img1.jpg']
];


for ($i=0; $i<count($tabs);$i++){
    echo $tabs [$i]['id'].' ' .$tabs [$i]['nom'].'' .$tabs [$i]['age'].'' .$tabs [$i]['url'].'<br>';
};



echo'
    <table>
        <tr>
        <th>Id</th><th>Nom</th><th>Age</th><th>url</th>    
        </tr>';
        for ($i=0; $i<count($tabs);$i++){
            echo'<tr>
                <td>'.$tabs[$i]["id"].'</td>
                <td>'.$tabs[$i]["nom"].'</td>
                <td>'.$tabs[$i]["age"].'</td>
                <td><img src='.$tabs[$i]["url"].'></td>
            </tr>';
        }
echo '</table>';


</body>
</html>
?>