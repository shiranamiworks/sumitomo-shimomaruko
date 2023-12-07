$(function () {
  if ($(".swipe-img").length) {
    $(window).on("load resize", function () {
      if ($(".sp").is(":visible")) {
        var ww = $(this).width();
        $(".swipe-img.modify-starts").each(function () {
          var w = $(this).find("img.sp").length
            ? $(this).find("img.sp").width()
            : $(this).find("img").width();
          w =
            w +
            parseInt($(this).css("padding-left")) +
            parseInt($(this).css("padding-right"));
          var pos = w / 2 - ww / 2;
          if ($(this).hasClass("right-start")) {
            pos = w / 2 - w / 3;
          }
          $(this).animate({ scrollLeft: pos }, 30);
        });
      }
    });
  }
});
