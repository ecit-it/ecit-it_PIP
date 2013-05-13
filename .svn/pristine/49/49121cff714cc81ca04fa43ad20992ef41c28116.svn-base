<?php
 include("top.php");
?>
<table width="870" height="231" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="870" height="231" align="center" valign="top" bgcolor="#FFFFFF"><table width="870" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td>&nbsp;</td>
      </tr>
    </table>
      <table width="870" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="25" bgcolor="#FFEDBF"><div align="center" style="color: #6A0202">申请单查询</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="870" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
              <tr>
                <td bgcolor="#FFFFFF">
                  <table width="858" height="50" border="0" align="center" cellpadding="0" cellspacing="0">
                    <script language="javascript">
			     function chkinput3(form)
				 {
				   if((form.username.value=="")&&(form.ddh.value==""))
				    {
				      alert("请输入申请人姓名或申请单号");
					  form.username.select();
					  return(false);
				    }
				   return(true);
				    
				 }
			   </script>
                    <form name="form3" method="post" action="finddd.php" onSubmit="return chkinput3( this)">
                      <tr>
                        <td width="858" height="25"><div align="center">申请人姓名:
                                <input name="username" type="text" class="inputcss" id="username" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="25">
                      申请单号:
                      <input type="text" name="ddh" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                        </div></td>
                      </tr>
                      <tr>
                        <td height="25">
                          <div align="center">
                            <input type="hidden" value="show_find" name="show_find">
                            <input name="submit2" type="submit" class="buttoncss" value="查 找">
                        </div></td>
                      </tr>
                    </form>
                </table></td>
              </tr>
          </table></td>
        </tr>
      </table>
      <table width="858" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="709">&nbsp;</td>
        </tr>
      </table>
      <?php
	    if($_POST[show_find]!="")
		 {
	      $username=trim($_POST[username]);
		  $ddh=trim($_POST[ddh]);
		  if($username=="")
		   {
		       $sql=mysql_query("select * from tb_dingdan where dingdanhao='".$ddh."'",$conn);
		   }
		  elseif($ddh=="")
		  {
		      $sql=mysql_query("select * from tb_dingdan where xiadanren='".$username."'",$conn);
		   }
		  else
		  {
		      $sql=mysql_query("select * from tb_dingdan where xiadanren='".$username."'and dingdanhao='".$ddh."'",$conn);
		  }
		  $info=mysql_fetch_array($sql);
		  if($info==false)
		   {
		      echo "<div algin='center'>对不起,没有查找到该申请单!</div>";    
		   }
		   else
		   {
	  ?>
      <table width="851" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="851" height="25" bgcolor="#FFEDBF"><div align="center" style="color: #6E0202">查询结果</div></td>
        </tr>
        <tr>
          <td height="50" bgcolor="#555555"><table width="849" height="50" border="0" align="center" cellpadding="0" cellspacing="1">
              <tr>
                <td width="82" height="25" bgcolor="#FFFFFF"><div align="center">申请单号</div></td>
                <td width="89" bgcolor="#FFFFFF"><div align="center">申请用户</div></td>
                <td width="130" bgcolor="#FFFFFF"><div align="center">真名</div></td>
                <td width="216" bgcolor="#FFFFFF"><div align="center">学校</div></td>
                <td width="191" bgcolor="#FFFFFF"><div align="center">城市</div></td>
                <td width="134" bgcolor="#FFFFFF"><div align="center">申请单状态</div></td>
              </tr>
              <?php
			
			  do
			  {
			
			?>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[dingdanhao];?></div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[xiadanren];?></div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[shouhuoren];?></div></td>
              
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[zfff];?></div></td>
                <td height="25" bgcolor="#FFFFFF"><div align="center"><?php echo $info[shff];?></div></td>
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
		?></td>
  </tr>
</table>
<?php
include_once("bottom.php");
?>