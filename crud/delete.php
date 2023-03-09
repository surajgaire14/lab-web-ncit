<?php 
include './connect.php';

if(isset($_GET['id'])){
 $id = $_GET['id'];
 $query = "delete from crud where id = '$id' ";   

 if(mysqli_query($conn,$query)){
   // echo "item deleted successfully";
    header('location:display.php');
 }else{
    die(mysqli_error($conn));
 }
}
?>
