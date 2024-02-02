<?php

$conn = mysqli_connect("localhost","root","","ajx");
$select = " SELECT * FROM ajax";
$ex = mysqli_query($conn, $select);
while($row = mysqli_fetch_array($ex)){?>
   <tr>
   <td> <?php echo $row['Id']; ?> </td>
    <td> <?php echo $row['Name']; ?> </td>
   <td> <?php echo $row['Email']; ?>  </td>
   <td> <?php echo $row['Pass']; ?> </td>
   <td><button cl = "red" onclick = "Delete(<?php echo $row['Id'] ?>)">DELETE</button></td>
   <td><button class = "yello" onclick = "Edit(<?php echo $row['Id'] ?>)">Edit</button></td>
   </tr>

 <?php }

?>