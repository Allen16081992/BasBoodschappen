<?php require_once "BaseStructure.php" ?> <!--Navbar-->
<html>
    <body>
        <table>
            <tr>
                <th>Klant naam</th>
                <th>Adres</th>
                <th>Stad</th>
                <th>ID</th>
            </tr>

            <?php
            $pdo =  new PDO("mysql:host=localhost;dbname=auto's;charset=utf8mb4", "root", "");
            $stmt = $pdo->prepare("SELECT klantnaam, klantadres, klantpostcode, klantplaats, klantid FROM klanttabel");
            $stmt->execute();
            while($row = $stmt->fetch()) {
                echo "<tr><td>" . $row["klantnaam"]. "</td><td>" . $row["klantadres"] . "</td><td>"
                    . $row["klantpostcode"]. "</td><td>" . $row["klantplaats"] . "</td><td>" . $row['klantid'] . "</td></tr>";
            }
            echo "</table>";
            ?>
        </table>
    </body>
</html>



