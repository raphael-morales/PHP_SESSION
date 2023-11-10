<?php
include "_header.php";


?>


<?php
if (!empty($_POST['lastname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['birthay']) && !empty($_POST['adress'])){
    $msg = 'L\'élève a bien été ajouté';
    include "_box-success.php";
    $data = [
        "lastname" => $_POST["lastname"],
        "firstname" => $_POST["firstname"],
        "email" => $_POST["email"],
        "phone" => $_POST["phone"],
        "birthay" => $_POST["birthay"],
        "adress" => $_POST["adress"]
    ];

    array_push($_SESSION['user'], $data);

}else{
    $msg ='L\'élève n\'a pas été ajouté car toutes les information n\'ont pas été renseigné!';
    include "_box-danger.php";
}

?>


<?php
include "_footer.php";
?>

