<?php
require_once "PDOConnection.php";
class Leverancier
{

    private $levid;
    public $levnaam;
    public $levcontact;
    public $levemail;
    public $levadres;
    public $levpostcode;
    public $levwoonplaats;



    public function __construct($levid, $levnaam, $levcontact, $levemail, $levadres, $levpostcode, $levwoonplaats){
        $this->levid = $levid;
        $this->levnaam = $levnaam;
        $this->levcontact = $levcontact;
        $this->levemail = $levemail;
        $this->levadres = $levadres;
        $this->levpostcode = $levpostcode;
        $this->levwoonplaats = $levwoonplaats;
    }


    public function CreateLeverancier($db)
    {
        $query = $db->prepare("INSERT INTO leveranciers 
                    (levnaam, levcontact, levemail, levadres, levpostcode, levwoonplaats)
                    VALUES (:naam, :contact, :email, :adres, :postcode, :woonplaats)",
        );
        $query->execute([
            "naam" => $this->levnaam,
            "contact" => $this->levcontact,
            "email" => $this->levemail,
            "adres" => $this->levadres,
            "postcode" => $this->levpostcode,
            "woonplaats" => $this->levwoonplaats
        ]);
    }

    public function UpdateLeverancier($db)
    {
        $query = $db->prepare("UPDATE leveranciers SET 
                        levnaam=:naam, 
                        levcontact=:contact,
                        levemail=:email, 
                        levadres=:adres, 
                        levpostcode=:postcode, 
                        levwoonplaats=:woonplaats 
                        WHERE levid=:levid");

        $query->execute([
            "naam" => $this->levnaam,
            "contact" => $this->levcontact,
            "email" => $this->levemail,
            "adres" => $this->levadres,
            "postcode" => $this->levpostcode,
            "woonplaats" => $this->levwoonplaats,
            "levid" => $this->levid
        ]);
    }

    public function DeleteLeverancier($db)
    {
        $query = $db->prepare("DELETE FROM leveranciers WHERE levid=:levid");
        $query->execute([
            "levid" => $this->levid
        ]);
    }
}