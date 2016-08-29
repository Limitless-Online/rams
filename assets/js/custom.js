$ = jQuery;

$(document).ready(function(){
	
	$('ul.iterate-menu>a>li.iterate-menu-item').click(function(){
		$('ul.iterate-menu>a>li.iterate-menu-item').removeClass('iterate-menu-item-selected');
		$(this).addClass('iterate-menu-item-selected');
	});
	
	$('.btn-menu').click(function(){
		$('sidebar').toggle(300);
	});
	
	$('ul.pivot-decision li').click(function(){
		$('ul.pivot-decision li').removeClass('selected');
		$(this).addClass('selected');
		return false;
	});
	
	$('ul.iterate-phases>a>li.iterate-phase-item').click(function(){
		$('ul.iterate-phases>a>li.iterate-phase-item').removeClass('selected');
		$(this).addClass('selected');
		return false;
	});
	
	$('.whattoleverage-container article.whattoleverage-item span').click(function(){
		if ( $(this).attr('data-select')=="true" ){
			$(this).attr('data-select',"false");
			$(this).removeClass('selected');
		}else{
			$(this).attr('data-select',"true");
			$(this).addClass('selected');
		}
	});
	
	$('.blockers-container article.blockers-item span').click(function(){
		if ( $(this).attr('data-select')=="true" ){
			$(this).attr('data-select',"false");
			$(this).removeClass('selected');
		}else{
			$(this).attr('data-select',"true");
			$(this).addClass('selected');
		}
	});
	
	$('.deliverytype-container article span').click(function(){
		if ( $(this).attr('data-select')=="true" ){
			$(this).attr('data-select',"false");
			$(this).removeClass('selected');
		}else{
			$(this).attr('data-select',"true");
			$(this).addClass('selected');
		}
	});
	
	$('.initiativetype-container article span').click(function(){
		if ( $(this).attr('data-select')=="true" ){
			$(this).attr('data-select',"false");
			$(this).removeClass('selected');
		}else{
			$(this).attr('data-select',"true");
			$(this).addClass('selected');
		}
	});
	
	$('.typeofinnovation article span').click(function(){
		if ( $(this).attr('data-select')=="true" ){
			$(this).attr('data-select',"false");
			$(this).removeClass('selected');
		}else{
			$(this).attr('data-select',"true");
			$(this).addClass('selected');
		}
	});
	
	$('.market-segment-container section span').click(function(){
		if ( $(this).attr('data-select')=="true" ){
			$(this).attr('data-select',"false");
			$(this).removeClass('selected');
		}else{
			$(this).attr('data-select',"true");
			$(this).addClass('selected');
		}
	});
	
	$('.investmentapproach-item span').click(function(){
		if ( $(this).attr('data-select')=="true" ){
			$(this).attr('data-select',"false");
			$(this).removeClass('selected');
		}else{
			$(this).attr('data-select',"true");
			$(this).addClass('selected');
		}
	});
	
	$( ".targetstart-date" ).datepicker();
	$( ".targetend-date" ).datepicker();
	$( ".golive-date" ).datepicker();
	
	$('.when-date-container').children('span').click(function(){
		$(this).siblings('input').datepicker("show");
	});
	
	$('img.chk_continuous_improvement').click(function(){
		if ( $(this).attr('data-checked') == "true" ){
			var rootpath = $(this).attr('rootpath');
			$(this).attr('data-checked',false);
			$(this).attr('src',rootpath+"uncheck-checkbox.png");
		}else{
			var rootpath = $(this).attr('rootpath');
			$(this).attr('data-checked',true);
			$(this).attr('src',rootpath+"check-checkbox.png");
		}
	});
	
	$('img.chk_investsummary').click(function(){
		if ( $(this).attr('data-checked') == "true" ){
			var rootpath = $(this).attr('rootpath');
			$(this).attr('data-checked',false);
			$(this).attr('src',rootpath+"invest-checkbox-uncheck.png");
		}else{
			var rootpath = $(this).attr('rootpath');
			$(this).attr('data-checked',true);
			$(this).attr('src',rootpath+"invest-checkbox.png");
		}
	});
	
	$('img.chk_success_measure').click(function(){
		if ( $(this).attr('data-checked') == "true" ){
			var rootpath = $(this).attr('rootpath');
			$(this).attr('data-checked',false);
			$(this).attr('src',rootpath+"iteratecheckbox-uncheck.png");
		}else{
			var rootpath = $(this).attr('rootpath');
			$(this).attr('data-checked',true);
			$(this).attr('src',rootpath+"iteratecheckbox-check.png");
		}
	});
	
	$('img.chk_success_measures').click(function(){
		if ( $(this).attr('data-checked') == "true" ){
			var rootpath = $(this).attr('rootpath');
			$(this).attr('data-checked',false);
			$(this).attr('src',rootpath+"iteratecheckbox-uncheck.png");
		}else{
			var rootpath = $(this).attr('rootpath');
			$(this).attr('data-checked',true);
			$(this).attr('src',rootpath+"iteratecheckbox-check.png");
		}
	});
	
	$('img.switch_focus').click(function(){
		if ( $(this).attr('data-focus') == "internal" ){
			var rootpath = $(this).attr('rootpath');
			$(this).attr('data-focus',"external");
			$(this).attr('src',rootpath+"focus-external.png");
		}else{
			var rootpath = $(this).attr('rootpath');
			$(this).attr('data-focus',"internal");
			$(this).attr('src',rootpath+"focus-internal.png");
		}
	});
	
	$('.slider').slider({range:"min",value:0,min:0,max:2}).slider('pips', { 
		rest: 'label', 
		labels: ['Re-active', 'Tactical', 'Strategic'] 
	});
	
	$('.slider-howmuchdoyouneed').slider({range:"min",min:0,step:25,value:100,max:200}).slider('pips', { 
		rest: 'label',  
		prefix: '$' , 
		suffix: 'K'
	});
	
	$('.slider-overallriskrating').slider({range:"min",min:0,value:0,max:2}).slider('pips', { 
		rest: 'label', 
		labels: ['Low', 'Medium', 'High'] 
	});
	
});