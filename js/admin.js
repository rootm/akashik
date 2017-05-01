jQuery(document).ready(function($) {
	var mediaUploader;

	$('#upload-button').on('click',  function(event) {
		event.preventDefault();
		if (mediaUploader){
			mediaUploader.open();
			return;	}

			mediaUploader=wp.media.frames.file_frame=wp.media({
		title:'Choose Profile Picture',
		button:{
			text:'Choose Picture'
		},
		multiple:false

	});

	mediaUploader.on('select', function(event) {
		attachment=mediaUploader.state().get('selection').first().toJSON();
		$('#picval').val(attachment.url);
		$('#pic-container').css('background-image','url('+attachment.url+')');

	});
	mediaUploader.open();
		/* Act on the event */
	});


});