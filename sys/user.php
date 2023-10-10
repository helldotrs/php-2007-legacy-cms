<?php

if (isset($_GET['user'])) {

        $user = addslashes($_GET['user']);

$tabell = "temp_php1_users";

/********/

$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("art_net", $con);



/* s&auml;tta id */
$result = mysql_query("SELECT * FROM ".$tabell." WHERE user = '".$user."'");


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
$comment     = str_replace($incharacters, $outcharacters, $row['comment']);
$user        = str_replace($incharacters, $outcharacters, $row['user']);
$text        = str_replace($incharacters, $outcharacters, $row['text']);
$date_made   = str_replace($incharacters, $outcharacters, $row['date_made']);
$date_login  = str_replace($incharacters, $outcharacters, $row['date_login']);
$email       = str_replace($incharacters, $outcharacters, $row['email']);
$showmail    = str_replace($incharacters, $outcharacters, $row['showmail']);

print 
"        <!---->
        <!--br /-->        
        
        <h1>".$user."</h1>
        
        <strong>Users private text:</strong><br />"." ".$text." 
        
        <!--/-->";
}
if ($showmail == 1) {
print '<br /> ---------------- <br /><a href="mailto:'.$email.'">Click here to mail this user.</a>';
}


} else { print "non"; }
?>