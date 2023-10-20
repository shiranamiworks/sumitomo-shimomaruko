<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "concept",
  "gnav_set" => "concept",
  "page_class" => "concept",
  "url" => "concept.html",
  "title" => "コンセプト｜",
  "keywords" => "コンセプト,",
  "description" => "コンセプトページ。",
  "add_stylesheet" => ["css/concept.css"],
  "add_script" =>  [],
  "canonical_page_id" => "concept", 
  "logo_text" => "コンセプト｜"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
	<!-- パンくずリスト -->
  <div class="breadcrumb sp-hide">
    <ul>
      <li><a href="./index.html">シティテラス下丸子　トップ</a></li>
      <li><p>コンセプト</p></li>
    </ul>
  </div>
	<!--// パンくずリスト -->

  <header class="main-visual clearfix">
    <!-- <h2 class="page-lead gothic">Hello New World.</h2> -->
   <div class="image"><img src="./images/concept/mv.jpg" alt="" class="pc"><img src="./images/concept/mv-sp.jpg" alt="" class="sp"><p class="annotation white">航空写真</p></div>
  </header><!-- main-visual -->

  
  <section class="intro sections clearfix">
    <div class="inner">
      <p class="text">進化する都心を身近に感じながら、<br class="pc">多摩川の水辺に連なる自然を享受する。<br>街の新たな象徴となる美しい佇まいに誇りを抱きながら、<br class="pc">洗練された共用空間とゆとりの住空間に癒される。<br>総敷地面積8,200㎡超、全233邸「シティテラス下丸子」。<br>思い描いていた日々を、今ここに。</p>
      </div>
  </section><!-- intro -->



<div class="annotation-area">
<p class="page-annotation js-scroll wrap clearfix">※掲載の航空写真は川崎市中原区上平間付近上空から北方面を撮影（2023年8月）したものに現地部分の光などＣＧ合成・加工をしたものです。また、周辺環境は将来変わる場合があります。<br>※掲載の距離は現地から地図上の概測直線距離です。</p></div>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
