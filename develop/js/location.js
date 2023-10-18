$(function($) {
   	if($(window).width() < 641){
         $(window).on("load", function() {
             var $img = $(".zoomImg").imgViewer2({
                     onReady: function() {
                         this.setZoom(2);
                         this.setZoom(1);
					}
                 }
             );
         });
    }
});
