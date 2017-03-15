// JavaScript Document

//浮动导航
function float_nav(dom){
	var right_nav=$(dom);
	var nav_height=right_nav.height();
	right_nav.hide();	
	function right_nav_position(bool){
		right_nav.show();
	}
	
	if(!+'\v1' && !window.XMLHttpRequest ){
		$(window).bind('scroll resize',function(){
			if($(window).scrollTop()>300){
				right_nav_position(true);
				right_nav.parent().next().css("bottom","123px")	
			}else{
				right_nav.hide();
				right_nav.parent().next().css("bottom","71px")	
			}
		})
	}else{
		$(window).bind('scroll resize',function(){
			if($(window).scrollTop()>300){
				right_nav_position();
				right_nav.parent().next().css("bottom","123px")	
			}else{
				right_nav.hide();
				right_nav.parent().next().css("bottom","71px")	
			}
		})
	}	
}

