function link() {
      alert('新規登録画面に移動しますか?');
}

//iconのbackground-colorをredにする
$(function(){
    $(".main").hover(
        function() {
        $(".main").css('background-color', 'blue');
        },
        function() {
        $(".main").css('background-color', 'black');
        }
    );
});
