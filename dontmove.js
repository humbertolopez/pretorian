$('a.pop').click(function(){
	#('.tecnologia-pop-up').css({
		'margin-top': 0 - $('.tecnologia-pop-up').position().top + $(window).scrollTop()
	});
});