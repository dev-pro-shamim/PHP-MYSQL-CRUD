<?php
$conn = mysqli_connect("localhost","root","","ajx");
$userId = $_POST['userId'];
$delete = "DELETE FROM ajax WHERE Id = $userId";
$query = mysqli_query($conn,$delete);
if($query){
    echo "Delete Confirm";
}else{
    echo "Failed";
}


?>