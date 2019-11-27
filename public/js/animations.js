$(document).ready(function(){
    $('.flip').click(function(){
        $(this).find('.detail-box').toggleClass('flipped');
        $(this).find('.see-more-container').css("cursor", "pointer");
    });

});

$(function() {


	var appendthis = ("<div class='modal-overlay js-modal-close'></div>");

	$("#seeMoreDiv[data-modal-id]").click(function(e) {
		e.preventDefault();
		$("body").append(appendthis);
		$(".modal-overlay").fadeTo(500, 0.7);
		//$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$("#" + modalBox).fadeIn($(this).data());
	});

	$(".close, .js-modal-close, .modal-overlay").click(function() {
		$(".modal-box, .modal-overlay").fadeOut(500, function() {
            $(".modal-overlay").remove();
            $(".modal-overlay").css("display", "none");
		});
	});

	$(window).resize(function() {
		$(".modal-box").css({
			top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
			left: ($(window).width() - $(".modal-box").outerWidth()) / 2
		});
	});

	$(window).resize();



	

});