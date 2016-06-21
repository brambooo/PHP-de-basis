<?php

// Array als genummerde lijst begint bij 0
$names[] = 'Bram';
$names[] = 'Koen';
$names[] = 'Jeroen';

echo '<pre>' . print_r($names, true) . '</pre>' . '</br>';

// Array als genummerde lijst met nummer die begint bij 1
$maanden = array(1 => 'januari', 'februari', 'maart', 'april', 'mei', 'juni', 'juli', 'augustus', 'september', 'oktober', 'november', 'december');

echo '<pre>' . print_r($maanden, true) . '</pre>' . '</br>';

// Associatieve array - is een array met named keys
$bram = array(
    'naam' => 'Bram Reinold',
    'school' => 'avans',
    'opleiding' => 'breda'
);

echo '<pre>' . print_r($bram, true) . '</pre>' . '</br>';

// Multidimensional array - dit is een array met meerdere arrays inzich
$huis = array(
    // Bewoners array
    'bewoners' => array(
        'Bram',
        'Koen',
        'Rasmus',
        'Nel'
    ),
    // Woonplaats array
    'woonplaats' => array(
        'Woonplaats' => 'Made',
        'Straat' => 'Nieuwstraat',
        'Huisnummer' => 37,
        'Postcode' => '4921CT'
    ),
    // Kosten array
    'kosten' => array(
        'Hypotheek' => 500,
        'Vaste_lasten' => 250
    )
);

echo '<pre>' . print_r($huis, true) . '</pre>' . '</br>';
// Specifiek data ophalen
echo '<pre>' . print_r($huis['bewoners'], true) . '</pre>' . '</br>';


// Array met personen
$personen = array(
    'Bram' => new Person('Bram', 23, 'Informatica'),
    'Koen' => new Person('Koen', 20, 'Bakker'),
    'Michel' => new Person('Michel', 23, 'Bedrijfskunde')
);

// Print personen array
echo '<pre>' . print_r($personen, true) . '</pre>' . '</br>';
// persoon ophalen met de naam bram
echo '<pre>' . print_r($personen, true) . '</pre>' . '</br>';

// Test personen klasse om te kijken hoe dit werkt in een array
class Person {
    // Attributes
    private $name;
    private $age;
    private $education;

    /**
     * Person constructor.
     */
    public function __construct($name, $age, $education)
    {
        $this->name = $name;
        $this->$age = $age;
        $this->education = $education;
    }

    // Methods
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getEducation()
    {
        return $this->education;
    }
    public function setEducation($education)
    {
        $this->education = $education;
    }

}


?>