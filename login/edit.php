<?php session_start(); 
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME 
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME 
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME 
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME 
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME 
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME 
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME 
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME 
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME 
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME 
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME 
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME 

if (isset($_SESSION['username'])){} else { die(); }
if (isset($_SESSION['userinfo'])){} else { die(); }

$tabell_usertest = "temp_php1_users";


$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("art_net", $con);



/* s&auml;tta id */
$result = mysql_query("SELECT * FROM ".$tabell_usertest." WHERE user = '".$_SESSION['username']."'");

$login = 0;

while($row = mysql_fetch_array($result)) {

if ( $row['sysuser'] == $_SESSION['userinfo'] && $row['user'] == $_SESSION['username'] && $row['admin'] == 1){
print "Welcome!";
} else { 
print "No access.";
die();
}
}
/*?><?php*/
// ADD KODEN B RJAR H R ################################################################################


// NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS NEWS 
if (isset($_GET['type']) && $_GET['type'] == "news"){ 
print "news";
$tabell_insert   = "temp_php1_news"; 

$title     = addslashes($_POST['title']);
$intro     = addslashes($_POST['intro']);
$text      = addslashes($_POST['text']);
$sysdate   = date("Y-m-d_H:i:s");
$disdate   = date("d m Y");
$ip        = addslashes($_SERVER['REMOTE_ADDR']);
$user      = addslashes($_SESSION['username']);
$disdate_d = date("d");
$disdate_m = date("m");
$disdate_y = date("Y");

//CENSUR (in)
$badcharacters = array("<",">",'"',"OR"
,"AND","SELECT","FROM","WHERE","script","java","alert"
," ","&"," ","*");

$goodcharacters = array("&lt;","&gt;",'&quot;',"O<!---->R","A<!---->ND"
,"S<!---->ELECT","F<!---->ROM","W<!---->HERE","*s<!---->c<!----->rip<!---->t","j<!---->ava","a<!---->lert"
,"&curren;","&","&pound;","<!---->*<!---->");
/* &  &amp; */


/*$name   = mysql_real_escape_string($name);
$post = mysql_real_escape_string($post);*/
//CENSUR END  

$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("art_net", $con);

/* s tta id */


//while($row = mysql_fetch_array($result))
  //{ /* echo "".$name."- ".$post.""; */

/*$row['id'] + 1 ;*/
//}
/*END*/


mysql_query("INSERT INTO ".$tabell_insert." (title, intro, text, sysdate, disdate, ip, user, disdate_d, disdate_m, disdate_y) 
VALUES ('".$title."', '".$intro."', '".$text."', '".$sysdate."', '".$disdate."', '".$ip."', '".$user."', '".$disdate_d."', '".$disdate_m."', '".$disdate_y."')");

/* url lank priv cat img beskrivning betyg betyg_antal klick */

/*echo = "Sidan \"".$lank."\"  r nu lagd till databasen.";*/




mysql_close($con);
}
// NEWPAGE NEWPAGE NEWPAGE NEWPAGE NEWPAGE NEWPAGE NEWPAGE NEWPAGE NEWPAGE NEWPAGE NEWPAGE NEWPAGE NEWPAGE NEWPAGE NEWPAGE 
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME 
//FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? 
elseif (isset($_GET['type']) && $_GET['type'] == "page"){ 
print "newpage";
$tabell_insert   = "temp_php1_pages";

$title     = addslashes($_POST['title']);
$header     = addslashes($_POST['header']);
$text      = addslashes($_POST['text']);
$sysdate   = date("Y-m-d_H:i:s");
$disdate   = date("d m Y");
$ip        = addslashes($_SERVER['REMOTE_ADDR']);
$user      = addslashes($_SESSION['username']);
$disdate_d = date("d");
$disdate_m = date("m");
$disdate_y = date("Y");

//CENSUR (in)
$badcharacters = array("<",">",'"',"OR"
,"AND","SELECT","FROM","WHERE","script","java","alert"
," ","&"," ","*");

$goodcharacters = array("&lt;","&gt;",'&quot;',"O<!---->R","A<!---->ND"
,"S<!---->ELECT","F<!---->ROM","W<!---->HERE","*s<!---->c<!----->rip<!---->t","j<!---->ava","a<!---->lert"
,"&curren;","&","&pound;","<!---->*<!---->");
/* &  &amp; */


/*$name   = mysql_real_escape_string($name);
$post = mysql_real_escape_string($post);*/
//CENSUR END  

$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("art_net", $con);

/* s tta id */


//while($row = mysql_fetch_array($result))
  //{ /* echo "".$name."- ".$post.""; */

/*$row['id'] + 1 ;*/
//}
/*END*/


mysql_query("INSERT INTO ".$tabell_insert." (title, header, text, sysdate, disdate, ip, user, disdate_d, disdate_m, disdate_y) 
VALUES ('".$title."', '".$header."', '".$text."', '".$sysdate."', '".$disdate."', '".$ip."', '".$user."', '".$disdate_d."', '".$disdate_m."', '".$disdate_y."')");

/* url lank priv cat img beskrivning betyg betyg_antal klick */

/*echo = "Sidan \"".$lank."\"  r nu lagd till databasen.";*/




mysql_close($con);
} 
// CSS// CSS// CSS// CSS// CSS// CSS// CSS// CSS// CSS// CSS// CSS// CSS// CSS// CSS// CSS// CSS// CSS// CSS// CSS// CSS 
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME 
//FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED? //FIXED?  
elseif (isset($_GET['type']) && $_GET['type'] == "css"){ 
print "css";
$tabell_insert   = "temp_php1_style";


$csstext	= addslashes($_POST['csstext']);  	
$logo		= addslashes($_POST['logo']);  	 
$cssurl		= addslashes($_POST['cssurl']);  	 
$csstype	= addslashes($_POST['csstype']); 	 
$altlogo	= addslashes($_POST['altlogo']);
$sysdate   = date("Y-m-d_H:i:s");
$disdate   = date("d m Y");
$ip        = addslashes($_SERVER['REMOTE_ADDR']);
$user      = addslashes($_SESSION['username']);
$disdate_d = date("d");
$disdate_m = date("m");
$disdate_y = date("Y");

//CENSUR (in)
$badcharacters = array("<",">",'"',"OR"
,"AND","SELECT","FROM","WHERE","script","java","alert"
," ","&"," ","*");

$goodcharacters = array("&lt;","&gt;",'&quot;',"O<!---->R","A<!---->ND"
,"S<!---->ELECT","F<!---->ROM","W<!---->HERE","*s<!---->c<!----->rip<!---->t","j<!---->ava","a<!---->lert"
,"&curren;","&","&pound;","<!---->*<!---->");
/* &  &amp; */


/*$name   = mysql_real_escape_string($name);
$post = mysql_real_escape_string($post);*/
//CENSUR END  

$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("art_net", $con);

/* s tta id */


//while($row = mysql_fetch_array($result))
  //{ /* echo "".$name."- ".$post.""; */

/*$row['id'] + 1 ;*/
//}
/*END*/

// 											 csstext  logo  cssurl  csstype  altlogo  sysdate  ip  user
mysql_query("INSERT INTO ".$tabell_insert." (csstext, logo, cssurl, csstype, altlogo, sysdate, ip, user) 
VALUES ('".$csstext."', '".$logo."', '".$cssurl."', '".$csstype."', '".$altlogo."', '".$sysdate."', '".$ip."', '".$user."')");

/* url lank priv cat img beskrivning betyg betyg_antal klick */

/*echo = "Sidan \"".$lank."\"  r nu lagd till databasen.";*/




mysql_close($con);
} else { print "<h1>ERROR</h1>"; }
echo "<html><head><title>?</title>
<meta http-equiv=\"Refresh\" content=\"9;url=index.php\">

</head><body>
<br /><a href=\"index.php\">index.php</a><br /><br />
 <p>!</p>

</body></html>";

?>