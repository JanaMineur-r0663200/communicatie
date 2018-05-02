<!-- Deze code staat in een aparte file -->
<?php
include '../dbconn.php';

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$password = $_POST["password"];
$redirectpage = $_POST["redirectpage"];

$statement = $connection->prepare("INSERT INTO users (firstname, lastname, password) VALUES (?,?,?);");
//De vraagtekens worden bij elke 'execute()' vervangen door de waarden van de variabelen (bv. $firstname)
$statement->bind_param("sss", $firstname, $lastname, $password);
//"sss" zegt dat de 3 variabelen van het type String (=tekst) zijn.
//"i" = integer (getallen zonder komma), "d" = double (getallen met komma), "s" = string (tekst), "b" = BLOB
//De volgorde van de variabelen moeten overeenkomen met die van de vraagtekens.
//Het eerste vraagteken zal dus ingevuld worden met de eerste variabele in 'bind_param()'

$statement->execute();

//Hier kan men telkes de variabelen opnieuw declareren met daarachter een 'execute()'.
//Men kan ook bovenstaande 'execute()' laten vallen en hier pas voor de eerste keer de variabelen declareren met een 'execute()' achter.
//Dit kan bv. handig zijn wanneer men meerdere personen of items wilt toevoegen door dit in een loop te steken.

$statement->close();

include '../dbclose.php';

header("Location: ../". $redirectpage . "");
?>
