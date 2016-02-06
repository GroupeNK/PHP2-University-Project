$(document).ready(function($) {
	$(".info").hide();
	$(".info").slideDown(1000);
	$("#infoX").click(function() {
		$(".info").slideUp(500);
	});
});


$(document).ready(function () {
	var url = window.location;
	$('ul.nav a[href="' + url + '"]').parent().addClass('active');
	$('ul.nav a').filter(function () {
		return this.href == url;
	}).parent().addClass('active').parent().parent().addClass('active');
});

$(document).ready(function() {
	$('.popup-with-form').magnificPopup({
		type: 'inline',
		focus:'input',
		closeBtnInside: false,
		closeOnBgClick: false
	});
});