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
  
  <!-- �o�i�[�X���C�h -->
  <div class="top-banner">
    <div class="container">
      <!-- �o�i�[�� -->
        <script type="text/javascript" src="/bukken_manage/bukken_manage_banner.cgi?AREA_CD=shuto&PROP_CD=shimomaruko/&BANNER=first"></script>
      <!-- �o�i�[�� -->
        <script type="text/javascript" src="/bukken_manage/bukken_manage_banner.cgi?AREA_CD=shuto&PROP_CD=shimomaruko/&BANNER=second"></script>
    </div>
  </div><!-- / �o�i�[�X���C�h -->

  <!-- INFORMATION -->
  <section id="information-sec" class="ma_to50">
    <div class="container">
      <div class="top-sec-ttl">
        <h2>INFORMATION</h2>
      </div>
      <div class="information-box">
        <div class="information-box-wrapper">
          <div id="topics" class="informationTopics" data-area-cd="XXX" data-prop-cd="YYY"></div>
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
          <figure><img src="./images/top/img_concept.jpg" alt="�R���Z�v�g"></figure>
            <div class="contents-link__ttl">
              <p class="f-en">CONCEPT</p>
              <h3>�R���Z�v�g</h3>
            </div>
        </a>
        <a href="./location01.html">
          <figure><img src="./images/top/img_location.jpg" alt="���P�[�V����"></figure>
            <div class="contents-link__ttl">
              <p class="f-en">LOCATION</p>
              <h3>���P�[�V����</h3>
            </div>
        </a>
        <a href="./access.html">
          <figure><img src="./images/top/img_access.jpg" alt="�A�N�Z�X"></figure>
            <div class="contents-link__ttl">
              <p class="f-en">ACCESS</p>
              <h3>�A�N�Z�X</h3>
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
    <p class="caption">��1.���n���k��9���́u���ێq�v�w���A���}����������p�A�u���c�v��JR���l���k���i���펞�FJR���l���k�������j�ɏ�芷��<br>
��2.���n���k��7���́u�L�̖؁v�w���A���}����������p�A�u������v�œ��}�������}�s�ɏ�芷��<br>
���f�ڂ̓d�ԏ��v���Ԃ͑҂����ԁE��芷�����Ԃ��܂񂾒ʋΎ��i�J�b�R���͕��펞�j�̖ڈ��ł���A���ԑтɂ�葽���قȂ�܂��B<br>
���f�ڂ̊����\�z�}�͌v��i�K�̐}�ʂ���ɕ`���N���������̂ŁA���ۂƂ͑����قȂ�܂��B�܂��A�`��̍ו�����ѐݔ��@�퓙�ɂ��Ă͏ȗ����Ă���܂��B<br>
���O�\�E�A�͌v��͍���ύX�����ꍇ������܂��̂ŁA���炩���߂��������������B<br>
���~�n���̎��ؓ��͂�����x���炵������C���[�W���ĕ`�������̂ł��B�܂��A�t��Ԃ̐F�����A���`���̓C���[�W�ł�����ۂƂ͈قȂ�܂��B<br>
���k�������\���ɂ��Ă�80����1���Ƃ��ĎZ�o���A�[����؂�グ�����̂ł��B</p>
  </div>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
