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
<title>Transfers</title>
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
<div id="container">
<div id="shape1" style="position:absolute; overflow:hidden; left:81px; top:173px; width:941px; height:46px; z-index:0"><img border=0 width="100%" height="100%" alt="" src="images/shape8396519.gif"></div>

<div id="shape2" style="position:absolute; overflow:hidden; left:250px; top:178px; width:1px; height:37px; z-index:1"><img border=0 width="100%" height="100%" alt="" src="images/shape8396535.gif"></div>

<div id="shape3" style="position:absolute; overflow:hidden; left:434px; top:179px; width:1px; height:37px; z-index:2"><img border=0 width="100%" height="100%" alt="" src="images/shape8396551.gif"></div>

<div id="shape4" style="position:absolute; overflow:hidden; left:613px; top:176px; width:1px; height:37px; z-index:3"><img border=0 width="100%" height="100%" alt="" src="images/shape8396566.gif"></div>

<div id="text1" style="position:absolute; overflow:hidden; left:310px; top:185px; width:76px; height:26px; z-index:4">
<a style="text-decoration:none" href="Mailbox.php" target="_self"><div class="wpmd">
<div align=justify><font face="Calibri" class="ws12"><B>Mailbox</B></font></div>
</div></a></div>

<div id="shape5" style="position:absolute; overflow:hidden; left:816px; top:175px; width:1px; height:37px; z-index:5"><img border=0 width="100%" height="100%" alt="" src="images/shape8396613.gif"></div>

<div id="text3" style="position:absolute; overflow:hidden; left:657px; top:184px; width:94px; height:26px; z-index:6">
<a style="text-decoration:none" href="My Savings.php" target="_self"><div class="wpmd">
<div align=justify><font face="Calibri" class="ws12"><B>My Savings</B></font></div>
</div></a></div>

<div id="text4" style="position:absolute; overflow:hidden; left:872px; top:182px; width:94px; height:26px; z-index:7">
<a style="text-decoration:none" href="Profile.php" target="_self"><div class="wpmd">
<div align=justify><font face="Calibri" class="ws12"><B>My Profile</B></font></div>
</div></a></div>

<div id="text5" style="position:absolute; overflow:hidden; left:946px; top:113px; width:94px; height:28px; z-index:8">
<a href="http://www.google.com" target="_self"><div class="wpmd">
<div><a href="logout.php" title="">Logout</a></div>
</div></a></div>

<!--[if IE]><div id="table1" style="position:absolute; overflow:hidden; left:81px; top:222px; width:940px; height:543px; z-index:9; border:#C0C0C0 1px solid; background-color:#C0C0C0"><![endif]-->
<!--[if !IE]>--><div id="table1" style="position:absolute; overflow:hidden; left:81px; top:222px; width:938px; height:541px; z-index:9; border:#C0C0C0 1px solid; background-color:#C0C0C0"><!--<![endif]-->

<div class="wpmd">
<div><TABLE bgcolor="#FFFFFF" border=0 bordercolorlight="#C0C0C0" bordercolordark="#808080">
<TR valign=top>
<TD width=1197 height=590><BR>
</TD>
</TR>
</TABLE>
</div>
</div></div>

<div id="table2" style="position:absolute; overflow:hidden; left:80px; top:780px; width:943px; height:94px; z-index:10">
<div class="wpmd">
<div><TABLE bgcolor="#333333" border=0 bordercolorlight="#C0C0C0" bordercolordark="#808080">
<TR valign=top>
<TD width=1137 height=156><BR>
</TD>
</TR>
</TABLE>
</div>
</div></div>

<div id="table3" style="position:absolute; overflow:hidden; left:72px; top:891px; width:952px; height:62px; z-index:11">
<div class="wpmd">
<div><TABLE bgcolor="#FFFFFF" border=0 bordercolorlight="#C0C0C0" bordercolordark="#808080">
<TR valign=top>
<TD width=1097 height=95><BR>
</TD>
</TR>
</TABLE>
</div>
</div></div>

<!--[if IE]><div id="table4" style="position:absolute; overflow:hidden; left:90px; top:289px; width:722px; height:449px; z-index:12; border:#C0C0C0 1px solid"><![endif]-->
<!--[if !IE]>--><div id="table4" style="position:absolute; overflow:hidden; left:90px; top:289px; width:720px; height:447px; z-index:12; border:#C0C0C0 1px solid"><!--<![endif]-->

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

<!--[if IE]><div id="table5" style="position:absolute; overflow:hidden; left:816px; top:291px; width:193px; height:132px; z-index:13; border:#C0C0C0 1px solid"><![endif]-->
<!--[if !IE]>--><div id="table5" style="position:absolute; overflow:hidden; left:816px; top:291px; width:191px; height:130px; z-index:13; border:#C0C0C0 1px solid"><!--<![endif]-->

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

<div id="text6" style="position:absolute; overflow:hidden; left:118px; top:248px; width:552px; height:90px; z-index:14">
<div class="wpmd">
<div>Welcome <?php echo $mainname; ?></div>
</div></div>

<div id="ellipse1" style="position:absolute; overflow:hidden; left:831px; top:333px; width:10px; height:11px; z-index:15"><img border=0 width="100%" height="100%" alt="" src="images/ellipse8396800.gif"></div>

<div id="text7" style="position:absolute; overflow:hidden; left:850px; top:329px; width:150px; height:22px; z-index:16">
<div class="wpmd">
<div><font face="Calibri"><a href="#" title="">New Online Banking Notice</a></font></div>
</div></div>

<div id="ellipse2" style="position:absolute; overflow:hidden; left:831px; top:357px; width:10px; height:11px; z-index:17"><img border=0 width="100%" height="100%" alt="" src="images/ellipse8396831.gif"></div>

<div id="text8" style="position:absolute; overflow:hidden; left:850px; top:353px; width:150px; height:22px; z-index:18">
<div class="wpmd">
<div><font face="Calibri"><a href="#" title="">Online Banking Settings</a></font></div>
</div></div>

<div id="ellipse3" style="position:absolute; overflow:hidden; left:830px; top:382px; width:10px; height:11px; z-index:19"><img border=0 width="100%" height="100%" alt="" src="images/ellipse8396863.gif"></div>

<div id="text9" style="position:absolute; overflow:hidden; left:849px; top:378px; width:150px; height:22px; z-index:20">
<div class="wpmd">
<div><font face="Calibri"><a href="#" title="">Banking Policy</a></font></div>
</div></div>

<div id="text10" style="position:absolute; overflow:hidden; left:118px; top:183px; width:87px; height:26px; z-index:21">
<a style="text-decoration:none" href="dashboard.php" target="_self"><div class="wpmd">
<div align=justify><font face="Calibri" class="ws12"><B>My Account</B></font></div>
</div></a></div>
<form name="transferform" id="transferform" action="Transaction_code.php?" method="get" />
<div id="image1" style="position:absolute; overflow:hidden; left:459px; top:178px; width:136px; height:32px; z-index:22"><a href="transfers.php" target="_self"><img src="images/button_transfers.jpg" alt="" title="" border=0 width=136 height=32></a></div>

<div id="text2" style="position:absolute; overflow:hidden; left:171px; top:341px; width:93px; height:18px; z-index:23">
<div class="wpmd">
<div><font face="Calibri">Origin Account : </font></div>
</div></div>

<select name="accountNo" style="position:absolute;left:267px;top:338px;width:258px;z-index:24">
<option value="Please Select">Please Select</option>
<option value="<?php echo $accountNo ." - ".$accountBalance;?>"><?php echo $accountNo ." - ".$accountBalance;?></option>
</select>

<div id="text11" style="position:absolute; overflow:hidden; left:140px; top:400px; width:129px; height:18px; z-index:25">
<div class="wpmd">
<div><font face="Calibri">Destination Account : </font></div>
</div></div>

<input name="accountNo2" type="text" style="position:absolute;width:257px;left:268px;top:398px;z-index:26">
<div id="text12" style="position:absolute; overflow:hidden; left:189px; top:442px; width:79px; height:18px; z-index:27">
<div class="wpmd">
<div><font face="Calibri">SWIFT Code: </font></div>
</div></div>

<input name="swift_code" type="text" style="position:absolute;width:257px;left:267px;top:441px;z-index:28">
<div id="text13" style="position:absolute; overflow:hidden; left:133px; top:480px; width:129px; height:18px; z-index:29">
<div class="wpmd">
<div><font face="Calibri">Account Holder Name :</font></div>
</div></div>

<input name="accountHoldername" type="text" style="position:absolute;width:257px;left:266px;top:478px;z-index:30">
<div id="text14" style="position:absolute; overflow:hidden; left:212px; top:525px; width:51px; height:18px; z-index:31">
<div class="wpmd">
<div><font face="Calibri">Amount:</font></div>
</div></div>

<input name="amount" type="text" style="position:absolute;width:257px;left:268px;top:522px;z-index:32">
<div id="text15" style="position:absolute; overflow:hidden; left:171px; top:605px; width:97px; height:18px; z-index:33">
<div class="wpmd">
<div><font face="Calibri">Date of Transfer</font></div>
</div></div>

<input name="dot" type="date" style="position:absolute;width:257px;left:268px;top:602px;z-index:34">
<div id="formimage1" style="position:absolute; left:267px; top:658px; z-index:35"><input type="image" name="formimage1" width="138" height="33" src="images/transfer_button.jpg"></div>
<div id="table6" style="position:absolute; overflow:hidden; left:9px; top:2px; width:1132px; height:95px; z-index:36">
<div class="wpmd">
<div><TABLE bgcolor="#333333" border=0 bordercolorlight="#C0C0C0" bordercolordark="#808080">
<TR valign=top>
<TD width=1236 height=111><BR>
</TD>
</TR>
</TABLE>
</div>
</div></div>

<div id="text16" style="position:absolute; overflow:hidden; left:951px; top:35px; width:150px; height:90px; z-index:37">
<div class="wpmd">
<div><font color="#FFFFFF" face="Calibri" class="ws14">Internet Banking </font></div>
</div></div>

<div id="text17" style="position:absolute; overflow:hidden; left:102px; top:802px; width:513px; height:45px; z-index:38">
<div class="wpmd">
<div><font color="#FFFFFF" face="Calibri" class="ws8">FAQ | Online Tour | Security </font></div>
<div><font color="#FFFFFF" face="Calibri" class="ws8"><BR></font></div>
<div><font color="#FFFFFF" face="Calibri" class="ws8">Commercial Bank UK </font><font color="#FFFFFF" class="ws8">&copy;</font><font color="#FFFFFF" face="Calibri" class="ws8"> 2018 All rights Reserved</font></div>
</div></div>

<div id="image2" style="position:absolute; overflow:hidden; left:36px; top:10px; width:95px; height:79px; z-index:39"><img src="images/449d0747-319f-429d-a27c-082a016ed007.png" alt="" title="" border=0 width=95 height=79></div>

<div id="text18" style="position:absolute; overflow:hidden; left:187px; top:563px; width:76px; height:18px; z-index:40">
<div class="wpmd">
<div><font face="Calibri">Bank Name :</font></div>
</div></div>

<input name="bank_name" type="text" style="position:absolute;width:257px;left:267px;top:561px;z-index:41">
</div>
</form>
</body>
</html>
