<?php
include "Conex.php";

Class User{
    private $con;

    function __construct() {
        $this->con = new Conex();
    }

    function All()
    {
        $query= "SELECT * FROM Users";
        return $this->con->query($query);
    }

    function searchByNickName($nickname)
    {
        $query = "SELECT * FROM Users WHERE Nick = '$nickname'";
        return $this->con->query($query);
    }

    function delete($id)
    {
        $query = "DELETE FROM Users WHERE id= '$id'";
        return $this->con->query($query);
    }

    function update($name,$nick,$email,$password,$oldNick)
    {
        $query = "UPDATE Users SET nombre = '$name', userName= '$nick', correo = '$email', password = '$password' WHERE userName = '$oldNick'";
        return $this->con->query($query);
    }

    function add($name,$nick,$email,$password)
    {
        $query = "INSERT INTO Users (nombre,userName,correo,password) VALUES  ('$name','$nick','$email','$password')";
        return $this->con->query($query);
    }

    function getCon()
    {
        return $this->con;
    }

    function getAffectRows()
    {
        return $this->con->getAffectRows();
    }

}

?>