<!-- Deze code staat in een aparte file, maar wordt geincludeert in de pagina zelf (inline) -->
<?php

$sql = "SELECT * FROM users";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    echo "<table><thead><tr><th>ID</th><th>FIRSTNAME</th><th>LASTNAME</th><th>PASSWORD</th><th>PASSWORD HASHED</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. " </td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["password"]. "</td><td>" . $row["passwordhashed"]. "</td></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}

?>
