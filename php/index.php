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
    <div class ="d-flex flex-row justify-content-start">  
            <nav class="d-flex flex-column bd-highlight mb-3">
                <div class="ms-5 mt-4 bd-highlight">
                    <a href="index.php">
                        <button type="button" class="btn btn-outline-secondary" style="min-width: 175px; max-height:39px;">Home</button>
                    </a>
                </div>
        
                <?php
                if (!empty($_SESSION)){
                $table=$_SESSION['table'];
                include "./includes/ul.inc.php";
                
                }
                ?>
            </nav>
            <section class ="inline-flex flex-column ms-5 mt-4">
            <?php
                if (isset($_GET['add'])){
                    include "./includes/form.inc.html";
                }
                elseif (isset($_POST['register']) xor isset($_POST['register_more'])){
                    $prénom = $_POST['first_name'];
                    $nom = $_POST['last_name'];
                    $age = $_POST['age'];
                    $size = $_POST['size'];
                    $gender = $_POST['gender'];
                    
                    $table = array(
                        'first_name' => $prénom,
                        'last_name' => $nom,
                        'age' => $age,
                        'size' => $size,
                        'gender' => $gender,
                        /* partie 2 */
                        'HTML' => !empty($_POST['HTML']) ? ($_POST['HTML']) : null,
                        'CSS' => !empty($_POST['CSS']) ? ($_POST['CSS']) : null,
                        'JavaScript' => !empty($_POST['JavaScript']) ? ($_POST['JavaScript']) : null,
                        'PHP' => !empty($_POST['PHP']) ? ($_POST['PHP']) : null,
                        'MySQL' => !empty($_POST['MySQL']) ? ($_POST['MySQL']) : null,
                        'Bootstrap' => !empty($_POST['Bootstrap']) ? ($_POST['Bootstrap']) : null,
                        'Symfony' => !empty($_POST['Symfony']) ? ($_POST['Symfony']) : null,
                        'React' => !empty($_POST['React']) ? ($_POST['React']) : null,
                        'color' => !empty($_POST['color']) ? ($_POST['color']) : null,
                        'date' => !empty($_POST['date']) ? ($_POST['date']) : null,
                        'img' => !empty($_POST['img']) ? ($_POST['img']) : null,
                    );
                    
                    $_SESSION['table'] = $table;
                    echo '
                    <div class = "alert alert-success" role="alert" style="min-width:max-content;">
                    Données sauvegardées !
                    </div>
                    ';
                }


                elseif (isset($_GET['debuging'])){
                    echo '<h2 class ="text-center mb-5">debogage</h2>';
                    echo "<h3>===> Lecture du tableau à l'aide de la fonction print_r()</h3>";
                    print "<pre>";
                    print_r (array_filter($table));
                    print "<pre>";
                }
                elseif (isset($_GET['concatenation'])){
                    echo "<h2 class = 'text-center mb-5'>Concaténation</h2>";
                    echo "<h3>===> Construction d'une phrase avec le contenu du tableau</h3>";
                    echo "<p>Mr" ."&nbsp;". $table['first_name'] ."&nbsp;". $table['last_name']."<br>".
                    "j'ai" . "&nbsp;". $table['age'] ."&nbsp;"."ans"."&nbsp". "et je mesure" ."&nbsp;". $table['size'] ."m"."." ."</p>". "<br>"."<br>"."<br>";

                    echo "<h3>===> Construction d'une phrase après MAJ du tableau</h3>";
                    echo "<p>Mr" ."&nbsp;". $table['first_name'] ."&nbsp;". strtoupper($table['last_name'])."<br>".
                    "j'ai" . "&nbsp;". $table['age'] ."&nbsp;"."ans"."&nbsp". "et je mesure" ."&nbsp;". $table['size'] ."m"."."."</p>". "<br>"."<br>"."<br>";

                    echo "<h3>===> Affichage d'une virgule à la place du point pour la taille</h3>";
                    echo "<p>Mr" ."&nbsp;". $table['first_name'] ."&nbsp;". strtoupper($table['last_name'])."<br>".
                    "j'ai" . "&nbsp;". $table['age'] ."&nbsp;"."ans"."&nbsp". "et je mesure" ."&nbsp;". str_replace(".", ",", $table['size']) ."m"."."."</p>". "<br>"."<br>"."<br>";
                    
                }

                elseif (isset($_GET['loop'])){
                    echo "<h2 class = 'text-center mb-5'>Boucle</h2>";
                    echo "<h3 class = 'text-center mb-5'> ===> Lecture du tableau à l'aide de la boucle foreach</h3>";
                    readTable($table);

                }
                
                elseif(isset($_GET['function'])){
                    echo "<h2 class ='text-center mb-5'>Fonction</h2>";
                    echo"<h3 class 'text-center mb-5'> ===> j'utilise ma fonction readTable()</h3><br>";
                    readTable($table);
                }
                
                elseif(isset($_GET['del'])){
                    session_unset();
                    echo '
                    <div class = "alert alert-success" role="alert">
                    Données supprimées !
                    </div>
                    ';
                }
                
                elseif(isset($_GET['addmore'])){
                    include "./includes/form2.inc.php";
                    
                }

                elseif (isset($table)){
                    echo '
                    <div class = "d-flex d-row">
                        <div style="max-width: 15rem;">
                            <a href="index.php?add">
                                <button type="submit" class="btn btn-primary">Ajouter des données</button>
                            </a>
                        </div>
                        <div class = "ms-2" style="max-width: 15rem;">
                            <a href="index.php?addmore">
                            <button type="submit" class="btn btn-secondary">Ajouter plus de données</button>
                            </a>
                        </div>
                    </div>';
                }

                else{
                    echo '<div style="max-width: 15rem;">
                        <a href="index.php?add">
                            <button type="submit" class="btn btn-primary">Ajouter des données</button>
                        </a>
                    </div>';
                }
                
                function readTable ($table){
                    $tab = 0; 
                    $filter = array_filter($_SESSION['table']);
                    foreach($filter as $key => $value){
                        echo 'à la igne n°'.'&nbsp;"'.$tab++.'"&nbsp;'.'correspond la clé'.'&nbsp;"'.$key .'"&nbsp;'.'et contient'.'&nbsp;"'.$value.'"<br>';
                    }
                }
                
                if (!is_dir('uploaded'))
                        mkdir('uploaded', 0777);


                $upload = "./uploaded/" .'img1.png';
                $_FILES['img']['name'] = $upload;                
                
                if (isset($_FILES['img']['tmp_name'])) {
                    $return = copy($_FILES['img']['tmp_name'], $_FILES['img']['name']);
                }
                
                ?>

        </section>
    </div>
    <?php
        include "./includes/footer.inc.html";
    ?>
</body>
</html>