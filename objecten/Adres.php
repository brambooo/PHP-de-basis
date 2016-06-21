<?php

/**
 * Created by PhpStorm.
 * User: Bram
 * Date: 21-6-2016
 * Time: 18:14
 */
class Adres
{
    // Attributen
    private $straat;
    private $plaats;
    private $postcode;
    private $land;

    // Constructor
    public function __construct($straat, $plaats, $postcode, $land)
    {
        $this->straat = $straat;
        $this->plaats = $plaats;
        $this->postcode = $postcode;
        $this->land = $land;
    }

    // Methoden
    public function getStraat()
    {
        return $this->straat;
    }
    public function setStraat($straat)
    {
        $this->straat = $straat;
    }
    public function getPlaats()
    {
        return $this->plaats;
    }
    public function setPlaats($plaats)
    {
        $this->plaats = $plaats;
    }
    public function getPostcode()
    {
        return $this->postcode;
    }
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }
    public function getLand()
    {
        return $this->land;
    }
    public function setLand($land)
    {
        $this->land = $land;
    }

    public function showAdresInfo() {
        // nl2br() zorgt ervoor dat iedere nieuwe regel een html </br> krijgt.
        return nl2br( "Straat: {$this->getStraat()},\n plaats:  {$this->getPlaats()},\n postcode: {$this->getPostcode()},\n land: {$this->getLand()}." );
    }



}