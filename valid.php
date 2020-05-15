<?php
session_start();
//print_r($_REQUEST);
$con=new mysqli('localhost','root','','onlinechat');
$sql="select * from users where user='".$_REQUEST['user']."' and pass='".$_REQUEST['pass']."'";
$res=$con->query($sql);
if($res->num_rows==1)
{
echo "<h1>Entered details are valid</h1>";
$_SESSION['user']=$_REQUEST['user'];
header('Location:home.php');
}
else
{
echo "<h1>Please enter valid details</h1>";
}
?>	