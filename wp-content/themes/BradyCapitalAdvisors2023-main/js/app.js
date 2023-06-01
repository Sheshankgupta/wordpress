

$(function () {
	navMobile();
	slider();
	hiddenText();
});

$(window).on('resize', function () { });

$(window).on('load', function () { });

$(window).on('scroll', function () { });

$(window).on('hashchange', function (e) { });

function slider() {
	$('.slider').owlCarousel({
		autoplay: true,
		loop: true,
		nav: false,
		navText: ["<img src='http://brad.pro/wp-content/themes/BradyCapitalAdvisors2023-main/images/slider-left.png'>", "<img src='http://brad.pro/wp-content/themes/BradyCapitalAdvisors2023-main//images/slider-right.png'>"],
		dots: true,
		margin: 0,
		center: true,
		items: 1,
		autoplayTimeout: 8000,
		responsive: {
			1025: {
				nav: true,
			},
		},
	});
}

function hiddenText() {
	$('.more-text').on('click', function (e) {
		$(this).toggleClass('clicked');
		$('.hidden-copy').slideToggle();
		e.preventDefault();
	});
}

function navMobile() {
	$('#navCall').on('click', function () {
		$(this).toggleClass('clicked');
		$('#siteNav').toggleClass('d-none');
		$('#siteNav .nav').toggleClass('flex-column flex-lg-row pb-2');
		$('#siteNav .nav li').toggleClass('py-2');
	});
}
