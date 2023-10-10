<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>new page</title>
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
       <em><img src="img/sample1.jpg" width="580" height="120" alt="logo" /></em>
       <!--/--></td>
     <td width="10">&nbsp;</td>
     <td width="100">&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td><div align="center"><a href="admin1.php">news</a> - logout</div></td>
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
$tabell = "temp_php1_pages";
$id = "2007-08-19_09:05:21"; //sysdate

$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("art_net", $con);




//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME
$result = mysql_query("SELECT * FROM ".$tabell."

 ");
//where sysdate = $id  
//FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME //FIX ME

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
$header     = str_replace($incharacters, $outcharacters, $row['header']);
$text    = str_replace($incharacters, $outcharacters, $row['text']); 

$user  	    = str_replace($incharacters, $outcharacters, $row['user']);
$sysdate	= str_replace($incharacters, $outcharacters, $row['sysdate']);
$ip			= str_replace($incharacters, $outcharacters, $row['ip']);
print '<br /><br />info; <b>user</b>: <i>'.$user.'</i>; <b>ip</b>: <i>'.$ip.'</i>; <b>sysdate</b>: <i>'.$sysdate.'</i>;

       <form name="form1" id="form1" method="post" action="edit.php?type=page$user='.$user.'&sysdate='.$sysdate.'&ip='.$ip.'">
       <pre><br /><h2>PAGE:</h2><br /><br />meny title: <input name="title" type="text" id="title" value="'.$title.'" />
    <br />
header: <input name="header" type="text" id="header" value="'.$header.'" size="50" />
       text:
       <textarea name="text" cols="50" rows="10" id="text">'.$text.'</textarea>
  
<!-- DO NOT CHANGE THIS -->
<input name="sysdatefil" type="hidden" id="sysdate" value="'.$sysdate.'" />
<!-- DO NOT CHANGE THIS -->

         <input type="submit" name="Submit" value="Submit" /><br />
         </pre></form><hr />';

}
print "";


 
?>dbtext goes heredbtext goes heredbtext goes here
         <p></p>
         sysdate<br />
disdate<br />
ip<br />
user<br />
disdate_d<br />
disdate_m<br />
disdate_y 
<br />
</td>
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
