<?php
require_once "PDOConnection.php";
require_once "KlantStatements.php";
require_once "LeverancierStatements.php";
require_once "InkoopOrderStmt.php"; //---Allen---//

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

