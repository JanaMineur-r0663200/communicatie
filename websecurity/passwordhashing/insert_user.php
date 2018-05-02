<!-- Deze code staat in een aparte file -->
<?php
include '../dbconn.php';

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$password = $_POST["password"];
$redirectpage = $_POST["redirectpage"];


$options = ['cost' => 12];
//extra opties
$passwordhashed = password_hash($password, PASSWORD_DEFAULT, $options);
//Dit is het effect "hashen" van het wachtwoord

$statement = $connection->prepare("INSERT INTO users (firstname, lastname, password, passwordhashed) VALUES (?,?,?,?);");
$statement->bind_param("ssss", $firstname, $lastname, $password, $passwordhashed);
$statement->execute();
$statement->close();

include '../dbclose.php';

header("Location: ../". $redirectpage . "");
?>
