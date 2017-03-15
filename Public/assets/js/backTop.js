// JavaScript Document

// 返回顶部、侧栏悬浮
	    $(function(){
        // 页面浮动面板
        $("#floatPanel > .ctrolPanel > a.arrow").click(function(){$("html,body").animate({scrollTop :0}, 800);return false;});
		 $(".footerTop").click(function(){$("html,body").animate({scrollTop :0}, 800);return false;});
        var objPopPanel = $("#floatPanel > .qrcodePanel");	
        $("#floatPanel > .ctrolPanel > a.qrcode").bind({
                mouseover : function(){
						  objPopPanel.show();
                },
                mouseout : function(){
                        objPopPanel.hide();
            }	
        });
    });
	