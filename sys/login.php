<?php
session_start();
// store session data
$_SESSION['user']=0;
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<form name="form1" id="form1" method="post" action="login/2.php">
  <input name="user" type="text" id="user" />
  <input name="pass" type="text" id="pass" />
  <input type="submit" name="Submit" value="Submit" />
</form>
</body>
</html>
