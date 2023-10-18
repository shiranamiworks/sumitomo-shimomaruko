<html lang="ja">
<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# website: https://ogp.me/ns/website#">
    <meta charset="Shift_JIS">
    <meta http-equiv="Content-Type" content="text/html; charset=Shift_JIS">
<?php
$site_setting = array(
  "area" => "shuto",
  "prop" => "shimomaruko",
  "tel_link" => "tel:0120112507",
  "meta_link" => "https://www.sumitomo-rd-mansion.jp/gallery/",
  "requested_only" => "#requested_only",
);
$folder_name = $site_setting["area"]."/".$site_setting["prop"]."/";
?>
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="<?= $page_settings["keywords"] ?>シティテラス下丸子,大田区 マンション,下丸子,鵜の木駅,東急多摩川線,大田区,マンション,新築マンション,分譲マンション,住友不動産">
<meta name="description" content="<?= $page_settings["description"] ?>東急多摩川線「鵜の木駅」まで徒歩7分分。住友不動産のマンションが下丸子に誕生。【すみふ下丸子】大田区のマンションなら住友不動産。">
<title><?= $page_settings["title"] ?>【公式】シティテラス下丸子｜大田区のマンション｜住友不動産</title>
<meta property="og:url" content="https://www.sumitomo-rd-mansion.jp/<?= $folder_name?><?= $page_settings["url"] ?>">
<meta property="og:type" content="website" />
<meta property="og:title" content="<?= $page_settings["title"] ?>【公式】シティテラス下丸子｜大田区のマンション｜住友不動産">
<meta property="og:description" content="<?= $page_settings["description"] ?>東急多摩川線「鵜の木駅」まで徒歩7分分。住友不動産のマンションが下丸子に誕生。【すみふ下丸子】大田区のマンションなら住友不動産。">
<meta property="og:site_name" content="<?= $page_settings["title"] ?>【公式】シティテラス下丸子｜大田区のマンション｜住友不動産">
<meta property="og:image" content="<?= $page_settings["directory_pos"] ?>images/top/ogp.jpg" />

<!-- <link rel="canonical" href="https://www.sumitomo-rd-mansion.jp/<?= $folder_name?><?= $page_settings["url"] ?>">
<link rel="icon" href="<?= $page_settings["directory_pos"]  ?>images/favicon.ico" alt="" id="favicon"> -->


<link rel="index" href="index.html">

<script src="<?= $page_settings["directory_pos"]  ?>js/jquery.js"></script>
<script>
// akam-sw.js install script version 1.3.6
"serviceWorker"in navigator&&"find"in[]&&function(){var e=new Promise(function(e){"complete"===document.readyState||!1?e():(window.addEventListener("load",function(){e()}),setTimeout(function(){"complete"!==document.readyState&&e()},1e4))}),n=window.akamServiceWorkerInvoked,r="1.3.6";if(n)aka3pmLog("akam-setup already invoked");else{window.akamServiceWorkerInvoked=!0,window.aka3pmLog=function(){window.akamServiceWorkerDebug&&console.log.apply(console,arguments)};function o(e){(window.BOOMR_mq=window.BOOMR_mq||[]).push(["addVar",{"sm.sw.s":e,"sm.sw.v":r}])}var i="/akam-sw.js",a=new Map;navigator.serviceWorker.addEventListener("message",function(e){var n,r,o=e.data;if(o.isAka3pm)if(o.command){var i=(n=o.command,(r=a.get(n))&&r.length>0?r.shift():null);i&&i(e.data.response)}else if(o.commandToClient)switch(o.commandToClient){case"enableDebug":window.akamServiceWorkerDebug||(window.akamServiceWorkerDebug=!0,aka3pmLog("Setup script debug enabled via service worker message"),v());break;case"boomerangMQ":o.payload&&(window.BOOMR_mq=window.BOOMR_mq||[]).push(o.payload)}aka3pmLog("akam-sw message: "+JSON.stringify(e.data))});var t=function(e){return new Promise(function(n){var r,o;r=e.command,o=n,a.has(r)||a.set(r,[]),a.get(r).push(o),navigator.serviceWorker.controller&&(e.isAka3pm=!0,navigator.serviceWorker.controller.postMessage(e))})},c=function(e){return t({command:"navTiming",navTiming:e})},s=null,m={},d=function(){var e=i;return s&&(e+="?othersw="+encodeURIComponent(s)),function(e,n){return new Promise(function(r,i){aka3pmLog("Registering service worker with URL: "+e),navigator.serviceWorker.register(e,n).then(function(e){aka3pmLog("ServiceWorker registration successful with scope: ",e.scope),r(e),o(1)}).catch(function(e){aka3pmLog("ServiceWorker registration failed: ",e),o(0),i(e)})})}(e,m)},g=navigator.serviceWorker.__proto__.register;if(navigator.serviceWorker.__proto__.register=function(n,r){return n.includes(i)?g.call(this,n,r):(aka3pmLog("Overriding registration of service worker for: "+n),s=new URL(n,window.location.href),m=r,navigator.serviceWorker.controller?new Promise(function(n,r){var o=navigator.serviceWorker.controller.scriptURL;if(o.includes(i)){var a=encodeURIComponent(s);o.includes(a)?(aka3pmLog("Cancelling registration as we already integrate other SW: "+s),navigator.serviceWorker.getRegistration().then(function(e){n(e)})):e.then(function(){aka3pmLog("Unregistering existing 3pm service worker"),navigator.serviceWorker.getRegistration().then(function(e){e.unregister().then(function(){return d()}).then(function(e){n(e)}).catch(function(e){r(e)})})})}else aka3pmLog("Cancelling registration as we already have akam-sw.js installed"),navigator.serviceWorker.getRegistration().then(function(e){n(e)})}):g.call(this,n,r))},navigator.serviceWorker.controller){var u=navigator.serviceWorker.controller.scriptURL;u.includes("/akam-sw.js")||u.includes("/akam-sw-preprod.js")||u.includes("/threepm-sw.js")||(aka3pmLog("Detected existing service worker. Removing and re-adding inside akam-sw.js"),s=new URL(u,window.location.href),e.then(function(){navigator.serviceWorker.getRegistration().then(function(e){m={scope:e.scope},e.unregister(),d()})}))}else e.then(function(){window.akamServiceWorkerPreprod&&(i="/akam-sw-preprod.js"),d()});if(window.performance){var w=window.performance.timing,l=w.responseEnd-w.responseStart;c(l)}e.then(function(){t({command:"pageLoad"})});var k=!1;function v(){window.akamServiceWorkerDebug&&!k&&(k=!0,aka3pmLog("Initializing debug functions at window scope"),window.aka3pmInjectSwPolicy=function(e){return t({command:"updatePolicy",policy:e})},window.aka3pmDisableInjectedPolicy=function(){return t({command:"disableInjectedPolicy"})},window.aka3pmDeleteInjectedPolicy=function(){return t({command:"deleteInjectedPolicy"})},window.aka3pmGetStateAsync=function(){return t({command:"getState"})},window.aka3pmDumpState=function(){aka3pmGetStateAsync().then(function(e){aka3pmLog(JSON.stringify(e,null,"\t"))})},window.aka3pmInjectTiming=function(e){return c(e)},window.aka3pmUpdatePolicyFromNetwork=function(){return t({command:"pullPolicyFromNetwork"})})}v()}}();</script>

<!-- ▼ ここから下にフリーエリアのCSS、JSを指定してください ▼ -->
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>font/fontawesome/./css/all.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/slick-theme.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/slick.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/reset.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/common.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/top.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<link href="/proptopics/css/topics.css" rel="stylesheet" type="text/css" />
<!-- <link rel="stylesheet" href="./css/leaflet.css"> -->
<?php foreach($page_settings["add_stylesheet"] as $key => $value) { ?>
<link href="<?= $page_settings["directory_pos"]  ?><?= $value ?>" rel="stylesheet">
<?php }; ?>
<?php foreach($page_settings["add_script"] as $key => $value) { ?>
<script src="<?= $page_settings["directory_pos"]  ?><?= $value ?>"></script>
<?php }; ?>
<!-- init -->
<!-- ▲ ここから上にフリーエリアのCSS、JSを指定してください ▲ -->
</head>


<body id="<?= $page_settings["page_id"] ?>" class="<?= $page_settings["page_class"] ?>">
<div class="body-wrapper position-relative">   
<header id="header">
  <div class="header-wrapper d-flex align-items-center justify-content-between">
    <h1 class="header-logo">
      <a href="index.html">
        <figure><img src="<?= $page_settings["directory_pos"]  ?>images/common/logo-pc.png" alt=""></figure>
        <p>鵜の木駅徒歩7分｜シティテラス下丸子｜大田区 マンション｜<?= $page_settings["logo_text"]  ?>すみふ下丸子｜住友不動産</p>
      </a>
    </h1><!-- header-logo -->
    <div class="header-right d-flex">
               <script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=shuto&PROP_CD=shimomaruko&LINK=header"></script>
                    <div id="sp-menu-btn" class="hamburger">
                        <p>MENU</p>
                        <div class="menu-trigger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
    </div>
    <div class="header-menu black">
      <div class="container d-flex flex-wrap justify-content-between align-items-start">
        <nav>
         <ul>
          <li>
            <a href="<?= $page_settings["directory_pos"]  ?>"><span class="f-en">TOP</span><br>トップ</a>
          </li>
          <li>
            <a href="<?= $page_settings["directory_pos"]  ?>concept.html"><span class="f-en">CONCEPT</span><br>コンセプト</a>
          </li>
          <li>
            <p><span class="f-en">DESIGN</span><br>デザイン</p>
          </li>
          <li>
            <p><span class="f-en">COMMON SPACE</span><br>共用空間</p>
          </li>
          </li>
          <li>
            <p><span class="f-en">PRIVATE SPACE</span><br>室内空間</p>
          </li>
        </ul>
        <ul>
          <li>
            <p><span class="f-en">PLAN</span><br>間取り</p>
          </li>
          <li>
            <p><span class="f-en">EQUIPMENT ・QUALITY</span><br>設備・仕様</p>
          </li>
          <li>
            <p><span class="f-en">STRUCTURE・SAFETY</span><br>構造・防災</p>
          </li>
          <li class="has-child">
            <p class="active"><span class="f-en">LOCATION</span><br>ロケーション</p>
            <div class="sub-menu">
              <a href="<?= $page_settings["directory_pos"]  ?>location01.html">様々な都市機能に近接する「下丸子」</a>
              <a href="<?= $page_settings["directory_pos"]  ?>location02.html" class="finish">豊かな自然の潤いを身近に</a>
              <a href="<?= $page_settings["directory_pos"]  ?>location03.html" class="finish">毎日を支える充実の利便施設</a>
            </div>
          </li>
          <li>
            <a href="<?= $page_settings["directory_pos"]  ?>access.html"><span class="f-en">ACCESS</span><br>アクセス</a>
          </li>
        </ul>
      </nav>
      <div class="header-menu-right">
        <ul class="header-menu-btn">
          <script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=shuto&PROP_CD=shimomaruko&LINK=header-menu"></script>
        </ul>
        <div class="header-menu-other">
          <ul>
            <li><a href="map.html" target="_blank">現地案内図</a></li>
            <li><a href="/shuto/shimomaruko/faq.cgi" target="_blank">FAQ</a></li>
            <li><a href="javascript:outline();">物件概要</a></li>
            <li><p>マンション情報ブログ</p></li>
          </ul>
          <div class="header-sns">
            <a href="https://twitter.com/shimomaruko" target="_blank"><img src="./images/common/icn_twitter.png" alt="Twitter"></a>
            <a href="https://www.instagram.com/shimomaruko" target="_blank"><img src="./images/common/icn_instagram.png" alt="Instagram"></a>
          </div>
        </div>
      </div>
    </div>
  </div><!--//header-menu -->
  <div class="sp-menu">
    <nav>
      <ul>
        <li><a href="<?= $page_settings["directory_pos"]  ?>">トップ</a></li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>concept.html">コンセプト</a></li>
        <li>デザイン</li>
        <li>共用空間</li>
        <li>室内空間</li>
        <li>間取り</li>
        <li>設備・仕様</li>
        <li>構造・防災</li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>location01.html">ロケーション</a></li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>access.html">アクセス</a></li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>map.html" target="_blank">現地案内図</a></li>
        <li><a href="javascript:outline();">物件概要</a></li>
        <li><a href="javascript:blog();">マンション情報ブログ</a></li>
        <li><a href="/shuto/shimomaruko/faq.cgi" target="_blank">FAQ</a></li>
        <script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=shuto&PROP_CD=shimomaruko&LINK=sp-menu"></script>
      </ul>
    </nav>
    <div class="sp-menu-sns d-flex justify-content-center align-items-center">
      <a href="https://twitter.com/shimomaruko" target="_blank"><img src="./images/common/icn_twitter.png" alt="Twitter"></a>
       <a href="https://www.instagram.com/shimomaruko" target="_blank"><img src="./images/common/icn_instagram.png" alt="Instagram"></a>
    </div>
  </div><!--//sp-menu -->
</header>
<!-- #header -->