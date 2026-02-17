<?php
include("connect.php");

?>
<table border="2" cellpadding="5">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Date of Birth</th>
        <th>Province</th>
        <th>pic</th>
        <th>Action</th>


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
        <td><?php  echo $name;?></td>
         <td><?php  echo $mail;?></td>
          <td><?php  echo $pass;?></td>
           <td><?php  echo $db;?></td>
            <td><?php  echo $pro;?></td>
             <td><img src="BASIC<?php echo $pic ;?>" alt="" width="50px;" height="40px;"></td>
                     <td><a href='update-1.php?id=<?php echo $row['id'];?>'><button>Update</button></a><a href="del-1.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to Delete <?php echo $row['Name'];?> From This System')"><button id='h'>Delete</button></a></td>
    </tr>


    <?php
    }
    ?>
</table>
<style>
    button{
        padding:10px;
        background-color:green;
        color:white;
        font-weight:900;
        border:none;
        border-radius:5px;
    }
    #h{
        background-color:red;
        margin-left:3px;
    }
</style>