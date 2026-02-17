<?php
include("connect.php");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $db=date('Y-m-d',strtotime($_POST['date']));
    $pr=$_POST['province'];

    $query="INSERT INTO year(Name,DOB,pro) VALUES('".mysqli_real_escape_string($link,$name)."','".mysqli_real_escape_string($link,$db)."' ,'".mysqli_real_escape_string($link,$pr)."')";

    $result=mysqli_query($link,$query);
    if($result){
        echo"Addad Succesfully";
    }
    else{
        echo"Unknown error";
    }
}
?>
  <form action="
    " method="post">
<label for="">Name</label>
<input type="text" name="name" id=""><br>
<label for="">Date Of Birth</label>
<input type="date" name="date" id="">
<br>

<label for="">Province</label>
<select name="province" id="">
    <option value="PUNJAB">PUNJAB</option>
    <option value="SINDH">SINDH</option>
    <option value="KPK">KPK</option>
    <option value="BALOCHISTAN">BALOCHISTAN</option>
    <option value="GILGIT">GILGIT</option>
    <option value="KASHMIR">KASHMIR</option>
    <option value="FATA">FATA</option>
</select><br>
<button name="submit">Date</button>
</form