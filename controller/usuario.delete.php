<?php
include_once "../model/usuario.php";
$id = $_POST["id"];
$usuarioM = new \modelo\usuario;
$usuarioM->setId($id);
$response = $usuarioM->delete();

echo json_encode($response);

unset($response);
unset($usuarioM);
