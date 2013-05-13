<?php
   session_start();
   include("conn/conn.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>大学生实习平台</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="870" align="center" border="1" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td width="473" height="27">&nbsp;&nbsp;<a href="shownew.php">最新岗位</a><font color="#FF0000">|</font><a href="showtuijian.php">推荐岗位</a><font color="#FF0000">|</font><a href="showhot.php">热门岗位</a><font color="#FF0000">|</font><a href="showfenlei.php">岗位分类</a><font color="#FF0000">|</font><a href="finddd.php">申请单查询</a><font color="#FF0000">|</font><a href="gouwu1.php">我预申请的岗位</a></td>
<td width="391"><table height="25" border="0" align="center" cellpadding="0" cellspacing="0">
              <form name="form" method="post" action="findsp.php">
                <tr><td width="463" height="25" valign="middle"><div align="left">&nbsp;<span class="style4"><img src="images/qiantai/biao.gif" width="15" height="21">&nbsp;请输入岗位名称：</span>
                          <input type="text" name="name" size="15" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                          <input type="hidden" name="jdcz" value="jdcz">
                          <input name="submit" type="submit" class="buttoncss" value="立即查找">
                          <input name="button" type="button" class="buttoncss" onClick="javascript:window.location='highfind.php';" value="高级查找">
</div></td>
                </tr>
              </form>
</table></td></tr>

</table>
</body></html>