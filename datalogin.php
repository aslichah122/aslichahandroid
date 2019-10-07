<?php
$username = $_POST['username'];
$password = $_POST['password'];
$con = mysqli_connect("localhost","root","","db_use");
$sql = "select * from tb_user where username = '$username' and password = '$password' ";
$json["hasil"]=array();
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count > 0) {
$json["hasil"]["sukses"]=true;
}else{
$json["hasil"]["gagal"]=false;
}
echo json_encode($json);
?>