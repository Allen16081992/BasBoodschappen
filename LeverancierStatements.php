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

    public function ShowLeverancier($listNumber)
    {
        echo
            "<form action='Thuis.php' method='post'>
                <tr class='shownLeverancierEdit'>
                <td><button class='delet-button'><img src='images/RedX.png' height='25px' width='25px'></button></td>
                <td>" . $this->levid . "</td>
                <input type='hidden' name='levid' value=" . $this->levid . ">
                <td>" . $this->levnaam . "</td>
                <input type='hidden' name='naam'>
                <td>" . $this->levcontact . "</td>
                <input type='hidden' name='contact'>
                <td>" . $this->levemail . "</td>
                <input type='hidden' name='email'>
                <td>" . $this->levadres . "</td>
                <input type='hidden' name='adres'>
                <td>" . $this->levpostcode . "</td>
                <input type='hidden' name='postcode'>
                <td>" . $this->levwoonplaats . '</td>
                <input type="hidden" name="plaats">
                <td><input type="hidden" name="deleteleverancier"></td>
                <td><input class="Create-button" type="button" onclick="OpenEditMenu(' . $listNumber . ', \'leverancier\')" value="edit"></td>
            </tr>
        </form>
        <form action="Thuis.php" method="post">
            <tr id="hidden" class="hiddenLeverancierEdit">
                <td></td>
                <td>' . $this->levid . '</td>
                <td><input type="text" name="naam" minlength="2" maxlength="20" required="required" value="' . $this->levnaam . '"></td>
                <td><input type="text" name="contact" minlength="4" maxlength="20" value="' . $this->levcontact . '"></td>
                <td><input type="text" name="email" minlength="2" maxlength="30" required="required" value="' . $this->levemail . '"></td>
                <td><input type="text" name="adres" maxlength="30" value="' . $this->levadres . '"></td>
                <td><input type="text" name="postcode" maxlength="6" value="' . $this->levpostcode . '"></td>
                <td><input type="text" name="plaats" minlength="2" maxlength="25" required="required" value="' . $this->levwoonplaats . '"></td>
                <td><input type="hidden" name="klantid" value=' . $this->levid . "></td>
                <input type='hidden' name='updateleverancier'>
                <td><button class='Create-button'>Save</button></td>
                <td><input class='Create-button' type='button' onclick='CloseEditMenu(" . $listNumber . ", \"leverancier\")' value='cancel'</td>
            </tr>";
        echo "</form>";
    }
}