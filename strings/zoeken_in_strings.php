<?php
/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 21-6-2016
 * Time: 16:08
 */

$string = "Hallo, mijn naam is Bram Reinold en ik ben 23 jaar oud."; // Bram begint bij regel 20

// strpos() - vindt de positie van het eerste voorkomen van een string
echo strpos($string, 'Bram');

echo '</br></br>';

// substr() - retourneert een deelstring
// heeft 3 parameters: de string (1), int start (2), int lengte (3)
echo substr($string, 20); // geeft een substr terug vanaf regel 20 van de string (dus Bram...)

echo '</br></br>';

$string2 = "Hallo Wereld, PHP is een leuke programmeertaal, je kan er veel mooie dingen mee maken.";
echo substr($string2, 0, 46) . '...';

echo '</br></br>';

// str_replace() - zoekt in een string en vervangt alle waarden met iets anders.
// heeft 3 parameters: waar je op zoekt (1), de vervangwaarde (2), waarin je zoekt (3).
echo str_replace('e', '$', $string2);