<?php
// Initialize the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
echo '<script language="javascript">window.location.href="login.php"</script>';
exit;
?>
