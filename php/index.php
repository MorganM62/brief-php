<?php
session_start();
?>
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
    <div class="d-flex justify-content-start">
        <div class="ms-5 mt-3">
            <a href="index.html">
            <button type="button" class="btn btn-outline-secondary" style="min-width: 175px; max-height:39px;">Home</button>
            </a>
         </div>
        <div class="ms-4 mt-3">
            <a href="index.php?add">
                <button type="submit" class="btn btn-primary">Ajouter des données</button>
            </a>
        </div>
    </div>
    
    <?php
        if (isset($_GET['add'])){
            
            include "./includes/form.inc.html";
        }
    ?>
    
    <?php
     include "./includes/footer.inc.html";
    ?>


</body>
</html>