<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>岗位申请单</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
@media print{
div{display:none}
}
.style3 {color: #990000}
-->
</style>
</head>
<?php
  include("conn/conn.php");
  $id=$_GET[id];
  $sql=mysql_query("select * from tb_dingdan where id='".$id."'",$conn);
  $info=mysql_fetch_array($sql);
  $spc=$info[spc];
  $slc=$info[slc];
  $arraysp=explode("@",$spc);
  $arraysl=explode("@",$slc);
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="600"  border="0" align="center" cellpadding="0" cellspacing="0">
  <tr align="center" bgcolor="#FFCF60">
    <td height="20" colspan="2">岗位申请单</td>
  </tr>
  <tr>
    <td width="448" height="20">申请单号：<?php echo $info[dingdanhao];?></td>
    <td width="152"><div align="right">
  <script>     
  function prn(){     
  document.all.WebBrowser1.ExecWB(7,1);  
  }     
  </script>     
  <object   ID='WebBrowser1'   WIDTH=0   HEIGHT=0   CLASSID='CLSID:8856F961-340A-11D0-A96B-00C04FD705A2'></object>
	<input type="button" value="打印预览" class="buttoncss" onClick="prn()">&nbsp;
	<input type="button" value="打印" class="buttoncss" onClick="window.print()"></div></td>
  </tr>
  <tr>
    <td height="20" colspan="2">岗位列表(如下)：</td>
  </tr>
</table>
<table width="596" height="60" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="596" bgcolor="#666666"><table width="599" border="0" align="center" cellpadding="0" cellspacing="1">
      <tr bgcolor="#FFCF60">
        <td width="88" height="20">岗位名称</td>
        <td width="94">开始时间</td>
        <td width="121">截止时间</td>
        <td width="164">剩余数量</td>
        <td width="126">时间</td>
      </tr>
	  <?php
	  $total=0;
	  for($i=0;$i<count($arraysp)-1;$i++){
 		if($arraysp[$i]!=""){
	     $sql1=mysql_query("select * from tb_gouwu where id='".$arraysp[$i]."'",$conn);
	     $info1=mysql_fetch_array($sql1);
		 $total=$total+=$arraysl[$i]*$info1[huiyuanjia];
	  ?>
	  <tr bgcolor="#FFFFFF">
        <td height="20"><?php echo $info1[mingcheng];?></td>
        <td height="20"><?php echo $info1[shichangjia];?></td>
        <td height="20"><?php echo $info1[huiyuanjia];?></td>
        <td height="20"><?php echo $arraysl[$i];?></td>
        <td height="20"><?php echo $info1[addtime];?></td>
     </tr>
	 <?php
	    }
	   }
	 ?>
      <tr bgcolor="#FFFFFF">
        <td height="20" colspan="5">
         以上是您申请岗位的详细信息！
          </td>
        </tr>
    </table></td>
  </tr>
</table>
<table width="597" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="82" height="20">申请人：</td>
    <td colspan="3"><?php echo $info[xiadanren];?></td>
  </tr>
  <tr>
    <td height="20">真名：</td>
    <td height="20" colspan="3"><?php echo $info[shouhuoren];?></td>
  </tr>
  <tr>
    <td height="20">地址：</td>
    <td height="20" colspan="3"><?php echo $info[dizhi];?></td>
  </tr>
  <tr>
    <td height="20">邮&nbsp;&nbsp;编：</td>
    <td width="148" height="20"><?php echo $info[youbian];?></td>
    <td width="67">电&nbsp;&nbsp;话：</td>
    <td width="300"><?php echo $info[tel];?></td>
  </tr>
  <tr>
    <td height="20">E-mail:</td>
    <td height="20"><?php echo $info[email];?></td>
    <td height="20">&nbsp;</td>
    <td height="20">&nbsp;</td>
  </tr>
 
    <td height="20">&nbsp;</td>
    <td height="20"><div align="center"><input type="button" onClick="window.close()" value="关闭窗口" class="buttoncss"></div></td>
    <td height="20">创建时间：</td>
    <td height="20"><?php echo $info[time];?></td>
  </tr>
</table>
</body>
</html>
