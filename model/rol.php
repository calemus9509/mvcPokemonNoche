<?php

namespace modelo;

use PDO;
use PDOException;

include_once "conexion.php";


class Rol
{
    private $id;
    private $nombreRol;
    private $estado = "A";
    private $conexion;

    public function __construct()
    {
        $this->conexion = new \Conexion();
    }

    public function create()
    {
        try {

            $request = $this->conexion->getConPDO()->prepare("INSERT INTO roles(nombreRol,estado) VALUES(?,?)");
            $request->bindParam(1, $this->nombreRol);
            $request->bindParam(2, $this->estado);
            $request->execute();
            return "Rol Creado";
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nombreROl
     */
    public function getNombreRol()
    {
        return $this->nombreRol;
    }

    /**
     * Set the value of nombreROl
     */
    public function setNombreROl($nombreROl): self
    {
        $this->nombreRol = $nombreROl;

        return $this;
    }

    /**
     * Get the value of estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set the value of estado
     */
    public function setEstado($estado): self
    {
        $this->estado = $estado;

        return $this;
    }
}