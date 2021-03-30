$(function () {
	$('.open-button').click(function () {
		$('.nav').toggleClass('show-menu');
	});

	$('.filter-button').click(function () {
		$('.left').toggleClass('show-filter');
	});

	$('.cross').click(function () {
		$('.left').toggleClass('show-filter');
	});

	$('.overlay').click(function () {
		$('.left').toggleClass('show-filter');
	});
});
