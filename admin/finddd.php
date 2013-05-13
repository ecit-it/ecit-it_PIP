
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>申请单查询</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
</head>
<?php
  include("conn/conn.php");
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="754" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="754" height="20" bgcolor="#FFCF60"><div align="center" style="color: #FFFFFF">申请单查询</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="754" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
              <td width="752" bgcolor="#FFFFFF">
			  <table width="679" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
			   <script language="javascript">
			     function chkinput3(form)
				 {
				   if((form.username.value=="")&&(form.ddh.value==""))
				    {
				      alert("请输入申请人或申请单号");
					  form.username.select();
					  return(false);
				    }
				   return(true);
				    
				 }
			   </script>
                <form name="form3" method="post" action="finddd.php" onSubmit="return chkinput3( this)">
				<tr>
                  <td width="679" height="25"><div align="center">申请人姓名:<input type="text" name="username" class="inputcss" size="25" >
                  申请单号:<input type="text" name="ddh" size="25" class="inputcss" ></div></td>
                </tr>
                <tr>
                  <td height="25">
                    <div align="center">
					    <input type="hidden" value="show_find" name="show_find">
                        <input name="button" type="submit" class="buttoncss" id="button" value="查 找">
                    </div></td>
                </tr>
			    </form>
              </table></td>
            </tr>
          </table></td>
        </tr>
</table>
      <table width="550" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
	  <?php
	    if($_POST[show_find]!=""){
	      $username=trim($_POST[username]);
		  $ddh=trim($_POST[ddh]);
		  if($username==""){
		       $sql=mysql_query("select * from tb_dingdan where dingdanhao='".$ddh."'",$conn);
		   }
		  elseif($ddh==""){
		      $sql=mysql_query("select * from tb_dingdan where xiadanren='".$username."'",$conn);
		   }
		  else{
		      $sql=mysql_query("select * from tb_dingdan where xiadanren='".$username."'and dingdanhao='".$ddh."'",$conn);
		  }
		  $info=mysql_fetch_array($sql);
		  if($info==false){
		      echo "<div algin='center'>对不起,没有查找到该申请单!</div>";    
		   }
		   else{
	  ?>
	  <table width="753" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="753" height="20" bgcolor="#FFCF60"><div align="center" style="color: #FFFFFF">查询结果</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="755" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
            <tr>
              <td width="77" height="25" bgcolor="#FFFFFF"><div align="center">申请单号</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">申请人</div></td>
              <td width="77" bgcolor="#FFFFFF"><div align="center">真名</div></td>
              <td width="107" bgcolor="#FFFFFF"><div align="center">性别</div></td>
              <td width="134" bgcolor="#FFFFFF"><div align="center">地址</div></td>
              <td width="139" bgcolor="#FFFFFF"><div align="center">电话</div></td>
              <td width="136" bgcolor="#FFFFFF"><div align="center">订单状态</div></td>
            </tr>
			<?php
			  do{
			?>
            <tr>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[dingdanhao];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[xiadanren];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[shouhuoren];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[sex];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[dizhi];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[tel];?></div></td>
              <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[zt];?></div></td>
            </tr>
			<?php
			   }while($info=mysql_fetch_array($sql));
			?>
          </table></td>
        </tr>
</table>
	    <?php
		   }
		  }
		?>
</body>
</html>
