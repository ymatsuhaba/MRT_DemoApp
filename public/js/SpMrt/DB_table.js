$(function() {

    $(".ID").mouseover(function() {

        $(this).animate({fontSize : '4vh'}, 500);
        $(this).css('color','blue');

    }).mouseout(function() {

        $(this).animate({fontSize : '2vh'}, 500);
        $(this).css('color','black');

    });

});

