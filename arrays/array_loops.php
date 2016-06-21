<?php

// Onze array
$bestek = array('vorken' => 10, 'messen' => 15, 'lepels' => 25);
$servies = array('borden' => 50, 'kopjes' => 55, 'bekers' => 33);

$keuken1['bestek'] = $bestek;
$keuken1['servies'] = $servies;

echo '<pre>' . print_r($keuken1, true) . '</pre>';

// Simpele foreach loop - met key value pairs
foreach($bestek as $key => $value) {
    echo 'soort: ' . $key . ' -- aantal: ' . $value . '</br>';
}

// foreach loop door een multidimensionale array (array met meerdere arrays inzich)
foreach($keuken1 as $categorie_key => $categorie_items) {

    // Haal categorie sleutel op
    echo 'Keuken categorie type: <b>' . $categorie_key . '</b></br>';
    // Haal van deze categorie alle verschillende items op met waarden
    foreach($categorie_items as $item_key => $item_value) {
        echo $item_key . ' -- aantal: ' . $item_value . '</br>';
    }
    // extra regel
    echo '</br>';
}

?>