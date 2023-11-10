<?php

include "_header.php";

$idEleve = $_GET['eleve'];
if (isset($_POST['commentaire'])){
    if (!empty($_POST['commentaire'])){
        $_SESSION['user'][$_GET['eleve']]['commentaire'] = $_POST["commentaire"];
    }else{
        $msg = "Votre commentaire ne peut etre vide";
        echo '<div>';
        include "_box-danger.php";
        echo '</div>';
    }
}

$data = $_SESSION['user'][$_GET['eleve']];

if (isset($_GET['eleve']) && !empty($data)) {
    echo '<div class="card text-center">
              <div class="card-header">
                <h1>' . $data["lastname"] . ' ' . $data["firstname"] . '</h1>
              </div>
              <div class="card-body">
                <h5 class="card-title">Email: ' . $data["email"] . '</h5>
                <p class="card-text">Adresse: ' . $data["adress"] . '</p>
                <p class="card-text">Numéro de téléphone: ' . $data["phone"] . '</p>
                <p class="card-text">Date de naissance: ' . date("d/m/Y", strtotime($data["birthay"])) . '</p>
              </div>
              <div class="card-footer text-body-secondary">';
              if (isset($data['commentaire'])){
                  if (!empty($data['commentaire'])){
                      echo '<p class="card-text">Commentaire: ' . $data["commentaire"] . '</p>';
                  }
              }else{
                  echo '<form action="data.php?eleve=' . $idEleve . '" method="post" style="width: 60%; margin: auto;">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="commentaire" name="commentaire" style="height: 100px"></textarea>
                                <label for="commentaire">ecrivez un commentaire a l\'élève</label>
                            </div>
                          <button type="submit" class="btn btn-primary" style="float: inline-end;">ajouter le commentaire</button>
                        </form>';
              }
              echo '</div>
           </div>';
}else{
    $msg = 'veuillez selectionner un élève';
    include "_box-danger.php";
}

include "_footer.php";
?>
