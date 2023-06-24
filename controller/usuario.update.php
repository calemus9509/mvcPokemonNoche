<?php

include_once "../model/usuario.php";
$id = $_POST["id"];
$tipoDoc = $_POST["tipoDoc"];
$identificacion = $_POST["identificacion"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$genero = $_POST["genero"];
$rol = $_POST["rol"];

$ususarioM = new \modelo\usuario;
$ususarioM->setId($id);
$ususarioM->setTipoDoc($tipoDoc);
$ususarioM->setIdentificacion($identificacion);
$ususarioM->setNombre($nombre);
$ususarioM->setApellido($apellido);
$ususarioM->setCorreo($correo);
$ususarioM->setGenero($genero);
$ususarioM->setRol($rol);

$response = $ususarioM->update();
echo json_encode($response);
unset($ususarioM);
unset($response);
