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


    public function ShowKlant($listNumber)
    {
        echo
            "<form action='Thuis.php' method='post'>
                <tr class='shownEditKlant'>
                <td><button class='delet-button'><img src='images/RedX.png' height='25px' width='25px'></button></td>
                <td>" . $this->klantid . "</td>
                <input type='hidden' name='klantid' value=" . $this->klantid . ">
                <td>" . $this->klantnaam . "</td>
                <input type='hidden' name='naam'>
                <td>" . $this->klantemail . "</td>
                <input type='hidden' name='email'>
                <td>" . $this->klantadres . "</td>
                <input type='hidden' name='adres'>
                <td>" . $this->klantpostcode . "</td>
                <input type='hidden' name='postcode'>
                <td>" . $this->klantwoonplaats . '</td>
                <input type="hidden" name="plaats">
                <td><input type="hidden" name="deleteklant"></td>
                <td><input class="Create-button" type="button" onclick="OpenEditMenu(' . $listNumber . ', \'klant\')" value="edit"></td>
            </tr>
        </form>
        <form action="Thuis.php" method="post">
            <tr id="hidden" class="hiddenKlantEdit">
                <td></td>
                <td>' . $this->klantid . '</td>
                <td><input type="text" name="naam" minlength="2" maxlength="20" required="required" value="' . $this->klantnaam . '"></td>
                <td><input type="text" name="email" minlength="2" maxlength="30" required="required" value="' . $this->klantemail . '"></td>
                <td><input type="text" name="adres" maxlength="30" value="' . $this->klantadres . '"></td>
                <td><input type="text" name="postcode" maxlength="6" value="' . $this->klantpostcode . '"></td>
                <td><input type="text" name="plaats" minlength="2" maxlength="25" required="required" value="' . $this->klantwoonplaats . '"></td>
                <td><input type="hidden" name="klantid" value=' . $this->klantid . "></td>
                <input type='hidden' name='updateklant'>
                <td><button class='Create-button'>Save</button></td>
                <td><input class='Create-button' type='button' onclick='CloseEditMenu(" . $listNumber . ", \"klant\")' value='cancel'</td>
            </tr>";
        echo "</form>";
    }
}