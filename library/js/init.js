$(document).ready(function(){

	$("#menuSwitch").click(function(){
		$("#navMenuWrap").toggle();
	});

});



// 检测屏幕缩放
$(window).resize(function() {
	var screenWidth = $(window).width();
	var breakPoint = 760;
	if ( screenWidth >= breakPoint ) {
		$('#navMenuWrap').show();
		$('#menuSwitch').hide();
	}
	else{
		$('#navMenuWrap').hide();
		$('#menuSwitch').show();
	}
});




//检测屏幕尺寸
//function showWindows(){
//	alert($(window).width()); //浏览器当前窗口可视区域宽度
//	alert($(document).width());//浏览器当前窗口文档对象宽度
//	alert($(document.body).width());//浏览器当前窗口文档body的宽度
//	alert($(document.body).outerWidth(true));//浏览器当前窗口文档body的总宽度 包括border padding margin
//};