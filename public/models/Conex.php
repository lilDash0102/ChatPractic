<?php

Class Conex
{
    private $host = "localhost:1234";
    private $user = "root";
    private $password = "";
    private $dbName = "Chat";

    private $con;

    public function __construct() {
        $this->con = new mysqli($this->host,$this->user,$this->password,$this->dbName);
    }

    public function getCon()
    {
        return $this->con;
    }

    public function getAffectRows()
    {
        return mysqli_affected_rows($this->con);
    }

    public function query($query)
	{
		return $this->con->query($query);
	}
}
?>