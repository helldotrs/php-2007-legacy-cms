<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>autonomous</title>
<link rel="STYLESHEET" href="style.css" type="text/css">
</head>
<body bgcolor="FFFFFF">
<div align="center">
<table width="750" border="0" cellpadding="0" cellspacing="0">
 <tr>
  <td colspan="3" width="750">
   <table width="750" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td width="750" colspan="3">
     <span style="font-size:28px;color:FFBA27">
     autonomous
     </span>
     </td>
    </tr>
    <tr>
     <td width="330">
     <span style="font-size:20px;color:CCCCCC">
     self-governing design
     </span>
     </td>
     <td width="400" align="right">
      <table width="400" border="0" cellpadding="0" cellspacing="0">
       <tr>
        <td align="right" height="20">
        <span style="color:AAAAAA">
        search for term&nbsp;
        </span>
        <input type="text" onFocus="this.style.background='FFFFFF';" onBlur="this.style.background='F9F9F9';">&nbsp;
        <input type="submit" style="padding:0;background-color:FFBA27;border:0;color:FFFFFF;width:25;font-weight:bold" value="GO">
        </td>
       </tr>
      </table>
     </td>
     <td width="20"></td>
    </tr>
   </table>
  </td>
 </tr>
 <tr>
  <td colspan="3" height="15" bgcolor="FFFFFF"></td>
 </tr>
 <tr>
  <td colspan="3" height="1" bgcolor="CCCCCC"></td>
 </tr>
 <tr>
  <td colspan="3" height="10" bgcolor="FFFFFF"></td>
 </tr>
 <tr>
  <td width="170" bgcolor="FFFFFF" valign="top">
  <span style="font-size:6px"><br></span>
  <div align="center">
   <table width="140" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td><a href="#">company overview</a></td>
    </tr>
    <tr>
     <td>about our company</td>
    </tr>
    <tr>
     <td height="5" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td><a href="#">services & products</a></td>
    </tr>
    <tr>
     <td>what we provide</td>
    </tr>
    <tr>
     <td height="5" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td><a href="#">partnerships</a></td>
    </tr>
    <tr>
     <td>look at all our partners</td>
    </tr>
    <tr>
     <td height="5" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td><a href="#">online portfolio</a></td>
    </tr>
    <tr>
     <td>see all of our clients</td>
    </tr>
    <tr>
     <td height="5" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td><a href="#">registration</a></td>
    </tr>
    <tr>
     <td>how you can register</td>
    </tr>
    <tr>
     <td height="5" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td><a href="#">contacting us</a></td>
    </tr>
    <tr>
     <td>how you can reach us</td>
    </tr>
   </table>
   <br><span style="font-size:6px"><br></span>
   <table width="140" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td colspan="3" height="1" bgcolor="AAAAAA"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA" rowspan="5"></td>
     <td width="138" height="26" bgcolor="F9F9F9" style="color:FFBA27;font-size:14px">
     &nbsp;&nbsp;announcements
     </td>
     <td width="1" bgcolor="AAAAAA" rowspan="5"></td>
    </tr>
    <tr>
     <td height="1" bgcolor="AAAAAA"></td>
    </tr>
    <tr>
     <td bgcolor="FFFFFF">
      <table width="138" border="0" cellpadding="7" cellspacing="0">
       <tr>
        <td style="color:AAAAAA">
        4/30 - idea spawned
        <br><span style="font-size:6px"><br></span>
        5/1 - design created
        <br><span style="font-size:6px"><br></span>
        5/1 - design submitted to OSWD for approval
        </td>
       </tr>
      </table>
     </td>
    </tr>
    <tr>
     <td height="1" bgcolor="AAAAAA"></td>
    </tr>
   </table>
  <span style="font-size:6px"><br></span>
  </div>
  </td>
  <td width="1" bgcolor="CCCCCC"></td>
  <td width="579" valign="top">
  <span style="font-size:6px"><br></span>
  <div align="center"><?php
$tabell = "temp_php1_news";
$limit = 5;

$con = mysql_connect("localhost", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("art_net", $con);


//F R ATT TA UT ENSKILDD NYHET
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
//END -- F R ATT TA UT ENSKILDD NYHET


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
'   <table width="549" border="0" cellpadding="0" cellspacing="0">
    <tr>
     <td colspan="4" height="1" bgcolor="AAAAAA"></td>
     <td width="5" height="1" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td rowspan="2" colspan="2" width="542" height="27" bgcolor="F9F9F9" style="color:FFBA27;font-size:15px">'.$title.'</td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" height="4" bgcolor="FFFFFF"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" bgcolor="F0F0F0" height="23"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td colspan="2" height="1" bgcolor="AAAAAA"></td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" bgcolor="F0F0F0"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td colspan="2" bgcolor="FFFFFF">
      <table width="542" border="0" cellpadding="17" cellspacing="0">
       <tr>
        <td style="color:999999;line-height:1.6em">
        <div align="justify"><b>'.$intro.'</b>'.' '.$text.' 
        <br /><br />
        /<a href=\"?user='.$user.'\" />'.$user.'</a>
        <em>'.$dd.'-'.$mm.'-'.$yyyy.'</em>
        </div>
        </td>
       </tr>
      </table>
     </td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" bgcolor="F0F0F0"></td>
    </tr>
    <tr>
     <td width="1" bgcolor="AAAAAA"></td>
     <td colspan="2" height="1" bgcolor="AAAAAA"></td>
     <td width="1" bgcolor="AAAAAA"></td>
     <td width="5" bgcolor="F0F0F0"></td>
    </tr>
    <tr>
     <td width="1" height="5" bgcolor="FFFFFF"></td>
     <td width="4" height="5" bgcolor="FFFFFF"></td>
     <td width="538" height="5" bgcolor="F0F0F0"></td>
     <td width="1" height="5" bgcolor="F0F0F0"></td>
     <td width="5" height="5" bgcolor="F0F0F0"></td>
    </tr>
   </table>
        <!--/-->';
}
?>
     
  <br>
   <br>
   <span style="font-size:6px"><br>
   </span>
  </div>
  </td>
 </tr>
 <tr>
  <td colspan="3" height="10" bgcolor="FFFFFF"></td>
 </tr>
 <tr>
  <td colspan="3" height="1" bgcolor="CCCCCC"></td>
 </tr>
 <tr>
  <td colspan="3" height="5" bgcolor="FFFFFF"></td>
 </tr>
 <tr>
  <td colspan="3" bgcolor="FFFFFF" align="right">
  Copyright &#0169; 2004, <a href="http://www.principleofdesign.com" style="font-size:12px;color:AAAAAA">Adam Particka</a>. All Rights Reserved.
  </td>
 </tr>
</table>
</div>
</body>
</html>