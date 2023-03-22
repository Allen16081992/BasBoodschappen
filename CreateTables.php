<?php

require_once "DBPostProcess.php";
require_once "KlantStatements.php";
require_once "LeverancierStatements.php";

#region Klanten
function CreateKlantTable()
{
    global $connection;
    $query = $connection->dbConnect->prepare("SELECT * FROM klanten");
    $query->execute();
    $rowcount1 = 0;
    foreach ($query->fetchAll() as $klant) {
        $rowcount1++;
        $KlantInRow = new Klant(
            $klant["klantid"],
            $klant["klantnaam"],
            $klant["klantEmail"],
            $klant["klantAdres"],
            $klant["klantPostcode"],
            $klant["klantWoonplaats"]);

        $KlantInRow->ShowKlant($rowcount1);
    }
}
function KlantSearch($keyword)
{
    global $connection;
    $querySearch = $connection->dbConnect->prepare(
        "SELECT * FROM klanten WHERE 
                    klantnaam REGEXP '$keyword' OR klantid REGEXP '$keyword'");
    $querySearch->execute();
    $rowcount2 = 0;
    foreach ($querySearch->fetchAll() as $klant) {
        $rowcount2++;
        $KlantInRow = new Klant(
            $klant["klantid"],
            $klant["klantnaam"],
            $klant["klantEmail"],
            $klant["klantAdres"],
            $klant["klantPostcode"],
            $klant["klantWoonplaats"]);

        $KlantInRow->ShowKlant($rowcount2);
    }
}

#endregion

#region Leverancieren
function CreateLeverancierTable()
{
    global $connection;
    $query = $connection->dbConnect->prepare("SELECT * FROM leveranciers");
    $query->execute();
    $rowcount3 = 0;
    foreach ($query->fetchAll() as $leverancier) {
        $rowcount3++;
        $LeverancierInRow = new Leverancier(
            $leverancier["levid"],
            $leverancier["levnaam"],
            $leverancier["levcontact"],
            $leverancier["levEmail"],
            $leverancier["levAdres"],
            $leverancier["levPostcode"],
            $leverancier["levWoonplaats"]);

        $LeverancierInRow->ShowLeverancier($rowcount3);
    }
}
function LeverancierSearch($keyword)
{
    global $connection;
    $querySearch = $connection->dbConnect->prepare(
        "SELECT * FROM leveranciers WHERE 
                    levnaam REGEXP '$keyword' OR levid REGEXP '$keyword'");
    $querySearch->execute();
    $rowcount4 = 0;
    foreach ($querySearch->fetchAll() as $leverancier) {
        $rowcount4++;
        $LeverancierInRow = new Leverancier(
            $leverancier["levid"],
            $leverancier["levnaam"],
            $leverancier["levcontact"],
            $leverancier["levEmail"],
            $leverancier["levAdres"],
            $leverancier["levPostcode"],
            $leverancier["levWoonplaats"]);

        $LeverancierInRow->ShowLeverancier($rowcount4);
    }

}
#endregion

#region InkoopOrder
//--------Dhr. Allen---------//
function CreateInkoopOrderTable() {
    global $connection;
    $query = $connection->dbConnect->prepare("SELECT inkOrdId, levId, artId, inkOrdDatum, inkOrdBestAantal,	inkOrdStatus FROM inkooporders");
    $query->execute();

    $rowcount1 = 0;
    while ($row = $query->fetch()) {
        $rowcount1++;
        $inkoopid = $row["inkOrdId"];
        echo
            "<form action='Thuis.php' method='post'>
                <tr class='shownInkoopEdit'>
                    <td><button class='delet-button'><img src='images/RedX.png' height='25px' width='25px'></button></td>
                    <td>" . $row["inkOrdId"] . "</td>
                    <input type='hidden' name='inkOrdId' value=" . $row["inkOrdId"] . ">
                    
                    <td>" . $row["levid"] . "</td>
                    <input type='hidden' name='levid'>
                    
                    <td>" . $row["artid"] . "</td>
                    <input type='hidden' name='artid'>
                    
                    <td>" . $row["inkOrdDatum"] . "</td>
                    <input type='hidden' name='date'>
                    
                    <td>" . $row['inkOrdBestAantal'] . "</td>
                    <input type='hidden' name='number'>
                    
                    <td>" . $row['inkOrdStatus'] . '</td>
                    <input type="hidden" name="text">
                    
                    <td><input type="hidden" name="deleteInkoopOrder"></td>
                    <td><input class="Create-button" type="button" onclick="OpenEditMenu(' . $rowcount1 . ', \'inkooporder\')" value="edit"></td>
                </tr>
            </form>
            <form action="Thuis.php" method="post">
                <tr id="hidden" class="hiddenInkoopOrderEdit">
                    <td></td>
                    <td>' . $row["inkOrdId"] . '</td>
                    <td><input type="text" name="number" value="' . $row["levid"] . '"></td>
                    <td><input type="text" name="number" value="' . $row["artid"] . '"></td>
                    <td><input type="date" name="date" value="' . $row["inkOrdDatum"] . '"></td>
                    <td><input type="number" name="number" value="' . $row["inkOrdBestAantal"] . '"></td>
                    <td><input type="text" name="status" value="' . $row["inkOrdStatus"] . '"></td>
                    <td><input type="hidden" name="inkOrdId" value=' . $row["inkOrdId"] . "></td>
                    <input type='hidden' name='updateInkoopOrder'>
                    <td><button class='Create-button'>Save</button></td>
                    <td><input class='Create-button' type='button' onclick='CloseEditMenu(" . $rowcount1 . ", \"inkooporder\")' value='cancel'</td>
                </tr>
            </form>"
        ;
    }
}
function InkoopOrderSearch($keyword) {
    //To be continued...
    global $connection;
    $querySearch = $connection->dbConnect->prepare("SELECT * FROM inkooporders WHERE inkOrdId REGEXP '$keyword'");
    $querySearch->execute();
    $rowcount2 = 0;
    while ($row = $querySearch->fetch()) {
        $rowcount2++;
        $klantid = $row["inkOrdId"];
        echo
            "<form action='Thuis.php' method='post'>
                <tr>
                    <td><button><img src='images/RedX.png' height='25px' width='25px'></button></td>
                    <td>" . $row["inkOrdId"] . "</td>
                    <input type='hidden' name='inkOrdId' value=" . $row["inkOrdId"] . ">
                    
                    <td>" . $row["levid"] . "</td>
                    <input type='hidden' name='levid'>
                    
                    <td>" . $row["artid"] . "</td>
                    <input type='hidden' name='artid'>
                    
                    <td>" . $row["inkOrdDatum"] . "</td>
                    <input type='hidden' name='date'>
                    
                    <td>" . $row['inkOrdBestAantal'] . "</td>
                    <input type='hidden' name='number'>
                    
                    <td>" . $row['inkOrdStatus'] . '</td>
                    <input type="hidden" name="text">
                    
                    <td><input type="hidden" name="deleteInkoopOrder"></td>
                    <td><input type="button" onclick="OpenEditMenu(' . $rowcount2 . ', \'inkooporder\')" value="edit" style="width:4em;"></td>
                </tr>
            </form>
            <form action="Thuis.php" method="post">
                <tr id="hidden" class="hiddenInkoopOrderEdit">
                    <td></td>
                    <td>' . $row["inkOrdId"] . '</td>
                    <td><input type="text" name="number" value="' . $row["levid"] . '"></td>
                    <td><input type="text" name="number" value="' . $row["artid"] . '"></td>
                    <td><input type="date" name="date" value="' . $row["inkOrdDatum"] . '"></td>
                    <td><input type="number" name="number" value="' . $row["inkOrdBestAantal"] . '"></td>
                    <td><input type="text" name="status" value="' . $row["inkOrdStatus"] . '"></td>
                    <td><input type="hidden" name="inkOrdId" value=' . $row["inkOrdId"] . "></td>
                    <input type='hidden' name='updateInkoopOrder'>
                    <td><button class='Create-button'>Save</button></td>
                    <td><input class='Create-button' type='button' onclick='CloseEditMenu(" . $rowcount1 . ", \"inkooporder\")' value='cancel'</td>
                </tr>
            </form>"
        ;
    }
}
#endregion



