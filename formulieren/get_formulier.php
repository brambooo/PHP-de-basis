<?php

if($_GET['submit']) {
    $name =  $_GET['name'];
    $email =  $_GET['email'];

    echo 'Welkom ' . $name . ', uw bent geregistreerd met het volgende emailadres: ' . $email;
}

?>

<form action="get_formulier.php" method="get">
    <label for="name">Naam</label><input type="text" name="name">
    <label for="email">Email</label><input type="text" name="email">
    <input type="submit" name="submit" value="Versturen">
</form>

