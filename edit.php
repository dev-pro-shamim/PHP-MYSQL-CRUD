<?php
$conn = mysqli_connect("localhost","root","","ajx");
$id =  $_GET['userId'];
$select = "SELECT * FROM ajax WHERE Id =$id";
$ex = mysqli_query($conn,$select);
$row = mysqli_fetch_array($ex);


?>



<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
<div class="container">
      <h1>Edit Page</h1>
      <input id = "name" type="text" value = "<?php echo $row ['Name'] ?>" placeholder="Enter Your Name.."><br>
        <input id = "email" type="email"  value = "<?php echo $row ['Email'] ?>" placeholder="Enter Your Email.."><br>
          <input id = "pass"  type="password"  value = "<?php echo $row ['Pass'] ?>" placeholder="Enter Your Password.."><br><br>
          <button class="edit" onclick = "UPDATE_DATA(<?php echo $row ['Id'] ?>)">Edit Data</button>
          <button class="edit" onclick = "Home()">Home</button>

</div>


</body>
</html>