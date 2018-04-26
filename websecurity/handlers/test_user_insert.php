<?php

include '../dbconn.php';


$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$password = $_POST["password"];
$redirectpage = $_POST["redirectpage"];

$sql = "INSERT INTO users (firstname, lastname, password) VALUES ('" . $firstname . "', '" . $lastname . "', '" . $password . "')";


//To be able to see this, put the header function below in comment
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

include '../dbclose.php';

header("Location: ../". $redirectpage . "");
?>