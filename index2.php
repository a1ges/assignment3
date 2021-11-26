<DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Agent 69's Triptastic Editor!</title>
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1>Welcome to the Western Bus Trip Editor</h1>
<form action="getdata.php" method="POST">
<input type="radio" id = "orderasc" name ="ordering"  value="orderasc">
<label for="orderasc"> Ascending Order </label><br>
<input type="radio" id = "orderdesc" name="ordering"  value="orderdesc">
<label for="orderdesc"> Descending Order </label><br>
</form>
<p>
<hr>
<p>
<?php
mysqli_close($connection);
?>
</body>
</html>

