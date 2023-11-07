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
<meta name="keywords" content="<?= $page_settings["keywords"] ?>�V�e�B�e���X���ێq,��c�� �}���V����,��c�� �V�z�}���V����,���ێq,�L�̖؉w,���}�������,��c��,�}���V����,�V�z�}���V����,�����}���V����,�Z�F�s���Y">
<meta name="description" content="<?= $page_settings["description"] ?>���}��������u�L�̖؉w�v�܂œk��7���B�Z�F�s���Y�̐V�z�}���V���������ێq�ɒa���B�y���݂Ӊ��ێq�z��c��̃}���V�����Ȃ�Z�F�s���Y�B">
<title><?= $page_settings["title"] ?>�y�����z�V�e�B�e���X���ێq�b��c��̐V�z�}���V�����b�Z�F�s���Y</title>
<meta property="og:url" content="https://www.sumitomo-rd-mansion.jp/<?= $folder_name?><?= $page_settings["url"] ?>">
<meta property="og:type" content="website" />
<meta property="og:title" content="<?= $page_settings["title"] ?>�y�����z�V�e�B�e���X���ێq�b��c��̐V�z�}���V�����b�Z�F�s���Y">
<meta property="og:description" content="<?= $page_settings["description"] ?>���}��������u�L�̖؉w�v�܂œk��7���B�Z�F�s���Y�̐V�z�}���V���������ێq�ɒa���B�y���݂Ӊ��ێq�z��c��̃}���V�����Ȃ�Z�F�s���Y�B">
<meta property="og:site_name" content="<?= $page_settings["title"] ?>�y�����z�V�e�B�e���X���ێq�b��c��̐V�z�}���V�����b�Z�F�s���Y">
<meta property="og:image" content="<?= $page_settings["directory_pos"] ?>images/top/ogp.jpg" />

<link rel="canonical" href="https://www.sumitomo-rd-mansion.jp/<?= $folder_name?><?= $page_settings["url"] ?>">
<!-- <link rel="icon" href="<?= $page_settings["directory_pos"]  ?>images/favicon.ico" alt="" id="favicon"> -->


<link rel="index" href="index.html">

<script src="<?= $page_settings["directory_pos"]  ?>js/jquery.js"></script>
<script>
// akam-sw.js install script version 1.3.6
"serviceWorker"in navigator&&"find"in[]&&function(){var e=new Promise(function(e){"complete"===document.readyState||!1?e():(window.addEventListener("load",function(){e()}),setTimeout(function(){"complete"!==document.readyState&&e()},1e4))}),n=window.akamServiceWorkerInvoked,r="1.3.6";if(n)aka3pmLog("akam-setup already invoked");else{window.akamServiceWorkerInvoked=!0,window.aka3pmLog=function(){window.akamServiceWorkerDebug&&console.log.apply(console,arguments)};function o(e){(window.BOOMR_mq=window.BOOMR_mq||[]).push(["addVar",{"sm.sw.s":e,"sm.sw.v":r}])}var i="/akam-sw.js",a=new Map;navigator.serviceWorker.addEventListener("message",function(e){var n,r,o=e.data;if(o.isAka3pm)if(o.command){var i=(n=o.command,(r=a.get(n))&&r.length>0?r.shift():null);i&&i(e.data.response)}else if(o.commandToClient)switch(o.commandToClient){case"enableDebug":window.akamServiceWorkerDebug||(window.akamServiceWorkerDebug=!0,aka3pmLog("Setup script debug enabled via service worker message"),v());break;case"boomerangMQ":o.payload&&(window.BOOMR_mq=window.BOOMR_mq||[]).push(o.payload)}aka3pmLog("akam-sw message: "+JSON.stringify(e.data))});var t=function(e){return new Promise(function(n){var r,o;r=e.command,o=n,a.has(r)||a.set(r,[]),a.get(r).push(o),navigator.serviceWorker.controller&&(e.isAka3pm=!0,navigator.serviceWorker.controller.postMessage(e))})},c=function(e){return t({command:"navTiming",navTiming:e})},s=null,m={},d=function(){var e=i;return s&&(e+="?othersw="+encodeURIComponent(s)),function(e,n){return new Promise(function(r,i){aka3pmLog("Registering service worker with URL: "+e),navigator.serviceWorker.register(e,n).then(function(e){aka3pmLog("ServiceWorker registration successful with scope: ",e.scope),r(e),o(1)}).catch(function(e){aka3pmLog("ServiceWorker registration failed: ",e),o(0),i(e)})})}(e,m)},g=navigator.serviceWorker.__proto__.register;if(navigator.serviceWorker.__proto__.register=function(n,r){return n.includes(i)?g.call(this,n,r):(aka3pmLog("Overriding registration of service worker for: "+n),s=new URL(n,window.location.href),m=r,navigator.serviceWorker.controller?new Promise(function(n,r){var o=navigator.serviceWorker.controller.scriptURL;if(o.includes(i)){var a=encodeURIComponent(s);o.includes(a)?(aka3pmLog("Cancelling registration as we already integrate other SW: "+s),navigator.serviceWorker.getRegistration().then(function(e){n(e)})):e.then(function(){aka3pmLog("Unregistering existing 3pm service worker"),navigator.serviceWorker.getRegistration().then(function(e){e.unregister().then(function(){return d()}).then(function(e){n(e)}).catch(function(e){r(e)})})})}else aka3pmLog("Cancelling registration as we already have akam-sw.js installed"),navigator.serviceWorker.getRegistration().then(function(e){n(e)})}):g.call(this,n,r))},navigator.serviceWorker.controller){var u=navigator.serviceWorker.controller.scriptURL;u.includes("/akam-sw.js")||u.includes("/akam-sw-preprod.js")||u.includes("/threepm-sw.js")||(aka3pmLog("Detected existing service worker. Removing and re-adding inside akam-sw.js"),s=new URL(u,window.location.href),e.then(function(){navigator.serviceWorker.getRegistration().then(function(e){m={scope:e.scope},e.unregister(),d()})}))}else e.then(function(){window.akamServiceWorkerPreprod&&(i="/akam-sw-preprod.js"),d()});if(window.performance){var w=window.performance.timing,l=w.responseEnd-w.responseStart;c(l)}e.then(function(){t({command:"pageLoad"})});var k=!1;function v(){window.akamServiceWorkerDebug&&!k&&(k=!0,aka3pmLog("Initializing debug functions at window scope"),window.aka3pmInjectSwPolicy=function(e){return t({command:"updatePolicy",policy:e})},window.aka3pmDisableInjectedPolicy=function(){return t({command:"disableInjectedPolicy"})},window.aka3pmDeleteInjectedPolicy=function(){return t({command:"deleteInjectedPolicy"})},window.aka3pmGetStateAsync=function(){return t({command:"getState"})},window.aka3pmDumpState=function(){aka3pmGetStateAsync().then(function(e){aka3pmLog(JSON.stringify(e,null,"\t"))})},window.aka3pmInjectTiming=function(e){return c(e)},window.aka3pmUpdatePolicyFromNetwork=function(){return t({command:"pullPolicyFromNetwork"})})}v()}}();</script>

<!-- �� �������牺�Ƀt���[�G���A��CSS�AJS���w�肵�Ă������� �� -->
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>font/fontawesome/./css/all.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/slick-theme.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/slick.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/reset.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/common.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/top.css">
<link rel="stylesheet" href="<?= $page_settings["directory_pos"]  ?>css/leaflet.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<link href="/proptopics/css/topics.css" rel="stylesheet" type="text/css" />
<!-- <link rel="stylesheet" href="./css/leaflet.css"> -->
<?php foreach($page_settings["add_stylesheet"] as $key => $value) { ?>
<link href="<?= $page_settings["directory_pos"]  ?><?= $value ?>" rel="stylesheet">
<?php }; ?>
<?php foreach($page_settings["add_script"] as $key => $value) { ?>
<script type="text/javascript" src="<?= $page_settings["directory_pos"]  ?><?= $value ?>"></script>
<?php }; ?>

<script src="<?= $page_settings["directory_pos"]  ?>js/jquery-3.6.3.min.js"></script>
<script src="<?= $page_settings["directory_pos"]  ?>js/slick.min.js"></script>
<script src="<?= $page_settings["directory_pos"]  ?>js/pop.js"></script>
<script src="<?= $page_settings["directory_pos"]  ?>js/common.js"></script>
<script type="text/javascript" src="/proptopics/js/topics.js" charset="EUC-JP"></script>
<script type="text/javascript" src="<?= $page_settings["directory_pos"]  ?>js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?= $page_settings["directory_pos"]  ?>js/leaflet.js"></script>
<script type="text/javascript" src="<?= $page_settings["directory_pos"]  ?>js/imgViewer2.js"></script>
<script type="text/javascript" src="<?= $page_settings["directory_pos"]  ?>js/script.js"></script>
<?php foreach($page_settings["add_script"] as $key => $value) { ?>
<script src="<?= $page_settings["directory_pos"]  ?><?= $value ?>"></script>
<?php }; ?>
<!-- init -->
<!-- �� ���������Ƀt���[�G���A��CSS�AJS���w�肵�Ă������� �� -->
</head>


<body id="<?= $page_settings["page_id"] ?>" class="<?= $page_settings["page_class"] ?>">
<div class="body-wrapper position-relative">   
<header id="header">
  <div class="header-wrapper d-flex align-items-center justify-content-between">
    <h1 class="header-logo">
      <a href="index.html">
        <figure><img src="<?= $page_settings["directory_pos"]  ?>images/common/logo-pc.png" alt=""></figure>
        <p>�L�̖؉w�k��7���b�V�e�B�e���X���ێq�b��c�� �V�z�}���V�����b<?= $page_settings["logo_text"]  ?>���݂Ӊ��ێq�b�Z�F�s���Y</p>
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
            <a href="<?= $page_settings["directory_pos"]  ?>"><span class="f-en">TOP</span><br>�g�b�v</a>
          </li>
          <li>
            <a href="<?= $page_settings["directory_pos"]  ?>concept.html"><span class="f-en">CONCEPT</span><br>�R���Z�v�g</a>
          </li>
          <li>
            <p><span class="f-en">DESIGN</span><br>�f�U�C��</p>
          </li>
          <li>
            <p><span class="f-en">COMMON SPACE</span><br>���p���</p>
          </li>
          <li>
            <p><span class="f-en">PRIVATE SPACE</span><br>�������</p>
          </li>
        </ul>
        <ul>
          <li>
            <p><span class="f-en">PLAN</span><br>�Ԏ��</p>
          </li>
          <li>
            <p><span class="f-en">EQUIPMENT �EQUALITY</span><br>�ݔ��E�d�l</p>
          </li>
          <li>
            <p><span class="f-en">STRUCTURE�ESAFETY</span><br>�\���E�h��</p>
          </li>
          <li class="has-child">
            <p class="active"><span class="f-en">LOCATION</span><br>���P�[�V����</p>
            <div class="sub-menu">
              <a href="<?= $page_settings["directory_pos"]  ?>location01.html">���ʂȓs�s�@�\�ɋߐ�</a>
              <a href="<?= $page_settings["directory_pos"]  ?>location02.html">�L���Ȏ��R�̏�����g�߂�</a>
              <a href="<?= $page_settings["directory_pos"]  ?>location03.html" class="finish">�������x����[���̗��֎{��</a>
            </div>
          </li>
          <li>
            <a href="<?= $page_settings["directory_pos"]  ?>access.html"><span class="f-en">ACCESS</span><br>�A�N�Z�X</a>
          </li>
        </ul>
      </nav>
      <div class="header-menu-right">
        <ul class="header-menu-btn">
          <script type="text/javascript" src="/bukken_manage/bukken_manage_entry_button.cgi?AREA_CD=shuto&PROP_CD=shimomaruko&LINK=header-menu"></script>
        </ul>
        <div class="header-menu-other">
          <ul>
            <li><a href="map.html" target="_blank">���n�ē��}</a></li>
            <li><a href="/shuto/shimomaruko/faq.cgi" target="_blank">FAQ</a></li>
            <li><a href="javascript:outline();">�����T�v</a></li>
            <li><p>�}���V�������u���O</p></li>
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
        <li><a href="<?= $page_settings["directory_pos"]  ?>">�g�b�v</a></li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>concept.html">�R���Z�v�g</a></li>
        <li>�f�U�C��</li>
        <li>���p���</li>
        <li>�������</li>
        <li>�Ԏ��</li>
        <li>�ݔ��E�d�l</li>
        <li>�\���E�h��</li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>location01.html">���P�[�V����</a></li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>access.html">�A�N�Z�X</a></li>
        <li><a href="<?= $page_settings["directory_pos"]  ?>map.html" target="_blank">���n�ē��}</a></li>
        <li><a href="javascript:outline();">�����T�v</a></li>
        <li><p href="javascript:blog();">�}���V�������u���O</p></li>
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