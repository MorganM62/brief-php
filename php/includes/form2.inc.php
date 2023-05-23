<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addmore</title>
</head>
<body>
<form method="POST" action="index.php">
    <h1>Ajouter plus de données</h1>
    <!--Prénom-->
    <div class="m-3">
      <input type="text" class="form-control mt-3" id="formGroupExampleInput" placeholder="Prénom" name="first_name">
    </div>
  <!--Nom & Age-->
    <div class="m-3">
      <input type="text" class="form-control"style="min-width:800px;" id="formGroupExampleInput" placeholder="Nom" name="last_name">
      <div class="mt-3">
        <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Age" min="18" max="70" name="age">
      </div>
    </div>
  <!--Taille-->
    <div class="input-group m-3" style ="max-width :800px;">
      <span class="input-group-text">Taille (1,26m à 3m)</span>
      <input type="number" class="form-control" min="1,26"  step="0.01" max="3" name="size">
      <span class="input-group-text">m</span>
    </div>
  <!--Genre-->
    <div class="form-check form-check-inline m-3">
      <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Homme">
      <label class="form-check-label" for="inlineRadio1">Homme</label>
    </div>
    <div class="form-check form-check-inline m-3">
      <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Femme">
      <label class="form-check-label" for="inlineRadio2">Femme</label>
    </div>
  <!--Bouton enregistrer-->
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button type="submit" class="btn btn-primary me-md-2 mb-2" style="min-width: 175px; max-height:39px;" data-bs-placement="right" name="register">Enregistrer les données</button>
    </div>
  </form>
</body>
</body>
</html>