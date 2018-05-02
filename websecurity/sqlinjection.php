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
			include 'selectall_user.php';
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
					<input type="text" id="password" name="password" required/>
				</p>
				<input type="submit" value="ADD"/>
			</form>
			<p class="code">voornaam', (SELECT version()), 'wachtwoord')-- </p>
            <h4>sqlinjection/insert_user.php</h4>
            <p class="code">
				<?php
				highlight_file("sqlinjection/insert_user.php");
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
					<input type="text" id="password" name="password" required/>
				</p>
				<input type="submit" value="UPDATE"/>
			</form>
            <h4>sqlinjection/update_user.php</h4>
			<p class="code">
				<?php
				highlight_file("sqlinjection/update_user.php");
				?>
			</p>

			<!--SEARCH-->
			<h3 id="search">SEARCH</h3>
			<form action="sqlinjection.php#search" method="GET">
				<p>
					<label for="firstname">Firstname</label>
					<input type="text" id="firstname" name="firstname" required/>
				</p>
				<input type="submit" value="SEARCH"/>
			</form>
			<p class="code">' OR 1=1 OR '1'='1</p>

			<?php
			include 'sqlinjection/select_user.php';
			?>
            <h4>sqlinjection/select_user.php</h4>
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
