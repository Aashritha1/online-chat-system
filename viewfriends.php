<html>
<head>
</head>
<body>
<?php
$con=new  mysqli('localhost','root','','onlinechat');
$q="select * from users,friendslist";
$res=$con->query($q);
while($row=$res->fetch_assoc())
{
echo "<tr>";
echo "<td>".$row['user']."</td>";
echo "</tr>";
echo "<tr>";
echo "<td>".$row['friendid']."<br>"."</td>";
echo "</tr>";
}
?>
</body>
</html>
