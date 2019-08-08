function link() {
      alert('新規登録画面に移動しますか?');
}


//iconのbackground-colorをredにする
$(function(){
      $(".main").hover(
          function() {
                //マウスカーソルが重なった時の処理
                $(".main").css('background-color', 'blue');
          },
          function() {
                //マウスカーソルが離れた時の処理
                $(".main").css('background-color', 'black');
          }
      );
});
