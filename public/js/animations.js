$(document).ready(function () {
    $('.flip').click(function () {
        $(this).find('.detail-box').toggleClass('flipped');

    });

    // $('#seeMoreDiv').click(function () {
    //     $('#myModal').modal('show');
    // });

    // $.modalAnimate();
    $.modalAnimate({
        modalTarget: 'modal-container'
    });
    $.modalAnimate({
        // or ...
        // 'revealing'
        // 'unfolding'
        // 'blown-up'
        // 'meep'
        // 'sketch'
        // 'bond'
        effect: 'unfolding',
    });

    $.modalAnimate({
        modalClose: function () { }
    });

    $.modalAnimate({
        autoEffect: true
    });

});
