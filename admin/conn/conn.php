<?php
           $conn=mysql_connect("localhost","root","8748") or die("���ݿ���������Ӵ���".mysql_error());
           mysql_select_db("db_pip",$conn) or die("���ݿ���ʴ���".mysql_error());
           mysql_query("set character set gb2312");
		   mysql_query("set names gb2312");
?>