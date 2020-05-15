<html>
<body>
	<table>
		<tr>
			<td>
<h1>DISPLAY CHAT</h1>
</td>
</tr>
<tr>
<td>
<table><tr><td><h1>USER MESSAGES</h1>
<?php
session_start();
$con=new  mysqli('localhost','root','','onlinechat');
$sql="select * from messages where user='".$_SESSION['user']."' and friendid='".$_REQUEST['friendid']."'";
//echo "<tr><TD>$sql</td></tr>";
$res=$con->query($sql);
while($row=$res->fetch_assoc())
{
echo "<tr>";
echo "<td>".$row['messages']."</td>";
echo "</tr>";
}
?></td></tr>
<tr>
<td><h1>FRIEND MESSAGES</h1>
<?php
$sql="select * from messages where user='".$_REQUEST['friendid']."' and friendid='".$_SESSION['user']."'";
echo "<tr><TD>$sql</td></tr>";
$res=$con->query($sql);
while($row=$res->fetch_assoc())
{
echo "<tr>";
echo "<td>".$row['messages']."</td>";
echo "</tr>";
}
?></td></tr>
</table>
</td>
</tr>
<tr>
<td>
<form action="connect.php" method="post">
MESSAGES:<input type='text' name='messages'>
<input type='hidden' name='friendid' value='<?php echo $_REQUEST['friendid']?>'/>
<input type="submit" name='send'>
</form>
<a href="text.php">text</a>
</td>
</tr>
</table>
<a href="logout.php">Logout</a>
</body>
</html>	