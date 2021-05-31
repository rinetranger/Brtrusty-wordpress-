<?php

function add_my_scripts() {
  //bootstrap.min.css の読み込み
  wp_enqueue_style( 
    'my-bs-style', //ハンドル名
    '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' ,
    array(), //依存ファイルなし
    NULL  //バージョンを出力しない
  );
  //fontawesome all.css の読み込み
  wp_enqueue_style(
    'my-fa5',
    '//use.fontawesome.com/releases/v5.13.0/css/all.css',
    array(),
    NULL
  );
   
 
//   //WordPress 本体の jQuery を登録解除
//   wp_deregister_script( 'jquery');  
//   //jQuery を CDN から読み込む
//   wp_enqueue_script( 
//     'jquery', 
//     '//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', 
//     array(), 
//     NULL, 
//     true //</body> 終了タグの前で読み込み
//   );
//   // bootstrap の依存ファイル popper.min.js の読み込み
  wp_enqueue_script( 
    'popper', 
    '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', 
    array('jquery'), //依存ファイル
    NULL, 
    true 
  );
  // bootstrap の読み込み 
  wp_enqueue_script( 
    'bootstrap', 
    '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', 
    array('jquery', 'popper'), //依存ファイル
    NULL, 
    true 
  );


  //wp_headのtitleタグを削除
remove_action(‘wp_head’, ‘_wp_render_title_tag’, 1);
 
}
// add_action( 'wp_enqueue_scripts', 'add_my_scripts' );