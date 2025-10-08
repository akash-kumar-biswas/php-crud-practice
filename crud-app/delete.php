<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id=$id";

if($conn->query($sql)){
    echo "Deleted Succesfully";
}
else{
    echo "Error.".$conn->error;
}
//header("Location: read.php");
?>
