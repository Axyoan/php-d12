<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password="";
$db = "php-d12";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e) {
    $dbh->rollBack();
    echo "Failed: " . $e->getMessage();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP introducción</title>
</head>
<body>
    <h1>Manejador de Tareas</h1>
    <form action="store.php" method="POST">
        <label for="homework_name">Nombre de tarea</label><br>
        <input type="text" name="homework_name" id="homework_name">
        <br>

        <label for="description">Descripción</label><br>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <br>

        <label for="tags">Prioridad</label><br>
        <select name="tags" id="tags">
            <option value="high">Alta</option>
            <option value="medium">Media</option>
            <option value="low">Baja</option>
        </select>
        <br>

        <label for="urgent">Urgente</label>
        <input type="checkbox" name="urgent" id="urgent" value="1">
        <br>

        <label for="school">Escuela</label>
        <input type="radio" name="type" id="school" value="school">
        <label for="work">Trabajo</label>
        <input type="radio" name="type" id="work" value="work">
        <br>

        <input type="submit" value="send">
    </form>
</body>
</html>