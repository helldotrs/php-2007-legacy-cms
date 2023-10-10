<?php
$tabell = "temp_php1_users";

$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("art_net", $con);

////////////////////////////////////////

$result = mysql_query("SELECT * FROM ".$tabell."
ORDER BY `user` 
LIMIT 0 , 5");

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
$user    = str_replace($incharacters, $outcharacters, $row['user']);
print 
"        <!---->
<b><a href=\"?user=".$user."\" >".$user."</a></b><br />

        <!--/-->";
}
?>