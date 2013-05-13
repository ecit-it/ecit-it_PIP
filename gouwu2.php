<?php
 include("top.php");
?>
<table width="870" height="326" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    
    <td width="865" height="326" align="center" valign="top" bgcolor="#FFFFFF">       <script language="javascript">
		   function chkinput(form){
			   if(form.name.value==""){
				  alert("请输入申请人姓名!");
				  form.name.select();
				  return(false);
				}
				if(form.dz.value==""){
				  alert("请输入申请人地址!");
				  form.dz.select();
				  return(false);
				}
				if(form.yb.value==""){
				  alert("请输入申请人邮编!");
				  form.yb.select();
				  return(false);
				}
				if(form.tel.value==""){
				  alert("请输入申请人联系电话!");
				  form.tel.select();
				  return(false);
				}
				if(form.email.value==""){
				  alert("请输入申请人E-mail地址!");
				  form.email.select();
				  return(false);
				
				}
				if(form.email.value.indexOf("@")<0){
				    alert("申请人E-mail地址格式输入错误!");
				    form.email.select();
				    return(false);
				 }
				return(true);
			 }
		 </script>
      <table width="557" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="6"></td>
        </tr>
      </table>
      <table width="853" border="0" align="center" cellpadding="1" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#FCC223">
      <tr>
        <td width="840" height="25" bgcolor="#FEDD9A"><div align="center" style="color: #720206">申请人信息填写</div></td>
      </tr>
      <tr>
        <td height="295"><table width="840" height="293" border="0" align="center" cellpadding="0" cellspacing="1">

            <form name="form1" method="post" action="savedd.php" onSubmit="return chkinput(this)">
              <tr>
                <td width="80" height="25" bgcolor="#FFFFFF"><div align="center">申请人姓名：</div></td>
                <td width="175" bgcolor="#FFFFFF"><div align="left">
                    <input type="text" name="name2" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                </div></td>
                <td width="104" bgcolor="#FFFFFF"><div align="center">性别：</div></td>
                <td width="476" bgcolor="#FFFFFF"><div align="left">
                    <select name="sex">
                      <option selected value="男">男</option>
                      <option value="女">女</option>
			<option value="保密">保密</option>
                    </select>
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">邮政编码：</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <input type="text" name="yb" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">联系电话：</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <input type="text" name="tel" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">电子邮箱：</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <input type="text" name="email" size="25" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'">
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">详细地址：</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <input name="dz" type="text" class="inputcss" id="dz" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'" size="50">
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">家庭所在城市：</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <select name="shff" id="shff">
                      <option selected  value="还没有选择所在省市！">请选择所在省市</option>
             		  <option value="北京市">--北京市--</option>
                      <option value="上海市">--上海市--</option>
                      <option value="重庆市">--重庆市--</option>
                      
                      <option value="安徽省">--安徽省--</option>
                      <!--<option value="屯溪">屯溪</option>
                      <option value="铜陵">铜陵</option>
                      <option value="宿州">宿州</option>
                      <option value="马鞍山">马鞍山</option>
                      <option value="六安">六安</option>
                      <option value="九华山">九华山</option>
                      <option value="黄山">黄山</option>
                      <option value="淮南">淮南</option>
                      <option value="淮化">淮化</option>
                      <option value="淮北">淮北</option>
                      <option value="贵池">贵池</option>
                      <option value="阜阳">阜阳</option>
                      <option value="滁州">滁州</option>
                      <option value="巢湖">巢湖</option>
                      <option value="亳州">亳州</option>
                      <option value="蚌埠">蚌埠</option>
                      <option value="安庆">安庆</option>
                      <option value="合肥">合肥</option>
                      <option value="芜湖">芜湖</option>
                      <option value="宣城">宣城</option>-->
                      
                      <option value="福建省">--福建省--</option>
                      <option value="浙江省">--浙江省--</option>
                      <option value="云南省">--云南省--</option>
                      <option value="新疆省">--新疆省--</option>
                      <option value="天津市">--天津市--</option>
                      <option value="台湾省">--台湾省--</option>
                      <option value="山东省">--山东省--</option>
                      <option value="四川省">--四川省--</option>
                      <option value="陕西省">--陕西省--</option>
                      <option value="山西省">--山西省--</option>
                      <option value="内蒙古">--内蒙古--</option>

                      <option value="辽宁省">--辽宁省--</option>
                      <option value="吉林省">--吉林省--</option>
                      <option value="江西省">--江西省--</option>
                      <option value="江苏省">--江苏省--</option>
                      <option value="湖南省">--湖南省--</option>
                      <option value="湖北省">--湖北省--</option>
                      <option value="河南省">--河南省--</option>
                      <option value="河北省">--河北省--</option>
                      <option value="海南省">--海南省--</option>
                      <option value="广西省">--广西省--</option>
                      <option value="贵州省">--贵州省--</option>
                      <option value="广东省">--广东省--</option>
                      <option value="甘肃省">--甘肃省--</option>
                      <option value="黑龙江省">--黑龙江省--</option>
                      <option value="澳门">--澳门--</option>
                      <option value="香港">--香港--</option>
                      <option value="西藏">--西藏--</option>
                      <option value="青海">--青海--</option>
                      <option value="宁夏">--宁夏--</option>
                      <option value="海外">--海外--</option>
                    </select>
                </div></td>
              </tr>
              <tr>
                <td height="25" bgcolor="#FFFFFF"><div align="center">现在就读的大学：</div></td>
                <td height="25" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <select name="zfff" id="zfff">
                      <option selected value="没有选择大学">请选择你所就读的大学</option>
                      <option value="江苏大学">江苏大学</option>
                      <option value="南京航空航天大学">南京航空航天大学</option>
                      <option value="江南大学">江南大学</option>
                      <option value="东南大学">东南大学</option>
                      <option value="中国矿业大学">中国矿业大学</option>
                      <option value="南京大学">南京大学</option>
                      <option value="南京理工大学">南京理工大学</option>
                      <option value="南京农业大学">南京农业大学</option>
                      <option value="南京师范大学">南京师范大学</option>
                      <option value="河海大学">河海大学</option>
                      <option value="中国药科大学">中国药科大学</option>
                      <option value="苏州大学">苏州大学</option>
                      <option value="南京工程学院">南京工程学院</option>
                      <option value="南京晓庄学院">南京晓庄学院</option>
                      <option value="常州工学院">常州工学院</option>
                      <option value="南京艺术学院">南京艺术学院</option>
                      <option value="江苏技术师范学院">江苏技术师范学院</option>
                      <option value="南京审计学院">南京审计学院</option>
                      <option value="淮阴工学院">淮阴工学院</option>
                      <option value="盐城师范学院">盐城师范学院</option>
                      <option value="盐城工学院">盐城工学院</option>
                      <option value="淮海工学院">淮海工学院</option>
                      <option value="常州大学（原江苏工业学院）">常州大学（原江苏工业学院）</option>
                      <option value="南京森林警察学院">南京森林警察学院</option>
                      <option value="南京理工大学泰州科技学院">南京理工大学泰州科技学院</option>
                      <option value="东南大学成贤学院">东南大学成贤学院</option>
                      <option value="宿迁学院">宿迁学院</option>
                      <option value="三江学院">三江学院</option>
                      <option value="苏州市职业大学">苏州市职业大学</option>
                      <option value="常熟理工学院">常熟理工学院</option>
                      <option value="南京财经大学红山学院">南京财经大学红山学院</option>
                      <option value="南京政治学院">南京政治学院</option>
                      <option value="徐州医学院">徐州医学院</option>
                      <option value="南京邮电大学">南京邮电大学</option>
                      <option value="江苏科技大学">江苏科技大学</option>
                      <option value="南京中医药大学">南京中医药大学</option>
                      <option value="苏州科技学院">苏州科技学院</option>
                      <option value="南京财经大学">南京财经大学</option>
                      <option value="南京信息工程大学">南京信息工程大学</option>
                      <option value="徐州师范大学">徐州师范大学</option>
                      <option value="南京医科大学">南京医科大学</option>
                      <option value="南京林业大学">南京林业大学</option>
                      <option value="南京工业大学">南京工业大学</option>
                      <option value="扬州大学">扬州大学</option>
                      <option value="南京体育学院">南京体育学院</option>
                      <option value="南通大学">南通大学</option>
                      <option value="金陵科技学院">金陵科技学院</option>
                      <option value="徐州工程学院">徐州工程学院</option>
                      <option value="淮阴师范学院">淮阴师范学院</option>
                      <option value="江苏警官学院">江苏警官学院</option>
                      <option value="中国矿业大学徐海学院">中国矿业大学徐海学院</option>
                      <option value="其他学校">其他学校</option>
                     </select>
                </div></td>
              </tr>
              <tr>
                <td height="86" bgcolor="#FFFFFF"><div align="center">简单留言：</div></td>
                <td height="86" colspan="3" bgcolor="#FFFFFF"><div align="left">
                    <textarea name="ly" cols="70" rows="5" class="inputcss" style="background-color:#e8f4ff " onMouseOver="this.style.backgroundColor='#ffffff'" onMouseOut="this.style.backgroundColor='#e8f4ff'"></textarea>
                </div></td>
              </tr>
              <tr>
                <td height="22" colspan="4" bgcolor="#FFFFFF"><div align="center">
                    <input name="submit2" type="submit" class="buttoncss" value="提交申请单">
                </div></td>
              </tr>
            </form>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<?php
 include("bottom.php");
 if($_GET[dingdanhao]!="")
  {  $dd=$_GET[dingdanhao];
     session_start();
     $array=explode("@",$_SESSION[producelist]);
	 $sum=count($array)*20+260;
    echo" <script language='javascript'>";
	echo" window.open('showdd.php?dd='+'".$dd."','newframe','top=150,left=200,width=600,height=".$sum.",menubar=no,toolbar=no,location=no,scrollbars=no,status=no ')";
	echo "</script>";

  }
?>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
