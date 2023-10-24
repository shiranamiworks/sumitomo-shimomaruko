$(window).on("load resize", function () {
  if ($(window).width() < 640) {
    //コマ数・送りの設定
    var feed = 1;
    var frame = 1;

    //横幅取得・設定
    var tblWrapW = $("#wrap .box").outerWidth();
    var tblW = $(".scrollimage").outerWidth();
    var tblScrlW = parseInt(tblW - tblWrapW);
    $("#wrap .box").outerWidth(tblWrapW);
    $(".scrollimage").outerWidth(tblW);

    //カウント初期値
    var count = 0;
    //clearinterval対策
    var setItv = "";

    //スクロール値取得
    $("#wrap .box").scroll(function () {
      count = $(this).scrollLeft();
    });

    //移動設定
    var countUp = function () {
      if (checkBA === "a") {
        var count2 = count + feed;
        $("#wrap .box").scrollLeft(count2);
      } else {
        var count2 = count - feed;
        $("#wrap .box").scrollLeft(count2);
      }
    };
  }
  //インターバルの設定
  function setItvF() {
    setItv = setInterval(countUp, frame);
  }

  //進む
  $(".scrollimage_rightbox")
    .mousedown(function () {
      checkBA = "a";
      if (count < tblScrlW) {
        $(this).css("opacity", "0.7");
        setItvF();
      }
    })
    .mouseup(function () {
      if (count <= tblScrlW) {
        $(this).css("opacity", "0.4");
        clearInterval(setItv);
      }
    });

  //戻る
  $(".scrollimage_leftbox")
    .mousedown(function () {
      checkBA = "b";
      if (0 < count) {
        $(this).css("opacity", "0.7");
        setItvF();
      }
    })
    .mouseup(function () {
      if (0 <= count) {
        $(this).css("opacity", "0.4");
        clearInterval(setItv);
      }
    });
});

$(window).one("load resize", function () {
  $("#wrap .box").scrollLeft(688);
});
