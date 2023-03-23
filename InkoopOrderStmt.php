<?php
    require_once "PDOConnection.php";

    class InkoopOrder {

        private $inkid;
        private $levid;
        private $artid;
        public $inkdatum;
        public $inkbestel;
        public $inkstatus;

        public function __construct($inkid, $levid, $artid, $inkdatum, $inkbestel, $inkstatus) {
            $this->inkid=$inkid; 
            $this->levid=$levid; 
            $this->artid=$artid;
            $this->inkdatum=$inkdatum; 
            $this->inkbestel=$inkbestel; 
            $this->inkstatus=$inkstatus;
        }

        //To be continued... public function CreateInkoopOrder//
        public function CreateInkoopOrder($db) {

        }

        public function UpdateInkoopOrder($db) {

        }

        public function DeleteInkoopOrder($db) {

        }

        public function ShowInkoopOrder($listNumber)
        {
            echo
                "<form action='Thuis.php' method='post'>
                <tr class='shownInkoopOrderEdit'>
                <td><button class='delet-button'><img src='images/RedX.png' height='25px' width='25px'></button></td>
                <td>" . $this->inkid . "</td>
                <input type='hidden' name='inkid' value=" . $this->inkid . ">
                <td>" . $this->levid . "</td>
                <input type='hidden' name='levid'>
                <td>" . $this->artid . "</td>
                <input type='hidden' name='artid'>
                <td>" . $this->inkdatum . "</td>
                <input type='hidden' name='datum'>
                <td>" . $this->inkbestel . "</td>
                <input type='hidden' name='bestel'>
                <td>" . $this->inkstatus . "</td>
                <input type='hidden' name='status'>
                <td><input type='hidden' name='deleteinkooporder'></td>
                <td><input class='Create-button' type='button' onclick='OpenEditMenu(" . $listNumber . ", \"inkooporder\")' value='edit'></td>
            </tr>
        </form>
        <form action='Thuis.php' method='post'>
            <tr id='hidden' class='hiddenInkoopOrderEdit'>
                <td></td>
                <td>" . $this->inkid . "</td>
                <td><input type='text' name='levid' minlength='2' maxlength='20' required='required' value='" . $this->levid . "'></td>
                <td><input type='text' name='artid' minlength='2' maxlength='30' required='required' value='" . $this->artid . "'></td>
                <td><input type='text' name='datum' maxlength='30' value='" . $this->inkdatum . "'></td>
                <td><input type='text' name='bestel' maxlength='6' value='" . $this->inkbestel . "'></td>
                <td><input type='text' name='status' minlength='2' maxlength='25' required='required' value='" . $this->inkstatus . "'></td>
                <td><input type='hidden' name='inkid' value='" . $this->inkid . "'></td>
                <input type='hidden' name='updateinkooporder'>
                <td><button class='Create-button'>Save</button></td>
                <td><input class='Create-button' type='button' onclick='CloseEditMenu(" . $listNumber . ", \"inkooporder\")' value='cancel'</td>
            </tr>";
            echo "</form>";
        }
    }
