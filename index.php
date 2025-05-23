<?php
require 'inc/conexion.php';

$programa = $mysqli->query("SELECT id, programa FROM t_programa");

$ciclo = $mysqli->query("SELECT id, ciclo FROM t_ciclo");
$curso = $mysqli->query("SELECT id, curso FROM t_curso");
$docente = $mysqli->query("SELECT id, docente FROM t_docente");
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select anidado</title>
</head>

<body>

    <h2>Selects anidados</h2>

    <form action="save.php" method="post">

        <p>
            <label for="programa">Programa:</label>
            <select name="programa" id="programa">
                <option value="">Seleccionar</option>
                <?php while ($row = $programa->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['programa']; ?></option>
                <?php } ?>
            </select>
        </p>

        <p>
            <label for="ciclo">Ciclo:</label>
            <select name="ciclo" id="ciclo">
                <option value="">Seleccionar</option>
                <?php while ($row = $ciclo->fetch_assoc()) { ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['ciclo']; ?></option>
                <?php } ?>


                
            </select>
        </p>

        <p>
            <label for="curso">Curso:</label>
            <select name="curso" id="curso">
                <option value="">Seleccionar</option>
            </select>
        </p>
        <p>
            <label for="docente">Docente:</label>
            <select name="docente" id="docente">
                <option value="">Seleccionar</option>
            </select>
        </p>


        <p>
            <button type="submit">Guardar</button>
        </p>

    </form>

    <script src="js/peticiones.js"></script>
</body>

</html>