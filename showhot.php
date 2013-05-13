<?php
 include("top.php");
?>
<table width="870" height="178" border="2" align="center" cellpadding="0" cellspacing="0">
  <tr>
 
    <td width="870" height="46" align="center" valign="top" bgcolor="#FFFFFF"><table width="550" height="25" border="0" align="left" cellpadding="0" cellspacing="0">
      <tr>
        <td height="46" background="images/qiantai/hot1.gif">&nbsp;</td>
      </tr>
  </table></td></tr>
    <tr><td height="132">
      <table width="870" height="2" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="2" background="images/qiantai/line1.gif"></td>
        </tr>
      </table>
      <table width="870" height="122" border="1" align="center" cellpadding="0" cellspacing="0">
        <?php
	     $sql=mysql_query("select * from tb_gouwu order by cishu desc limit 0,10",$conn); 
		 $info=mysql_fetch_array($sql);
		 if($info==false)
		  {
		   echo "本站暂无热门岗位!";
		  } 
		 else
		 { 
		    do
			 { 
	   ?>
        <tr>
          <td width="136"  rowspan="6"><div align="center">
              <?php
			 if($info[tupian]=="")
			 {
			   echo "暂无图片!";
			 }
			 else
			 {
			?>
              <a href="lookinfo.php?id=<?php echo $info[id];?>"><img  border="0" width="80" height="80" src="<?php echo $info[tupian];?>"></a>
              <?php
			 }
			?>
          </div></td>
          <td width="122" height="20"><div align="center" style="color: #000000">岗位名称：</div></td>
          <td colspan="5"><div align="left"><a href="lookinfo.php?id=<?php echo $info[id];?>"><?php echo $info[mingcheng];?></a></div></td>
        </tr>
        <tr>
          <td width="122" height="20"><div align="center" style="color: #000000">岗位所属项目：</div></td>
          <td width="94" height="20"><div align="left"><?php echo $info[pinpai];?></div></td>
          <td width="116"><div align="center" style="color: #000000">岗位序号：</div></td>
          <td colspan="3"><div align="left"><?php echo $info[xinghao];?></div></td>
        </tr>
        <tr>
          <td width="122" height="20"><div align="center" style="color: #000000">岗位简介：</div></td>
          <td height="20" colspan="5"><div align="left"><?php echo $info[jianjie];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">发布日期：</div></td>
          <td height="20"><div align="left"><?php echo $info[addtime];?></div></td>
          <td height="20"><div align="center" style="color: #000000">剩余数量：</div></td>
          <td width="113" height="20"><div align="left"><?php echo $info[shuliang];?></div></td>
          <td width="124"><div align="center" style="color: #000000">岗位等级：</div></td>
          <td width="165"><div align="left"><?php echo $info[dengji];?></div></td>
        </tr>
        <tr>
          <td height="20"><div align="center" style="color: #000000">开始时间：</div></td>
          <td height="20"><div align="left"><?php echo $info[shichangjia];?></div></td>
          <td height="20"><div align="center" style="color: #000000">截止时间：</div></td>
          <td height="20"><div align="left"><?php echo $info[huiyuanjia];?></div></td>
          <td height="20"><div align="center" style="color: #000000"></div></td>
          <td height="20"><div align="left"></div></td>
        </tr>
        <tr>
          <td height="20" colspan="6"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;<a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images/qiantai/goumai_btn.gif" width="60" height="18" border="0" style=" cursor:hand"></a></div></td>
        </tr>
        <tr>
          <td height="2" colspan="7" background="images/qiantai/line1.gif"></td>
        </tr>
        <?php
	    	}
		   while($info=mysql_fetch_array($sql));
		 
		 }
		?>
      </table></td>
  </tr>
  <tr width="870" bgcolor="#0000FF">
            <td align="center"><a href="gouwu1.php"><img src="images/bg_14(10).jpg" width="69" height="20" alt="提交全部已选申请" longdesc="http://gouwu1.php" /></a></td></tr>
</table>
<?php
include_once("bottom.php");
?>