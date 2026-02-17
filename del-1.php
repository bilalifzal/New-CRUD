<?php
include("connect.php");

$id=$_GET['id']??'';


$query="DELETE FROM user WHERE id='$id'";
$result=mysqli_query($link,$query);
if($result){
    header("location:reti-1.php");
}
else{
    echo"Unknown error";
}

?>