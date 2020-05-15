
<?php
$con=new  mysqli('localhost','root','','onlinechat');
$sql="INSERT INTO users(user,pass) values('".$_REQUEST['user']."','".$_REQUEST['pass']."')";
if($con->query($sql))
{
echo "Your details are succcesfully entered into database";
}
?>
<html>
<head>
</head>
<a href="login.php"><h3>LOGIN</h3></a>
</html>