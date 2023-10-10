<?php 
//if (isset($_GET['hacked'])) {
//include $_GET['hacked']; }
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Site.com - Slogan</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php 
include "sys/css.php";
/*$style = "non"; 
print '<link rel="stylesheet" type="text/css" href="'.$style.'" />'; 
print '<style type="text/css"> <!-- '.$style.' --> </style>';*/
?>
</head>

<body>
<div align="center">
  <table width="800" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="90">&nbsp;</td>
      <td width="600">
<!---->      <em><!--img src="img/sample1.jpg" width="580" height="120" alt="logo" /-->
<?php include "sys/logo.php"; ?> </em>
<!--/--></td>
      <td width="10">&nbsp;</td>
      <td width="100">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center"><a href="?art=1">meny1</a> - <a href="?sys=news">news</a> - <a href="?art=3">meny3</a> - <a href="?art=4">meny4</a> - <a href="?sys=users">users</a> - <a href="login">login</a> </div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td valign="top">
<!---->
<p><strong>Meny:</strong><br />
          <a href="?art=1">meny1</a><br />
          <a href="?art=2">meny2</a><br />
          <a href="?art=3">meny3</a><br />
          <a href="?art=4">meny4</a><br />
      </p>
<!--/-->      </td>
      <td valign="top"><br />        
      <? 
/*****************/
/********/
    if (isset($_GET['sys'])) {

        $sida = addslashes($_GET['sys']);

        include "sys/".$sida.".php";
    }
/********/
    elseif (isset($_GET['user'])) {

        $sida = addslashes($_GET['user']);

        include "sys/user.php";
    }
/********/
    else {
        include "sites/"."home".".php";
    }
/********/
/****************/



?><?php /*
        <!---->
        <br />        
        
        <h1>News1</h1>
        
        <strong>This will be the intro text</strong> after that comes the content. I thougth that the content could be pretty long:) A bit like this text, and even have a image. <br /><img src="img/dan17.jpg" alt="No penseis que he venide... Graffiti image." width="360" height="480" />
        <br />
        /user
        <em>00-00-2007</em> <br />
        <!--/-->        
        <!---->
        <br />        
        
        <h1>News2</h1>
        
        <strong>This will be the intro text</strong> after that comes the content. I thougth that the content could be pretty long:) A bit like this text, and even have a image. <br /><img src="img/biohazard-sample2.jpg" alt="A biohazard sign." width="300" height="360" />
        <br />
        <!--/-->*/ ?> 
<br />

</td>
      <td>&nbsp;</td>
      <td valign="top">
<!---->
       <?php
$type = 2; 
include "sys/newsflash.php";
?>
<!--/-->
</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center"><br />
            <em>Copyright &copy; hellmak, All Rights Reserved. <br />
            Logo &amp; material are Copyright &copy; 2007 
<!---->clan/company<!--/-->, All Rights Reserved.</em><br />
      <a href="http://github.com/hellmak/">github.com/hellmak </a></div></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</div>
</body>
</html>
