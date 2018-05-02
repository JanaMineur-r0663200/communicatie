<?php
 include 'dbconn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include 'head.php';
	?>
	<title>Web Security - Home</title>
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

            <ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="test.php">Test page</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="xss.php">XSS</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="sqlinjection.php">SQL Injection</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="passwordhashing.php">Password hashing</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="phpconfigurationfile.php">PHP Configuration File</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="directorytraversal.php">Directory Traversal</a>
				</li>
			</ul>

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
