<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "sitemap",
  "gnav_set" => "sitemap",
  "page_class" =>"sitemap",
  "url" => "sitemap.html",
  "title" => "サイトマップ｜",
  "keywords" => "サイトマップ,",
  "description" => "サイトマップページ。",
  "add_stylesheet" => ["css/sitemap.css"], 
  "canonical_page_id" => "sitemap", 
  "logo_text" => "サイトマップ｜"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
  <section id="submaincontainer">
  <h2 class="ttl">サイトマップ</h2>
  <div class="sitemap_area">
  <ul>
	<li class="top"><a href="/shuto/shimomaruko/">シティテラス下丸子 トップ</a></li>
	<li class="concept"><a href="concept.html">コンセプト</a></li>
	<li class="design"><a href="design.html">デザイン</a></li>
	<li class="public"><a href="public.html">共用空間</a></li>
	<!--li class="private"><span>室内空間
	（ <a href="private_01.html"></a> ／ <a href="private_02.html"></a> ）</span></li-->
	<li class="private">室内空間</li>
	<!--li class="plan"><a href="/tokai/higashibetsuin/list.php" target="_blank">間取り</a></li-->
	<li class="plan">間取り</li>
	<li class="equipment"><span>設備・仕様<br />
	（ <a href="equipment01.html">キッチン・サニタリー</a> ／ <a href="equipment02.html">健康・エコ・省エネ</a> ／ <a href="equipment03.html">収納</a> ／ <a href="equipment04.html">マルチメディア</a> ／ <a href="equipment05.html">快適仕様</a> ）</span></li>
	<li class="structure"><span>構造・防災
	（ <a href="structure01.html">基本構造</a> ／ <a href="structure02.html">セキュリティ</a> ／ <a href="structure03.html">防災対策</a> ）</span></li>
	<li class="location"><span>ロケーション<br />
	（ <a href="location01.html">様々な都市機能に近接</a> ／ <a href="location02.html">豊かな自然の潤いを身近に</a>／ <a href="location03.html">毎日を支える充実の利便施設</a> ）</span></li>
	<li class="access"><a href="access.html">アクセス</a></li>
	<li class="map"><a href="map.html" target="_blank">現地案内図</a></li>
	<li class="outline"><a href="javascript:outline()">物件概要</a></li>
	<li class="faq"><a href="/shuto/shimomaruko/faq.cgi" target="_blank">FAQ</a></li>
	<li class="sitemap"><a href="sitemap.html">サイトマップ</a></li>
	<script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=shuto&PROP_CD=shimomaruko&LINK=footer"></script>
	</ul>
    </div>
  </section>
</main>


<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
