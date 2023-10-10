<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<?php 

//bestämmer om failimg ska vara 0 eller 1 beroende på villken sekund sidan laddas.
/*if (date['s'] <= 29) {
$failimg = "0";
} elseif = (date['s']) >= 30) {
$failimg = "1";
}*/

//kollar om session/post datan finns.
if (isset($_SESSION['user']) && isset($_POST['user']) && isset($_POST['pass']) ) {
$user = addslashes("".$_POST['user'].":".md5($_POST['pass'])."");
    

} else {
//vissar fail0.jpg eller fail1.jpg om något inte stämmer.
//print "<img src=\"fail".$failimg.".jpg alt=\"fail!\" /><br />";
die('login failed');
}

//SQL*********************************************
$tabell = "temp_php1_users";

$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("art_net", $con);



/* s&auml;tta id */
$result = mysql_query("SELECT * FROM ".$tabell." WHERE sysuser = '".$user."'");

$login = 0;

while($row = mysql_fetch_array($result)) {
 if ($row['sysuser'] > 0) {
   $login = 1;
 }
}

if ($login == 1) {
print "logged in!";
} else {
print "incorrect password."."".$user.$_SESSION['user'];
}


?>
</body>
</html>
