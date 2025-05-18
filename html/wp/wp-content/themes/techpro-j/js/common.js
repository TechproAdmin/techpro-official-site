//スクロールするとロゴ変更
$(function () {
  var $window = $(window);
  var $logo = $(".js-header");
  var $hamburger = $("#js-hamburger");
  var $toggleBtn = $("#js-toggle-btn");

  // ハンバーガー開閉処理
  $toggleBtn.on("click", function (e) {
    e.stopPropagation();
    $(this).toggleClass("active");
  });

  // メニュー外クリックで閉じる
  $(document).on("click", function (e) {
    if (!$hamburger.is(e.target) && $hamburger.has(e.target).length === 0) {
      $hamburger.removeClass("active");
    }
  });

  // スクロール処理
  $window.on("scroll", function () {
    var scroll = $window.scrollTop();

    // ロゴ切り替え
    scroll > 100 
      ? $logo.addClass("headerLogoScroll") 
      : $logo.removeClass("headerLogoScroll");

    // ロゴ非表示
    scroll > 100 && scroll < 750 
      ? $logo.addClass("hideLogo") 
      : $logo.removeClass("hideLogo");

    // ハンバーガー表示制御
    if (scroll > 100 && scroll < 750) {
      $hamburger.addClass("hide");
      $hamburger.removeClass("active");
    } else {
      $hamburger.removeClass("hide");
    }

    // 色制御
    if (scroll <= 100) {
      $hamburger.removeClass("black").addClass("white");
    } else if (scroll >= 750) {
      $hamburger.removeClass("white").addClass("black");
    } else {
      $hamburger.removeClass("white black");
    }
  });
});





//スクロールすると背景色変更
$(function headerFix(){
  //var pos = 250;
  var header = $('.js-header');
    
  $(window).on('scroll load', function(){

if($(window).scrollTop() > 100) {
        header.addClass('set');
    } else {
        header.removeClass('set');
    }
      
    if($(window).scrollTop() > 750) {
        header.addClass('fixed');
    } else {
        header.removeClass('fixed');
    }
      
  });
})



//トップへ戻るボタン
//要素を取得
const button = document.querySelector('.js-backToTop');

//クリックイベント
button.addEventListener('click', () => {
  //ページ上部へスムーススクロール
  window.scroll({ 
    top: 0, 
    behavior: "smooth"
  });
});

//スクロールイベント
window.addEventListener('scroll', () => {
  //スクロール量を判定して要素にクラスを付与
  if(window.scrollY > 2000){
    button.classList.add('is-active');
  }else{
    button.classList.remove('is-active');
  }
});

//グローバルナビゲーションのドロップダウンメニュー
document.addEventListener("DOMContentLoaded", function() {
  const megaMenus = document.querySelectorAll(".megamenu");
  megaMenus.forEach(function(megaMenu) {
    const downMenu = megaMenu.querySelector(".downMenu1,.downMenu2");
    if (downMenu) {
      downMenu.style.display = "none";
      downMenu.style.height = "0";
      downMenu.style.overflow = "hidden";
      downMenu.style.transition = "height 0.2s ease";
      megaMenu.addEventListener("mouseenter", function() {
        if (downMenu.style.display === "none" || downMenu.style.height === "0px") {
          downMenu.style.display = "block";
          downMenu.style.height = downMenu.scrollHeight + "px";
        }
      });
      megaMenu.addEventListener("mouseleave", function() {
        if (downMenu.style.display === "block" && downMenu.style.height !== "0px") {
          downMenu.style.height = "0";
          setTimeout(() => {
            downMenu.style.display = "none";
          }, 200);
        }
      });
    }
  });
});

/*-------------------------------
  ハンバーガーメニュー
  ---------------------------------*/

document.addEventListener('DOMContentLoaded', function() {
  const hamburger = document.getElementById('js-hamburger');
  const toggleBtn = document.getElementById('js-toggle-btn');
  const drawerNav = document.getElementById('js-nav');

  // ハンバーガーボタンの開閉
  toggleBtn.addEventListener('click', function(e) {
    drawerNav.classList.toggle('active');
    hamburger.classList.toggle('active');
  });

  // メニュー内リンククリックで閉じる
  drawerNav.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function() {
      drawerNav.classList.remove('active');
      hamburger.classList.remove('active');
    });
  });

  // 背景クリック処理（改善版）
  drawerNav.addEventListener('click', function(e) {
    if (!e.target.closest('.drawer-nav-wrapper')) {
      drawerNav.classList.remove('active');
      hamburger.classList.remove('active');
    }
  });
});



