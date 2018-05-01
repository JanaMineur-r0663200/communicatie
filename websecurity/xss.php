<?php
 include 'dbconn.php';
 $thispage = "xss"
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include 'head.php';
	?>
	<title>Web Security - XSS</title>
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
				<small>- XSS</small>
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
			<form action="xss/insert_user.php" method="POST">
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
            <p class="code">&lt;script&gt;alert("hacked")&lt;/script&gt;</p>
            <!-- <script>alert("hacked")</script> -->
			<p class="code">
				<?php
				show_source("xss/insert_user.php");
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