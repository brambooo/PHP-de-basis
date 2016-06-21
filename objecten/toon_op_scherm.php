<?php

include_once('Persoon.php');

// Maak een instantie van een persoon object
$bram = new Persoon('Bram', 'Reinold');

// Voeg hobbies toe
$bram->addHobby('Fitness');
$bram->addHobby('Gamen');
$bram->addHobby('Programmeren');

// Toon het object met zijn hobby's
echo "Naam van het object: {$bram->showVolledigeNaam()} en heeft de volgende hobby's: {$bram->showHobbies()}";

echo $bram->showHobbies();

echo '</br></br>';

// Voeg een adres toe
$bram->setAdres( new Adres('Nieuwstraat 37', 'Made', '4921CT' ,'Nederland') );
// Toon het adres
echo $bram->showAdres();
