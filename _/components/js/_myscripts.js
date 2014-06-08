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
	
	$("[data-toggle='tooltip']").tooltip({ animation: true});
	
}); // jQuery is loaded
