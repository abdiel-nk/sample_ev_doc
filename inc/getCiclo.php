<?php
require 'conexion.php';
echo json_encode($_POST);
$idPrograma = $mysqli->real_escape_string($_POST['id_programa']);

$sql = $mysqli->query("SELECT id, ciclo FROM t_ciclo WHERE id_programa=$idPrograma");

$respuesta = "<option value='0'>Seleccionar</option>";

while ($row = $sql->fetch_assoc()) {
    $respuesta .= "<option value='" . $row['id'] . "'>" . $row['ciclo'] . "</option>";
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);