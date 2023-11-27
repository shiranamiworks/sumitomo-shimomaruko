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
    <p class="caption">※1. 門真市幸福東土地区画整理事業［2025年度完了予定］出典：大阪府ホームぺージ（2023年9月現在）<br>
※2. 掲載の徒歩分数は2023年10月現在のものです。「門真市幸福東土地区画整理事業」（事業主：門真市）に伴う地区外道路4号線および交流広場・交通広場の整備（2026年度事業完了予定）により徒歩分数・ルートが変更になる予定です。<br>
また、地区外道路4号線および交流広場・交通広場は門真市の所有であり、「シティタワー古川橋」の竣工時に完成していない可能性があります。あらかじめご了承ください。<br>
※3. 1995年1月～2023年6月までに門真市内で新規供給された分譲マンションのうち、本プロジェクトの総戸数648戸は過去最大規模の戸数であり、41階建ては過去最高層となります。（有）MRC調べ（2023年9月現在）<br>
※4. 京阪本線「古川橋」駅より京阪本線区間急行利用（平常時：京阪本線区間急行利用、「守口市」駅で京阪本線準急に乗換）<br>
※5. 京阪本線「古川橋」駅より京阪本線区間急行利用、「京橋」駅でJR大阪環状線に乗換（平常時：京阪本線利用、「守口市」駅で京阪本線準急に乗換、「京橋」駅でJR大阪環状線関空快速に乗換）<br>
※掲載の所要時間は待ち時間・乗り換え時間を含んだ通勤時（カッコ内は平常時）の目安であり、時間帯により多少異なります。<br>
※掲載の完成予想図は計画段階の図面を基に描き起こしたもので、実際とは多少異なります。また、形状の細部および設備機器等については省略しております。<br>
※外構・植栽計画は今後変更される場合がありますので、あらかじめご了承ください。<br>
※敷地内の樹木等はある程度生育した後をイメージして描いたものです。また、葉や花の色合い、樹形等はイメージであり実際とは異なります。なお、植栽計画は変更される場合がありますので、あらかじめご了承ください。
</p>
  </div>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
