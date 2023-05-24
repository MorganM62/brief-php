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
    <h1 class="text-center">Ajouter plus de données</h1>
    <div class="row">
      <div class="card col-md-7 mx-auto-my-1">
        <!--Prénom-->
        <div class="m-3">
          <input type="text" class="form-control mt-3" id="formGroupExampleInput" placeholder="Prénom" name="first_name">
        </div>
        <!--Nom & Age-->
        <div class="m-3" style = "max-width:730px;">
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nom" name="last_name">
          <div class="mt-3">
          <text>Age (18 à 70)</text>
            <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Renseignez votre age" min="18" max="70" name="age">
          </div>
        </div>
        <!--Taille-->
        <div class="input-group m-3" style =" min-width : 670px ;max-width:max-content;">
          <span class="input-group-text">Taille (1,26m à 3m)</span>
          <input type="number" class="form-control" min="1,26" step="0.01" max="3" name="size">
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
      </div>
      <!-- Connaissances -->
      <div class="inline-flex flex-column card col-md-4 mx-auto my-1">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="HTML" id="flexCheckDefault" name="HTML">
          <label class="form-check-label" for="flexCheckDefault">
            HTML
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="CSS" id="flexCheckChecked" name="CSS">
          <label class="form-check-label" for="flexCheckChecked">
            CSS
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="JavaScript" id="flexCheckDefault" name="JavaScript">
          <label class="form-check-label" for="flexCheckDefault">
            JavaScript
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="PHP" id="flexCheckChecked" name="PHP">
          <label class="form-check-label" for="flexCheckChecked">
            PHP
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="MySQL" id="flexCheckDefault" name="MySQL">
          <label class="form-check-label" for="flexCheckDefault">
            MySQL
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="Bootstrap" id="flexCheckChecked" name="Bootstrap">
          <label class="form-check-label" for="flexCheckChecked">
            Bootstrap
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="Symfony" id="flexCheckDefault" name="Symfony">
          <label class="form-check-label" for="flexCheckDefault">
            Symfony
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="React" id="flexCheckChecked" name="React">
          <label class="form-check-label" for="flexCheckChecked">
            React
          </label>
        </div>
        <br><br>
        <text class ="m-1">Couleur préférée</text>
        <input type="color" name = "color"> <br>
        <text class ="m-1">Date de naissance</text>
        <input type="date" name="date">
      </div>
      <!-- Image -->
      <div class="card col-11 mx-auto my-1">
      <label for="formFile" class="form-label">Joindre une image (jpg ou pgn)</label>
        <input class="form-control" type="file" id="formFile" name ="image">
      </div>
    </div>
    <!-- Bouton Enregistrer -->
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button type="submit" class="btn btn-primary me-4 mt-4" style="min-width: 175px; max-height:39px;" data-bs-placement="right" name="register">Enregistrer les données</button>
    </div>
  </form>
</body>
</body>

</html>