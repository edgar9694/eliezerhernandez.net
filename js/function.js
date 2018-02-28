$(document).ready(function(){
  $("[href='#editimg']").click(function() {
    $("#editvid").hide();
    $("#editvim").hide();
    $("#editimg").show();
 });
 $("[href='#editvim']").click(function() {
   $("#editvid").hide();
   $("#editimg").hide();
   $("#editvim").show();
});
 $("[href='#editvid']").click(function() {
   $("#editimg").hide();
   $("#editvim").hide();
   $("#editvid").show();
 });
 $("[href='#imguser']").click(function() {
   $("#imguser").show();
 });
  $("[href='#bodas1']").click(function(){
	$("#sesiones1").hide();
  $("#elige").hide();
	$("#cont1").hide();
	$("#bodas1").show();
  });
  $("[href='#sesiones1']").click(function(){
	$("#bodas1").hide();
  $("#elige").hide();
	$("#cont1").hide();
	$("#sesiones1").show();
  });
  $("input[name=checktodos]").change(function(){
		$('input[class=checklote]').each( function() {
			if($("input[name=checktodos]:checked").length == 1){
				this.checked = true;
			} else {
				this.checked = false;
			}
		});
	});
  $("input[name=checktodos1]").change(function(){
		$('input[class=checklote1]').each( function() {
			if($("input[name=checktodos1]:checked").length == 1){
				this.checked = true;
			} else {
				this.checked = false;
			}
		});
	});
  $("input[name=checktodos2]").change(function(){
		$('input[class=checklote2]').each( function() {
			if($("input[name=checktodos2]:checked").length == 1){
				this.checked = true;
			} else {
				this.checked = false;
			}
		});
	});





  $('.venobox').venobox();
  /* auto-open #firstlink on page load */
     $("#firstlink").venobox().trigger('click');

  $('.popup-gallery').magnificPopup({
 		delegate: 'a',
 		type: 'image',
 		tLoading: 'Loading image #%curr%...',
 		mainClass: 'mfp-img-mobile',
 		gallery: {
 			enabled: true,
 			navigateByImgClick: true,
 			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
 		},
 		image: {
 			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
 			titleSrc: function(item) {
 				return item.el.attr('title') + '<small>by Marsel Van Oosten</small>';
 			}
 		}
 	});




   $('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});








});
