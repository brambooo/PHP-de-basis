<?php

include_once('valideerFormulier.class.php');

// Controleer of het formulier is verstuurd naar de server middels een POST request.
if(isset($_POST['submit'])) {

    // Initialiseer form valideer klasse
    $oValideerForm = new ValideerFormulier(INPUT_POST);


    // Controleer of de inputvelden (post superglobals) niet leeg zijn.
    if(!empty($_POST['name']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Valideer via klasse
        $oValideerForm->valideerEmail($email);

        if($oValideerForm->getAantalfoutmeldingen() == 0) {
            echo 'goed';
        } else {
            $oValideerForm->getAantalfoutmeldingen();
        }

        echo 'Welkom ' . $name . ', uw bent geregistreerd met het volgende emailadres: ' . $email;
    } else {
        echo 'Vergeet niet uw naam en emailadres in te voeren!';
    }
}

?>

<form action="testValideerFormulierKlasse.php" method="post">
    <label for="name">Naam</label><input type="text" name="name">
    <label for="email">Email</label><input type="text" name="email">
    <input type="submit" name="submit" value="Versturen">
</form>