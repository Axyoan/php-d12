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

if(!empty($_POST["homework_name"])){
    ///recibir datos
    echo "afsdkfkajksdkfa";
    $homework_name = $_POST["homework_name"];
    $description = $_POST["description"];
    $priority = $_POST["tags"];
    $urgent = $_POST["urgent"];
    $type = $_POST["type"];
    ///validar datos

    ///guardar a db
    $sql = "INSERT INTO HOMEWORK (homework_name, description, priority, urgent, type) VALUES('$homework_name', '$description', '$priority', '$urgent', '$type')";
    /// use exec() because no results are returned
    $conn->exec($sql);
}
else{
    echo "no hay datos enviados";
}
header('Location: index.php')
    
?>