$(document).ready(function(){
	var $liCur = $(".navBar ul li.active"),
	  curP = $liCur.position().left,
	  curW = $liCur.outerWidth(true),
	  $slider = $(".curBg"),
	  $navBox = $(".navBar");
	 $targetEle = $(".navBar ul li"),
	$slider.animate({
	  "left":curP,
	  "width":curW
	});
	$targetEle.mouseenter(function () {
	  var $_parent = $(this),
		_width = $_parent.outerWidth(true),
		posL = $_parent.position().left;
	  $slider.stop(true, true).animate({
		"left":posL,
		"width":_width
	  }, "fast");
	});


    // 鼠标离开返回初始状态
		// $navBox.mouseleave(function (cur, wid) {
		// 	  cur = curP;
		// 	  wid = curW;
		// 	  $slider.stop(true, true).animate({
		// 		"left":cur,
		// 		"width":wid
		// 	  }, "fast");
		// 	});
})
