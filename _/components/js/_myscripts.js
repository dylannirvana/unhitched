$(function() {
			// highlight the current nav
		$("#authors a:contains('Authors')").parent().addClass('active');
		$("#stayingSafe a:contains('Staying safe')").parent().addClass('active');
		$("#engageUs a:contains('Engage us')").parent().addClass('active');
		$("#gettingOut a:contains('Getting out')").parent().addClass('active');
		$("#startingOver a:contains('Starting over')").parent().addClass('active');
		$("#theRealYou a:contains('The real you')").parent().addClass('active');

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
