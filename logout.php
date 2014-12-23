<?php
// start session mechanism
session_start();

// unset session variables and destroy session
session_unset();
session_destroy();

// close session mechanism
session_write_close();

// redirect to login page
header("location:login.php");
?>