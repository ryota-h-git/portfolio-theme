jQuery(function ($) {
  $("#js-button-drawer").on("click", function () {
    $(this).toggleClass("is-checked");
    $("#js-drawer").toggleClass("is-checked");
  });
});

document.querySelectorAll(".header__nav-link").forEach(link => {
  link.addEventListener('click', function() {
    document.querySelector('.header-drawer').classList.remove('is-checked');
    document.querySelector('.header__menu-button').classList.remove('is-checked');
  });
});


const intersectionObserver = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.isIntersecting) {
      entry.target.classList.add("is-in-view");
    } else {
      entry.target.classList.remove("is-in-view");
    }
  });
});



const inViewItems = document.querySelectorAll(".js-in-view");
inViewItems.forEach(function (inViewItem) {
  intersectionObserver.observe(inViewItem);
});

jQuery('a[href^="#"]').on("click", function (e) {
  e.preventDefault(); // ページ内リンクのデフォルト動作を無効化

  const id = jQuery(this).attr("href");
  const target = jQuery("#" === id ? "html" : id);
  const position = target.offset().top;

  // スムーススクロール
  jQuery("html, body").animate(
    {
      scrollTop: position,
    },
    1000,
    "swing"
  );
});



jQuery(function () {
  jQuery(".header__button").on("click", function (e) {
    e.preventDefault();

    const targetId = jQuery(this).data("contact");
    const target = jQuery(targetId === "#" ? "html" : targetId);

    if (target.length) {
      const position = target.offset().top;

      jQuery("html, body").animate(
        {
          scrollTop: position,
        },
        1000,
        "swing"
      );
    }
  });
});

// ハンバーガーメニュー関連処理
// jQuery(".header__menu-button").removeClass("is-checked");

// if (jQuery(window).width() <= 768) {
//   jQuery("#js-drawer").slideToggle();
// } else {
//   jQuery("#js-drawer").show();
// }

jQuery(function ($) {
  $(window).on("scroll", function () {
    var target = $("#header-pc");
    var scroll = $(window).scrollTop();
    var windowHeight = $(window).height();
    var offsetTop = target.offset().top;

    jQuery(function ($) {
      $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();

        if (scroll > 600) {
          $("#header-pc").addClass("active");
        } else {
          $("#header-pc").removeClass("active");
        }
      });
    });
  });
});

const textWrapper = document.querySelector(".scroll__text");

if (textWrapper) {
  const text = "ScrollDown";
  let radius = getResponsiveRadius(); // 円の半径
  const angleIncrement = (2 * Math.PI) / text.length; // 文字間の角度の増分
  let rotationAngle = 0; // 回転角度

  // テキストを配置
  for (let i = 0; i < text.length; i++) {
    const span = document.createElement("span");
    span.textContent = text[i];
    textWrapper.appendChild(span);
  }

  // 一定の間隔で回転させる
  setInterval(() => {
    rotationAngle += Math.PI / 180; // 1度ずつ回転
    for (let i = 0; i < text.length; i++) {
      const angle = angleIncrement * i + rotationAngle;
      const x = radius * Math.cos(angle);
      const y = radius * Math.sin(angle);
      const rotation = angle + Math.PI / 2;
      textWrapper.children[
        i
      ].style.transform = `translate(-50%, -50%) translate(${x}px, ${y}px) rotate(${rotation}rad)`;
    }
  }, 50); // 30ミリ秒ごとに回転

  setInterval(() => {
    radius = getResponsiveRadius(); // 毎回チェック（必要に応じて調整）
    rotationAngle += Math.PI / 180;
    for (let i = 0; i < text.length; i++) {
      const angle = angleIncrement * i + rotationAngle;
      const x = radius * Math.cos(angle);
      const y = radius * Math.sin(angle);
      const rotation = angle + Math.PI / 2;
      textWrapper.children[
        i
      ].style.transform = `translate(-50%, -50%) translate(${x}px, ${y}px) rotate(${rotation}rad)`;
    }
  }, 30);
}

function getResponsiveRadius() {
  const width = window.innerWidth;
  if (width <= 480) return 30; // スマホ
  if (width <= 768) return 40; // タブレット
  return 50; // PC
}

const slideUpText2 = document.querySelectorAll(".animation__text2");
new SplitType(slideUpText2);

slideUpText2.forEach((element) => {
  const chars = element.querySelectorAll(".char");
  gsap.to(chars, {
    y: 0, //最終の状態
    stagger: 0.1, //次のアニメーションまでの時間
    delay: 0.5, //遅延
  });
});


const swiper = new Swiper('.swiper', {
  loop: true,
  pagination: {
    el: '.swiper-pagination',
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

const WorkSwiper = new Swiper('.work__swiper', { //swiperの名前
  //切り替えのモーション
  speed: 6000, //表示切り替えのスピード
  effect: "slide", //切り替えのmotion (※1)
  allowTouchMove: true, // スワイプで表示の切り替えを有効に

  //最後→最初に戻るループ再生を有効に
  loop: true,
  //自動スライドについて
  autoplay: { 
    delay: 0, //何秒ごとにスライドを動かすか
    stopOnLastSlide: false, //最後のスライドで自動再生を終了させるか
    disableOnInteraction: true, //ユーザーの操作時に止める
    reverseDirection: false, //自動再生を逆向きにする
  },

   //表示について
  centeredSlides: true, //中央寄せにする
  slidesPerView: "auto",
  spaceBetween: 0,

});

document.addEventListener("DOMContentLoaded", () => {
  // フォント読み込みを監視
  document.fonts.ready.then(() => {
    const target = document.querySelector(".is-target");
    if (target) {
      target.classList.add("is-font-loaded");
    }
  });
});

