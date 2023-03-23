<?php

require_once "PDOConnection.php";

class
Artikel
{
    public $artid;
    public $artomschrijving;
    public $artinkoop;
    public $artverkoop;
    public $artvoorraad;
    public $artminvoorraad;
    public $artmaxvoorraad;
    public $artlocatie;
    public $levid;

    public function __construct($artid, $artomschrijving, $artinkoop, $artverkoop, $artvoorraad, $artminvoorraad, $artmaxvoorraad, $artlocatie, $levid)
    {
        $this->artid = $artid;
        $this->artomschrijving = $artomschrijving;
        $this->artinkoop = $artinkoop;
        $this->artverkoop = $artverkoop;
        $this->artvoorraad = $artvoorraad;
        $this->artminvoorraad = $artminvoorraad;
        $this->artmaxvoorraad = $artmaxvoorraad;
        $this->artlocatie = $artlocatie;
        $this->levid = $levid;
    }

    public function CreateArtikel($db)
    {
        $query = $db->prepare("INSERT INTO artikelen
                    (artId , artOmschrijving, artInkoop, artVerkoop, artVoorraad,artMinVoorraad,artMaxVoorraad,artLocatie,levId)
                    VALUES (:artOmschrijving, :artinkoop, :artverkoop, :voorraad, :minvoorraad, :maxvoorraad, :artlocatie)",
        );
        $query->execute([
            "omschrijving" => $this->artomschrijving,
            "artinkoop" => $this->artinkoop,
            "artverkoop" => $this->artverkoop,
            "voorraad" => $this->artvoorraad,
            "minvoorraad" => $this->artminvoorraad,
            "maxvoorraad" => $this->artmaxvoorraad,
            "artlocatie" => $this->artlocatie
        ]);

    }

    public function UpdateArtikel($db)
    {
        $query = $db->prepare("UPDATE artikelen SET artOmschrijving=:artOmschrijving, artInkoop=:artinkoop,
                           artVerkoop=:artverkoop, artVoorraad=:voorraad,
                           artMinVoorraad=:minvoorraad, artMinVoorraad=:minvoorraad, artMaxVoorraad=:maxvoorraad, artLocatie=:artlocatie WHERE artid=:artid");
        $query->execute([
            "omschrijving" => $this->artomschrijving,
            "artinkoop" => $this->artinkoop,
            "artverkoop" => $this->artverkoop,
            "voorraad" => $this->artvoorraad,
            "minvoorraad" => $this->artminvoorraad,
            "maxvoorraad" => $this->artmaxvoorraad,
            "artlocatie" => $this->artlocatie
        ]);
    }

    public function DeleteArtikel($db)
    {
        $query = $db->prepare("DELETE FROM artikelen WHERE artid=:artid");
        $query->execute([
            "artid" => $this->artid
        ]);
    }

    public function Showartikel($listNumber)
    {
        echo
            "<form action='Thuis.php' method='post'>
                <tr class='shownEditartikel'>
                <td><button class='delet-button'><img src='images/RedX.png' height='25px' width='25px'></button></td>
                <td>" . $this->artid . "</td>
                <input type='hidden' name='artid' value=" . $this->artid . ">
                <td>" . $this->artomschrijving . "</td>
                <input type='hidden' name='artomschrijving'>
                <td>" . $this->artinkoop . "</td>
                <input type='hidden' name='artinkoop'>
                <td>" . $this->artverkoop . "</td>
                <input type='hidden' name='artverkoop'>
                <td>" . $this->artvoorraad . "</td>
                <input type='hidden' name='artvoorraad'>
                <td>" . $this->artminvoorraad . "</td>
                <input type='hidden' name='artminvoorraad'>
                <td>" . $this->artmaxvoorraad . "</td>
                <input type='hidden' name='artmaxvoorraad'>
                <td>" . $this->artlocatie . "</td>
                <input type='hidden' name='artlocatie'>
                <td>" . $this->levid . '</td>
                <input type="hidden" name="levid">
                <td><input type="hidden" name="deleteartikel"></td>
                <td><input class="Create-button" type="button" onclick="OpenEditMenu(' . $listNumber . ', \'artikel\')" value="edit"></td>
            </tr>
        </form>
        <form action="Thuis.php" method="post">
            <tr id="hidden" class="hiddenartikelEdit">
                <td></td>
                <td>' . $this->artid . '</td>
                <td><input type="text" name="artomschrijving" minlength="2" maxlength="12" required="required" value="' . $this->artomschrijving . '"></td>
                <td><input type="text" name="artinkoop" minlength="2" maxlength="30" required="required" value="' . $this->artinkoop . '"></td>
                <td><input type="text" name="artverkoop" maxlength="6" value="' . $this->artverkoop . '"></td>
                <td><input type="text" name="artvoorraad" maxlength="6" value="' . $this->artvoorraad . '"></td>
                 <td><input type="text" name="artminvoorraad" minlength="2" maxlength="11" required="required" value="' . $this->artminvoorraad . '"></td>
                <td><input type="text" name="artmaxvoorraad" minlength="2" maxlength="11" required="required" value="' . $this->artmaxvoorraad . '"></td>
                <td><input type="text" name="artlocatie" minlength="2" maxlength="11" required="required" value="' . $this->artlocatie . '"></td>
                <td><input type="hidden" name="levid" required="required" value=' . $this->levid . "></td>
                <input type='hidden' name='updateartikel'>
                <td><button class='Create-button'>Save</button></td>
                <td><input class='Create-button' type='button' onclick='CloseEditMenu(" . $listNumber . ", \"artikel\")' value='cancel'</td>
            </tr>";
        echo "</form>";
    }
}
