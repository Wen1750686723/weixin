<html>
<head>
	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>

<form action="receive.php" method="post">
操作语: <input type="text" name="name">
应答语: <input type="text" name="email"><br>
<input type="submit">
</form>
<table border="1">
<?php
$con = mysql_connect("lnmg-001.xincache.cn","host5305985","wenbo744037");
					if (!$con)
					  {
					  die('Could not connect: ' . mysql_error());
					  }

					mysql_select_db("host5305985", $con);
               mysql_query("set names utf8");

               echo "<tr><th>应答语</th>" . "<th>回复语</th></tr>";
$result = mysql_query("SELECT * FROM text");

while($row = mysql_fetch_array($result))
  {
  echo "<tr><th>".$row['word'] . "</th><th>" . $row['text']."</th></tr>";
  }

mysql_close($con);
?>
</table>
</body>
</html>