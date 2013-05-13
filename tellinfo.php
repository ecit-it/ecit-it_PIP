<?php
include_once("conn/conn.php");
include_once("top.php");
?>
<table width="870" height="30" align="center" background="images/bg_14(1).jpg"><tr><td width="20" rowspan="2">&nbsp;</td>
    <td width="729"></td>
</tr>
  <tr>
    <td><span class="a9">网站公告</span></td>
  </tr>
</table>
<table width="870" align="center" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#6EBEC7">
        <tr>
          <td bgcolor="#FFFFFF">


<?php
$sql=mysql_query("select * from tb_tell where id='".$_GET["id"]."'",$conn);
$info=mysql_fetch_array($sql);
?>
<br>
		  <table width="850" height="22" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="739" bgcolor="#FFFFFF" style="line-height:2" valign="top"><font color="blue">&nbsp;&nbsp;主&nbsp;题：</font><?php echo unhtml($info["title"]);?>&nbsp;[&nbsp;<?php echo $info["createtime"];?>&nbsp;]</td>
  </tr>
</table>

		  <br>
		 <table width="846" height="100" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="837" valign="top" bgcolor="#FFFFFF" style="line-height:2"><font color="blue">内&nbsp;容:</font><br>
      <?php echo unhtml($info["content"]);?></td>
  </tr>
</table>


</td>
        </tr></table>
<?php
include_once("bottom.php");
?>