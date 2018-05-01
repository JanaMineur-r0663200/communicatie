<!-- Deze code staat in de pagina zelf (inline) -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {	
    if (!empty($_GET["firstname"])){
        $firstname = $_GET["firstname"];
        
        $statement = $connection->prepare("SELECT id, firstname, lastname, password FROM users WHERE firstname=?;");
        $statement->bind_param("s", $firstname);
        $statement->execute();
        $statement->close();

        $result = $statement->get_result();

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table><thead><tr><th>ID</th><th>FIRSTNAME</th><th>LASTNAME</th><th>PASSWORD</th></tr></thead><tbody>";
            
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"]. " </td><td>" . $row["firstname"]. "</td><td>" . $row["lastname"]. "</td><td>" . $row["password"]. "</td></tr>";
            }
            
            echo "</tbody></table>";
        } else {
            echo "0 results";
        }
    }
}
?>