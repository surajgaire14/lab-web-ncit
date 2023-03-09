<?php

$conn = new mysqli('localhost','root','7227','crud-operation');

if($conn){
    echo 'connection successful';
}else {
    die(mysqli_error($conn));
}

?>