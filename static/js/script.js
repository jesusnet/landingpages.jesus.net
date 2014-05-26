$(document).ready(function() {
	valign_position();
});

$(window).resize(function() {
	valign_position();
});

function valign_position() {
	
	var img_height = $('.main-image img').height();
	var txt_height = $('.main-image .txt').height();

	var middle = (img_height - txt_height)/2;
	var bottom = img_height - txt_height - 20;


	$('.main-image .txt .middle').css('padding-top', middle);
	$('.main-image .txt .bottom').css('padding-top', bottom);
}