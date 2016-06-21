<?php

// We gaan hier alle verschillende data types in PHP valideren.

$array = array();
echo 'Array validatie d.m.v. is_array() '       . checkValue( is_array($array) ) . '</br>';
echo 'Boolean validatie d.m.v. is_bool() '      . checkValue( is_bool(false) ) . '</br>';
echo 'Double validatie d.m.v. is_double() '     . checkValue( is_double(55.5) ) . '</br>';
echo 'Float validatie d.m.v. is_float() '       . checkValue( is_float(5.55) ) . '</br>';
echo 'Int validatie d.m.v. is_int() '           . checkValue( is_int(5) ) . '</br>';
echo 'Numeriek validatie d.m.v. is_numeric() '  . checkValue( is_numeric(5) ) . '</br>';
echo 'String validatie d.m.v. is_string() '     . checkValue( is_string("Hallo")) . '</br>';
echo 'Object validatie d.m.v. is_object() '     . checkValue( is_object( new Person("bram")) ) . '</br>';

// Hulp methoden/functies

// Deze methoden geeft true/false terug.
function checkValue($value) {
    if($value == 1) {
        return 'TRUE';
    } else if($value == 0) {
        return 'FALSE';
    } else {
        return 'Er ging iets verkeerd';
    }
}

class Person {
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}

?>