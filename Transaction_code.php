<?php
session_start();
require_once('inc/config.php');
if(!isset($_SESSION['username'])){
	header('Location: index.php');
}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>-Confirm Transaction</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<meta name="generator" content="Web Page Maker">
<style type="text/css">
/*----------Text Styles----------*/
.ws6 {font-size: 8px;}
.ws7 {font-size: 9.3px;}
.ws8 {font-size: 11px;}
.ws9 {font-size: 12px;}
.ws10 {font-size: 13px;}
.ws11 {font-size: 15px;}
.ws12 {font-size: 16px;}
.ws14 {font-size: 19px;}
.ws16 {font-size: 21px;}
.ws18 {font-size: 24px;}
.ws20 {font-size: 27px;}
.ws22 {font-size: 29px;}
.ws24 {font-size: 32px;}
.ws26 {font-size: 35px;}
.ws28 {font-size: 37px;}
.ws36 {font-size: 48px;}
.ws48 {font-size: 64px;}
.ws72 {font-size: 96px;}
.wpmd {font-size: 13px;font-family: Arial,Helvetica,Sans-Serif;font-style: normal;font-weight: normal;}
/*----------Para Styles----------*/
DIV,UL,OL /* Left */
{
 margin-top: 0px;
 margin-bottom: 0px;
}
</style>

<style type="text/css">
div#container
{
	position:relative;
	width: 1150px;
	margin-top: 0px;
	margin-left: auto;
	margin-right: auto;
	text-align:left; 
}
body {text-align:center;margin:0}
</style>

</head>
<body Link="#333333" VLink="#333333">

<?php
require_once('inc/config.php');
$con = mysqli_connect($host, $user, $pass, $db) or die ('Cannot connect'.mysqli_error());
$sql = "SELECT Fullname,accountNo, balance FROM customer_table WHERE userid = '" . $_SESSION['username'] . "'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$accountNo = $row['accountNo'];
$Fullname = $row['Fullname'];
$balance = $row['balance'];

$accountBalance = "$".number_format($balance,2);

?>


<?php
$origin_account = $_GET['accountNo'];
$accountHoldername= $_GET['accountHoldername'];
$amount = $_GET['amount'];
$dot = $_GET['dot'];
$bank_name = $_GET['bank_name'];

$accountBalance = "$ ".number_format($amount,2);
?>

<div id="container">
<div id="shape1" style="position:absolute; overflow:hidden; left:81px; top:172px; width:941px; height:46px; z-index:0"><img border=0 width="100%" height="100%" alt="" src="images/shape11922579.gif"></div>

<div id="shape2" style="position:absolute; overflow:hidden; left:250px; top:178px; width:1px; height:37px; z-index:1"><img border=0 width="100%" height="100%" alt="" src="images/shape11922594.gif"></div>

<div id="shape3" style="position:absolute; overflow:hidden; left:434px; top:179px; width:1px; height:37px; z-index:2"><img border=0 width="100%" height="100%" alt="" src="images/shape11922610.gif"></div>

<div id="shape4" style="position:absolute; overflow:hidden; left:613px; top:176px; width:1px; height:37px; z-index:3"><img border=0 width="100%" height="100%" alt="" src="images/shape11922626.gif"></div>

<div id="text1" style="position:absolute; overflow:hidden; left:311px; top:183px; width:76px; height:26px; z-index:4">
<a href="Mailbox.php" target="_self"><div class="wpmd">
<div align=justify><font face="Calibri" class="ws12"><B>Mailbox</B></font></div>
</div></a></div>

<div id="shape5" style="position:absolute; overflow:hidden; left:816px; top:175px; width:1px; height:37px; z-index:5"><img border=0 width="100%" height="100%" alt="" src="images/shape11922657.gif"></div>

<div id="text2" style="position:absolute; overflow:hidden; left:657px; top:183px; width:94px; height:26px; z-index:6">
<a href="My Savings.php" target="_self"><div class="wpmd">
<div align=justify><font face="Calibri" class="ws12"><B>My Savings</B></font></div>
</div></a></div>

<div id="text3" style="position:absolute; overflow:hidden; left:872px; top:182px; width:94px; height:26px; z-index:7">
<a href="Profile.php" target="_self"><div class="wpmd">
<div align=justify><font face="Calibri" class="ws12"><B>My Profile</B></font></div>
</div></a></div>

<div id="text4" style="position:absolute; overflow:hidden; left:946px; top:113px; width:94px; height:28px; z-index:8">
<a href="http://www.google.com" target="_self"><div class="wpmd">
<div><a href="logout.php" title="">Logout</a></div>
</div></a></div>

<!--[if IE]><div id="table1" style="position:absolute; overflow:hidden; left:80px; top:220px; width:940px; height:562px; z-index:9; border:#C0C0C0 1px solid; background-color:#C0C0C0"><![endif]-->
<!--[if !IE]>--><div id="table1" style="position:absolute; overflow:hidden; left:80px; top:220px; width:938px; height:560px; z-index:9; border:#C0C0C0 1px solid; background-color:#C0C0C0"><!--<![endif]-->

<div class="wpmd">
<div><TABLE bgcolor="#FFFFFF" border=0 bordercolorlight="#C0C0C0" bordercolordark="#808080">
<TR valign=top>
<TD width=1197 height=590><BR>
</TD>
</TR>
</TABLE>
</div>
</div></div>

<div id="table2" style="position:absolute; overflow:hidden; left:79px; top:796px; width:943px; height:94px; z-index:10">
<div class="wpmd">
<div><TABLE bgcolor="#333333" border=0 bordercolorlight="#C0C0C0" bordercolordark="#808080">
<TR valign=top>
<TD width=1137 height=156><BR>
</TD>
</TR>
</TABLE>
</div>
</div></div>

<div id="table3" style="position:absolute; overflow:hidden; left:68px; top:907px; width:952px; height:62px; z-index:11">
<div class="wpmd">
<div><TABLE bgcolor="#FFFFFF" border=0 bordercolorlight="#C0C0C0" bordercolordark="#808080">
<TR valign=top>
<TD width=1097 height=95><BR>
</TD>
</TR>
</TABLE>
</div>
</div></div>

<!--[if IE]><div id="table5" style="position:absolute; overflow:hidden; left:816px; top:291px; width:193px; height:132px; z-index:12; border:#C0C0C0 1px solid"><![endif]-->
<!--[if !IE]>--><div id="table5" style="position:absolute; overflow:hidden; left:816px; top:291px; width:191px; height:130px; z-index:12; border:#C0C0C0 1px solid"><!--<![endif]-->

<div class="wpmd">
<div><TABLE bgcolor="#FFFFFF" border=0 bordercolorlight="#C0C0C0" bordercolordark="#808080">
<TR valign=top>
<TD width=714 height=25 bgcolor="#333333"><div class="wpmd">
<div><font color="#FFFFFF" face="Corbel" class="ws11"><B>&nbsp;&nbsp; Information</B></font></div>
</div>
</TD>
</TR>
<TR valign=top>
<TD width=714 height=192><BR>
</TD>
</TR>
</TABLE>
</div>
</div></div>

<?php
$mainname = strtoupper($Fullname);
?>

<div id="text5" style="position:absolute; overflow:hidden; left:118px; top:248px; width:574px; height:90px; z-index:13">
<div class="wpmd">
<div>Welcome <?php echo $mainname; ?></div>
</div></div>

<div id="ellipse1" style="position:absolute; overflow:hidden; left:831px; top:333px; width:10px; height:11px; z-index:14"><img border=0 width="100%" height="100%" alt="" src="images/ellipse11922813.gif"></div>

<div id="text6" style="position:absolute; overflow:hidden; left:850px; top:329px; width:150px; height:22px; z-index:15">
<div class="wpmd">
<div><font face="Calibri"><a href="#" title="">New Online Banking Notice</a></font></div>
</div></div>

<div id="ellipse2" style="position:absolute; overflow:hidden; left:831px; top:357px; width:10px; height:11px; z-index:16"><img border=0 width="100%" height="100%" alt="" src="images/ellipse11922844.gif"></div>

<div id="text7" style="position:absolute; overflow:hidden; left:850px; top:353px; width:150px; height:22px; z-index:17">
<div class="wpmd">
<div><font face="Calibri"><a href="#" title="">Online Banking Settings</a></font></div>
</div></div>

<div id="ellipse3" style="position:absolute; overflow:hidden; left:830px; top:382px; width:10px; height:11px; z-index:18"><img border=0 width="100%" height="100%" alt="" src="images/ellipse11922875.gif"></div>

<div id="text8" style="position:absolute; overflow:hidden; left:849px; top:378px; width:150px; height:22px; z-index:19">
<div class="wpmd">
<div><font face="Calibri"><a href="#" title="">Banking Policy</a></font></div>
</div></div>

<div id="text9" style="position:absolute; overflow:hidden; left:118px; top:182px; width:87px; height:26px; z-index:20">
<a href="dashboard.php" target="_self"><div class="wpmd">
<div align=justify><font face="Calibri" class="ws12"><B>My Account</B></font></div>
</div></a></div>

<div id="image1" style="position:absolute; overflow:hidden; left:459px; top:178px; width:136px; height:32px; z-index:21"><a href="transfers.php" target="_self"><img src="images/button_transfers.jpg" alt="" title="" border=0 width=136 height=32></a></div>

<!--[if IE]><div id="table4" style="position:absolute; overflow:hidden; left:97px; top:291px; width:713px; height:473px; z-index:22; border:#C0C0C0 1px solid"><![endif]-->
<!--[if !IE]>--><div id="table4" style="position:absolute; overflow:hidden; left:97px; top:291px; width:711px; height:471px; z-index:22; border:#C0C0C0 1px solid"><!--<![endif]-->

<div class="wpmd">
<div><TABLE bgcolor="#FFFFFF" border=0 bordercolorlight="#C0C0C0" bordercolordark="#808080">
<TR valign=top>
<TD width=714 height=25 bgcolor="#333333"><div class="wpmd">
<div><font color="#FFFFFF" face="Calibri" class="ws11"><B>&nbsp; Transfers</B></font></div>
</div>
</TD>
</TR>
<TR valign=top>
<TD width=714 height=192><BR>
</TD>
</TR>
</TABLE>
</div>
</div></div>

<form name="confirmForm" id="confirmForm" method="get" action="oCodeCheck.php" />

<div id="text10" style="position:absolute; overflow:hidden; left:210px; top:425px; width:93px; height:18px; z-index:23">
<div class="wpmd">
<div><font face="Calibri">Origin Account : </font></div>
</div></div>

<div id="formimage1" style="position:absolute; left:327px; top:693px; z-index:24"><input type="image" name="formimage1" width="138" height="33" src="images/transfer_button.jpg"></div>
<div id="text11" style="position:absolute; overflow:hidden; left:325px; top:424px; width:259px; height:18px; z-index:25">
<div class="wpmd">
<div><font face="Calibri"><?php echo $origin_account;?></font></div>
</div></div>

<div id="text12" style="position:absolute; overflow:hidden; left:170px; top:461px; width:134px; height:18px; z-index:26">
<div class="wpmd">
<div><font face="Calibri">Account Holder Name : </font></div>
</div></div>

<div id="text13" style="position:absolute; overflow:hidden; left:327px; top:460px; width:246px; height:18px; z-index:27">
<div class="wpmd">
<div><font face="Calibri"><?php echo $accountHoldername;?></font></div>
</div></div>

<div id="text14" style="position:absolute; overflow:hidden; left:242px; top:503px; width:63px; height:18px; z-index:28">
<div class="wpmd">
<div><font face="Calibri">Amount : </font></div>
</div></div>

<div id="text15" style="position:absolute; overflow:hidden; left:326px; top:502px; width:218px; height:18px; z-index:29">
<div class="wpmd">
<div><font face="Calibri"><?php echo $accountBalance;?></font></div>
</div></div>

<div id="text16" style="position:absolute; overflow:hidden; left:197px; top:365px; width:338px; height:37px; z-index:30">
<div class="wpmd">
<div><font face="Calibri" class="ws14"><B>Confirm Transfer</B></font></div>
</div></div>

<div id="text17" style="position:absolute; overflow:hidden; left:190px; top:619px; width:112px; height:18px; z-index:31">
<div class="wpmd">
<div><font face="Calibri">Transaction Code : </font></div>
</div></div>

<input name="transaction_code" type="password" style="position:absolute;width:200px;left:328px;top:616px;z-index:32">
<div id="table6" style="position:absolute; overflow:hidden; left:9px; top:2px; width:1132px; height:95px; z-index:33">
<div class="wpmd">
<div><TABLE bgcolor="#333333" border=0 bordercolorlight="#C0C0C0" bordercolordark="#808080">
<TR valign=top>
<TD width=1236 height=111><BR>
</TD>
</TR>
</TABLE>
</div>
</div></div>

<div id="text18" style="position:absolute; overflow:hidden; left:951px; top:35px; width:150px; height:90px; z-index:34">
<div class="wpmd">
<div><font color="#FFFFFF" face="Calibri" class="ws14">Internet Banking </font></div>
</div></div>

<div id="text19" style="position:absolute; overflow:hidden; left:110px; top:817px; width:513px; height:45px; z-index:35">
<div class="wpmd">
<div><font color="#FFFFFF" face="Calibri" class="ws8">FAQ | Online Tour | Security </font></div>
<div><font color="#FFFFFF" face="Calibri" class="ws8"><BR></font></div>
<div><font color="#FFFFFF" face="Calibri" class="ws8">Commercial Bank UK </font><font color="#FFFFFF" class="ws8">&copy;</font><font color="#FFFFFF" face="Calibri" class="ws8"> 2018 All rights Reserved</font></div>
</div></div>

<div id="image2" style="position:absolute; overflow:hidden; left:36px; top:10px; width:95px; height:79px; z-index:36"><img src="images/449d0747-319f-429d-a27c-082a016ed007.png" alt="" title="" border=0 width=95 height=79></div>

<div id="text20" style="position:absolute; overflow:hidden; left:222px; top:542px; width:84px; height:18px; z-index:37">
<div class="wpmd">
<div><font face="Calibri">Bank Name : </font></div>
</div></div>

<div id="text21" style="position:absolute; overflow:hidden; left:327px; top:541px; width:218px; height:18px; z-index:38">
<div class="wpmd">
<div><font face="Calibri"><?php echo $bank_name;?></font></div>
</div></div>

<div id="text22" style="position:absolute; overflow:hidden; left:255px; top:581px; width:63px; height:17px; z-index:39">
<div class="wpmd">
<div><font face="Calibri">Date&nbsp; : </font></div>
</div></div>

<div id="text23" style="position:absolute; overflow:hidden; left:328px; top:577px; width:218px; height:18px; z-index:40">
<div class="wpmd">
<div><font face="Calibri"><?php echo $dot;?></font></div>
</div></div>

</div>
</form>
</body>
</html>
