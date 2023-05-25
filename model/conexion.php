<?php

class Conexion
{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "pokemonNoche";
    private $conPDO;

    public function __construct()
    {
        try {

            $this->conPDO = new PDO("mysql:dbname=$this->db; $this->host", $this->user, $this->pass);
        } catch (\Throwable $e) {
            return "Error: " . $e->getMessage();
        }
    }

    /**
     * Get the value of conPDO
     */
    public function getConPDO()
    {
        return $this->conPDO;
    }
}
