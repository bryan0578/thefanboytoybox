	$(document).ready(function() {
		$menuLeft = $('.pushmenu-left');
		$nav_list = $('#nav-icon1');
		
		$nav_list.click(function() {
			$(this).toggleClass('active');
			$('.pushmenu-push').toggleClass('pushmenu-push-toright');
			$menuLeft.toggleClass('pushmenu-open');
		});
	});
	$(document).ready(function(){
    $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
        $(this).toggleClass('open');
    });
});