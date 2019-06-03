(function($) {

	// Breakpoints.
		skel.breakpoints({
			xlarge:	'(max-width: 1680px)',
			large:	'(max-width: 1280px)',
			medium:	'(max-width: 980px)',
			small:	'(max-width: 736px)',
			xsmall:	'(max-width: 480px)'
		});

	$(function() {

		var	$window = $(window),
			$body = $('body');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				window.setTimeout(function() {
					$body.removeClass('is-loading');
				}, 100);
			});

		// Prioritize "important" elements on medium.
			skel.on('+medium -medium', function() {
				$.prioritize(
					'.important\\28 medium\\29',
					skel.breakpoint('medium').active
				);
			});

	// Off-Canvas Navigation.

		// Navigation Panel.
			$(
				'<div id="navPanel">' +
					$('#nav').html() +
					'<a href="#navPanel" class="close"></a>' +
				'</div>'
			)
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'left'
				});

		// Fix: Remove transitions on WP<10 (poor/buggy performance).
			if (skel.vars.os == 'wp' && skel.vars.osVersion < 10)
				$('#navPanel')
					.css('transition', 'none');

	});

})(jQuery);



$(document).ready(function () {

	// Iframes 
	$( "#perfil" ).click(function() {
		document.getElementById('main-section').src = '../templates/perfil.html';
	});
	//Modulo 1
	$( "#m1t1" ).click(function() {
		document.getElementById('main-section').src = '../templates/modulo1tema1.html';
	});

	$( "#m1t2" ).click(function() {
		document.getElementById('main-section').src = '../templates/modulo1tema2.html';
	});

	$( "#m1t3" ).click(function() {
		document.getElementById('main-section').src = '../templates/modulo1tema3.html';
	});

	$( "#m1t4" ).click(function() {
		document.getElementById('main-section').src = '../templates/modulo1tema4.html';
	});


	//Modulo 2
	$( "#m2t1" ).click(function() {
		document.getElementById('main-section').src = '../templates/modulo2tema1.html';
	});

	$( "#m2t2" ).click(function() {
		document.getElementById('main-section').src = '../templates/modulo2tema2.html';
	});

	$( "#m2t3" ).click(function() {
		document.getElementById('main-section').src = '../templates/modulo2tema3.html';
	});
	
	$( "#m2t4" ).click(function() {
		document.getElementById('main-section').src = '../templates/modulo2tema4.html';
	});

	//Modulo 3

	$( "#m3t1" ).click(function() {
		document.getElementById('main-section').src = '../templates/modulo3tema1.html';
	});

	$( "#m3t2" ).click(function() {
		document.getElementById('main-section').src = '../templates/modulo3tema2.html';
	});

	$( "#m3t3" ).click(function() {
		document.getElementById('main-section').src = '../templates/modulo3tema3.html';
	});


	//

	$("img").click(function(){
		alert('xddddd');
		//$("input:text").val("Glenn Quagmire");
	});

	$('a.isDisabled').removeAttr('data-toggle');

	
	$("#register").click(function(){
		$('#login-form').hide();
		$('#register-form').show();
	});

	$("#login").click(function(){
		$('#register-form').hide();
		$('#login-form').show();
	});
		
});

function check_required_login(form) {
	// var flag = true;
  //   $(':radio').each(function () {
  //       name = $(this).attr('name');
  //       if (flag && !$(':radio[name="' + name + '"]:checked').length) {
  //           alert(name + ' group not checked');
  //           flag = false;
	// 	}
	// 	else{
	// 		console.log('flag');
	// 	}
	// });
	
	var isValid = true;
	$('.required-login').each(function() {
		console.log($(this).val());
	  if ( $(this).val() === '' ){
		isValid=false;
		console.log('no valido');
	  }
	  else{
		console.log('valido'+ isValid );
	  }		  
	});
	
	return isValid;
}

function check_required_inputs(form) {
	var isValid = true;
	$('.required').each(function() {
		console.log($(this).val());
	  if ( $(this).val() === '' ){
		isValid=false;
		console.log('no valido');
	  }
	  else{
		console.log('valido'+ isValid );
	  }		  
	});
	
	return isValid;
}


