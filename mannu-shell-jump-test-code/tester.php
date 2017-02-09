<?php session_start();
error_reporting(0);

$head = '
<html>
<head>
<link href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLfLXmLeMSTt0jOXREfgvdp8IYWnE9_t49PpAiJNvwHTqnKkL4" rel="icon" type="image/x-icon"/>
</script>
<title>--==[[Mannu Sh3LL]]==--</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<STYLE>
body {
font-family: Tahoma;
color: white;
background: black;
}

input {
border			: solid 2px ;
border-color		: black;
BACKGROUND-COLOR: #444444;
font: 8pt Verdana;

color: white;
}

submit {
BORDER:  buttonhighlight 2px outset;
BACKGROUND-COLOR: Black;
width: 30%;
color: #FFF;
}

#t input[type=\'submit\']{
	COLOR: White;
	border:none;
	BACKGROUND-COLOR: black;
}

#t input[type=\'submit\']:hover {
	
	BACKGROUND-COLOR: #ff9933;
	color: black;
	
}
tr {
BORDER: dashed 1px #333;
color: #FFF;
}
td {
BORDER: dashed 0px ;
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
BACKGROUND-COLOR: #191919;;
color: #FFF;
}
textarea {
border			: dashed 2px #333;
BACKGROUND-COLOR: Black;
font: Fixedsys bold;
color: #999;
}
A:link {
border: 1px;
	COLOR: red; TEXT-DECORATION: none
}
A:visited {
	COLOR: red; TEXT-DECORATION: none
}
A:hover {
	color: White; TEXT-DECORATION: none
}
A:active {
	color: white; TEXT-DECORATION: none
}
</STYLE>
<script type="text/javascript">
<!--
    function lhook(id) {
       var e = document.getElementById(id);
       if(e.style.display == \'block\')
          e.style.display = \'none\';
       else
          e.style.display = \'block\';
    }
//-->
</script>
'; 



		echo $head ;
		echo '

<table width="100%" cellspacing="0" cellpadding="0" class="tb1" >

			

       <td width="100%" align=center valign="top" rowspan="1">
           <font color=#ff9933 size=5 face="comic sans ms"><b>--==[[ Mannu </font><font color=white size=5 face="comic sans ms"><b>, directory jump tester By Team </font><font color=green size=5 face="comic sans ms"><b> INDIShEll]]==--</font> <div class="hedr"> 

        <td height="10" align="left" class="td1"></td></tr><tr><td 
        width="100%" align="center" valign="top" rowspan="1"><font 
        color="red" face="comic sans ms"size="1"><b> 
        <font color=#ff9933> 
        ##########################################</font><font color=white>#############################################</font><font color=green>#############################################</font><br><font color=white>
        -==[[Greetz to]]==--</font><br> <font color=#ff9933>Guru ji zero ,code breaker ica, root_devil, google_warrior,INX_r0ot,Darkwolf indishell,Baba ,Silent poison India,Magnum sniper,Atul Dwivedi,ethicalnoob Indishell,Local root indishell,Irfninja indishell<br>Reborn India,L0rd Crus4d3r,cool toad,Hackuin,Alicks,Ebin V Thomas,Dinelson Amine,Th3 D3str0yer,SKSking,rad paul,Godzila,mike waals,zoo zoo,cyber warrior,Neo hacker ICA<br>cyber gladiator,7he Cre4t0r,Cyber Ace, Golden boy INDIA,Ketan Singh,Yash,Aneesh Dogra,AR AR,saad abbasi,hero,Minhal Mehdi ,Raj bhai ji , Hacking queen ,lovetherisk and rest of TEAM INDISHELL<br>
<font color=white>--==[[Love to]]==--</font><br># My Father , my Ex Teacher,cold fire hacker,Mannu, ViKi,Suriya Cyber Tyson ,Ashu bhai ji,Soldier Of God,almas malik, Bhuppi,Mohit, Govind, Gujjar PCO,Ffe ^_^,Ashish,Shardhanand ,Budhaoo,Don(Deepika kaushik) and acche bacchi(Jagriti) <br>
<font color=white>--==[[Interface Desgined By]]==--</font><br><font color=red>GCE College ke DON :D</font>        <br></font>
        <b> 
        <font color=#ff9933> 
        ##########################################</font><font color=white>#############################################</font><font color=green>#############################################</font>
						
           </table>
       </table> <br>

'; 


$f=file('/etc//////passwd');
$misconf=array();
$usr=array();
foreach($f as $in)
{
	
	
	$un=explode(':',$in);

	if($un[2]>="500")
	{

		$dir='/home/'.trim($un[0]).'/public_html/';
		$perm= substr(sprintf('%o', fileperms($dir)), -4);
		
		$allp=str_split($perm,1);
		if($allp[3]>='4')
		{
			array_push($usr,$un[0]);
			array_push($misconf,$dir);
		}
	}
	
}
echo "<div align=center><font color=#ff993 size=5>Here goes List of misconfigured Billu's =))</font></div>";
$total=count($misconf);
for($r=0;$r<$total;$r++)
{
	echo "<br><b><font color=red size=3>username </font>--> ".$usr[$r]." and <font color=red size=3>home directory </font>is --> ".$misconf[$r];
	
}

?>
