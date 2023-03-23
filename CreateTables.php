<?php

require_once "DBPostProcess.php";
require_once "KlantStatements.php";
require_once "LeverancierStatements.php";
require_once "InkoopOrderStmt.php";

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
    $query = $connection->dbConnect->prepare("SELECT * FROM inkooporders");
    $query->execute();
    $rowcount5 = 0;
    foreach ($query->fetchAll() as $order) {
        $rowcount5++;
        $InkoopOrderInRow = new InkoopOrder(
            $order["inkOrdId"],
            $order["levId"],
            $order["artId"],
            $order["inkOrdDatum"],
            $order["inkOrdBestAantal"],
            $order["inkOrdStatus"]);

        $InkoopOrderInRow->ShowInkoopOrder($rowcount5);
    }
}

function InkoopOrderSearch($keyword)
{
    global $connection;
    $querySearch = $connection->dbConnect->prepare(
        "SELECT * FROM inkooporders WHERE 
                    inkOrdId REGEXP '$keyword' 
                    OR levId REGEXP '$keyword' 
                    OR artId REGEXP '$keyword' 
                    OR inkOrdStatus REGEXP '$keyword'");
    $querySearch->execute();
    $rowcount4 = 0;
    foreach ($querySearch->fetchAll() as $order) {
        $rowcount4++;
        $InkoopOrderInRow = new InkoopOrder(
            $order["inkOrdId"],
            $order["levId"],
            $order["artId"],
            $order["inkOrdDatum"],
            $order["inkOrdBestAantal"],
            $order["inkOrdStatus"]);

        $InkoopOrderInRow->ShowInkoopOrder($rowcount4);
    }
}
#endregion


#region Leverancieren
function CreateartikelenTable()
{
    global $connection;
    $query = $connection->dbConnect->prepare("SELECT * FROM artikel");
    $query->execute();
    $rowcount3 = 0;
    foreach ($query->fetchAll() as $artikel) {
        $rowcount3++;
        $artikelInRow = new artikel(
            $artikel["artId"],
            $artikel["artOmschrijving"],
            $artikel["artInkoop"],
            $artikel["artVerkoop"],
            $artikel["artVoorraad"],
            $artikel["artMinVoorraad"],
            $artikel["artMaxVoorraad"],
            $artikel["artLocatie"],
            $artikel["levId"]);

        $artikelInRow->Showartikel($rowcount3);
    }
}
function artikelSearch($keyword)
{
    global $connection;
    $querySearch = $connection->dbConnect->prepare(
        "SELECT * FROM artikelen WHERE 
                    artOmschrijving REGEXP '$keyword' OR artid REGEXP '$keyword'");
    $querySearch->execute();
    $rowcount4 = 0;
    foreach ($querySearch->fetchAll() as $artikel) {
        $rowcount4++;
        $artikelInRow = new Leverancier(
            $artikel["artId"],
            $artikel["artOmschrijving"],
            $artikel["artInkoop"],
            $artikel["artVerkoop"],
            $artikel["artVoorraad"],
            $artikel["artMinVoorraad"],
            $artikel["artMaxVoorraad"],
            $artikel["artLocatie"],
            $artikel["levId"]);

        $artikelInRow->Showartikel($rowcount4);
    }
}
#endregion

