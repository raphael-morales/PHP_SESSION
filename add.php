<?php
include "_header.php";



?>


<form action="valid.php" method="post" style="width: 60%; margin: auto">
    <div class="mb-1">
        <label for="lastname" class="form-label">Nom</label>
        <input type="text" class="form-control" name="lastname" id="lastname" aria-describedby="emailHelp">
    </div>
    <div class="mb-1">
        <label for="firstname" class="form-label">Prénom</label>
        <input type="text" class="form-control" name="firstname" id="firstname">
    </div>
    <div class="mb-1">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email">
    </div>
    <div class="mb-1">
        <label for="phone" class="form-label">Numero de téléphone</label>
        <input type="tel" class="form-control" name="phone" id="phone">
    </div>
    <div class="mb-1">
        <label for="birthay" class="form-label">date de naissance</label>
        <input type="date" class="form-control" name="birthay" id="birthay">
    </div>
    <div class="mb-1">
        <label for="adress" class="form-label">adresse</label>
        <input type="text" class="form-control" name="adress" id="adress">
    </div>

    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<?php
include "_footer.php";
?>

