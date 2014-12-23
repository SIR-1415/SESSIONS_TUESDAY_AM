<?php
session_start();
// se not logged 
if (!isset($_SESSION['username'])) {
	header("location:login.php");
	session_commit();
	exit();
}

$user = $_SESSION['username'];
// se logged
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
<img src="images/<?php echo $user?>.jpeg"/>
<br/>
<a href="index.php">voltar</a>
</body>
</html>
