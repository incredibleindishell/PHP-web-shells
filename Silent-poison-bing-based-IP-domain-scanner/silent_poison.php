<?php
error_reporting(0);
set_time_limit(0);
function getHost($Address)
{
   $parseUrl = parse_url(trim($Address));
   return trim($parseUrl[host] ? $parseUrl[host] : array_shift(explode('/', $parseUrl[path], 2)));
}

function e($i,$q,$p)
 {
     $ch = curl_init();              
    curl_setopt($ch, CURLOPT_URL, 'http://www.bing.com/search?q=ip%3A' .$i . '+'.$q.'&go=&qs=n&first=' . $p.'0&FORM=PERE');
	curl_setopt($ch, CURLOPT_HEADER, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt($ch, CURLOPT_REFERER, 'http://www.bing.com/');
	curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8');
    return $result['EXE'] = curl_exec($ch);
	curl_close($ch);
  }
 
function data($lu)
				{
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, $lu);
					curl_setopt($ch, CURLOPT_HEADER, 0);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
					curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
					curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8');
					$result['EXE'] = curl_exec($ch);
					curl_close($ch);
					return $result['EXE'];
					
				}

$head = '
<html>
<head>
<link href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLfLXmLeMSTt0jOXREfgvdp8IYWnE9_t49PpAiJNvwHTqnKkL4" rel="icon" type="image/x-icon"/>
</script>
<title>--==[[IndiSh3LL]]==--</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<STYLE>
body {
    background-image: url("http://2.bp.blogspot.com/_pIX0Yrfc96k/TGbCp67f8rI/AAAAAAAADpc/ZYotXRwkT2M/s1600/ind43v.jpg");
background-position: center center;
background-repeat: no-repeat;
background-size: 1000px 500px;
background-color: #000000;
background-attachment: fixed;
font-family: Tahoma
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
BACKGROUND-COLOR: #000000;;
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
'; 

echo $head ;
echo '

<table width="100%" cellspacing="0" cellpadding="0" class="tb1" >

			

       <td width="100%" align=center valign="top" rowspan="1">
           <font color=#ff9933 size=5 face="comic sans ms"><b>--==[[ Silent Poison ]]==--</font><br>
<font color=#ff9933 size=3 face="comic sans ms"><b>--==[[ Bing reverse ip</font><font color=white size=3 face="comic sans ms"><b> domain lookup scanner By</font><font color=green size=3 face="comic sans ms"><b> Team IndiShell ]]==--</font> <div class="hedr"> 

        <td height="10" align="left" class="td1"></td></tr><tr><td 
        width="100%" align="center" valign="top" rowspan="1"><font 
        color="red" face="comic sans ms"size="1"><b> 
        <font color=#ff9933 size=-2> 
        ##########################################</font><font color=white size=-2>#############################################</font><font color=green size=-2>#############################################</font><br><font color=white >
        --==[[Greetz to]]==--</font><br> <font color=#ff9933>Guru ji zero ,code breaker ica, root_devil, google_warrior,INX_r0ot,Darkwolf indishell,Baba ,Silent poison India,Magnum sniper,ethicalnoob Indishell,Local root indishell,Irfninja indishell<br>Reborn India,L0rd Crus4d3r,cool toad,Hackuin,Alicks,Gujjar PCP,Bikash,Dinelson Amine,Th3 D3str0yer,SKSking,rad paul,Godzila,mike waals,zoo zoo,cyber warrior,shafoon, Rehan manzoor<br>cyber gladiator,7he Cre4t0r,Cyber Ace, Golden boy INDIA,Ketan Singh,Yash,Aneesh Dogra,AR AR,saad abbasi,hero,Minhal Mehdi ,Raj bhai ji , Hacking queen ,lovetherisk and rest of TEAM INDISHELL<br>
<font color=white>--==[[Love to]]==--</font><br># My Father ,my Ex Teacher,cold fire hacker,Mannu, ViKi ,Ashu bhai ji,Soldier Of God, Bhuppi,Gujjar PCP,
Mohit,Ffe,Ashish,Shardhanand,Budhaoo,Jagriti,Salty, Hacker fantastic, Jennifer Arcuri and Don(Deepika kaushik)<br>
<font color=white>--==[[Interface Desgined By]]==--</font><br><font color=red>GCE College ke DON :D</font>        <br></font>
        <b> 
        <font color=#ff9933> 
        ##########################################</font><font color=white>#############################################</font><font color=green>#############################################</font>
						
           </table>
       </table> 

'; 

echo '<div align=center>
	<img src="https://web.archive.org/web/20160206014924/http://www.freesmileys.org/smileys/smiley-cool21.gif"> <font size=4 color=white face="comic sans ms">--==[[ code for India,Hack for India,Die for India ]]==-- </font><img src="https://web.archive.org/web/20160206014924/http://www.freesmileys.org/smileys/smiley-flag010.gif">
';
echo '<form method=post><font color=white size=4 face="comic sans ms">
Target server ip/website: <input type=text name=ip value="web.com or 127.0.0.0"> <p>	
<input type=submit name=s value="Billu, get hosted domains :)">
<br>
</form>

';

	
if(isset($_POST['s']))
{
$iw=trim($_POST['ip']);
$rr=ereg_replace("(https?)://", "", $iw);
$web= ereg_replace("www.", "", $rr);
echo "<font color=#ff9933>server ip  is ".gethostbyname($web)."</font><br>";
$server=gethostbyname($web);

echo "<font size=4 color=white>list of hosted website is given below...... </font><hr>";
$var=0;

$all_domain=array();
	do
	{
		$pgs=$var;
		$link="http://www.bing.com/search?q=ip%3A" .$server . "&go=&qs=n&first=" . $pgs."0&FORM=PERE";
		$uurl=data($link);
			if($uurl && preg_match('/ID=SERP/i',$uurl))
			{
				$pdata=e($server,$qu,$pgs);

				if(preg_match_all('(<li class="b_algo">.*<div class="b_caption">.*<cite>(.*)</cite>.*</div>.*</li>)siU',  $pdata,$i, PREG_SET_ORDER))
					{
					foreach($i as $match)
						{
							$remove = array();
							$remove[0] = '/<strong>/';
							$remove[1] = '/<\/strong>/';
							$total=$rr=preg_replace($remove, "", $match[1]) ;
							$url=gethost($total);
							
							array_push($all_domain,$url);
							
						}
					} 
			}
			
		$page_check=data($link);
		
		if(preg_match_all('(<li><a class="sb_pagS">(.*)</a></li>)siU',  $page_check,$cp, PREG_SET_ORDER))
		{
			foreach($cp as $ip)
			{
				$ct=$ip[1];
			}

		}
		$var++;
		
	}while($var<=$ct);
$unique=array_unique($all_domain);	
foreach($unique as $individual)
	{
		echo "<a href=\"$individual\">$individual</a><br>";
	}
	
}
?>
