<?php 
$tabell = "temp_php1_style";

$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("art_net", $con);



/* s&auml;tta id */
$result = mysql_query("SELECT * FROM ".$tabell."
ORDER BY `sysdate` DESC
LIMIT 0, 1");

$incharacters = array(
"[i]", "[/i]",
"[b]", "[/b]",
"[s]", "[/s]",
"\'",
"[img]","[/img]",
"[alt]",
"[br]"
);
$outcharacters = array(
"<i>", "</i>",
"<b>", "</b>",
"<s>", "</s>",
"'",
"<img src=\"","\" />",
"\" alt = \"",
"<br />"
);


//BESTÄMMER $flash med get flash // if ((isset($_GET['flash'])) { $flash = $_GET['flash'];

echo "";
while($row = mysql_fetch_array($result))
  {

$csstext    = str_replace($incharacters, $outcharacters, $row['csstext']);
$cssurl    = str_replace($incharacters, $outcharacters, $row['cssurl']);
$csstype    = str_replace($incharacters, $outcharacters, $row['csstype']); /*text/url*/
$user    = str_replace($incharacters, $outcharacters, $row['user']);
if ( $csstype == "url" ) {
print 
'        <!---->
	<link rel="stylesheet" type="text/css" href="'.$cssurl.'" /><!-- by: '.$user.' -->
        <!--/-->';
} elseif ( $csstype == "text" ){
print 
'        <!---->
	<style type="text/css"> <!-- '.$csstext.' --> </style><!-- by: '.$user.' -->
        <!--/-->';
}else{
print "<h2>ERROR</h2> Please set 'csstype'";
}
}
print "";


 
?>