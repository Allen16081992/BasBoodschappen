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

        public function InkoopOrderSearch($db) {
            $query = $db->prepare("SELECT inkOrdId FROM inkooporders");
            $query->execute([
                "inkOrdId" => $this->inkOrdId
            ]);
        }
    }
