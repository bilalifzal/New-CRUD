<?php
include("connect.php");

if(isset($_POST['submit'])){
    $mail=$_POST['email'];
    $pass=$_POST['password'];

    $query="SELECT id FROM user WHERE Email='".mysqli_real_escape_string($link,$mail)'". && password='".mysqli_real_escape_String($link,$pass)."'LIMIT 1";
    $result=mysqli_query($link,$query);
    if($row=mysqli_num_rows($result)>0){
        
        echo"<p style='color:white; background-color:green; text-align:center; padding:12px; font-weight:900;'>Welcome To This Managment System</p>";
    }
    else{
      echo"<p style='color:white; background-color:red; text-align:center; padding:12px;'>user not found</p>";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    

 <form action="
    " method="post" enctype="multipart/form-data">
<h1>
    LOGIN 
</h1>
<label for="">Email</label>
<input type="email" name="email" id="" class="form-control"><br>

<label for="">Password</label>
<input type="password" name="password" id="" class="form-control"><br>


<br>
<button name="submit" class="btn btn-danger">LOGIN</button></form>
</body>
</html>