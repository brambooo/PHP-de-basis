<?php

// Controleer of het formulier is verstuurd naar de server middels een POST request.
if(isset($_POST['submit'])) {

    // Controleer of de inputvelden (post superglobals) niet leeg zijn.
    if(!empty($_POST['name']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];

        echo 'Welkom ' . $name . ', uw bent geregistreerd met het volgende emailadres: ' . $email;
    } else {
        echo 'Vergeet niet uw naam en emailadres in te voeren!';
    }
}

?>

<form action="post_formulier.php" method="post">
    <label for="name">Naam</label><input type="text" name="name">
    <label for="email">Email</label><input type="text" name="email">
    <input type="submit" name="submit" value="Versturen">
</form>
