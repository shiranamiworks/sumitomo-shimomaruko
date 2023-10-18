$(function ($) {
  if ($(window).width() < 641) {
    $(window).on("load", function () {
      var $img = $(".zoomImg").imgViewer2({
        onReady: function () {
          this.setZoom(2);
          this.setZoom(1);
        },
      });
    });
  }
});

$(function () {
  if ($("#location").length) {
    $(".change-buttons .button").on("click", function (e) {
      e.preventDefault();
      var _target = $(this).data("target");
      $(".change-buttons .button").removeClass("current");
      $(this).addClass("current");
      $(".tab-inner").removeClass("current");
      $(".tab-inner." + _target).addClass("current");
    });
  }
});
