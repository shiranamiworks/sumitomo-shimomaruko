//進む
$('.scrollimage_rightbox').mousedown(function() {
    checkBA = 'a';
    if (count < tblScrlW) {
        $(this).css('opacity', '0.7');
        setItvF();
    }
}).mouseup(function() {
    if (count <= tblScrlW) {
         $(this).css('opacity', '0.4');
         clearInterval(setItv);
     }
});
 
//戻る
$('.scrollimage_leftbox').mousedown(function() {
    checkBA = 'b';
    if (0 < count) {
        $(this).css('opacity', '0.7');
        setItvF();
    }
}).mouseup(function() {
    if (0 <= count) {
        $(this).css('opacity', '0.4');
        clearInterval(setItv);
    }
});
});
$(window).one("load resize" ,function(){
	$('#wrap .box').scrollLeft(688);
});