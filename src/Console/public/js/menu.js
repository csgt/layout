$(document).ready(function() {
	var abuelo = getAbuelo($('.sidebar-menu .treeview .active'))
	while (abuelo.prop('nodeName') == 'LI') {
		abuelo.addClass('active');
		abuelo = getAbuelo(abuelo);
	}
});

function getAbuelo(aItem) {
	return $(aItem).parent().parent();
}