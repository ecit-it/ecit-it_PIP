
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>查看申请单</title>
<link rel="stylesheet" type="text/css" href="css/font.css">
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
-->
</style>
</head>
<body topmargin="0" leftmargin="0" bottommargin="0">
<?php
    include("conn/conn.php");
?>
 <?php
	   $sql=mysql_query("select count(*) as total from tb_dingdan ",$conn);
	   $info=mysql_fetch_array($sql);
	   $total=$info[total];
	   if($total==0){
	     echo "本站暂无申请单!";
	   }
	   else{
	       $pagesize=20;
		   if ($total<=$pagesize){
		      $pagecount=1;
			} 
			if(($total%$pagesize)!=0){
			   $pagecount=intval($total/$pagesize)+1;
			}else{
			   $pagecount=$total/$pagesize;
			}
			if(($_GET[page])==""){
			    $page=1;
			
			}else{
			    $page=intval($_GET[page]);
			}
           $sql1=mysql_query("select * from tb_dingdan order by time desc limit ".($page-1)*$pagesize.",$pagesize",$conn);
		   $info1=mysql_fetch_array($sql1);
?>
<form name="form1" method="post" action="deletedd.php">   
<table width="750" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="20" bgcolor="#FFCF60"><div align="center" class="style1">查看申请单 </div></td>
  </tr>
  <tr>
    <td height="40" bgcolor="#666666"><table width="750" height="44" border="0" align="center" cellpadding="0" cellspacing="1">
     
	  <tr>
        <td width="103" height="20" bgcolor="#FFFFFF"><div align="center">申请单号</div></td>
        <td width="63" bgcolor="#FFFFFF"><div align="center">申请人</div></td>
        <td width="60" bgcolor="#FFFFFF"><div align="center">真名</div></td>
        <td width="39" bgcolor="#FFFFFF"><div align="center">性别</div></td>
        <td width="85" bgcolor="#FFFFFF"><div align="center">地址</div></td>
        <td width="77" bgcolor="#FFFFFF"><div align="center">电话</div></td>
        <td width="169" bgcolor="#FFFFFF"><div align="center">申请单状态</div></td>
        <td width="145" bgcolor="#FFFFFF"><div align="center">审批</div></td>
      
	  </tr>
	  <?php
		    do{
			  $array=explode("@",$info1[spc]);
		      $sum=count($array)*20+260;
	  ?>
      <tr>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[dingdanhao];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[xiadanren];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[shouhuoren];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[sex];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[dizhi];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[tel];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center"><?php echo $info1[zt];?></div></td>
        <td height="21" bgcolor="#FFFFFF"><div align="center">
		    <input name="button" type="button" class="buttoncss" id="button" onClick="javascript:window.open('showdd.php?id=<?php echo $info1[id];?>','newframe','width=600,height=<?php echo $sum;?>,left=100,top=100,menubar=no,toolbar=no,location=no,scrollbars=no')" value="查看">
		    &nbsp;
		    <input name="button2" type="button" class="buttoncss" id="button2" onClick="javascript:window.location='orderdd.php?id=<?php echo $info1[id];?>';" value="审批">       
            <input type="checkbox"  name=<?php echo $info1[id];?> value=<?php echo $info1[id];?>></div></td>
      </tr>
	  <?php
	      }while($info1=mysql_fetch_array($sql1))
	  ?>
	 
    </table></td>
  </tr>
</table>
<table width="750" height="20" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="652"><div align="right">
	本站共有申请单
	    <?php
		   echo $total;
		  ?>        
	    &nbsp;条&nbsp;每页显示&nbsp;<?php echo $pagesize;?>&nbsp;条&nbsp;第&nbsp;<?php echo $page;?>&nbsp;页/共&nbsp;<?php echo $pagecount; ?>&nbsp;页
        <?php
		  if($page>=2)
		  {
		  ?>
        <a href="lookdd.php?page=1" title="首页"><font face="webdings"> 9 </font></a>
		 <a href="lookdd.php?id=<?php echo $id;?>&page=<?php echo $page-1;?>" title="前一页"><font face="webdings"> 7 </font></a>
        <?php
		  }
		   if($pagecount<=4){
		    for($i=1;$i<=$pagecount;$i++){
		  ?>
        <a href="lookdd.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php
		     }
		   }else{
		   for($i=1;$i<=4;$i++){	 
		  ?>
        <a href="lookdd.php?page=<?php echo $i;?>"><?php echo $i;?></a>
        <?php }?>
        <a href="lookdd.php?page=<?php echo $page-1;?>" title="后一页"><font face="webdings"> 8 </font></a> 
		<a href="lookdd.php?id=<?php echo $id;?>&page=<?php echo $pagecount;?>" title="尾页"><font face="webdings"> : </font></a>
        <?php }?>

	</div></td>
    <td width="98"><div align="center"><input type="hidden" name="page_id" value=<?php echo $page;?>><input type="submit" value="删除选择项" class="buttoncss"></div></td>
  </tr>
</table>
<?php
 }
?>
</form>
</body>
</html>
