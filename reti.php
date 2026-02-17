<?php
include("connect.php");
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

</body>
</html>

<!-- <table><tr>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>DOB</th>
    <th>Province</th>
    <th>pic</th>
    <th>Action</th>
</tr> -->
 <table class="table table-dark ">    <tr>
        <th class="bg-primary">Name</th>
        <th class="bg-primary">Email</th>
        <th class="bg-primary">Password</th>
        <th class="bg-primary">Date of Birth</th>
        <th class="bg-primary">Province</th>
        <th class="bg-primary">Image</th>
        <th class="bg-primary">Action</th>
    </tr>



<?php
$query="SELECT * FROM user";
$result=mysqli_query($link,$query);
while($row=mysqli_fetch_array($result)){

    $name=$row['Name'];
    $mail=$row['Email'];
    $pass=$row['Password'];
    $db=$row['DOB'];
    $pro=$row['Province'];
     $pic=$row['Pic'];   



?>
<tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $mail; ?></td>
    <td><?php echo $pass; ?></td>
    <td><?php echo $db; ?></td>
    <td><?php echo $pro; ?></td>
<td><img src="basic<?php echo $row['Pic']; ?>" width="50px" alt="User Image" style="border-radius:3%;"></td>
        <td><button class='btn btn-success'>Update</button>
    <button class='btn btn-danger'>Delete</button></td>
</tr>


<?php
}
?>
</table>