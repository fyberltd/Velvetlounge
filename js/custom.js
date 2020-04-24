jQuery(document).ready(function ($) {
	//animate on scroll
	AOS.init();


	// Add smooth scrolling to all links
	$(".quicknav").on('click', function (event) {
		$("#food-links").removeClass("show");
		$(".bar1").removeClass("change");
		$(".bar2").removeClass("change");
		$(".bar3").removeClass("change");

		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
			// Prevent default anchor click behavior
			event.preventDefault();

			// Store hash
			var hash = this.hash;

			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800, function () {

				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			});
		} // End if
	});


	//mobile nav
	$(".mobile-nav").click(function () {
		$("#food-links").toggleClass("show");
		$(".bar1").toggleClass("change");
		$(".bar2").toggleClass("change");
		$(".bar3").toggleClass("change");
	})

	//booking form
	var option;
	var blank;

	if ($('#booking_form').length) {
		$('#date input')
			.prop('readonly', true)
			.datepicker({
				dateFormat: 'dd-mm-yy'
			});
	}

	$('#date input').change(function () {
		date_function();
	});

	$('#time select').on('click', function () {
		date_function();
	});

	function date_function() {
		//getting the date
		var date_str = $('#date input').val().split('-');
		var date_month = date_str[1] - 1;
		var date = new Date(date_str[2], date_month, date_str[0]);
		var select = $('#time select');

		// if( date_str[0] === '22' && date_str[1] === '03' ) {
		// 	option = 'removed';

		// 	$('#time select option[value="17:00"]').remove();
		// 	$('#time select option[value="17:30"]').remove();
		// 	$('#time select option[value="18:30"]').remove();
		// 	$('#time select option[value="19:00"]').remove();
		// 	$('#time select option[value="19:30"]').remove();
		// 	$('#time select option[value="20:30"]').remove();
		// 	$('#time select option[value="21:00"]').remove();
		// 	$('#time select option[value="21:30"]').remove();
		// 	$('#time select option[value="22:00"]').remove();
		// 	$('#time select option[value="22:30"]').remove();
		// } else if( date_str[0] === '21' && date_str[1] === '06' ) {
		// 	option = 'removed';

		// 	$('#time select option[value="17:00"]').remove();
		// 	$('#time select option[value="17:30"]').remove();
		// 	$('#time select option[value="18:30"]').remove();
		// 	$('#time select option[value="19:00"]').remove();
		// 	$('#time select option[value="19:30"]').remove();
		// 	$('#time select option[value="20:30"]').remove();
		// 	$('#time select option[value="21:00"]').remove();
		// 	$('#time select option[value="21:30"]').remove();
		// 	$('#time select option[value="22:00"]').remove();
		// 	$('#time select option[value="22:30"]').remove();
		// } else 
		if (date.getDay() === 1) { // if friday / saturday
			option = 'removed';
			$('#time select option[value="16:30"]').remove();
			$('#time select option[value="17:00"]').remove();
			$('#time select option[value="17:30"]').remove();
			$('#time select option[value="18:00"]').remove();
			$('#time select option[value="18:30"]').remove();
			$('#time select option[value="19:00"]').remove();
			$('#time select option[value="19:30"]').remove();
			$('#time select option[value="20:00"]').remove();
			$('#time select option[value="20:30"]').remove();
			$('#time select option[value="21:00"]').remove();
			$('#time select option[value="21:30"]').remove();
			$('#time select option[value="22:00"]').remove();
			$('#time select option[value="22:30"]').remove();
		} else if ((date.getDay() === 2 || date.getDay() === 3 || date.getDay() === 4 || date.getDay() === 5 || date.getDay() === 6 || date.getDay() === 0) && option === 'removed') {
			option = 'added';

			$('#time select option[value="16:30"]').remove();
			$('#time select option[value="18:00"]').remove();
			$('#time select option[value="20:00"]').remove();

			// select.append( $("<option></option>")
			// 		.attr("value", '16:30')
			// 		.text('16:30') ); 
			select.append($("<option></option>")
				.attr("value", '17:00')
				.text('17:00'));
			select.append($("<option></option>")
				.attr("value", '17:30')
				.text('17:30'));
			select.append($("<option></option>")
				.attr("value", '18:00')
				.text('18:00'));
			select.append($("<option></option>")
				.attr("value", '18:30')
				.text('18:30'));
			select.append($("<option></option>")
				.attr("value", '19:00')
				.text('19:00'));
			select.append($("<option></option>")
				.attr("value", '19:30')
				.text('19:30'));
			select.append($("<option></option>")
				.attr("value", '20:00')
				.text('20:00'));
			select.append($("<option></option>")
				.attr("value", '20:30')
				.text('20:30'));
			select.append($("<option></option>")
				.attr("value", '21:00')
				.text('21:00'));
			select.append($("<option></option>")
				.attr("value", '21:30')
				.text('21:30'));
			select.append($("<option></option>")
				.attr("value", '22:00')
				.text('22:00'));
			select.append($("<option></option>")
				.attr("value", '22:30')
				.text('22:30'));
		}
	}
	if ($('#food-links').length) {
		var distance = $('#food-links').offset().top;
		$(window).scroll(function () {
			if ($(this).scrollTop() >= distance) {
				$('#food-links').removeClass("unsticky").addClass("sticky");
			} else {
				$('#food-links').removeClass("sticky").addClass("unsticky");
			}
		});
	}
});