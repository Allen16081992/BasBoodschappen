<?php
require_once "PDOConnection.php";
class Klant
{

    private $klantid;
    public $klantnaam;
    public $klantemail;
    public $klantadres;
    public $klantpostcode;
    public $klantwoonplaats;



    public function __construct($klantid, $naam, $email, $adres, $postcode, $woonplaats){
        $this->klantid = $klantid;
        $this->klantnaam = $naam;
        $this->klantemail = $email;
        $this->klantadres = $adres;
        $this->klantpostcode = $postcode;
        $this->klantwoonplaats = $woonplaats;
    }


    public function CreateKlant($db)
    {
        $query = $db->prepare("INSERT INTO klanten 
                    (klantnaam, klantemail, klantadres, klantpostcode, klantwoonplaats)
                    VALUES (:naam, :email, :adres, :postcode, :woonplaats)",
            );
        $query->execute([
            "naam" => $this->klantnaam,
            "email" => $this->klantemail,
            "adres" => $this->klantadres,
            "postcode" => $this->klantpostcode,
            "woonplaats" => $this->klantwoonplaats
        ]);
    }

    public function UpdateKlant($db)
    {
        $query = $db->prepare("UPDATE klanten SET klantnaam=:naam, klantemail=:email, 
                           klantadres=:adres, klantpostcode=:postcode, 
                           klantwoonplaats=:woonplaats WHERE klantid=:klantid");
        $query->execute([
            "naam" => $this->klantnaam,
            "email" => $this->klantemail,
            "adres" => $this->klantadres,
            "postcode" => $this->klantpostcode,
            "woonplaats" => $this->klantwoonplaats,
            "klantid" => $this->klantid
        ]);
    }

    public function DeleteKlant($db)
    {
        $query = $db->prepare("DELETE FROM klanten WHERE klantid=:klantid");
        $query->execute([
            "klantid" => $this->klantid
        ]);
    }
}