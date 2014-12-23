<?php
// start the session mechanism
session_start();

// verify if there is an active session with a logged user
if (isset($_SESSION['username'])) {
	// redirect to index.php and exit the login
	// echo("logged as " . $_SESSION['username']);
	header("location:index.php");
	session_commit();
	exit();
}

// no user logged, verify if there is a username
else if (isset($_GET['username'])) {
	$_SESSION['username'] = $_GET['username'];
	// redirect to index.php and exit the login
	//echo("new login as ". $_SESSION['username']);
	header("location:index.php");
	session_commit();
	exit();
} 

?>
<html>
	<head></head>
	<body>
		<p>login as <a href="login.php?username=red">red</a></p>
		<p>login as <a href="login.php?username=green">green</a></p>
		<p>login as <a href="login.php?username=blue">blue</a></p>
	</body>
</html>

