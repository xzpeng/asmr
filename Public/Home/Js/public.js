var verifySrc=null;

$(window).ready(function(e) {
	if($('#login_btn'))
	{
		$('#login_btn').click(loginHandler);
		$('#login_close').click(loginCloseHandler);
		$('.verifyImg').click(updateVerify);
	}
	if($('#search_text'))
	{
		$('#search_text').focus(searchFocusHandler);
		$('#search_text').blur(searchBlurHandler);
		$('#search_btn').click(searchFocusHandler);
		searchBlurHandler();
	}
	slider();
});

function searchFocusHandler()
{
	if($('#search_text').val()=="站内搜索")
	{
		$('#search_text').val("");
		$('#search_text').removeClass("search_text_default");
	}
}

function searchBlurHandler()
{
	if(!Boolean($('#search_text').val()))
	{
		$('#search_text').val("站内搜索");
		$('#search_text').addClass("search_text_default");
	}
}



function loginHandler()
{
	var hh=$(window).height();
	var ww=$(window).width();
	var left=(ww-$('#loginBox').width())/2;
	var top=(hh-$('#loginBox').height())/2;
	updateVerify();
	$('#loginBox').css({'display':'block'});
	$('#loginBg').css({'display':'block'});
	if(left>0)
	{
		$('#loginBox').css({'left':left});
		$('#loginBg').css({'left':left});
	}
	
	if(top>0)
	{
		$('#loginBox').css({'top':top});
		$('#loginBg').css({'top':top});
	}
	
}

function loginCloseHandler()
{
	$('#loginBox').css({'display':'none'});
	$('#loginBg').css({'display':'none'});
}

function updateVerify()
{
	if(!verifySrc)
	{
		verifySrc=$('.verifyImg').prop('src');
	}
	$('.verifyImg').prop('src',verifySrc+"?"+Math.round(Math.random()*100000));
}

function slider() {
	var sWidth = $("#focus").width(); //获取焦点图的宽度（显示面积）
	var len = $("#focus ul li").length; //获取焦点图个数
	var index = 0;
	var picTimer;
	
	//以下代码添加数字按钮和按钮后的半透明条，还有上一页、下一页两个按钮
	var btn = "<div class='btnBg'></div><div class='btn'>";
	for(var i=0; i < len; i++) {
		btn += "<span></span>";
	}
	btn += "</div><div class='preNext pre'></div><div class='preNext next'></div>";
	$("#focus").append(btn);
	$("#focus .btnBg").css("opacity",0.5);

	//为小按钮添加鼠标滑入事件，以显示相应的内容
	$("#focus .btn span").css("opacity",0.4).mouseover(function() {
		index = $("#focus .btn span").index(this);
		showPics(index);
	}).eq(0).trigger("mouseover");

	//上一页、下一页按钮透明度处理
	$("#focus .preNext").css("opacity",0.2).hover(function() {
		$(this).stop(true,false).animate({"opacity":"0.5"},300);
	},function() {
		$(this).stop(true,false).animate({"opacity":"0.2"},300);
	});

	//上一页按钮
	$("#focus .pre").click(function() {
		index -= 1;
		if(index == -1) {index = len - 1;}
		showPics(index);
	});

	//下一页按钮
	$("#focus .next").click(function() {
		index += 1;
		if(index == len) {index = 0;}
		showPics(index);
	});

	//本例为左右滚动，即所有li元素都是在同一排向左浮动，所以这里需要计算出外围ul元素的宽度
	$("#focus ul").css("width",sWidth * (len));
	
	//鼠标滑上焦点图时停止自动播放，滑出时开始自动播放
	$("#focus").hover(function() {
		clearInterval(picTimer);
	},function() {
		picTimer = setInterval(function() {
			showPics(index);
			index++;
			if(index == len) {index = 0;}
		},1000); //此4000代表自动播放的间隔，单位：毫秒
	}).trigger("mouseleave");
	
	//显示图片函数，根据接收的index值显示相应的内容
	function showPics(index) { //普通切换
		var nowLeft = -index*sWidth; //根据index值计算ul元素的left值
		$("#focus ul").stop(true,false).animate({"left":nowLeft},300); //通过animate()调整ul元素滚动到计算出的position
		//$("#focus .btn span").removeClass("on").eq(index).addClass("on"); //为当前的按钮切换到选中的效果
		$("#focus .btn span").stop(true,false).animate({"opacity":"0.4"},300).eq(index).stop(true,false).animate({"opacity":"1"},300); //为当前的按钮切换到选中的效果
	}
}