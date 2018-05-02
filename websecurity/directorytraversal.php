<?php
 include 'dbconn.php';
 $thispage = "directorytraversal"
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php
		include 'head.php';
	?>
	<title>Web Security - Directory traversal</title>
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
				<small>- Directory traversal</small>
			</h1>

			<h3>Directory traversal zonder beveiliging (disabled)</h3>
            <a href="directorytraversal/disabled/">Voorbeeld zonder beveiliging</a>

			<h4>index.php</h4>
			<p class="code">
				<?php
				highlight_file("directorytraversal/disabled/index.php");
				?>
			</p>
			<h4>page1.php</h4>
			<p class="code">
				<?php
				highlight_file("directorytraversal/disabled/page1.php");
				?>
			</p>

            <h3>Directory traversal met beveiliging (enabled)</h3>
            <a href="directorytraversal/enabled/">Voorbeeld met beveiliging</a>

			<h4>index.php</h4>
			<p class="code">
				<?php
				highlight_file("directorytraversal/enabled/index.php");
				?>
			</p>
			<h4>page1.php</h4>
			<p class="code">
				<?php
				highlight_file("directorytraversal/enabled/page1.php");
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
