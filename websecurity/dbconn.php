<?php
// CONNECTION POSTGRESQL
//$dbconn = pg_connect("host='databanken.ucll.be' port='51718' dbname='probeer' sslmode='require' user='r0670805' password='Matti#VM26UCLL'")
//    or die('Could not connect: ' . pg_last_error());

//CONNECTION MYSQLI
$servername = "localhost"; //Server address
$username = "root"; //Usually: "root"
$password = ""; //Default is empty with Xampp
$dbname = "communicatiephp"; //Database name

$connection = new mysqli($servername, $username, $password, $dbname); //Create connection

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>