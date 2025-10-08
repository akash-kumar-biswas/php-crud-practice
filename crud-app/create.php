<?php
include 'db.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "insert into users(name, email, phone) values('$name', '$email', '$phone')";

    if($conn->query($sql)){
        echo "Record Added Succesfully";
    }
    else{
        echo "Error".$conn->error;
    }
}
?>

<form method="post">
    Name : <input type="text" name = "name"><br>
    Email: <input type="text" name = "email"><br>
    Phone: <input type="text" name = "phone"><br>
    <input type="submit" name = "submit" value="Add User">
</form>