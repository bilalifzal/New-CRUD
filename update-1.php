<?php
include("connect.php");


$id=$_GET['id']??'';

$query="SELECT * FROM user WHERE id='$id'" ;
$result=mysqli_query($link,$query);
$row=mysqli_fetch_array($result);



if(isset($_POST['name'])){
    $name=$_POST['name'];
    $mail=$_POST['email'];
    $pass=$_POST['password'];
    $db=date('Y-m-d',strtotime($_POST['date']));
    $pro=$_POST['Province'];
    $pic=$_FILES['img']['name'];


    $query="UPDATE user SET Name='$name' , Email='$mail' , Password='$pass' , DOB='$db' , Province='$pro' , Pic='$pic' WHERE id='$id'";
    $result=mysqli_query($link,$query);
    if($result){
          echo"<p style='color:white; background-color:green; text-align:center; padding:12px; font-weight:900;'>Date Has Been Updated</p>";
          header("location:reti-1.php");

          move_uploaded_file($_FILES['img']['tmp_name'],"BASIC".$_FILES['img']['name']);
    }
    else{
              echo"<p style='color:white; background-color:red; text-align:center; padding:12px;'>Unknown error is occuring</p>";
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
    <h1>Update Your Data</h1><label for="">Name</label>
<input type="text" name="name" id="" class="form-control" value="<?php echo $row['Name'];?>">


<label for="">Email</label>
<input type="email" name="email" id="" class="form-control" value="<?php echo $row['Email'];?>"><br>

<label for="">Password</label>
<input type="password" name="password" id="" class="form-control" value="<?php echo $row['Password'];?>"><br>

<label for="">Date Of Birth</label>
<input type="date" name="date" id="" class="form-control" value="<?php echo $row['DOB'];?>"><br>
<label for="">Province</label>
<select name="Province" id="" class="form-control" value="<?php echo $row['Province'];?>">
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
<!-- <img src="basic<?php echo $row['img'];?>" alt="" width="50px;" > -->
 <img src="BASIC<?php echo $row['Pic'] ;?>" alt="" width="50px;" height="40px;">
<input type="file" name="img" id="" accept=".png,.jpg,.jpeg" value="<?php echo $row['Pic'];?>"><br><br>
<button name="submit" class="btn btn-success">Submit</button></form>



</body>
</html>