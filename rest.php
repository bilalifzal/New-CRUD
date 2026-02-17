<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
include("connect.php");


$query="SELECT * FROM user";
$result=mysqli_query($link,$query);

if($row=mysqli_num_rows($result)>0){
    
    $out=mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo json_encode($out);
}
else{
    echo json_encode(array('massage' =>'NO founds', 'status' => false));

}

?>