$(document).ready(function(){
	$('#nav-icon1').click(function(){
		$(this).toggleClass('open');
		$('#myDropdown').toggleClass('show');

	});

	$(".dropdown-content a").click(function() {
    $(this).closest('#myDropdown').toggleClass('show');
		$('#nav-icon1').toggleClass('open');
});
});
