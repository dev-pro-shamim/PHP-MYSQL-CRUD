<?php

// insert Section Starts here

$conn = mysqli_connect("localhost","root","","ajx");
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];


$insert = "INSERT INTO ajax (Name, Email, Pass)
 VALUES('$name', '$email','$pass')";

$query = mysqli_query($conn,$insert);
if($query){
    echo "Data Insert Successfully";

}else{
    echo "Data Insert Failed";
}

// insert Section END here




?>

