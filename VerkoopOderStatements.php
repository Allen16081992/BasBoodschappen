<?php
require_once "PDOConnection.php";

class VerkoopOrder {

    private $verid;
    private $klantid;
    private $artid;
    public $verDatum;
    public $verAantal;
    public $verStatus;

    public function __construct($verid, $klantid, $artid, $verDatum, $verAantal, $verStatus) {
        $this->verid=$verid;
        $this->klantid=$klantid;
        $this->artid=$artid;
        $this->verDatum=$verDatum;
        $this->verAantal=$verAantal;
        $this->verStatus=$verStatus;
    }

    public function CreateVerkoopOrder($db)
    {
        $query = $db->prepare("INSERT INTO verkooporders 
                    (verkOrdId, klantId, artId, verkOrdDatum, verkOrdBestAantal, verkOrdStatus)
                    VALUES (:VerId, :KlantId, :ArtId, :OrderDatum, :OrderAantal, :OrderStatus)",
        );
        $query->execute([
            "VerId" => $this->verid,
            "KlantId" => $this->klantid,
            "ArtId" => $this->artid,
            "OrderDatum" => $this->verDatum,
            "OrderAantal" => $this->verAantal,
            "OrderStatus" => $this->verStatus
        ]);
    }

    public function UpdateVerkoopOrder($db)
    {
        $query = $db->prepare("UPDATE verkooporders SET
                                verkOrdId=:VerId, 
                                klantId=:KlantId, 
                                artId=:ArtId, 
                                verkOrdDatum=:OrderDatum,
                                verkOrdBestAantal=:OrderAantal, 
                                verkOrdStatus=:OrderStatud 
                                WHERE verkOrdId=:klantid");
        $query->execute([
            "VerId" => $this->verid,
            "KlantId" => $this->klantid,
            "ArtId" => $this->artid,
            "OrderDatum" => $this->verDatum,
            "OrderAantal" => $this->verAantal,
            "OrderStatus" => $this->verStatus
        ]);
    }

    public function DeleteVerkoopOrder($db)
    {
        $query = $db->prepare("DELETE FROM verkooporders WHERE verkOrdId=:OrderId");
        $query->execute([
            "OrderId" => $this->verid
        ]);
    }

    public function ShowVerkoopOrder($listNumber)
    {
        echo
            "<form action='Thuis.php' method='post'>
                <tr class='shownVerkoopOrderEdit'>
                <td><button class='delet-button'><img src='images/RedX.png' height='25px' width='25px'></button></td>
                <td>" . $this->verid . "</td>
                <input type='hidden' name='verkid' value=" . $this->verid . ">
                <td>" . $this->klantid . "</td>
                <input type='hidden' name='klantid'>
                <td>" . $this->artid . "</td>
                <input type='hidden' name='artid'>
                <td>" . $this->verDatum . "</td>
                <input type='hidden' name='datum'>
                <td>" . $this->verAantal . "</td>
                <input type='hidden' name='aantal'>
                <td>" . $this->verStatus . "</td>
                <input type='hidden' name='status'>
                <td><input type='hidden' name='deleteverkooporder'></td>
                <td><input class='Create-button' type='button' onclick='OpenEditMenu(" . $listNumber . ", \"verkooporder\")' value='edit'></td>
            </tr>
        </form>
        <form action='Thuis.php' method='post'>
            <tr id='hidden' class='hiddenInkoopOrderEdit'>
                <td></td>
                <td>" . $this->verid . "</td>
                <input type='hidden' name='verkid' value=" . $this->verid . ">
                <td>" . $this->klantid . "</td>
                <td>" . $this->artid . "</td>
                <td><input type='date' name='datum'' value='" . $this->verDatum . "'></td>
                <td><input type='text' name='aantal' maxlength='11' value='" . $this->verAantal . "'></td>
                <td><input type='text' name='status' maxlength='11' required='required' value='" . $this->verStatus . "'></td>
                <input type='hidden' name='updateverkooporder'>
                <td><button class='Create-button'>Save</button></td>
                <td><input class='Create-button' type='button' onclick='CloseEditMenu(" . $listNumber . ", \"verkooporder\")' value='cancel'</td>
            </tr>";
        echo "</form>";
    }
}
