//ハンバーガーメニューボタン開閉
jQuery(document).ready(function($){
    $(".l-header__openBtn").click(function () { //ボタンがクリックされたら
        $(".l-sidebar").addClass("is-active"); //.l-sidebarに.is-activeを付与
        $(".p-overlay-hamburgerMenu").addClass("is-active"); //.l-wrapper__overlayに.is-activeを付与
        $("body").css("position", "fixed"); //bodyにposition: fixed;を指定 
    });
});

jQuery(document).ready(function($){
    $(".p-sideMenu__closeBtn").click(function () { //ボタンがクリックされたら
        $(".l-sidebar").removeClass("is-active"); //.l-sidebarの.is-activeを削除
        $(".p-overlay-hamburgerMenu").removeClass("is-active"); //.l-wrapper__overlayの.is-activeを削除
        $("body").css("position", "static"); //bodyのposition:fixed;を解除
    });
});


//画面サイズが切り替わる際の動作
jQuery(document).ready(function($){
  $(window).resize(function(){ //画面サイズが切り替わったとき
    $("body").css("position", "static"); //bodyをposition:fixed;→ position:static;に変更
    $(".l-sidebar").removeClass("is-active"); //.l-sidebarの.is-activeを削除、画面サイズが切り替わった際にサイドメニューが閉じる
    $(".p-overlay-hamburgerMenu").removeClass("is-active"); //.l-wrapper__overlayの.is-activeを削除、画面サイズが切り替わった際にサイドメニューが閉じる
  });
});