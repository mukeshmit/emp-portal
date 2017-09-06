$(function(){
	$('#newsFlashModel').click(function(){
		// alert('asdsd');
		$("#newsFlashModelAdd").modal('show')
		.find('#modelCOntent')
		.load($(this).attr('value'));
	});
	
	$('.newsFlashEditModel').click(function(){
		// alert('asdsd');
		$("#newsFlashModelAdd").modal('show')
		.find('#modelCOntent')
		.load($(this).attr('value'));
	});
})