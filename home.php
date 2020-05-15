<html>
<head>
<style> 
.center {
    margin: auto;
}

.right {
    position: absolute;
	right: 0px;
   }
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}

</style>
</head>
<body>
<h1 align="center">ONLINE CHATTING</h1>

<table style="color:white">
<td><img src="chatt.jpg" alt=icon width=700 height=250></td>
<td><img src="chat.png" alt="chat image" style="width:500px;height:300px;border:0"></td>
</table>
</div>
<ul>
  <li><a href="home">Home</a></li>
  <li><a href="news">News</a></li>
  <li><a href="contact">Contact</a></li>
  <ul style="float:right;list-style-type:none;">
    <li><a href="regis.php">Register</a></li>
    <li><a href="login.php">Login</a></li>
	
  </ul>
</ul>
<div style="background-color:#d6d6c2; padding:20px; height=150">
<p><h2><i>Eager to chat with friends?<br>
Online chat may refer to any kind of communication over the Internet that offers a 
real-time transmission of text messages from sender to receiver.
 Chat messages are generally short in order to enable other participants to respond quickly. 
Thereby, a feeling similar to a spoken conversation is created, which distinguishes
 chatting from other text-based online communication forms such as Internet forums and email.
 Online chat may address point-to-point communications as well as multicast communications from one 
sender to many receivers and voice and video chat, or may be a feature of a web conferencing service..</p></i></div></div>

<?php
session_start();
echo "<h3>WELCOME</h3>".$_SESSION['user'];
?>
</p>
<table>
<tr>
<th>USER</th>
</tr>
<?php
$con=new  mysqli('localhost','root','','onlinechat');
$q="select * from friendslist ";
$res=$con->query($q);
while($row=$res->fetch_assoc())
{
echo "<tr>";
echo "<td><a href=chat.php?friendid=".$row['friendid'].">".$row['friendid']."</a></td>";
echo "</tr>";
}
?>
</table>

</body>
</html>
