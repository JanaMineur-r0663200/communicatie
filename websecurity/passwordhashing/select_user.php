<!-- Deze code staat in een aparte file, maar wordt geincludeert in de pagina zelf (inline) -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST["id"]) && !empty($_POST["password"])){
        $id = $_POST["id"];
        $password = $_POST["password"];
        $passwordhashed = "";

        $statement = $connection->prepare("SELECT id, firstname, lastname, password, passwordhashed FROM users WHERE id=?;");
        $statement->bind_param("i", $id);
        $statement->execute();

        $result = $statement->get_result();

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $passwordhashed = $row["passwordhashed"];
            }
        } else {
            echo "Something went wrong!";
        }

        if (password_verify($password, $passwordhashed)) {
            echo "Correct password!";
        } else {
            echo "Wrong password!";
        }

        $statement->close();
    }
}
?>
