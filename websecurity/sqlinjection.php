<?php
 include 'dbconn.php';
 $thispage = "sqlinjection"
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include 'head.php';
	?>
	<title>Web Security - SQL Injection</title>
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
				<small>- SQL Injection</small>
			</h1>

			<h3>CONTENT</h3>
			<?php
			$sql = "SELECT * FROM users";
			$result = $connection->query($sql);

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
			<form action="sqlinjection/insert_user.php" method="POST">
				<input type="hidden" name="redirectpage" value="<?php echo $thispage; ?>.php"/>
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
			<p class="code">voornaam', (SELECT version()), 'wachtwoord')-- </p>
			<p class="code">
				<?php
				show_source("sqlinjection/insert_user.php");
				?>
			</p>

			<!--UPDATE-->
			<h3>UPDATE</h3>
			<form action="sqlinjection/update_user.php" method="POST">
				<input type="hidden" name="redirectpage" value="<?php echo $thispage; ?>.php"/>
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

			<p class="code">
				<?php
				highlight_file("sqlinjection/update_user.php");
				?>
			</p>
			
			<!--SEARCH-->
			<h3>SEARCH</h3>
			<form action="test.php" method="GET">
				<p>
					<label for="firstname">Firstname</label>
					<input type="text" id="firstname" name="firstname" required/>
				</p>
				<input type="submit" value="SEARCH"/>
			</form>
			<p class="code">' OR 1=1 OR '1'='1</p>
			
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

			<p class="code">
				<?php
				highlight_file("sqlinjection/select_user.php");
				?>
			</p>
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