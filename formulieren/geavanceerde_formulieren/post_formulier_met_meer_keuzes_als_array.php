<?php

if(isset($_POST['submit'])) {

    echo "<pre>" . print_r($_POST, true) . "</pre>";
    exit();
}

?>

<form action="post_formulier_met_meer_keuzes_als_array.php" method="post">

    <h1 for="">Vakantie finder</h1>

    <label for="">Naam</label><input type="text" name="name"></br>
    </br>
    <input type="checkbox" name="vakantie[]" value="stedentrip"> Stedentrip</br>
    <input type="checkbox" name="vakantie[]" value="jongerenvakantie"> Jongerenvakantie</br>
    <input type="checkbox" name="vakantie[]" value="cultureel"> Cultureel</br>
    <input type="checkbox" name="vakantie[]" value="all"> Alles</br>
    </br>

    <label for="">Land</label></br>
    <input type="radio" name="type_land" value="binnenland"> Binnenland</br>
    <input type="radio" name="type_land" value="binnenland"> Buitenland</br>

    </br>

    <select name="landkeuze[]" multiple="multiple">
        <option value="Nederland">Nederland</option>
        <option value="Belgie">Belgie</option>
        <option value="Rusland">Rusland</option>
        <option value="China">China</option>
    </select>

    </br>
    </br>

    <input type="submit" name="submit" value="Versturen">
</form>
