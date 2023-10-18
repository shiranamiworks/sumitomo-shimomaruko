<?php 
$plans_array = [
/*   "atype" =>
  [
    "A","3","LDK","+WIC","68",".75","a",
    "point"  => ["ウォークスルークローゼット","角住戸"]
  ], */

  "b1type" =>
  [
    "B1","3","LDK","+WTC+WIC+MC","66",".23","b1",
    "point"  => ["ウォークスルークローゼット","ウォークインクローゼット"]
  ],

  "c3type" =>
  [
    "C3","2","LDK+S","+WIC","70",".30","c3",
    "point"  => ["角住戸","ウォークインクローゼット"]
  ],
/* 
  "g2type" =>
  [
    "G2","2","LDK","+S","65",".30","g2",
    "point"  => ["専用庭","角住戸"]
  ],

  "jtype" =>
  [
    "J","2","LDK","+WIC+MC+SC","56",".60","j",
    "point"  => ["シューズクローク","ウォークインクローゼット"]
  ], 

  "ltype" =>
  [
    "L","3","LDK","+WIC","63",".30","l",
    "point"  => ["ウォークインクローゼット","対面式キッチン"]
  ],*/
  "htype" =>
  [
    "H","2","LDK","+WTC","54",".75","h",
    "point"  => ["対面式キッチン","ウォークスルークローゼット"]
  ],
/*  "mtype" =>
  [
    "M","2","LDK","+WTC","54",".75","h",
    "point"  => ["対面式キッチン","ウォークスルークローゼット"]
  ]
  "e2type" =>
  [
    "E2","2","LDK","+<span class='font-size150'>S</span>+WTC","63",".00","e2",
    "point"  => ["ウォークスルークローゼット","専用庭付"]
  ], */

 "ntype" =>
  [
    "N","3","LDK","+WIC","71",".90","n",
    "point"  => ["ルーフバルコニー","角住戸"]
  ]

];
$colored_words_array = array("ウォークスルークローゼット","ウォークインクローゼット");
$LDK100_array = array("");
$comentout_array = array("");
$is_top = (preg_match("@/plan/$@",$_SERVER["REQUEST_URI"]) || preg_match("@/plan/index.html$@",$_SERVER["REQUEST_URI"]) || preg_match("@/plan/index.php@",$_SERVER["REQUEST_URI"]) );
?>
<ul class="plans clearfix <?php if(!$is_top) echo "wrap"; ?>">
<?php
  foreach($plans_array as $key => $plan) {
  if(preg_match("@".$key."@",$_SERVER["REQUEST_URI"])) continue;
  if(in_array($key,$comentout_array)) echo "<!-- "; ?>
  <li>
    <a href="<?php pathto("plan/{$key}.html"); ?>">
      <div class="texts clearfix">
        <div class="type"><span class="alpha"><?php echo($plan[0]); ?></span><br>type</div>
        <div class="spec"><span class="emphasis"><span class="num"><?php echo($plan[1]); ?></span><?php echo($plan[2]); ?></span><?php echo($plan[3]); ?><br><span class="emphasis"><span class="num"><?php echo($plan[4]); ?></span><?php echo($plan[5]); ?>m<sup>2</sup></span></div>
      </div>
      <div class="thumb"><img src="<?php pathto("common/imgs/plan/thumb-".$plan[6].".png"); ?>" alt="<?php echo $key; ?>"></div>

      <?php if(!empty($plan["point"])){ ?>
      <ul class="points clearfix"> <?php foreach($plan["point"] as $i => $point){ ?>
        <li<?php if(in_array($point,$colored_words_array)){ ?> class="colored"<?php } ?>><?php echo($point); ?></li><?php } ?>
      </ul><?php } ?>
    </a>
  </li>
  <?php if(in_array($key,$comentout_array)) echo "--> "; } ?>
</ul>
