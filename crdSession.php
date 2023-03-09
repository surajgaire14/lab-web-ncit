<?php
// starting a session
session_start();

// session_regenerate_id(true);

// stroing data in session
$_SESSION["firstName"] = "Suraj";
$_SESSION["lastName"] = "Gaire";

// reading session data
echo 'First name is ' . $_SESSION["firstName"] . ' and last name is ' . $_SESSION["lastName"];

// unsetting all session variables
// $_SESSION = array();
if(isset($_SESSION["firstName"])){
    unset($_SESSION["firstName"]);
}

if(isset($_SESSION["lastName"])){
    unset($_SESSION["lastName"]);
}

// destroying a session
session_destroy();

?>
