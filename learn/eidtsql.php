<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<?php
$tabell = "test";
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("art_net", $con);

mysql_query("UPDATE ".$tabell." SET fnamn = '".$_GET['fnamn']."'
WHERE enamn = '".$_GET['enamn']."' AND pnr = '000101-1111'");

mysql_close($con);
?>
</body>
</html>
