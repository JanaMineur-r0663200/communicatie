<!-- Deze code staat in een aparte file -->
<?php
include '../dbconn.php';

$id = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$password = $_POST["password"];
$redirectpage = $_POST["redirectpage"];

$sql = "UPDATE users SET firstname='" . $firstname . "', lastname='" . $lastname . "', password='" . $password . "' WHERE id=" . $id . ";";

//To be able to see this, put the header function below in comment
if ($connection->query($sql) === TRUE) {
	echo "Record updated successfully";
} else {
	echo "Error: " . $sql . "<br>" . $connection->error;
}

header("Location: ../". $redirectpage . "");
?>
