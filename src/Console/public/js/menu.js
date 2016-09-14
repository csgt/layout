$(document).ready(function(){
	var treeviewPadre = $('.sidebar-menu .treeview .active').closest('.treeview-padre');
	treeviewPadre.addClass('active');
	treeviewPadre.find('.treeview').addClass('active');
});