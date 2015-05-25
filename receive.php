<<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title></title>
</head>
<body>


<?php
$con = mysql_connect("lnmg-001.xincache.cn","host5305985","wenbo744037");
					if (!$con)
					  {
					  die('Could not connect: ' . mysql_error());
					  }

					mysql_select_db("host5305985", $con);
               mysql_query("set names utf8");

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
 	 if (empty($_POST["name"])) {
            echo '<script language="javascript">alert("操作语为空");</script>';
            echo '<script language="javascript"> window.history.back(-1); </script>';
            exit;
         }
         else
         {
            $name=$_POST["name"];
         }
          if (empty($_POST["email"])) {
            echo '<script language="javascript">alert("应答语为空");</script>';
            echo '<script language="javascript"> window.history.back(-1); </script>';
            exit;
         }
         else
         {
            $email=$_POST["email"];
         }
 }
mysql_query("INSERT INTO text (word, text) 
VALUES ('{$name}', '{$email}')");


mysql_close($con);
header("Location: index.php"); 
?>
</body>
</html>