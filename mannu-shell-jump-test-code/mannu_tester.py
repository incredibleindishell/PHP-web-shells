#!/usr/bin/python
import os, sys,re


o = open('/etc/passwd','r')
banner = '<title>--==[[ With Love From ICA]]==--</title><div align=center><font size=6 color=#ff9933>Mannu, Directory jump tester by Team INDISHELL</font><br><font color=#ff9933> ##########################################</font><font color=white>#############################################</font><font color=green>#############################################</font><br><font color=white>  --==[[Greetz to]]==--</font><br> <font color=#ff9933>Guru ji zero ,code breaker ica, root_devil, google_warrior,INX_r0ot,Darkwolf indishell,Baba ,Silent poison India,Magnum sniper,ethicalnoob Indishell,Local root indishell,Irfninja indishell<br>Reborn India,L0rd Crus4d3r,cool toad,Hackuin,Alicks,Gujjar PCP,Bikash,Dinelson Amine,Th3 D3str0yer,SKSking,rad paul,Godzila,mike waals,zoo zoo,cyber warrior,Neo hacker ICA<br>cyber gladiator,7he Cre4t0r,Cyber Ace, Golden boy INDIA,Ketan Singh,Yash,Aneesh Dogra,AR AR,saad abbasi,hero,Minhal Mehdi ,Raj bhai ji , Hacking queen ,lovetherisk and rest of TEAM INDISHELL<br><font color=white>--==[[Love to]]==--</font><br># My Father , my Ex Teacher,cold fire hacker,Mannu, ViKi,Jagriti,Suriya Cyber Tyson ,Ashu bhai ji,Soldier Of God,Shafoon,Rehan Manzoor,almas malik, Bhuppi,Mohit, Ffe ^_^,Govind Singh,Shardhanand ,Budhaoo,Don(Deepika kaushik) <br><font color=white>--==[[Interface Desgined By]]==--</font><br><font color=red>GCE College ke DON :D</font>        <br></font>        <b>         <font color=#ff9933>         ##########################################</font><font color=white>#############################################</font><font color=green>#############################################</font><body bgcolor=black><br><font size=5 color=#ff9933><b>List of poor billu\'s goes here >:D< </b></font><br><img src="http://www.freesmileys.org/smileys/smiley-cool21.gif"> <font size=3 color=white>--==[[ code for India,Hack for India,Die for India ]]==-- </font><img src="http://www.freesmileys.org/smileys/smiley-flag010.gif"> </div><table>'
target=open("ica.html","w")
target.write(banner)

for rr in o:
	t=rr.split(":")[0]
#	print t
	fp="/home/"+t+"/public_html/"
	ret = os.access(fp, os.R_OK)
	if(ret==True):
#		print "This billu is poor guy :v and directory is --> "+fp
		target.write("<tr><td style=font-family:calibri;color:white;>%s</td>"%(fp))
