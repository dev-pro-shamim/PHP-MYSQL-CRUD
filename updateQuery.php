<?php

$conn = mysqli_connect("localhost","root","","ajx");
$name = $_GET['name'];
$email = $_GET['email'];
$pass = $_GET['pass'];
$id = $_GET['userId'];


$update = "UPDATE ajax SET Name = '$name', Email = '$email', Pass = '$pass' WHERE Id = $id ";
$ex = mysqli_query($conn,$update);
if($ex){
    echo "Update SuccessFully.";
}else{

    echo "Update Failed.";
}

?>