$(function () {
  $(".slider").slick({
    autoplay: true,
    arrows: false,
    asNavFor: ".thumbnail",
  });
  // サムネイルのオプション
  $(".thumbnail").slick({
    slidesToShow: 3,
    asNavFor: ".slider",
    focusOnSelect: true,
  });
});
