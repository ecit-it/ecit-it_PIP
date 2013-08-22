
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>更改岗位信息</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<?php 
  include("conn/conn.php");
  $sql1=mysql_query("select * from tb_gouwu where id=".$_GET[id]."",$conn);
  $info1=mysql_fetch_array($sql1);
?>
<body topmargin="0" leftmargin="0" bottommargin="0">
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">更改岗位信息</div></td>
  </tr>
  <tr>
    <td height="253" bgcolor="#666666"><table width="750" border="0" cellpadding="0" cellspacing="1">
        <script language="javascript">
	function chkinput(form)
	{
	  if(form.mingcheng.value=="")
	   {
	     alert("请输入岗位名称!");
		 form.mingcheng.select();
		 return(false);
	   }
	  
	
	
	  if(form.huiyuanjia.value=="")
	   {
	     alert("请输入岗位招聘开始时间!");
		 form.huiyuanjia.select();
		 return(false);
	   }
	 
	
	
	  if(form.shichangjia.value=="")
	   {
	     alert("请输入岗位招聘截止时间!");
		 form.shichangjia.select();
		 return(false);
	   }
	  if(form.dengji.value=="")
	   {
	     alert("请输入岗位等级!");
		 form.dengji.select();
		 return(false);
	   }
	   
	   
	   if(form.pinpai.value=="")
	   {
	     alert("请输入岗位所属项目!");
		 form.pinpai.select();
		 return(false);
	   }
	   
	   if(form.xinghao.value=="")
	   {
	     alert("请输入岗位序号!");
		 form.xinghao.select();
		 return(false);
	   }
	   if(form.shuliang.value=="")
	   {
	     alert("请输入岗位数量!");
		 form.shuliang.select();
		 return(false);
	   }
	   if(form.jianjie.value=="")
	   {
	     alert("请输入岗位简介!");
		 form.jianjie.select();
		 return(false);
	   }
	   return(true);
	}
    </script>
        <form name="form1"  enctype="multipart/form-data" method="post" action="savechangegangwei.php?id=<?php echo $_GET[id];?>" onSubmit="return chkinput(this)">
          <tr>
            <td width="129" height="25" bgcolor="#FFFFFF"><div align="center">岗位名称：</div></td>
            <td width="618" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="mingcheng" size="25" class="inputcss" value="<?php echo $info1[mingcheng];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">发布时间：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <select name="nian" class="inputcss">
                  <?php 
  for($i=1995;$i<=2050;$i++)
  {
 ?>
                  <option <?php if(substr($info1[addtime],0,4)==$i){echo "selected";}?>><?php echo $i;?></option>
                  <?php 
  }
 ?>
                </select>
                年
                <select name="yue" class="inputcss">
                  <?php 
            for($i=1;$i<=12;$i++)
             {
            ?>
                  <option <?php if(substr($info1[addtime],5,1)==$i){echo "selected";} ?>><?php echo $i;?></option>
                  <?php 
             }
             ?>
                </select>
                月
                <select name="ri" class="inputcss">
                  <?php 
            for($i=1;$i<=31;$i++)
             {
            ?>
                  <option <?php if(substr($info1[addtime],7,1)==$i){echo "selected";} ?>><?php echo $i;?></option>
                  <?php 
             }
             ?>
                </select>
                日</div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">有限期限：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">开始时间：
                    <input type="text" name="shichangjia" size="10" class="inputcss" value="<?php echo $info1[shichangjia];?>">
                &nbsp;&nbsp;截止时间：
                <input type="text" name="huiyuanjia" size="10" class="inputcss" value="<?php echo $info1[huiyuanjia];?>">
                </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">岗位类型：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <?php
			$sql=mysql_query("select * from tb_type order by id desc",$conn);
			$info=mysql_fetch_array($sql);
			if($info==false)
			{
			  echo "请先添加岗位类型!";
			}
			else
			{
			?>
                <select name="typeid" class="inputcss">
                  <?php
			do
			{
			?>
                  <option value=<?php echo $info[id];?> <?php if($info1[typeid]==$info[id]) {echo "selected";}?>><?php echo $info[typename];?></option>
                  <?php
			}
			while($info=mysql_fetch_array($sql));
			?>
                </select>
                <?php
		     }
		    ?>
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">岗位等级：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <select name="dengji" class="inputcss">
                  <option value="很好" <?php if(trim($info1[dengji])=="很好"){echo "selected";}?>>很好</option>
                  <option value="较好" <?php if(trim($info1[dengji])=="较好"){echo "selected";}?>>较好</option>
                  <option value="热门" <?php if(trim($info1[dengji])=="热门"){echo "selected";}?>>热门</option>
                  <option value="一般" <?php if(trim($info1[dengji])=="一般"){echo "selected";}?>>一般</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td height="22" bgcolor="#FFFFFF"><div align="center">岗位所属项目：</div></td>
            <td height="22" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="pinpai" class="inputcss" size="20" value="<?php echo $info1[pinpai];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">岗位序号：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="xinghao" class="inputcss" size="20" value="<?php echo $info1[xinghao];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">是否推荐：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <select name="tuijian" class="inputcss" >
                  <option value=1 <?php if($info1[tuijian]==1) {echo "selected";}?>>是</option>
                  <option value=0 <?php if($info1[tuijian]==0) {echo "selected";}?>>否</option>
                </select>
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">岗位数量：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <input type="text" name="shuliang" class="inputcss" size="20" value="<?php echo $info1[shuliang];?>">
            </div></td>
          </tr>
          <tr>
            <td height="25" bgcolor="#FFFFFF"><div align="center">岗位图片：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
			<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                <input name="upfile" type="file" class="inputcss" id="upfile" size="30">
            </div></td>
          </tr>
          <tr>
            <td height="80" bgcolor="#FFFFFF"><div align="center">岗位简介：</div></td>
            <td height="25" bgcolor="#FFFFFF"><div align="left">
                <textarea name="jianjie" cols="50" rows="8" class="inputcss"><?php echo $info1[jianjie];?></textarea>
            </div></td>
          </tr>
          <tr>
            <td height="25" colspan="2" bgcolor="#FFFFFF"><div align="center">
              <input type="submit" class="buttoncss" value="更改">
              &nbsp;&nbsp;
                <input type="reset" value="取消更改" class="buttoncss">
            </div></td>
          </tr>
        </form>
    </table></td>
  </tr>
</table>
</body>
</html>
