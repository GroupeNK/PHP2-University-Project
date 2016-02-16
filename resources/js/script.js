$(document).ready(function($) {
	$(".info").hide();
	$(".info").slideDown(1000);
	$("#infoX").click(function() {
		$(".info").slideUp(500);
	});
});

//$(document).ready(function () {
//	var url = window.location;
//	$('ul.nav a[href="' + url + '"]').parent().addClass('active');
//	$('ul.nav a').filter(function () {
//		return this.href == url;
//	}).parent().addClass('active').parent().parent().addClass('active');
//});

$(document).ready(function() {
	$('.popup-with-form').magnificPopup({
		type: 'inline',
		focus:'input',
		closeBtnInside: false,
		closeOnBgClick: false
	});
});

// Define size of banner
(function(){
    var banner_caption = document.getElementsByClassName("bann_capt"),
        max_height = 0;

    for (var i = 0; i < banner_caption.length; i++) {
        var style = window.getComputedStyle(banner_caption[i]);
        var height = style.getPropertyValue('height');

        height = height.slice(-height.length,-height.length+height.search("px"));
        height = parseInt(height);

        if(max_height < height) {
            max_height = height;
        }
    }

    var styleElement = document.createElement('style'),
    styleSheet;

    document.head.appendChild(styleElement);

    styleSheet = styleElement.sheet;
    var cssRule = ".bann_capt { height: " + max_height + "px}";

    styleSheet.insertRule(cssRule, styleSheet.cssRules.length);	
})();