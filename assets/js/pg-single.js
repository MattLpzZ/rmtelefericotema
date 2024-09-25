function scrollBanner(config) {
	scrollPos = $(this).scrollTop();

	config.bannerText.css({
		'margin-top' : -(scrollPos/3) + "px",
		'opacity' : 1-(scrollPos/300)
	});

	config.banner.css({
		'background-position': 'center ' + (-scrollPos/4) + "px"
	});
}

$(document).ready(function(){
	$(window).scroll(function() {
		scrollBanner({
			banner: $('.x1a2b3c'),
			bannerText: $('.x4d5e6f')
		});
	});
});
