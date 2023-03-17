<?php


class DatabaseConnect
{
    public $dbConnect;
    public string $IP;
    public string $username;
    public string $password;
    public string $DBName;

    public function __construct($IP, $username, $password, $DBName)
    {
        $this->IP = $IP;
        $this->username = $username;
        $this->password = $password;
        $this->DBName = $DBName;
        $this->dbConnect = new PDO("mysql:host=" . $this->IP . ";dbname=" . $this->DBName, $this->username, $this->password);
    }
}
