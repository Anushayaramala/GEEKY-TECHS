<?php
function check_login()
{
    // Check if the session is not started
    if (!isset($_SESSION)) {
        session_start();
    }

    // Check if $_SESSION['login'] is not set or empty
    if (!isset($_SESSION['login']) || empty($_SESSION['login'])) {
        // Redirect to the login page
        $host = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = "user-login.php"; // Adjust the path as needed
        header("Location: http://$host$uri/$extra");
        exit(); // Stop further execution
    }
}
?>
