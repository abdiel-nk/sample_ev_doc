<?php


require 'conexion.php';

$idCurso = $mysqli->real_escape_string($_POST['id_curso']);

$sql = $mysqli->query("SELECT id, docente FROM t_docente WHERE id_curso=$idCurso");

$respuesta = "<option value='0'>Seleccionar</option>";

while ($row = $sql->fetch_assoc()) {
    $respuesta .= "<option value='" . $row['id'] . "'>" . $row['docente'] . "</option>";
}

echo json_encode($respuesta, JSON_UNESCAPED_UNICODE);