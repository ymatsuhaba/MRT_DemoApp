$(function(){
    $('.slider').slick({
        autoplay:true,
        autoplaySpeed:5000,
        prevArrow:'<div class="prev">PREV</div>',
        nextArrow:'<div class="next">NEXT</div>'
    });

    $(".prev,.next").hover(
        function(){
        $(this).css('color', 'skyblue');
        $(this).css('font-weight','bold');
        },function () {
        $(this).css('color', 'black');
        $(this).css('font-weight','normal');
        }
    );
});