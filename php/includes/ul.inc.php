<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
</head>
<body>
    
    <div class="list-group ms-5  text-center" style="max-width : 11rem;">
        <a href="index.php?debuging" class="list-group-item list-group-item-action <?php if(isset($_GET['debuging'])){echo"active";}?>" >Débogage</a>
        <a href="index.php?concatenation" class="list-group-item list-group-item-action <?php if(isset($_GET['concatenation'])){echo'active';}?>">Concaténation</a>
        <a href="index.php?loop" class="list-group-item list-group-item-action <?php if (isset($_GET['loop'])){echo"active";}?>">Boucle</a>
        <a href="index.php?function" class="list-group-item list-group-item-action <?php if (isset($_GET['function'])){echo'active';}?>">Fonction</a>
        <a href="index.php?del" class="list-group-item list-group-item-action <?php if (isset($_GET['del'])){echo'active';}?>">Supprimer</a>
    </div>
</body>
</html>