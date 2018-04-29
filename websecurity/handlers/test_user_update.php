<?php
	include '../dbconn.php';

	$id = $_POST["id"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$password = $_POST["password"];
	$redirectpage = $_POST["redirectpage"];

	$sql = "UPDATE users SET firstname='" . $firstname . "', lastname='" . $lastname . "', password='" . $password . "' WHERE id=" . $id . ";";

	//To be able to see this, put the header function below in comment
	if ($conn->query($sql) === TRUE) {
		echo "Record updated successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	include '../dbclose.php';

	header("Location: ../". $redirectpage . "");
?>
