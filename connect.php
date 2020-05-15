<?php
session_start();
$con=new  mysqli('localhost','root','','onlinechat');
print_r ($_REQUEST);
$sql="INSERT INTO messages(user,friendid,messages) values('".$_SESSION['user']."','".$_REQUEST['friendid']."','".$_REQUEST['messages']."')";
echo $sql;
if($con->query($sql))
{
header('location:chat.php?friendid='.$_REQUEST['friendid']);
echo "Messages are entered into database";
}
?>
