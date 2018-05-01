<!-- Deze code staat in een aparte file -->
<?php
include '../dbconn.php';

//'htmlspecialchars()' gaat alle letters en tekens in de variabele omzetten naar een andere tekencodering, in dit geval is dat 'UTF-8'
//'ENT_QUOTES' gaat zowel dubbele aanhalingstekens als enkele aanhalingstekens die voorkomen in de variabele omzetten naar die andere tekencodering

$firstname = $_POST["firstname"];
$firstname = htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8');

$lastname = $_POST["lastname"];
$lastname = htmlspecialchars($lastname, ENT_QUOTES, 'UTF-8');

$password = $_POST["password"];
$password = htmlspecialchars($password, ENT_QUOTES, 'UTF-8');

$redirectpage = $_POST["redirectpage"];
$redirectpage = htmlspecialchars($redirectpage, ENT_QUOTES, 'UTF-8');

$statement = $connection->prepare("INSERT INTO users (firstname, lastname, password) VALUES (?,?,?);");
$statement->bind_param("sss", $firstname, $lastname, $password);
$statement->execute();
$statement->close();

include '../dbclose.php';

header("Location: ../". $redirectpage . "");
?>