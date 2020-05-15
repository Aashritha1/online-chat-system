<?php
$con=new  mysqli('localhost','root','','onlinechat');
$sql="INSERT INTO friendslist(user,friendid) values('".$_REQUEST['user']."','".$_REQUEST['friendid']."')";
if($con->query($sql))
{
echo "Added to friends list";
}
?>
