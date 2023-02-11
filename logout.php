<?php
session_start();

// Set the cookie lifetime to 0
session_set_cookie_params(0);

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the sign-in page
header("Location: signIn.php");
exit;
?>