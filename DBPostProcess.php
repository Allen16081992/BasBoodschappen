<?php
require_once "PDOConnection.php";
require_once "KlantStatements.php";
require_once "LeverancierStatements.php";
require_once "InkoopOrderStmt.php"; //---Allen---//
require_once "artikelStatements.php"; //Ibrahim

$connection = new DatabaseConnect("localhost", "root", "", "bas_ommoord_db");

#region Klant
if(ISSET($_POST["createklant"]))
{
    $klantid = -1;
    $KlantToCreate = new Klant($klantid, $_POST["naam"], $_POST["email"], $_POST["adres"], $_POST["postcode"], $_POST["plaats"]);
    $KlantToCreate->CreateKlant($connection->dbConnect);
}

if(ISSET($_POST["updateklant"]))
{
    $KlantToUpdate = new Klant($_POST["klantid"], $_POST["naam"], $_POST["email"], $_POST["adres"], $_POST["postcode"], $_POST["plaats"]);
    $KlantToUpdate->UpdateKlant($connection->dbConnect);
}

if(ISSET($_POST["deleteklant"]))
{
    $KlantToDelete = new Klant($_POST["klantid"], $_POST["naam"], $_POST["email"], $_POST["adres"], $_POST["postcode"], $_POST["plaats"]);
    $KlantToDelete->DeleteKlant($connection->dbConnect);
}
#endregion

#region Leverancier
if(ISSET($_POST["createleverancier"]))
{
    $levid = -1;
    $LeverancierToCreate = new Leverancier($levid, $_POST["naam"], $_POST["contact"], $_POST["email"], $_POST["adres"], $_POST["postcode"], $_POST["plaats"]);
    $LeverancierToCreate->CreateLeverancier($connection->dbConnect);
}

if(ISSET($_POST["updateleverancier"]))
{
    $LeverancierToUpdate = new Leverancier($_POST["levid"], $_POST["naam"], $_POST["contact"], $_POST["email"], $_POST["adres"], $_POST["postcode"], $_POST["plaats"]);
    $LeverancierToUpdate->UpdateLeverancier($connection->dbConnect);
}

if(ISSET($_POST["deleteleverancier"]))
{
    $LeverancierToDelete = new Leverancier($_POST["levid"], $_POST["naam"], $_POST["contact"], $_POST["email"], $_POST["adres"], $_POST["postcode"], $_POST["plaats"]);
    $LeverancierToDelete->DeleteLeverancier($connection->dbConnect);
}
#endregion

#region InkoopOrder
if(ISSET($_POST["createinkooporder"] )) {
    $inkid = -1;
    $InkoopToCreate = new InkoopOrder($inkid, $_POST["levnumber"], $_POST["artnumber"], $_POST["datum"], $_POST["bestel"], $_POST["status"]);
    $InkoopToCreate->CreateInkoopOrder($connection->dbConnect);
}

if(ISSET($_POST["updateinkooporder"] )) {
    $InkoopToUpdate = new InkoopOrder($_POST["inkid"], $_POST["levid"], ["artid"], $_POST["datum"], $_POST["bestel"], $_POST["status"]);
    $InkoopToUpdate->UpdateInkoopOrder($connection->dbConnect);
}

if(ISSET($_POST["deleteinkooporder"] )) {
    $InkoopToDelete = new InkoopOrder($_POST["inkid"], $_POST["levid"], ["artid"], $_POST["datum"], $_POST["bestel"], $_POST["status"]);
    $InkoopToDelete->DeleteInkoopOrder($connection->dbConnect);
}
#endregion
#region artikelen
if(ISSET($_POST["createartikel"]))
{
    $artid = -1;
    $artikelToCreate = new artikel($artid, $_POST["artOmschrijving"], $_POST["artInkoop"],$_POST["artVerkoop"], $_POST["artVoorraad"], $_POST["artMinVoorraad"], $_POST["artMaxVoorraad"] , $_POST["artLocatie"] , $_POST["levId"]);
    $artikelToCreate->Createartikel($connection->dbConnect);
}

if(ISSET($_POST["updateartikel"]))
{
    $artikelToUpdate = new artikel($_POST["artOmschrijving"], $_POST["artInkoop"],$_POST["artVerkoop"], $_POST["artVoorraad"], $_POST["artMinVoorraad"], $_POST["artMaxVoorraad"] , $_POST["artLocatie"] , $_POST["levId"]);
    $artikelToUpdate->Updateartikel($connection->dbConnect);
}

if(ISSET($_POST["deleteartikel"]))
{
    $artikelToDelete = new artikel($_POST["artOmschrijving"], $_POST["artInkoop"],$_POST["artVerkoop"], $_POST["artVoorraad"], $_POST["artMinVoorraad"], $_POST["artMaxVoorraad"] , $_POST["artLocatie"] , $_POST["levId"]);
    $artikelToDelete->Deleteartikel($connection->dbConnect);
}