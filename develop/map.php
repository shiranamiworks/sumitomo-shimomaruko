<!doctype html><?php
 $page_settings = array(
  "directory_pos" => "./",
  "page_id" => "map",
  "gnav_set" => "map",
  "page_class" => "map",
  "url" => "map.html",
  "title" => "���n�ē��}�b",
  "keywords" => "���n�ē��},",
  "description" => "���n�ē��}�y�[�W�B",
  "add_stylesheet" => ["css/map.css"],
  "add_script" =>  ["js/map.js"],
  "canonical_page_id" => "map",  
  "logo_text" => "���n�ē��}�b"
);
?>

<?php require(INCLUDES."header.php"); ?>

<main>
<section id="submaincontainer">
            	<h2 class="ttl"><img src="images/map/ttl.jpg" alt="���n�ē��}"></h2>
            	<div class="mapArea"><img src="images/map/map.jpg" alt="���n�ē��}" id="map1"></div>
				<p class="zip">��^�s�K�����y�n��搮�����Ɖ����n2�X��1��n<br><span>���Z���\���ł͂���܂���B</span></p>
				<div id="btnArea">
					<div id="GoogleMap"><a href="https://maps.app.goo.gl/mUfWGgeFfYVHMPBWA" target="_blank"><img src="images/map/btn_googlemap.jpg" alt="Google Map"></a></div>
					<div id="PrintMap"><a href="JavaScript:;" onclick="print_out(); return false;"><img src="images/map/btn_print.jpg" alt="���" class="pc"></a></div>
				</div>

	            <div class="container">
	                <p class="txt">��1.�G���A�}�b�v�̓k�����[�g��2023�N10�����݂̂��̂ł��B�u��^�s�K�����y�n��搮�����Ɓv�i���Ǝ�F��^�s�j�ɔ����n��O���H4��������ь𗬍L��E��ʍL��̐����i2026�N�x���Ɗ����\��j�ɂ��k�������E���[�g���ύX�ɂȂ�\��ł��B�܂��A�n��O���H4��������ь𗬍L��E��ʍL��͖�^�s�̏��L�ł���A�u�V�e�B�^���[�Ð싴�v�̏v�H���Ɋ������Ă��Ȃ��\��������܂��B���炩���߂��������������B<br>���f�ڂ̌��n�ē��}�͈ꕔ���H�E�{�ݓ��𔲐����ĕ\�L���Ă��܂��B</p>
	            </div>
            </section>
</main>

<?php require(INCLUDES."footer.php"); ?>
</body>
</html>
