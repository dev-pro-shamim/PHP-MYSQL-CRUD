<!DOCTYPE html>
<html lang="en">
<head>
 <title>Document</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
      <h1>Ajax CRUD OPERATION</h1>
      <input id = "name" type="text" placeholder="Enter Your Name.."><br>
        <input id = "email" type="email" placeholder="Enter Your Email.."><br>
          <input id = "pass"  type="password" placeholder="Enter Your Password.."><br><br>
          <button class="btn">Insert Data</button>
          <button class="read">Read</button>
          <div id = "reload" ></div>
          <h1>Reading Data From Database</h1>

    <table>
        <thead>
            <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Delete</th>
        <th>Edit</th>
        <tbody id = "tbody">


        </tbody>
        </thead>
    </table>


    </div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="ajax.js"></script>
</body>
</html>