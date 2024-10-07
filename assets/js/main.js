console.log("Test from main.js")

// quick slide
jQuery(document).ready(function($){
  $('.office__imgArea').slick({
      infinite: true,
      slidesToShow: 5,
      slidesToScroll: 2,
      autoplay: true,
      autoplaySpeed: 2000
  });
});

// =======================================
// トップボタンへ戻るボタン
// =======================================
const goTopBtn = document.querySelector(".goTopBtn");

// スクロールイベントのパフォーマンスを最適化する関数（throttle）
// scrollイベントを 指定した時間（delay）ごとに 1 回だけ実行するように制御
// タイマーが終了したらコールバック関数を実行
const throttle = (callback, delay) => {
  let timeoutId;
  return () => {
    if (!timeoutId) {
      timeoutId = setTimeout(() => {
        callback();
        timeoutId = null;
      }, delay);
    }
  };
};

// スクロールイベントを監視し、ボタンの表示/非表示を切り替え
const handleScroll = () => {
  if (window.pageYOffset > 300) {
    goTopBtn.classList.add("active");
  } else {
    goTopBtn.classList.remove("active");
  }
};

// スクロールイベントを最適化して追加
window.addEventListener("scroll", throttle(handleScroll, 200));

// ボタンをクリックするとトップへスムーズにスクロール
goTopBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});
