<?php
include("conn/conn.php");
$title=$_POST[title];
$content=$_POST[content];
$time1=$_POST[time1];

mysql_query("update tb_leaveword set title='$title',content='$content',createtime='$time1' where id=".$_GET[id]."",$conn);
echo "<script>alert('�û������޸ĳɹ�!');history.back();</script>";
?>