<?php
include "_header.php";

//$flagComments = $_POST['flagComments'];
if (isset($_GET['suppr'])){
    unset($_SESSION['user'][$_GET['suppr']]);
}

?>
<h1 style="text-align: center">Listes des élèves</h1>

<?php
echo '<div style="display: flex; justify-content: space-evenly">';
//    echo '<form method="post">';
//            echo '<input type="hidden" name="flagComments" value="0">';
//            echo '<button type="submit" class="btn btn-info">Afficher tous les élèves</button>
//          </form>';
//    echo '<form method="post">';
//            echo '<input type="hidden" name="flagComments" value="1">';
//            echo '<button type="submit" class="btn btn-info">Elève avec commentaire</button>
//          </form>';
//    echo '<form method="post">';
//            echo '<input type="hidden" name="flagComments" value="2">';
//            echo '<button type="submit" class="btn btn-info">Elève sans commentaire</button>
//          </form>';
if (!isset($_GET['filtre'])){
    echo '<button class="btn btn-info"><a href="/list.php?filtre=true" style="text-decoration: none; color: white">Elève avec commentaire</a></button>';
}else{
    echo '<button class="btn btn-info"><a href="/list.php" style="text-decoration: none; color: white">Tous les élèves</a></button>';
}

echo '</div>';
if (empty($_SESSION['user'])){
    $msg = '<h1>Aucun élève à été ajouté</h1>';
    include "_box-danger.php";
}else {
    echo '<div style="display: flex; justify-content: center">';
    foreach ($_SESSION['user'] as $key => $value) {
    if ((isset($_GET['filtre']) && $_GET['filtre'] == 'true' && isset($value['commentaire'])) || !isset($_GET['filtre'])){
        echo '
                <div class="card" style="width: 18rem;">
                  <div class="card-body">
                    <h5 class="card-title"> ' . $value["lastname"] . '  ' . $value["firstname"] . '</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Date de naissance: ' . date("d/m/Y", strtotime($value["birthay"])) . '</h6>
                    <p class="card-text">adresse: ' . $value["adress"] . '</p>
                    <a href="data.php?eleve=' . $key . '" class="card-link">voir les détails de l\'élève</a>
                    <button class="btn btn-danger"><a href="/list.php?suppr='.$key.'" style="text-decoration: none; color: white">supprimer</a></button>
                  </div>
                </div>
              ';
    }
    }
    echo '</div>';







//    if ($flagComments == 1){
//        $countComments = 0;
//        echo '<div style="display: flex; flex-direction: column-reverse; justify-content: center ;align-items: center">';
//        echo '<div style="display: flex">';
//            foreach ($_SESSION['user'] as $key => $value)  {
//                if (isset($value['commentaire'])){
//                    echo '
//                    <div class="card" style="width: 18rem;">
//                      <div class="card-body">
//                        <h5 class="card-title"> ' . $value["lastname"] . '  ' . $value["firstname"] . '</h5>
//                        <h6 class="card-subtitle mb-2 text-body-secondary">Date de naissance: ' . date("d/m/Y", strtotime($value["birthay"])) . '</h6>
//                        <p class="card-text">adresse: ' . $value["adress"] . '</p>
//                        <p class="card-text">Commentaire: ' . $value["commentaire"] . '</p>
//                        <a href="data.php?eleve=' . $key . '" class="card-link">voir les détails de l\'élève</a>
//                      </div>
//                    </div>
//                  ';
//                    $countComments ++;
//                }
//            }
//        echo '</div>';
//            echo '<div style="width: 60%;">';
//                $msg = 'Nombre d\'élève sans commentaire = <b>'. $countComments . '</b>';
//                include "_box-success.php";
//            echo '</div>';
//        echo '</div>';
//    }elseif ($flagComments == 2){
//        $countComments = 0;
//
//        echo '<div style="display: flex; flex-direction: column-reverse; justify-content: center ;align-items: center">';
//        echo '<div style="display: flex">';
//            foreach ($_SESSION['user'] as $key => $value)  {
//                if (!isset($value['commentaire'])){
//                    echo '
//                    <div class="card" style="width: 18rem;">
//                      <div class="card-body">
//                        <h5 class="card-title"> ' . $value["lastname"] . '  ' . $value["firstname"] . '</h5>
//                        <h6 class="card-subtitle mb-2 text-body-secondary">Date de naissance: ' . date("d/m/Y", strtotime($value["birthay"])) . '</h6>
//                        <p class="card-text">adresse: ' . $value["adress"] . '</p>
//                        <a href="data.php?eleve=' . $key . '" class="card-link">voir les détails de l\'élève</a>
//                      </div>
//                    </div>
//                  ';
//                    $countComments ++;
//                }
//            }
//        echo '</div>';
//            echo '<div style="width: 60%;">';
//                $msg = 'Nombre d\'élève sans commentaire = <b>'. $countComments . '</b>';
//                include "_box-success.php";
//            echo '</div>';
//        echo '</div>';
//    }elseif ($flagComments == 0){
//        echo '<div>';
//        $msg = 'Nombre d\'élève = <b>'.count($_SESSION["user"]) . '</b>';
//        include "_box-success.php";
//        echo '</div>';
//        echo '<div style="display: flex; justify-content: center">';
//        foreach ($_SESSION['user'] as $key => $value) {
//            echo '
//                <div class="card" style="width: 18rem;">
//                  <div class="card-body">
//                    <h5 class="card-title"> ' . $value["lastname"] . '  ' . $value["firstname"] . '</h5>
//                    <h6 class="card-subtitle mb-2 text-body-secondary">Date de naissance: ' . date("d/m/Y", strtotime($value["birthay"])) . '</h6>
//                    <p class="card-text">adresse: ' . $value["adress"] . '</p>
//                    <a href="data.php?eleve=' . $key . '" class="card-link">voir les détails de l\'élève</a>
//                  </div>
//                </div>
//              ';
//        }
//        echo '</div>';
//    }

}

?>

<?php
include "_footer.php";
?>




