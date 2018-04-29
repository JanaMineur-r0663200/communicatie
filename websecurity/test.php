<?php
	include 'dbconn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include 'head.php';
	?>
	<title>3 Col Portfolio - Start Bootstrap Template</title>
</head>

<body>
	<!-- Navigation -->
	<?php
		include 'navigation.php';
	?>

	<!-- Page Content -->
	<main>
		<div class="container">

			<!-- Page Heading -->
			<h1 class="my-4">Web Security
				<small>- Home</small>
			</h1>
			
			<h3>CONTENT</h3>
			<?php
				$sql = "SELECT * FROM users";
				$result = $conn->query($sql);

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
			?>
		
			<!--INSERT-->
			<h3>INSERT</h3>
			<form action="handlers/test_user_insert.php" method="POST">
				<input type="hidden" name="redirectpage" value="test.php"/>
				<p>
					<label for="firstname">Firstname</label>
					<input type="text" id="firstname" name="firstname" required/>
				</p>
				<p>
					<label for="lastname">Lastname</label>
					<input type="text" id="lastname" name="lastname" required/>
				</p>
				<p>
					<label for="password">Password</label>
					<input type="password" id="password" name="password" required/>
				</p>
				<input type="submit" value="ADD"/>
			</form>
			<p>voornaam', (SELECT version()), 'wachtwoord')-- </p>
			
			<!--UPDATE-->
			<h3>UPDATE</h3>
			<form action="handlers/test_user_update.php" method="POST">
				<input type="hidden" name="redirectpage" value="test.php"/>
				<p>
					<label for="id">Id</label>
					<input type="text" id="id" name="id" required/>
				</p>
				<p>
					<label for="firstname">Firstname</label>
					<input type="text" id="firstname" name="firstname" required/>
				</p>
				<p>
					<label for="lastname">Lastname</label>
					<input type="text" id="lastname" name="lastname" required/>
				</p>
				<p>
					<label for="password">Password</label>
					<input type="password" id="password" name="password" required/>
				</p>
				<input type="submit" value="UPDATE"/>
			</form>
			
			<!--SEARCH-->
			<h3>SEARCH</h3>
			<form action="test.php" method="GET">
				<p>
					<label for="firstname">Firstname</label>
					<input type="text" id="firstname" name="firstname" required/>
				</p>
				<input type="submit" value="SEARCH"/>
			</form>
			<p>' OR 1=1 OR '1'='1</p>
			<?php
			if ($_SERVER["REQUEST_METHOD"] == "GET") {	
				if (!empty($_GET["firstname"])){
					$firstname = $_GET["firstname"];
			
					$sql = "SELECT id, firstname, lastname, password FROM users WHERE firstname = '" . $firstname . "';";

					$result = $conn->query($sql);

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
		</div>
	</main>
	<!-- /.container -->

	<!-- Footer -->
	<?php
		include 'footer.php';
	?>	
	
	<!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<?php
	include 'dbclose.php';
?>