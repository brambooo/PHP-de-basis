<?php

class ValideerFormulier {
    // Attributen
    private $sInputType;
    private $aFoutmeldingen;

    // Constructor
    public function __construct($type) {
        $this->inputType = $type;
        $this->aFoutmeldingen = array();
    }

    // Methoden
    public function getFoutmeldingen() {
        foreach($this->aFoutmeldingen as $foutmelding) {
            echo $foutmelding;
        }
    }

    public function getAantalfoutmeldingen() {
        return sizeof($this->aFoutmeldingen);
    }

    public function valideerEmail($email) {

        // Check of het email daadwerkelijk valide is
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->aFoutmeldingen[] = "Het e-mailadres: {$$email} is niet geldig.";
        }
    }

    /**
     * filterInputVeld()
     * zorgt erovor dat de inputwaarden is opgescoond en niet door hackers is te misbruiken. Zo kunnen er geen HTML-tags gebruikt worden, dit wordt geescaped.
     * @param $input veld
     * @return string opgeschoonde input middels htmlentities.
     */
    public function filterInputVeld($input) {
        return htmlentities($input);
    }


}