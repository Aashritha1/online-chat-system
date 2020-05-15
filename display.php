<html>
<body>
	<table>
		<tr>
			<td>
<h1>DISPLAY CHAT</h1>
</td>
</tr>
<tr>

<td><table>
<?php
session_start();
$con=new  mysqli('localhost','root','','onlinechat');
$sql="select * from messages where user='".$_SESSION['user']."' and friendid='".$_REQUEST['friendid']."'";
$res=$con->query($sql);
while($row=$res->fetch_assoc())
{
echo "<tr>";
echo "<td>".$row['messages']."</td>";
echo "</tr>";
}
?>
</table>

</td>
</tr>
<tr>
<td>
<form action="connect.php" method="post">
<input type='hidden' name='friendid' value=$REQUEST['friendid']>
<input type="submit" name='send'>
</form>
</td>
</tr>
</table>
</body>
</html>	