session_start()

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
       include "./includes/head.inc.html";
    ?>
    
    <title>Formulaire Php</title>
</head>
<body>
   <?php 
        include "./includes/header.inc.html";
    ?>
    <div class="card border-primary ms-4 mt-4 text-center" style="max-width: 11rem;">
        <div class="card-header">Home</div>
    </div>
    <div class="list-group ms-4  text-center" style="max-width : 11rem;">
        <a href="#" class="list-group-item list-group-item-action active">Débogage</a>
        <a href="#" class="list-group-item list-group-item-action">Concaténation</a>
        <a href="#" class="list-group-item list-group-item-action">Boucle</a>
        <a href="#" class="list-group-item list-group-item-action">Fonction</a>
        <a href="#" class="list-group-item list-group-item-action">Supprimer</a>
    </div>
    <button type="button" class="btn btn-primary ms-4 mt-4 inline">Ajouter des données</button>
    <?php 
     include "./includes/footer.inc.html";
    ?>

</body>
</html>