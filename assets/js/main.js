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
		document.getElementById('main-section').src = './includes/profile.php';
	});

	//Module 1
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

	//Module 2
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
	

	//Module 3

	$( "#m3t1" ).click(function() {
		document.getElementById('main-section').src = '../templates/modulo3tema1.html';
	});

	$( "#m3t2" ).click(function() {
		document.getElementById('main-section').src = '../templates/modulo3tema2.html';
	});

	$( "#m3t3" ).click(function() {
		document.getElementById('main-section').src = 'https://www.youtube.com/embed/Eba6xr6j0_M';

	});

	
	//Examn
	$( "#m1E" ).click(function() {
		document.getElementById('main-section').src = '../includes/examn_1.php';
	});

	$( "#m2E" ).click(function() {
		document.getElementById('main-section').src = '../includes/examn_2.php';
	});

	$( "#m3E" ).click(function() {
		document.getElementById('main-section').src = '../includes/examn_3.php';
	});


	// answers
	$('a.isDisabled').removeAttr('data-toggle');

	
	$("#register").click(function(){
		$('#login-form').hide();
		$('#register-form').show();
		$("#log-err").addClass("hidden");

	});

	$("#login").click(function(){
		$('#register-form').hide();
		$('#login-form').show();
		$("#log-err").addClass("hidden");
	});
});

//Validate forms
function check_required_inputs(form) {
	var isValid = true;
	$('.required').each(function() {
	  if ( $(this).val() === '' ){
		isValid=false;
		$("#log-err").removeClass("hidden");
	  }
	  else{
		$("#log-err").addClass("hidden");
	  }		  
	});
	
	return isValid;
}


//Validate forms
function check_required_login(form) {
	var isValid = true;
	$('.required-login').each(function() {
	  if ( $(this).val() === '' ){
		isValid=false;
		$("#log-err").removeClass("hidden");
	  }
	  else{
		$("#log-err").addClass("hidden");
	  }		  
	});
	
	return isValid;
}

function setInputValue1(){
	var value = $(event.target).attr("data-value");
	$('#respuesta1').val(value);
	console.log("value1: "+value);

}

function setInputValue2(){
	var value = $(event.target).attr("data-value");
	$('#respuesta2').val(value);
	console.log("value2: "+value);

}


function setInputValue3(){
	var value = $(event.target).attr("data-value");
	$('#respuesta3').val(value);
	console.log("value3: "+value);

}

function setInputValue4(){
	var value = $(event.target).attr("data-value");
	$('#respuesta4').val(value);
	console.log("value4: "+value);

}

function setInputValue5(){
	var value = $(event.target).attr("data-value");
	$('#respuesta5').val(value);
	console.log("value5: "+value);

}
