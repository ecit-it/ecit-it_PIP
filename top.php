<?php session_start(); include_once("conn/conn.php");include_once("qq.php"); include_once("function.php"); 
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>大学生实习平台</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="870" align="center" border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    <td>
<?php
		
		if($_SESSION["unc"]==""){
		
		?>
<table align="center" width="870" height="30" border="0" cellpadding="0" cellspacing="0" background="images/bg_13(1).JPG">
<script language="JavaScript" type="text/javascript">
 function submitu(form){
   if(form.usernc.value==""){
     alert("请输入您的昵称");
	 form.usernc.select();
	 return(false);
	}
	if(form.userpwd.value==""){
     alert("请输入登录密码！");
	 form.userpwd.select();
	 return(false);
    }
	if(form.xym.value==""){
     alert("请输入验证码！");
	 form.xym.select();
	 return(false);
    }
   return(true);	 
 }
</script>
 <script language="JavaScript" type="text/javascript">
	function openfindpwd()
	{
	  window.open("openfindpwd.php","newframe","left=200,top=200,width=200,height=100,menubar=no,toolbar=no,location=no,scrollbars=no,location=no");}
</script>
            <form action="dl.php" method="post" name="form1" id="form1" onSubmit="return submitu(this)">
  <tr><td>&nbsp;&nbsp;</td>
     <td width="182" class="zhuce">今天是：<font color="#000000"><?php echo date("Y-m-d l"); ?></font></td>
    <td width="76" align="center"><span class="zhuce">用户名：</span></td>
    <td width="113"><input type="text" name="usernc" size="18" class="inputcss" /></td>
    <td width="54" align="center" class="zhuce">密码：</td>
    <td width="113"><input type="password" name="userpwd" size="18" class="inputcss" /></td>
    <td width="56" align="center" class="zhuce">验证码：</td>
    <td width="64"><input type="text" name="xym" size="10" class="inputcss" /></td>
    <td width="47" align="center"><img src="xym1.php"></td>
    <td width="59"><input type="image" name="imageField" src="images/bg_13(3).jpg"></td>
    <td width="89" align="center" class="zhuce2"><a href="registerbegin.php" class="a8">注册</a>|<a href="javascript:openfindpwd()" class="a8">找回密码</a></td>
 
    <td width="17">&nbsp;</td>
  </tr>
</form>
</table>
<?php
		  }else{
		    $sqlu=mysql_query("select * from tb_user where usernc='".$_SESSION["unc"]."'",$conn);
			$infou=mysql_fetch_array($sqlu);
		  ?>
<table align="center" width="870" height="30" border="0" cellpadding="0" cellspacing="0" background="images/bg_13(1).JPG">

  <tr>
  <td width="24">&nbsp;&nbsp;</td>
  <td width="174" class="zhuce">今天是：<font color="#000000"><?php echo date("Y-m-d l"); ?>
</font></td>
    <td width="405" align="center"><span class="zhuce">欢迎 <font color="#000000"><?php echo $infou["usernc"];?></font>来到大学生实习平台！这是你第<font color="#000000"><?php echo $infou["logintimes"];?></font>次登陆本站。</span></td>
    
    <td width="52"><a href="logout.php" class="a4">退出登录</a></td>
  
    <td width="215"><a href=# onClick="this.style.behavior='url(#default#homepage)';this.setHomePage('http://www.can2do.com');" class="a4">设为首页</a> | <a href="javascript:window.external.addFavorite('http://##','大学生实习平台');" class="a4">加入收藏 </a><a href="mailto:can2do@can2do.com" class="a4">| 联系我们</a></td>
  </tr>
</table>
<?
}
?>
</td>
  </tr>
</table>
</td>
  </tr>
</table>
<table width="870" height="80" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td><a href="index.php"><img src="images/logo.jpg" width="871" height="56" border="0"></a></td>
  <tr>
    <td height="34" ><img src="images/daohang.jpg" width="870" height="34" border="0" usemap="#Map"></td>
  </tr>
  <tr><?php include_once("zhuce_jm.php"); //获取注册和登录文件 ?></tr>
</table>
<table width="870" align="center" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="870" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><div id=oTransContainer 
            style="FILTER: progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,wipeStyle=0, motion='forward'); WIDTH: 165px; HEIGHT: 103px"><a 
            href="##" 
            target=_blank><img class=pic id=oDIV1 
            style="BORDER-RIGHT: white 1px solid; BORDER-TOP: white 1px solid; BORDER-LEFT: white 1px solid; BORDER-BOTTOM: white 1px solid" 
            height=150 src="images/5tugugao/01.jpg" 
            width=870 border=0>
            <script>var NowFrame = 1;var MaxFrame = 5;var bStart = 0;function fnToggle(){var next = NowFrame + 1;if(next == MaxFrame+1) {NowFrame = MaxFrame;next = 1;}if(bStart == 0){bStart = 1;setTimeout('fnToggle()', 2000);return;}else{oTransContainer.filters[0].Apply();document.images['oDIV'+next].style.display = "";document.images['oDIV'+NowFrame].style.display = "none";oTransContainer.filters[0].Play(duration=2);if(NowFrame == MaxFrame){NowFrame = 1;}else{NowFrame++;}}	setTimeout('fnToggle()', 6000);}fnToggle();</script>
    </a><a 
            href="##" 
            target=_blank><img class=pic id=oDIV2 
            style="BORDER-RIGHT: white 1px solid; BORDER-TOP: white 1px solid; DISPLAY: none; BORDER-LEFT: white 1px solid; BORDER-BOTTOM: white 1px solid" 
            height=150 src="images/5tugugao/02.jpg" 
            width=870 border=0></a><a 
            href="##" 
            target=_blank><img class=pic id=oDIV3 
            style="BORDER-RIGHT: white 1px solid; BORDER-TOP: white 1px solid; DISPLAY: none; BORDER-LEFT: white 1px solid; BORDER-BOTTOM: white 1px solid" 
            height=150 src="images/5tugugao/03.jpg" 
            width=870 border=0></a><a 
            href="##" 
            target=_blank><img class=pic id=oDIV4 
            style="BORDER-RIGHT: white 1px solid; BORDER-TOP: white 1px solid; DISPLAY: none; BORDER-LEFT: white 1px solid; BORDER-BOTTOM: white 1px solid" 
            height=150 src="images/5tugugao/04.jpg" 
            width=870 border=0></a><a 
            href="##" 
            target=_blank><img class=pic id=oDIV5 
            style="BORDER-RIGHT: white 1px solid; BORDER-TOP: white 1px solid; DISPLAY: none; BORDER-LEFT: white 1px solid; BORDER-BOTTOM: white 1px solid" 
            height=150 src="images/5tugugao/05.jpg" 
            width=870 border=0></a></div></td>
  </tr>
</table>
<map name="Map"><area shape="rect" coords="745,8,803,26" href="jszc.php">
  <area shape="rect" coords="95,10,141,27" href="showfenlei.php">
<area shape="rect" coords="673,8,742,25" href="jszc.php?jszc=客户反馈">
<area shape="rect" coords="409,9,465,27" href="bbs_index.php">
<area shape="rect" coords="275,9,334,27" href="registerbegin.php">
<area shape="rect" coords="338,9,402,27" href="edituserinfo.php">
<area shape="rect" coords="613,8,666,25" href="jszc.php?jszc=联系方式">
<area shape="rect" coords="49,10,92,27" href="index.php">
</map>


</body>
</html>