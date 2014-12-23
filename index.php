<?php
// start session mechanism
session_start();

// if not logged redirect to login

if (!isset($_SESSION['username'])) {
	session_write_close();
	header("location:login.php");
	session_commit();
	exit();
}
// else : get user , continue to content
else {
	$user = $_SESSION['username'];
	session_commit();
}

?>
<html>
	<head>
		<style>
		body,a {
			color:silver;
			background-color:<?php echo $user?>;
			}
		</style>
	</head>
	<body>
		<h1> Welcome <?php echo $user?></h1>
		<p> private content <a href="private.php">here</a></p>
		<p><a href="logout.php">logout here</a></p>
	</body>
</html>