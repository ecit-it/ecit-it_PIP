						var timeout2=5000;  //切换时间
						var timeout3=10000; //mouse over 后切换时间
						var now_content=0;
						var total_content=8;
						var way=1;
						var start_content=Math.round(Math.random()*(total_content-1))+1; //除广告为第一显示外
						function content_mouse(num){
						  now_content=num;
						  window.clearInterval(theTimer2);   
						  for (var i=1;i<=total_content;i++){
						  document.getElementById('divhl0'+i).style.display='none';
						  }
						  document.getElementById('divhl0'+num).style.display='block';
						  theTimer2=setTimeout('change_content()', timeout3);
						}
						
						function change_content(){
							
						  for (var i=1;i<=total_content;i++){
						  document.getElementById('divhl0'+i).style.display='none';
						  }
						  document.getElementById('divhl0'+now_content).style.display='block';
						  if (way) now_content++;
						  else now_content--;
						  if(now_content>total_content) {now_content=total_content-1;way=0;}
						  else if(now_content==0) {now_content=1;way=1;}
						  theTimer2=setTimeout('change_content()', timeout2);
						}
						theTimer2=setTimeout(function(){now_content=1;change_content();}, timeout2);