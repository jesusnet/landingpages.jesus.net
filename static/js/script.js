$(document).ready(function() {
	middle_position();
});

$(window).resize(function() {
	middle_position();
});

function middle_position() {
	
	var img_height = $('.main-image img').height();
	var txt_height = $('.main-image .txt').height();
	var padding_top = (img_height - txt_height)/2;
	var bottom = img_height - txt_height - 20;

	//alert(bottom);

	$('.main-image .txt .middle').css('padding-top', padding_top);
	$('.main-image .txt .bottom').css('padding-top', bottom);
}