<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "top",
  "gnav_set" => "top",
  "page_class" => "",
  "url" => "",
  "title" => "",
  "keywords" => "",
  "description" => "",
  "add_stylesheet" => ["css/top.css"],
  "add_script" =>  ["js/top.js"],
  "canonical_page_id" => "",
  "logo_text" => ""
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
  <div class="top-mv">
    <figure class="pc"><img src="./images/top/mv-pc.jpg" alt="" class="w_100"></figure>
      <div class="top-mv__slide tb">
        <figure><img src="./images/top/mv-sp.jpg" alt="" class="w_100"></figure>
      </div>
   </div><!--//top-mv -->
  
  <!-- バナースライド -->
  <div class="top-banner">
    <div class="container">
      <!-- バナー上 -->
        <script type="text/javascript" src="/bukken_manage/bukken_manage_banner.cgi?AREA_CD=shuto&PROP_CD=shimomaruko/&BANNER=first"></script>
      <!-- バナー下 -->
        <script type="text/javascript" src="/bukken_manage/bukken_manage_banner.cgi?AREA_CD=shuto&PROP_CD=shimomaruko/&BANNER=second"></script>
    </div>
  </div><!-- / バナースライド -->

  <!-- INFORMATION -->
  <section id="information-sec" class="ma_to50">
    <div class="container">
      <div class="top-sec-ttl">
        <h2>INFORMATION</h2>
      </div>
      <div class="information-box">
        <div class="information-box-wrapper">
          <div id="topics" class="informationTopics" data-area-cd="shuto" data-prop-cd="shimomaruko"></div>
        </div>
      </div>
    </div>
  </section><!-- / INFORMATION -->

  <section id="contents-sec" class="ma_to50">
    <div class="container">
      <div class="top-sec-ttl">
        <h2>CONTENTS</h2>
      </div>
      <div class="contents-link">
        <a href="./concept.html">
          <figure><img src="./images/top/img_concept.jpg" alt="コンセプト"></figure>
            <div class="contents-link__ttl">
              <p class="f-en">CONCEPT</p>
              <h3>コンセプト</h3>
            </div>
        </a>
        <a href="./location01.html">
          <figure><img src="./images/top/img_location.jpg" alt="ロケーション"></figure>
            <div class="contents-link__ttl">
              <p class="f-en">LOCATION</p>
              <h3>ロケーション</h3>
            </div>
        </a>
        <a href="./access.html">
          <figure><img src="./images/top/img_access.jpg" alt="アクセス"></figure>
            <div class="contents-link__ttl">
              <p class="f-en">ACCESS</p>
              <h3>アクセス</h3>
             </div>
        </a>
         <div class="ComingSoon">
          <div class="contents-link__ttl">
             <p class="f-en">Coming Soon</p>
          </div>
         </div>
        </div>
    </div>
  </section><!-- / CONTENTS -->


  
  <div class="container ma_to20 ma_bo20">
    <p class="caption">凡例）A:エアーズコート（グランドエントランス）、B:ブリーズコート（ノースエントランス）<br>※1. 「下丸子」駅（現地から蒲田方面出入口までA:徒歩9分／B:徒歩10分）より、東急多摩川線利用。「蒲田」駅でJR京浜東北線に乗り換え<br>※2. 「鵜の木」駅（現地から多摩川方面出入口までA:徒歩8分／B:徒歩7分）より、東急多摩川線利用。「多摩川」駅で東急東横線急行に乗り換え<br>※3. エアーズコート（グランドエントランス）から。ブリーズコート（ノースエントランス）からは徒歩6分。<br>※4. エアーズコート（グランドエントランス）から。ブリーズコート（ノースエントランス）からは徒歩3分。<br>※掲載の電車所要時間は待ち時間・乗り換え時間を含んだ通勤時の目安であり、時間帯により多少異なります。<br>※掲載の完成予想図は計画段階の図面を基に描き起こしたもので、実際とは多少異なります。また、形状の細部および設備機器等については省略しております。<br>※外構・植栽計画は今後変更される場合がありますので、あらかじめご了承ください。<br>※敷地内の樹木等はある程度生育した後をイメージして描いたものです。また、葉や花の色合い、樹形等はイメージであり実際とは異なります。<br>※徒歩分数表示については80ｍを1分として算出し、端数を切り上げたものです。</p>
  </div>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
