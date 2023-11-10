<?php

include "_header.php";

if (isset($_GET['logout']) && $_GET['logout'] == 'true'){
    session_destroy();
    header('/index.php');
    exit();


}
?>
<div style="display: flex; flex-direction: column; align-items: center; text-align: center">
    <h1>Bienvenue dans l'annuaire des élèves </h1>
    <p>Il y a actuellement <?= count($_SESSION['user']) ?> élèves enregistré sur le site</p>
</div>
<?php
    include "_footer.php";
?>
