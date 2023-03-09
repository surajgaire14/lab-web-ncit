<?php
// storing a cookie
$cookie =  setcookie("user-cookie", "user cookie", time() + 20 * 24 * 60 * 60);
// accessing a cookie
if (isset($_COOKIE["user-cookie"])) {
    echo $_COOKIE["user-cookie"];
} else {
    echo 'Cookie not set';
}

// destorying a cookie

setcookie("user-cookie","",time()-300);




?>
