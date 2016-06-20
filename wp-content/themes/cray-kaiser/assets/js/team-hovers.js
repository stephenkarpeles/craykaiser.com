jQuery(document).ready(function($){

	// teamBlock1
	$('.team-grid #teamBlock1 .col-md-3').find('h2').hover(function(){
		var member = $(this).attr('class').replace(/^(\S*).*/, '$1');
		$('.team-grid #teamBlock1 .col-md-9').children('.' + member).addClass('active'); 
	}, function() {
		var member = $(this).attr('class').replace(/^(\S*).*/, '$1');
		$('.team-grid #teamBlock1 .col-md-9').children('.' + member).removeClass('active');		  
	});

	$('.team-grid #teamBlock1 .col-md-9').find('div').hover(function(){
		var member = $(this).attr('class');
		$('.team-grid #teamBlock1 .col-md-3').children('.' + member).addClass('active');
	}, function() {
		var member = $(this).attr('class');
		$('.team-grid #teamBlock1 .col-md-3').children('.' + member).removeClass('active');
	});

	// teamBlock2
	$('.team-grid #teamBlock2 .col-md-3').find('h2').hover(function(){
		var member = $(this).attr('class').replace(/^(\S*).*/, '$1');
		$('.team-grid #teamBlock2 .col-md-9').children('.' + member).addClass('active'); 
	}, function() {
		var member = $(this).attr('class').replace(/^(\S*).*/, '$1');
		$('.team-grid #teamBlock2 .col-md-9').children('.' + member).removeClass('active');		  
	});

	$('.team-grid #teamBlock2 .col-md-9').find('div').hover(function(){
		var member = $(this).attr('class');
		$('.team-grid #teamBlock2 .col-md-3').children('.' + member).addClass('active');
	}, function() {
		var member = $(this).attr('class');
		$('.team-grid #teamBlock2 .col-md-3').children('.' + member).removeClass('active');
	});

	// teamBlock3
	$('.team-grid #teamBlock3 .col-md-3').find('h2').hover(function(){
		var member = $(this).attr('class').replace(/^(\S*).*/, '$1');
		$('.team-grid #teamBlock3 .col-md-9').children('.' + member).addClass('active'); 
	}, function() {
		var member = $(this).attr('class').replace(/^(\S*).*/, '$1');
		$('.team-grid #teamBlock3 .col-md-9').children('.' + member).removeClass('active');		  
	});

	$('.team-grid #teamBlock3 .col-md-9').find('div').hover(function(){
		var member = $(this).attr('class');
		$('.team-grid #teamBlock3 .col-md-3').children('.' + member).addClass('active');
	}, function() {
		var member = $(this).attr('class');
		$('.team-grid #teamBlock3 .col-md-3').children('.' + member).removeClass('active');
	});

  // teamBlock4
	$('.team-grid #teamBlock4 .col-md-3').find('h2').hover(function(){
		var member = $(this).attr('class').replace(/^(\S*).*/, '$1');
		$('.team-grid #teamBlock4 .col-md-9').children('.' + member).addClass('active'); 
	}, function() {
		var member = $(this).attr('class').replace(/^(\S*).*/, '$1');
		$('.team-grid #teamBlock4 .col-md-9').children('.' + member).removeClass('active');		  
	});

	$('.team-grid #teamBlock4 .col-md-9').find('div').hover(function(){
		var member = $(this).attr('class');
		$('.team-grid #teamBlock4 .col-md-3').children('.' + member).addClass('active');
	}, function() {
		var member = $(this).attr('class');
		$('.team-grid #teamBlock4 .col-md-3').children('.' + member).removeClass('active');
	});

});