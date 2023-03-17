<?php

require_once "DBPostProcess.php";


#region Klanten
function CreateKlantTable()
{
    global $connection;
    $query = $connection->dbConnect->prepare("SELECT klantid, klantnaam, klantEmail, klantAdres, klantPostcode, klantWoonplaats FROM klanten");
    $query->execute();
    $rowcount1 = 0;
    while ($row = $query->fetch()) {
        $rowcount1++;
        $klantid = $row["klantid"];
        echo
            "<form action='Thuis.php' method='post'>
                <tr class='shownEditKlant'>
                <td><button class='delet-button'><img src='images/RedX.png' height='25px' width='25px'></button></td>
                <td>" . $row["klantid"] . "</td>
                <input type='hidden' name='klantid' value=" . $row["klantid"] . ">
                <td>" . $row["klantnaam"] . "</td>
                <input type='hidden' name='naam'>
                <td>" . $row["klantEmail"] . "</td>
                <input type='hidden' name='email'>
                <td>" . $row["klantAdres"] . "</td>
                <input type='hidden' name='adres'>
                <td>" . $row['klantPostcode'] . "</td>
                <input type='hidden' name='postcode'>
                <td>" . $row['klantWoonplaats'] . '</td>
                <input type="hidden" name="plaats">
                <td><input type="hidden" name="deleteklant"></td>
                <td><input class="Create-button" type="button" onclick="OpenEditMenu(' . $rowcount1 . ', \'klant\')" value="edit"></td>
            </tr>
        </form>
        <form action="Thuis.php" method="post">
            <tr id="hidden" class="hiddenKlantEdit">
                <td></td>
                <td>' . $row["klantid"] . '</td>
                <td><input type="text" name="naam" value="' . $row["klantnaam"] . '"></td>
                <td><input type="text" name="email" value="' . $row["klantEmail"] . '"></td>
                <td><input type="text" name="adres" value="' . $row["klantAdres"] . '"></td>
                <td><input type="text" name="postcode" value="' . $row["klantPostcode"] . '"></td>
                <td><input type="text" name="plaats" value="' . $row["klantWoonplaats"] . '"></td>
                <td><input type="hidden" name="klantid" value=' . $row["klantid"] . "></td>
                <input type='hidden' name='updateklant'>
                <td><button class='Create-button'>Save</button></td>
                <td><input class='Create-button' type='button' onclick='CloseEditMenu(" . $rowcount1 . ", \"klant\")' value='cancel'</td>
            </tr>";
        echo "</form>";
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
    while ($row = $querySearch->fetch()) {
        $rowcount2++;
        $klantid = $row["klantid"];
        echo
            "<form action='Thuis.php' method='post'>
                <tr>
                <td><button><img src='images/RedX.png' height='25px' width='25px'></button></td>
                <td>" . $row["klantid"] . "</td>
                <input type='hidden' name='klantid' value=" . $row["klantid"] . ">
                
                <td>" . $row["klantnaam"] . "</td>
                <input type='hidden' name='naam'>
                
                <td>" . $row["klantEmail"] . "</td>
                <input type='hidden' name='email'>
                
                <td>" . $row["klantAdres"] . "</td>
                <input type='hidden' name='adres'>
                
                <td>" . $row['klantPostcode'] . "</td>
                <input type='hidden' name='postcode'>
                
                <td>" . $row['klantWoonplaats'] . '</td>
                <input type="hidden" name="plaats">
                
                <td><input type="hidden" name="deleteklant"></td>
                <td><input type="button" onclick="OpenEditMenu(' . $rowcount2 . ', \'klant\')" value="edit" style="width:4em;"></td>
            </tr>
        </form>
        <form action="Thuis.php" method="post">
            <tr id="hidden" class="hiddenKlantEdit">
                <td></td>
                <td>' . $row["klantid"] . '</td>
                <td><input type="text" name="naam" value="' . $row["klantnaam"] . '"></td>
                <td><input type="text" name="email" value="' . $row["klantEmail"] . '"></td>
                <td><input type="text" name="adres" value="' . $row["klantAdres"] . '"></td>
                <td><input type="text" name="postcode" value="' . $row["klantPostcode"] . '"></td>
                <td><input type="text" name="plaats" value="' . $row["klantWoonplaats"] . '"></td>
                <td><input type="hidden" name="klantid" value=' . $row["klantid"] . "></td>
                <input type='hidden' name='updateklant'>
                <td><button class='Create-button'>Save</button></td>
                <td><input class='Create-button' type='button' onclick='CloseEditMenu(" . $rowcount2 . ", \"klant\")' value='cancel'</td>
            </tr>";
        echo "</form>";
    }
}

#endregion

#region Leverancieren
function CreateLeverancierTable()
{
    global $connection;
    $query = $connection->dbConnect->prepare("SELECT levid, levnaam, levcontact, levEmail, levAdres, levPostcode, levWoonplaats FROM leveranciers");
    $query->execute();

    $rowcount1 = 0;
    while ($row = $query->fetch()) {
        $rowcount1++;
        $klantid = $row["levid"];
        echo
            "<form action='Thuis.php' method='post'>
                <tr class='shownLeverancierEdit'>
                <td><button class='delet-button'><img src='images/RedX.png' height='25px' width='25px'></button></td>
                <td>" . $row["levid"] . "</td>
                <input type='hidden' name='levid' value=" . $row["levid"] . ">
                
                <td>" . $row["levnaam"] . "</td>
                <input type='hidden' name='naam'>
                
                <td>" . $row["levcontact"] . "</td>
                <input type='hidden' name='contact'>
                
                <td>" . $row["levEmail"] . "</td>
                <input type='hidden' name='email'>
                
                <td>" . $row['levAdres'] . "</td>
                <input type='hidden' name='adres'>
                
                <td>" . $row['levPostcode'] . '</td>
                <input type="hidden" name="postcode">
                
                <td>' . $row['levWoonplaats'] . '</td>
                <input type="hidden" name="plaats">
                
                <td><input type="hidden" name="deleteleverancier"></td>
                <td><input class="Create-button" type="button" onclick="OpenEditMenu(' . $rowcount1 . ', \'leverancier\')" value="edit"></td>
            </tr>
        </form>
        <form action="Thuis.php" method="post">
            <tr id="hidden" class="hiddenLeverancierEdit">
                <td></td>
                <td>' . $row["levid"] . '</td>
                <td><input type="text" name="naam" value="' . $row["levnaam"] . '"></td>
                <td><input type="text" name="contact" value="' . $row["levcontact"] . '"></td>
                <td><input type="text" name="email" value="' . $row["levEmail"] . '"></td>
                <td><input type="text" name="adres" value="' . $row["levAdres"] . '"></td>
                <td><input type="text" name="postcode" value="' . $row["levPostcode"] . '"></td>
                <td><input type="text" name="plaats" value=' . $row["levWoonplaats"] . '></td>
                <td><input type="hidden" name="levid" value=' . $row["levid"] . "></td>
                <input type='hidden' name='updateleverancier'>
                <td><button class='Create-button'>Save</button></td>
                <td><input class='Create-button' type='button' onclick='CloseEditMenu(" . $rowcount1 . ", \"leverancier\")' value='cancel'</td>
            </tr>";
        echo "</form>";
    }
}
function LeverancierSearch($keyword)
{
    global $connection;
    $querySearch = $connection->dbConnect->prepare(
        "SELECT * FROM leveranciers WHERE 
                    levnaam REGEXP '$keyword' OR levid REGEXP '$keyword'");
    $querySearch->execute();
    $rowcount2 = 0;
    while ($row = $querySearch->fetch()) {
        $rowcount2++;
        $levid = $row["levid"];
        echo
            "<form action='Thuis.php' method='post'>
                <tr id='ShowObjectTextLeverancier' class='shownLeverancierEdit'>
                <td><button><img src='images/RedX.png' height='25px' width='25px'></button></td>
                <td>" . $row["levid"] . "</td>
                <input type='hidden' name='levid' value=" . $row["levid"] . ">
                
                <td>" . $row["levnaam"] . "</td>
                <input type='hidden' name='naam'>
                
                <td>" . $row["levcontact"] . "</td>
                <input type='hidden' name='contact'>
                
                <td>" . $row["levEmail"] . "</td>
                <input type='hidden' name='email'>
                
                <td>" . $row['levAdres'] . "</td>
                <input type='hidden' name='adres'>
                
                <td>" . $row['levPostcode'] . "</td>
                <input type='hidden' name='postcode'>
                
                <td>" . $row['levWoonplaats'] . '</td>
                <input type="hidden" name="plaats">
                
                <td><input type="hidden" name="deleteleverancier"></td>
                <td><input type="button" onclick="OpenEditMenu(' . $rowcount2 . ', \'leverancier\')" value="edit" style="width:4em;"></td>
            </tr>
        </form>
        <form action="Thuis.php" method="post">
            <tr id="hidden" class="hiddenLeverancierEdit">
                <td></td>
                <td>' . $row["levid"] . '</td>
                <td><input type="text" name="naam" value="' . $row["levnaam"] . '"></td>
                <td><input type="text" name="contact" value="' . $row["levcontact"] . '"></td>
                <td><input type="text" name="email" value="' . $row["levEmail"] . '"></td>
                <td><input type="text" name="adres" value="' . $row["levAdres"] . '"></td>
                <td><input type="text" name="postcode" value="' . $row["levPostcode"] . '"></td>
                <td><input type="text" name="plaats" value="' . $row["levWoonplaats"] . '"></td>
                <td><input type="hidden" name="klantid" value=' . $row["levid"] . "></td>
                <input type='hidden' name='updateleverancier'>
                <td><button style='width:4em;'>Save</button></td>
                <td><input type='button' onclick='CloseEditMenu(" . $rowcount2 . ", \"leverancier\")' value='cancel' style='width:4em;'</td>
            </tr>";
        echo "</form>";
    }
}
#endregion