<?php

    if(isset($_POST['submit'])) {
        $foutmeldingen = array();

        if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['age']) && isset($_POST['gender']) ) {

            $name = htmlentities($_POST['name']);
            $email = htmlentities($_POST['email']);
            $age = htmlentities($_POST['age']);
            $gender = htmlentities($_POST['gender']);

            // Valideer alle inputvelden
//            if(!ctype_alnum($name)) {
//                $foutmeldingen[] = 'Naam is niet alfanumeriek!';
//            }
            if(!ctype_digit($age)) {
                $foutmeldingen[] = 'Leeftijd is geen cijfer!';
            }

            // Controleer of er foutmeldingen zijn gevonden
            if(sizeof($foutmeldingen) == 0) {
                // Geen foutmeldingen gevonden
                echo "<h1>Uw ingevoerde gegevens:</h1>";
                echo $name . "</br>";
                echo $email . "</br>";
                echo $age . "</br>";
                echo $gender . "</br>";
            } else {
                // Foutmeldingen gevonden
                echo 'Het formulier is niet opgeslagen. Verwerk eerst de volgende feedback: (' . sizeof($foutmeldingen) . ')';
                foreach($foutmeldingen as $melding) {
                    echo "</br>" . $melding;
                }
            }
        } else {
            echo "Vergeet niet alle velden in te voeren!</br>";
        }
    }

?>

<form action="validatie_formulier.php" method="post">
    <label for="">Naam</label><input type="text" name="name"></br>
    <label for="">Email</label><input type="text" name="email"></br>
    <label for="">Leeftijd</label><input type="text" name="age"></br>
    <label for="">Geslacht</label><input type="text" name="gender"></br>
    <input type="submit" name="submit" value="Versturen">
</form>
