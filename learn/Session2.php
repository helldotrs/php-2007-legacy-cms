<?php

session_start();

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<?php
if(isset($_SESSION['views']))
  //$_SESSION['views']=$_SESSION['views']+1;
    $_SESSION['views']++;

else
  $_SESSION['views']=1;
echo "Views=". $_SESSION['views']; 
?>
<a href="session.php">session.php</a>
<a href="session3.php">session3.php</a>
</body>
</html>
