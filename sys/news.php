<?php
$tabell = "temp_php1_news";
$limit = 5;

$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("art_net", $con);


//FÖR ATT TA UT ENSKILDD NYHET
if (isset($_GET['news'])) {
$news = addslashes($_GET['news']);

$result_n = mysql_query("SELECT * FROM ".$tabell."
WHERE sysdate = '".$news."'");

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


echo "";
while($row = mysql_fetch_array($result_n))
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
        <!--br /-->        
        
        <h1>".$title."</h1>
        
        <strong>".$intro."</strong>"." ".$text." 
        <br /><br />
        /<a href=\"?user=".$user."\" />".$user."</a>
        <em>".$dd."-".$mm."-".$yyyy."</em>
        <br />
        <!--/-->";
}

print "<hr />";
}
//END -- FÖR ATT TA UT ENSKILDD NYHET


/* s&auml;tta id */
$result = mysql_query("SELECT * FROM ".$tabell."
ORDER BY `sysdate` DESC
LIMIT 0 , ".$limit."");

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


echo "";
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
        <!--br /-->        
        
        <h1>".$title."</h1>
        
        <strong>".$intro."</strong>"." ".$text." 
        <br /><br />
        /<a href=\"?user=".$user."\" />".$user."</a>
        <em>".$dd."-".$mm."-".$yyyy."</em>
        <br />
        <!--/-->";
}
?>