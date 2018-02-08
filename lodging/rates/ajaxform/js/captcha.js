$("#refreshimg").live('click',function(){

		$.post('./ajaxform/php/newsession.php');
		$("#captchaimage").load('./ajaxform/php/image_req.php');
		return false;
                
	});