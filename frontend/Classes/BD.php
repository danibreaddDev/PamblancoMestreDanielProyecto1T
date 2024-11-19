<?php
include("../Config/Config.php");
class BD
{
    private $link;
    function __construct()
    {
        try {
           
            $this->link= new
            PDO("mysql:host=".HOST.";dbname=".BASE,USUARIO,
            PASS,OPCIONES);
        } catch (PDOException $e) {
            $dato = "error" . $e->getMessage() . "<br>";
        }
    }
    function __get($var)
    {
        return $this->$var;
    }
}
?>