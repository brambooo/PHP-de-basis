<?php
    // Formulier afhandelen
    if(isset($_POST['submit'])) {
        try {

        } catch(Exception $ex) {
            $ex;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Afbeelding uploaden via formulier</title>
</head>
<body>
    <h1>Upload een afbeelding</h1>
    <?php
        if(isset($_POST['submit'])) { ?>
            <!-- Toon afbeelding met bestaandsnaam -->
            <?php } ?>

    <!-- Formulier -->
    <form action="<?php htmlentities( $_SERVER['PHP_SELF'] ) ?>" method="post" enctype="multipart/form-data">
        <label for="">Afbeelding uploaden:</label>
        </br>
        <input type="file" name="afbeelding">
        </br>
        </br>
        <input type="submit" name="submit" value="Uploaden">
    </form>
</body>
</html>
