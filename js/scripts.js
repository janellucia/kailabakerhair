jQuery(document).ready(function($) {


  // site preloader 
  $(window).load(function(){
    $('#preloader').fadeOut('slow',function(){
      $(this).remove();});
  });


//adjust bootstrap grid to make every other row a table of 3
$(".each-post:nth-child(3)").removeClass("col-md-6");
$( ".each-post:nth-child(3)").addClass("col-md-4");
$(".each-post:nth-child(4)").removeClass("col-md-6");
$( ".each-post:nth-child(4)").addClass("col-md-4");
$(".each-post:nth-child(5)").removeClass("col-md-6");
$( ".each-post:nth-child(5)").addClass("col-md-4");
$(".each-post:nth-child(8)").removeClass("col-md-6");
$( ".each-post:nth-child(8)").addClass("col-md-4");
$(".each-post:nth-child(9)").removeClass("col-md-6");
$( ".each-post:nth-child(9)").addClass("col-md-4");
$(".each-post:nth-child(10)").removeClass("col-md-6");
$( ".each-post:nth-child(10)").addClass("col-md-4");
$(".each-post:nth-child(13)").removeClass("col-md-6");
$( ".each-post:nth-child(13)").addClass("col-md-4");
$(".each-post:nth-child(14)").removeClass("col-md-6");
$( ".each-post:nth-child(14)").addClass("col-md-4");
$(".each-post:nth-child(15)").removeClass("col-md-6");
$( ".each-post:nth-child(15)").addClass("col-md-4");

}); //end of doc ready

$(function () {
	$('.site-title').textillate({
        in: {
            effect: 'fadeInUpBig',
            delayScale: 1.5,
            delay: 50,
            sequence: true,
            sync: false,
            shuffle: false,
            reverse: false,
            callback: function () {}
        },
        out: {
	    effect: 'fadeOutDownBig',
	    delayScale: 1.5,
	    delay: 50,
	    sync: false,
	    shuffle: false,
	    reverse: false,
	    callback: function () {}
	  }
    });

})