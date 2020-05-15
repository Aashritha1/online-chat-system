<html>
<head>
<title>second page</title>
</head>
<body>
<h1>
<?php
session_start();
echo $_SESSION['user'];
?>
</h1>
<a href="home.php">home</a>
<a href="logout.php">logout</a>
</body>
</html>
