<!-- Deze code staat in een aparte file -->
<?php
include '../dbconn.php';

$id = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$password = $_POST["password"];
$redirectpage = $_POST["redirectpage"];

$statement = $connection->prepare("UPDATE users SET firstname=?, lastname=?, password=? WHERE id=?;");
$statement->bind_param("sssi", $firstname, $lastname, $password, $id);
$statement->execute();

$statement->close();

include '../dbclose.php';

header("Location: ../". $redirectpage . "");
?>
