<?php

// Benodigde klassen
require_once('Adres.php');

/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 21-6-2016
 * Time: 18:01
 */
class Persoon
{
    // Attributen
    private $voornaam;
    private $achternaam;
    private $hobbies;
    private $adres;

    // Constructor (initialisatie van een persoon object)
    public function __construct($voornaam, $achternaam)
    {
        $this->voornaam = $voornaam;
        $this->achternaam = $achternaam;
        // Initialiseer hobby array
        $this->hobbies = array();
    }

    // Methoden
    public function showVolledigeNaam() {
        return $this->voornaam . ' ' . $this->achternaam;
    }

    public function addHobby($hobby) {
        $this->hobbies[] = $hobby;
    }

    public function showHobbies() {
        // implode wordt gebruikt om alle hobbies in het array te scheiden d.m.v. een komma.
        return implode(', ', $this->hobbies);
    }

    public function setAdres($adres) {
        $this->adres = $adres;
    }

    public function showAdres() {
        return $this->adres->showAdresInfo();
    }




}