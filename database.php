<?php
function getPdo() //abrir la conexion
{
    $host = 'localhost';
    $db   = 'apptareas';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    try {

        $pdo = new PDO($dsn, $user, $pass);
        return $pdo;
    } catch (\PDOException $e) {
        echo $e->getMessage();
    }
}
$pdo = getPdo();
$value = end($_POST);
switch ($value) {
    case 'Create':
        $sql = "INSERT 
        INTO `apptareas`.`tarea` ( `nombre`, `estado`)
        VALUES ( ?, ?);";
        $createUser = $pdo->prepare($sql);
        $createUser->execute([$_POST["name"], $_POST["status"]]);
        $createUser = $createUser->rowCount();
        echo '<h1>Task ' . $_POST["name"] . ' created</h1>';
        include_once('goIndex.php');
        break;
    case 'Delete':
        $sql = "DELETE FROM `apptareas`.`tarea` WHERE (`nombre` = ?);";
        $createUser = $pdo->prepare($sql);
        $createUser->execute([$_POST["task"]]);
        $createUser = $createUser->rowCount();
        echo '<h1>Task ' . $_POST["task"] . ' Delete</h1>';
        include_once('goIndex.php');
        break;



    default:
        echo "<br>";
        break;
}

function bringValuesName()
{
    $pdo = getPdo();
    $consulta = $pdo->query('select * from apptareas.tarea;');

    while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $datos[] = $fila['nombre'];
    }

    return $datos;
}
function bringValuesRead()
{
    $pdo = getPdo();
    $consulta = $pdo->query('select * from apptareas.tarea;');

    while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $datos[] = $fila;
    }

    return $datos;
}

?>
