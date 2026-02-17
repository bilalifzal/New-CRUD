<?php
include("connect.php");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $mail=$_POST['email'];
    $pass=$_POST['password'];
    $db=date('Y-m-d',strtotime($_POST['date']));
    $pro=$_POST['Province'];
    $pic=$_FILES['img']['name'];


    $query="SELECT id FROM user WHERE Email='".mysqli_real_escape_string($link,$mail)."'LIMIT 1";
    $result=mysqli_query($link,$query);
    if($row=mysqli_num_rows($result)>0){
                echo"<p style='color:white; background-color:red; text-align:center; padding:12px;'>Email Already Exisits</p>";
    }
    else{
        $query="INSERT INTO user (Name,Email,Password,DOB,Province,Pic) VALUES('".mysqli_real_escape_string($link,$name)."','".mysqli_real_escape_string($link,$mail)."','".mysqli_real_escape_string($link,$pass)."','".mysqli_real_escape_string($link,$db)."','".mysqli_real_escape_string($link,$pro)."','".mysqli_real_escape_string($link,$pic)."')";
        $result=mysqli_query($link,$query);
        if($result){
              echo"<p style='color:white; background-color:green; text-align:center; padding:12px; font-weight:900;'>Successfully Sign in</p>";

              move_uploaded_file($_FILES['img']['tmp_name'],"BASIC".$_FILES['img']['name']);
        }
        else{
            echo"Unknown error";
        }
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
    " method="post" enctype="multipart/form-data"><label for="">Name</label>
<input type="text" name="name" id="" class="form-control">


<label for="">Email</label>
<input type="email" name="email" id="" class="form-control"><br>

<label for="">Password</label>
<input type="password" name="password" id="" class="form-control"><br>

<label for="">Date Of Birth</label>
<input type="date" name="date" id="" class="form-control"><br>
<label for="">Province</label>
<select name="Province" id="" class="form-control">
    <option value="PUNJAB">PUNJAB</option>
    <option value="SINDH">SINDH</option>
    <option value="KPK">KPK</option>
    <option value="BALOCHISTAN">BALOCHISTAN</option>
    <option value="GILGIT">GILGIT</option>
    <option value="KASHMIR">KASHMIR</option>
    <option value="FATA">FATA</option>
</select>
<br>
<label for=""> Your Passport size pic</label><br>
<input type="file" name="img" id="" accept=".png,.jpg,.jpeg"><br><br>
<button name="submit" class="btn btn-success">Submit</button></form>



</body>
</html>