$("#jd li").mouseover(function(){
	$("#jd li").removeAttr('class');
	var i = $(this).text();
	$(this).attr("class","sky");
	$('#showImg').attr("src","images/"+i+".jpg");
});
var j=0;
function getImg(){
	$("#jd li").removeAttr('class');
	j++;
	if(j>5)
	j=1;
	$("#jd li").eq(j-1).attr("class","sky");
	$('#showImg').attr("src","images/"+j+".jpg");
}
getImg();
setInterval("getImg()", 2000);
//有待优化：
//1.添加上一个 下一个功能
//2.鼠标移入停止滚动
//3.鼠标移入后，记录滚动点。