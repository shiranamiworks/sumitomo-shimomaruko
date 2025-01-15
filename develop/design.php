<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "design",
  "gnav_set" => "design",
  "page_class" => "design",
  "url" => "design.html",
  "title" => "デザイン｜",
  "keywords" => "デザイン,",
  "description" => "デザインページ。",
  "add_stylesheet" => ["css/design.css"],
  "add_script" =>  ["js/design.js"],
  "canonical_page_id" => "design", 
  "logo_text" => "デザイン｜"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
	<!-- パンくずリスト -->
  <div class="breadcrumb sp-hide">
    <ul>
      <li><a href="./index.html">シティテラス下丸子　トップ</a></li>
      <li><p>デザイン</p></li>
    </ul>
  </div>
	<!--// パンくずリスト -->

  <header class="main-visual clearfix">
    <!-- <h2 class="page-lead gothic">Hello New World.</h2> -->
   <div class="image"><img src="./images/design/mv.jpg" alt="" class="pc"><img src="./images/design/mv-sp.jpg" alt="" class="tb"><p class="annotation white">Image photo</p></div>
  </header><!-- main-visual -->

  
  <section class="intro sections clearfix">
    <div class="inner">
      <p class="tit">FACADE DESIGN</p>
      <p class="txt01">街を飾る壮麗なる景観、<br class="sp">邸宅の美意識を物語る造形美。</p>
      <div class="tab-inner">
        <div class="slider">
          <div class="slick-img">
            <img src="./images/design/slide01.jpg">
            <p class="annotation white">外観完成予想図</p>
          </div>
          <div class="slick-img">
            <img src="./images/design/slide02.jpg">
            <p class="annotation white">外観完成予想図</p>
          </div>
          <div class="slick-img">
            <img src="./images/design/slide03.jpg">
            <p class="annotation white">外観完成予想図</p>
          </div>
        </div>
        <div class="thumbnail">
          <div class="thumbnail-img">
            <img src="./images/design/thumb01.jpg">
          </div>
          <div class="thumbnail-img">
            <img src="./images/design/thumb02.jpg">
          </div>
          <div class="thumbnail-img">
            <img src="./images/design/thumb03.jpg">
          </div>
        </div>
      </div><!-- tab-inner -->
      <p class="txt02">気品と重厚感を醸す大規模レジデンス。</p>
      <p class="lead">白とグレーを基調としたモノトーンの外観に、ガラス手摺がシャープな輝きを放つ洗練された意匠。<br>ひときわ際立つシンボリックなファサードが、新たな風景を刻みます。</p>
    </div>
  </section><!-- intro -->



  <div class="sections landscape clearfix">
    <p class="tit">LANDSCAPE</p>
    <div class="inner">
      <p class="txt">緑の潤いと開放感に満ちたランドスケープ</p>
      <p class="lead">総敷地面積８,200㎡超の広大な敷地に、各棟の見合いを避けるように住棟をゆったりとレイアウト。<br>プライバシー性や採光・通風などの居住性に配慮しています。</p>
      <div class="image img00">
      <img src="./images/design/landscape00.png">
      </div>
      <div class="image img-txt">
      <img src="./images/design/landscape-txt.svg">
      </div>
      <p class="txt line">美しい景観を創出する植栽計画</p>
      <p class="lead">敷地内の各所に、豊富で多彩な木々を植樹。<br>常緑樹のクスノキやシマトネリコ、四季を奏でるイロハモミジなど、自然の趣を日常的にお楽しみいただけます。</p>
      <ul class="list">
        <li>
          <div class="image">
          <img src="./images/design/landscape01.jpg">
          <p class="annotation">参考写真</p>
          </div>
          <p class="name">エゴノキ</p>
        </li>
        <li>
          <div class="image">
          <img src="./images/design/landscape02.jpg">
          <p class="annotation">参考写真</p>
          </div>
          <p class="name">イロハモミジ</p>
        </li>
        <li>
          <div class="image">
          <img src="./images/design/landscape03.jpg">
          <p class="annotation">参考写真</p>
          </div>
          <p class="name">クスノキ</p>
        </li>
        <li>
          <div class="image">
          <img src="./images/design/landscape04.jpg">
          <p class="annotation">参考写真</p>
          </div>
          <p class="name">シマトネリコ</p>
        </li>
    </div>
  </div>



<div class="annotation-area">
<p class="page-annotation js-scroll wrap clearfix">※掲載の完成予想図は計画段階の図面を基に描き起こしたもので、実際とは多少異なります。また、形状の細部および設備機器等については省略しております。<br>※敷地内の樹木等はある程度生育した後をイメージして描いたものです。また、葉や花の色合い、樹形等はイメージであり実際とは異なります。なお、植栽計画は変更される場合がありますので、あらかじめご了承ください。<br>※掲載の敷地配置イラストは、計画段階の図面を基に描き起こしたもので、形状・色等は実際とは多少異なります。また、一部敷地外の道路等を合わせて着彩しています。<br>※植栽参考写真は、イメージで実際とは異なります。</p></div>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
