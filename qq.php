<style type="text/css">
.qqbox a:link {
	color: #000;
	text-decoration: none;
}
.qqbox a:visited {
	color: #000;
	text-decoration: none;
}
.qqbox a:hover {
	color: #f80000;
	text-decoration: underline;
}
.qqbox a:active {
	color: #f80000;
	text-decoration: underline;
}

.qqbox{
	width:132px;
	height:auto;
	overflow:hidden;
	position:absolute;
	right:0;
	top:100px;
	color:#000000;
	font-size:12px;
	letter-spacing:0px;
}
.qqlv{
	width:25px;
	height:256px;
	overflow:hidden;
	position:relative;
	float:right;
	z-index:50px;
}
.qqkf{
	width:120px;
	height:auto;
	overflow:hidden;
	right:0;
	top:0;
	z-index:99px;
	border:6px solid #138907;
	background:#fff;
}
.qqkfbt{
	width:118px;
	height:20px;
	overflow:hidden;
	background:#138907;
	line-height:20px;
	font-weight:bold;
	color:#fff;
	position:relative;
	border:1px solid #9CD052;
	cursor:pointer;
	text-align:center;
}
.qqkfhm{
	width:132px;
	height:30px;
	overflow:hidden;
	line-height:22px;
	padding-right:8px;
	position:relative;
	margin:3px 0;
}
.bgdh{
	width:115px;
	padding-left:4px;
}
.STYLE26 {
	color: #00FFFF;
	font-size: 14px;
}
</style>
<div class="qqbox" id="divQQbox">
  <div class="qqlv" id="meumid" onMouseOver="show()"><img src="http://www.codefans.net/jscss/demoimg/200905/qq.gif"></div>
  <div class="qqkf" style="display:none;" id="contentid" onMouseOut="hideMsgBox(event)">
    <div class="qqkfbt" onMouseOut="showandhide('qq-','qqkfbt','qqkfbt','K',1,1);" id="qq-1" onfocus="this.blur();">客 服 中 心</div>
    <div id="K1">
	<div class="qqkfhm bgdh"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2713007572&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2713007572:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a><br/></div>
      <div class="qqkfhm bgdh"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2713007100&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2713007100:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a></div>
 	  <div class="qqkfhm bgdh"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2713007566&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2713007566:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a></div>
      <div class="qqkfhm bgdh"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2607439036&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:2607439036:41" alt="点击这里给我发消息" title="点击这里给我发消息"></a></div>
      <div class="qqkfhm bgdh">电话:025-58746698</div>
    </div>
  </div>
</div>
<script language="javascript">
function showandhide(h_id,hon_class,hout_class,c_id,totalnumber,activeno) {
    var h_id,hon_id,hout_id,c_id,totalnumber,activeno;
    for (var i=1;i<=totalnumber;i++) {
        document.getElementById(c_id+i).style.display='none';
        document.getElementById(h_id+i).className=hout_class;
    }
    document.getElementById(c_id+activeno).style.display='block';
    document.getElementById(h_id+activeno).className=hon_class;
}
var tips; 
var theTop = 40;
var old = theTop;
function initFloatTips() 
{ 
	tips = document.getElementById('divQQbox');
	moveTips();
}
function moveTips()
{
	 	  var tt=50; 
		  if (window.innerHeight) 
		  {
			  pos = window.pageYOffset  
		  }else if (document.documentElement && document.documentElement.scrollTop) {
			 pos = document.documentElement.scrollTop  
		  }else if (document.body) {
		    pos = document.body.scrollTop;  
		  }
		  pos=pos-tips.offsetTop+theTop; 
		  pos=tips.offsetTop+pos/10; 
		  if (pos < theTop){
			 pos = theTop;
		  }
		  if (pos != old) { 
			 tips.style.top = pos+"px";
			 tt=10;  //alert(tips.style.top);  
		  }
		  old = pos;
		  setTimeout(moveTips,tt);
}
initFloatTips();
	if(typeof(HTMLElement)!="undefined")    //firefox定义contains()方法，ie下不起作用
		{  
		  HTMLElement.prototype.contains=function (obj)  
		  {  
			  while(obj!=null&&typeof(obj.tagName)!="undefind"){
	   　　 　if(obj==this) return true;  
	   　　　	　obj=obj.parentNode;
	   　　	  }  
			  return false;  
		  }
	}
function show()
{
	document.getElementById("meumid").style.display="none"
	document.getElementById("contentid").style.display="block"
}
	function hideMsgBox(theEvent){
	  if (theEvent){
		var browser=navigator.userAgent;
		if (browser.indexOf("Firefox")>0){  //如果是Firefox
		    if (document.getElementById("contentid").contains(theEvent.relatedTarget)) {
				return
			}
		}
		if (browser.indexOf("MSIE")>0 || browser.indexOf("Presto")>=0){
	        if (document.getElementById('contentid').contains(event.toElement)) {
			    return; 
		    }
		}
	  }
	  document.getElementById("meumid").style.display = "block";
	  document.getElementById("contentid").style.display = "none";
 	}
</script>