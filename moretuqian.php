<?php
   session_start();
?>
<link href="css/font.css" rel="stylesheet">
<table width="766" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td></td>
  </tr>
  <tr>
    <td bgcolor="#F5F5F5"><table width="870" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
       
        <td width="756" height="438" align="center" valign="top" bgcolor="#F5F5F5"><table width="870"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="862" bgcolor="#FFFFFF"><table width="548" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="870"  height="50"><img src="images/qiantai/tuijian.gif" width="870" height="50" border="0" usemap="#Map2"></td>
                </tr>
              </table>
                <table width="867" border="00" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="867" height="110"><table width="870" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="430">
               <?php
			  $sql=mysql_query("select * from tb_gouwu where tuijian=1 order by addtime desc limit 0,1");
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			   echo "本站暂无推荐岗位!";
			  }
			  else{
			  ?>
                            <table width="424"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="136" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="7" height="16">&nbsp;</td>
                                <td width="281"><font color="FF6501"><img src="images/qiantai/circle.gif" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">开始时间：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">截止时间：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已申请完";
				  }
				  ?>
</font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images/qiantai/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images/qiantai/goumai_btn.gif" width="60" height="18" border="0"></a>                                 </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                          <td width="440">
                            <?php
			  $sql=mysql_query("select * from tb_gouwu where tuijian=1 order by addtime desc limit 1,1");
			  $info=mysql_fetch_array($sql);
			  if($info==true)
			  {
			  ?>
                            <table width="430"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="132" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="287"><font color="FF6501"><img src="images/qiantai/circle.gif" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">开始时间：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">截止时间：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已申请完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images/qiantai/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images/qiantai/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			    }
			   ?>
                          </td>
                        </tr>
                        
                          <tr>
                          <td width="430">
               <?php
			  $sql=mysql_query("select * from tb_gouwu where tuijian=1 order by addtime desc limit 2,1");
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			   echo "本站暂无推荐岗位!";
			  }
			  else{
			  ?>
                            <table width="424"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="136" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="7" height="16">&nbsp;</td>
                                <td width="281"><font color="FF6501"><img src="images/qiantai/circle.gif" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">开始时间：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">截止时间：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已申请完";
				  }
				  ?>
</font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images/qiantai/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images/qiantai/goumai_btn.gif" width="60" height="18" border="0"></a>                                 </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                          
                          <td width="440">
                            <?php
			  $sql=mysql_query("select * from tb_gouwu where tuijian=1 order by addtime desc limit 3,1");
			  $info=mysql_fetch_array($sql);
			  if($info==true)
			  {
			  ?>
                            <table width="430"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="132" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="287"><font color="FF6501"><img src="images/qiantai/circle.gif" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">开始时间：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">截止时间：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已申请完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images/qiantai/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images/qiantai/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			    }
			   ?>
                          </td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="10" background="images/qiantai/line1.gif"></td>
                  </tr>
                </table>
                <table width="870" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="46"><img src="images/qiantai/new.gif" width="870" height="46" border="0" usemap="#Map3"> </td>
                  </tr>
                </table>
                <table width="870" border="00" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="870" height="110"><table width="870" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="434">
                            <?php
			  $sql=mysql_query("select * from tb_gouwu order by addtime desc limit 0,1");
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			   echo "本站暂无推荐岗位!";
			  }
			  else{
			  ?>
                            <table width="428"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="132" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="285"><font color="FF6501"><img src="images/qiantai/circle.gif" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">开始时间：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">截止时间：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已申请完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images/qiantai/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images/qiantai/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
						   }
						  ?>
                          </td>
                          <td width="436">
                            <?php
			  $sql=mysql_query("select * from tb_gouwu order by addtime desc limit 1,1");
			  $info=mysql_fetch_array($sql);
			  if($info==true)
		
			  {
			  ?>
                            <table width="424"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="132" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="281"><font color="FF6501"><img src="images/qiantai/circle.gif" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">开始时间：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">截止时间：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已申请完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images/qiantai/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images/qiantai/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                        </tr>
                        <tr>
                          <td width="434">
                            <?php
			  $sql=mysql_query("select * from tb_gouwu order by addtime desc limit 2,1");
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			   echo "本站暂无推荐岗位!";
			  }
			  else{
			  ?>
                            <table width="428"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="132" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="285"><font color="FF6501"><img src="images/qiantai/circle.gif" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">开始时间：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">截止时间：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已申请完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images/qiantai/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images/qiantai/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
						   }
						  ?>
                          </td>
                          <td width="436">
                            <?php
			  $sql=mysql_query("select * from tb_gouwu order by addtime desc limit 3,1");
			  $info=mysql_fetch_array($sql);
			  if($info==true)
		
			  {
			  ?>
                            <table width="424"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="132" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="11" height="16">&nbsp;</td>
                                <td width="281"><font color="FF6501"><img src="images/qiantai/circle.gif" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">开始时间：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">截止时间：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已申请完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images/qiantai/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images/qiantai/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="10" background="images/qiantai/line1.gif"></td>
                  </tr>
                </table>
                <table width="870" border="0" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="46"><img src="images/qiantai/hot.gif" width="870" height="46" border="0" usemap="#Map4"> </td>
                  </tr>
                </table>
                <table width="870" border="00" align="center" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="870" height="110"><table width="870" height="110" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="438">
                            <?php
			  $sql=mysql_query("select * from tb_gouwu order by cishu desc limit 0,1");
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			   echo "本站暂无推荐岗位!";
			  }
			  else {
			  ?>
                            <table width="430"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="7" height="16">&nbsp;</td>
                                <td width="293"><font color="FF6501"><img src="images/qiantai/circle.gif" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">开始时间：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">截止时间：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已申请完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images/qiantai/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images/qiantai/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                          <td width="432">
                            <?php
			  $sql=mysql_query("select * from tb_gouwu order by cishu desc limit 1,1 ");
			  $info=mysql_fetch_array($sql);
			  if($info==true){
			  ?>
                            <table width="423"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="133" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="7" height="16">&nbsp;</td>
                                <td width="283"><font color="FF6501"><img src="images/qiantai/circle.gif" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">开始时间：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">截止时间：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已申请完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images/qiantai/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images/qiantai/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?></td>
                        </tr>
                        <tr>
                          <td width="438">
                            <?php
			  $sql=mysql_query("select * from tb_gouwu order by cishu desc limit 2,1");
			  $info=mysql_fetch_array($sql);
			  if($info==false){
			   echo "本站暂无推荐岗位!";
			  }
			  else {
			  ?>
                            <table width="430"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="130" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="7" height="16">&nbsp;</td>
                                <td width="293"><font color="FF6501"><img src="images/qiantai/circle.gif" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">开始时间：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">截止时间：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已申请完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images/qiantai/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images/qiantai/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?>
                          </td>
                          <td width="432">
                            <?php
			  $sql=mysql_query("select * from tb_gouwu order by cishu desc limit 3,1 ");
			  $info=mysql_fetch_array($sql);
			  if($info==true){
			  ?>
                            <table width="423"  border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td width="133" rowspan="5"><div align="center">
                                    <?php
				    if(trim($info[tupian]=="")){
					  echo "暂无图片";
					}
					else{
				  ?>
                                    <img src="<?php echo $info[tupian];?>" width="80" height="80" border="0">
                                    <?php
				     }
				  ?>
                                </div></td>
                                <td width="7" height="16">&nbsp;</td>
                                <td width="283"><font color="FF6501"><img src="images/qiantai/circle.gif" width="10" height="10">&nbsp;<?php echo $info[mingcheng];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">开始时间：</font><font color="FF6501"><?php echo $info[shichangjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">截止时间：</font><font color="FF6501"><?php echo $info[huiyuanjia];?></font></td>
                              </tr>
                              <tr>
                                <td height="16">&nbsp;</td>
                                <td><font color="#000000">剩余数量：</font><font color="13589B">
                                  <?php 
				  if($info[shuliang]>0)
				  {
				     echo $info[shuliang];
				  }
				  else
				  {
				     echo "已申请完";
				  }
				  ?>
                                </font></td>
                              </tr>
                              <tr>
                                <td height="30" colspan="2"><a href="lookinfo.php?id=<?php echo $info[id];?>"><img src="images/qiantai/xiangxi_btn.gif" width="60" height="18" border="0"></a> <a href="addgouwuche.php?id=<?php echo $info[id];?>"><img src="images/qiantai/goumai_btn.gif" width="60" height="18" border="0"></a> </td>
                              </tr>
                            </table>
                            <?php
			   }
			  ?></td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="10"></td>
                  </tr>
              </table></td>
          </tr>
          <tr width="870" bgcolor="#9FC0F7">
            <td align="center"><a href="gouwu1.php"><img src="images/bg_14(10).jpg" width="69" height="20" alt="提交全部已选申请" longdesc="http://gouwu1.php" /></a></td></tr>
        </table></td>
      </tr>
    </table>    </td>
  </tr>
  <tr>
<td>
</td>
  </tr>
</table>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<map name="Map2">
  <area shape="rect" coords="795,27,834,43" href="showtuijian.php">
</map>
<map name="Map3">
  <area shape="rect" coords="792,21,834,39" href="shownew.php">
</map>
<map name="Map4">
  <area shape="rect" coords="795,23,832,38" href="showhot.php">
</map>
