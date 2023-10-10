<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>css etc</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
 <p>Newsupload
</p>
 <table width="800" border="0" cellspacing="0" cellpadding="0">
   <tr>
     <td width="90">&nbsp;</td>
     <td width="600">
       <!---->
       <em><img src="../img/sample1.jpg" width="580" height="120" alt="logo" /></em>
       <!--/--></td>
     <td width="10">&nbsp;</td>
     <td width="100">&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td><div align="center"><a href="admin1.php">create news</a> - <a href="admin2_create.php">create new page</a> - logout</div></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td valign="top">
       <!---->
       <p><br />
       </p>
       <!--/-->
     </td>
     <td valign="top"><?php 
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


//BEST MMER $flash med get flash // if ((isset($_GET['flash'])) { $flash = $_GET['flash'];

echo "";
while($row = mysql_fetch_array($result))
  {

$csstext    = str_replace($incharacters, $outcharacters, $row['csstext']);
$cssurl     = str_replace($incharacters, $outcharacters, $row['cssurl']);
$csstype    = str_replace($incharacters, $outcharacters, $row['csstype']); /*text/url*/
$user  	    = str_replace($incharacters, $outcharacters, $row['user']);
$logo		= str_replace($incharacters, $outcharacters, $row['logo']);
$altlogo	= str_replace($incharacters, $outcharacters, $row['altlogo']);
$sysdate	= str_replace($incharacters, $outcharacters, $row['sysdate']);
$ip			= str_replace($incharacters, $outcharacters, $row['ip']);
print '<br /><br />info about latest change; <b>user</b>: <i>'.$user.'</i>; <b>ip</b>: <i>'.$ip.'</i>; <b>sysdate</b>: <i>'.$sysdate.'</i>;

       <form name="form1" id="form1" method="post" action="add.php?type='.'css'.'">
   <pre><br /><h2>NEWS:</h2><br /><br />logo: 

       <input name="logo" type="text" id="logo" value="'.$logo.'" />
   <br />logo alt text: 

       <input name="altlogo" type="text" id="altlogo" value="'.$altlogo.'" />
   <br /><br />CSS:<br />

	   <select name="csstype" id="csstype">
         '; if ($csstype == "text") { print '
         <option value="url">url</option>
         <option value="text" selected="selected">text</option>
         '; } else { print '
         <option value="url" selected="selected">url</option>
         <option value="text">text</option>'; } 
         print '</select>

   CSS url: 

		 <input name="cssurl" type="text" id="cssurl" size="50" value="'.$cssurl.'" />
   <br /> CSS text:

         <textarea name="csstext" cols="50" rows="10" id="csstext" >'.$csstext.'</textarea>
  
         <input type="submit" name="Submit" value="Submit" />';

}
print "";


 
?>

         <p></p>

     </pre>
     </form></td>
     <td>&nbsp;</td>
     <td valign="top">
       <!---->
       <strong> </strong><br />
       <br />
       <!--/-->
     </td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td><div align="center"><br />
             <em>Copyright &copy; 2007 Hellmak, All Rights Reserved. <br />
        Logo &amp; material are Copyright &copy; 2007
        <!---->
        clan/company
        <!--/-->
        , All Rights Reserved.</em><br />
        <a href="http://github.com/hellmak/">github.com/hellmak </a></div></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
 </table>
 <p><br />
   <br />
   <br />
   <br />
 </p>
</body>
</html>
