<?php /*bestämmet $flash manuelet*/ $flash = 2;
$tabell = "temp_php1_news";

$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("art_net", $con);



/* s&auml;tta id */
$result = mysql_query("SELECT * FROM ".$tabell."
ORDER BY `sysdate` DESC
LIMIT 0, 5");

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
if ($flash == 0) {
print ""; 
} elseif ($flash == 1) {
echo "<strong>latest news: </strong><br />";
while($row = mysql_fetch_array($result))
  {
$title    = str_replace($incharacters, $outcharacters, $row['title']);
$intro    = str_replace($incharacters, $outcharacters, $row['intro']);
$text     = str_replace($incharacters, $outcharacters, $row['text']);
$sysdate  = str_replace($incharacters, $outcharacters, $row['sysdate']);
$disdate  = str_replace($incharacters, $outcharacters, $row['disdate']);
$ip       = str_replace($incharacters, $outcharacters, $row['ip']);
$user     = str_replace($incharacters, $outcharacters, $row['user']);
$dd  = str_replace($incharacters, $outcharacters, $row['disdate_d']);
$mm  = str_replace($incharacters, $outcharacters, $row['disdate_m']);
$yyyy  = str_replace($incharacters, $outcharacters, $row['disdate_y']);
print 
"        <!---->
        

        <a href=\"?sys=news&news=".$sysdate."\">".$title."</a><br />
        <!--/-->";
}
print "<br /><br />";
} elseif ($flash == 2) {
echo "<strong>latest news: </strong>";
while($row = mysql_fetch_array($result))
  {
$title    = str_replace($incharacters, $outcharacters, $row['title']);
$intro    = str_replace($incharacters, $outcharacters, $row['intro']);
$text     = str_replace($incharacters, $outcharacters, $row['text']);
$sysdate  = str_replace($incharacters, $outcharacters, $row['sysdate']);
$disdate  = str_replace($incharacters, $outcharacters, $row['disdate']);
$ip       = str_replace($incharacters, $outcharacters, $row['ip']);
$user     = str_replace($incharacters, $outcharacters, $row['user']);
$dd  = str_replace($incharacters, $outcharacters, $row['disdate_d']);
$mm  = str_replace($incharacters, $outcharacters, $row['disdate_m']);
$yyyy  = str_replace($incharacters, $outcharacters, $row['disdate_y']);
print 
"        <!---->
        <br />
        <a href=\"?sys=news&news=".$sysdate."\">".$title."</a> -<em>".$dd."-".$mm."-".$yyyy."</em><br />
        ".$intro."...<br />
        <!--/-->";
}
print "<br /><br />";

} else {
print "Please select a 0 or 1 to see the newsflash (?flash=0 / ?flash=1 / ?flash=2)";
} 
?>