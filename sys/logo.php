<?php /*bestämmet $flash manuelet*/ $flash = 2;
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
$logo    = str_replace($incharacters, $outcharacters, $row['logo']);
$alt    = str_replace($incharacters, $outcharacters, $row['altlogo']);
$user    = str_replace($incharacters, $outcharacters, $row['user']);
print 
'        <!---->
	<img src="'.$logo.'" alt="'.$alt.'" /><!-- by: '.$user.' -->
        <!--/-->';
}
print "";


 
?>