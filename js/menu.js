jQuery(document).ready(function($) {
	var $menu = $('#nav'),
	$menulink = $('#menu-link');

	$menulink.click(function() {
		$menulink.toggleClass('active');
		$menu.toggleClass('active');
		return false;
	});
});
