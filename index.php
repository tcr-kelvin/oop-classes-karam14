<?php

class auto
{
    public $merk;
    public $verkocht;
    public $kilometerstand;
    public $motor;
    public $APK;
    public $prijs;

    public function __construct($merk,$verkocht,$kilometerstand,$motor,$APK,$prijs)
    {
        $this->merk = $merk;
        $this->verkocht = $verkocht;
        $this->kilometerstand = $kilometerstand;
        $this->motor = $motor;
        $this->APK = $APK;
        $this->prijs = $prijs;
    }
}

class klant
{
    public $naam;
    public $adres;
    public $postcode;
    public $telefoonnummer;
    public $email;
    public $nieuwsbrief;


    public function __construct($naam, $adres, $postcode, $telefoonnummer, $email, $nieuwsbrief)
    {
        $this->naam = $naam;
        $this->adres = $adres;
        $this->postcode = $postcode;
        $this->telefoonnummer = $telefoonnummer;
        $this->email = $email;
        $this->nieuwsbrief = $nieuwsbrief;
    }

}
$auto = new auto("BMW",true,123456,2.6,"12-FEB-2020",4000);
$klant = new klant("kelvin","coolhaven 12","2625xd","0640803355","k.vandergaag@tcrmbo.nl",true);
var_dump($auto);
var_dump($klant);
?>