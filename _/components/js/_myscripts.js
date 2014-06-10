$(function() {
			// highlight the current nav
		$("#artists a:contains('Artists')").parent().addClass('active');
		$("#beingSafe a:contains('Being safe')").parent().addClass('active');
		$("#engageUs a:contains('Engage us')").parent().addClass('active');
		$("#gettingOut a:contains('Getting out')").parent().addClass('active');
		$("#movingOn a:contains('Moving on')").parent().addClass('active');

	//make menus drop automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	}); //hover
	
	// show tool tips
	$("[data-toggle='tooltip']").tooltip({ animation: true});
	
	// Show modal
	$('.modalphotos img').on('click', function() {
		$('#modal').modal({
			show:true,
		})
		var mysrc = this.src.substr(0, this.src.length-7) + '.jpg';
		$('#modalimage').attr('src', mysrc);
		$('#modalimage').on('click', function() {
			$('#modal').modal('hide');
		}) //hide modal
	}); //show modal
	
}); // jQuery is loaded
