/* dataTransfer FIX */
jQuery.event.props.push('dataTransfer');
(function($) {

	var dropzonePlaceholder = $('.upload_dropzone').text();

	$('.upload_dropzone').on('dragover', onDragOver);
	$('.upload_dropzone').on('dragenter', onDragOver);
	$('.upload_dropzone').on('dragleave', onDragOut);
	$('.upload_dropzone').on('drop', onFileDrop);

	function onDragOver(e) {
		e.preventDefault();
		e.stopPropagation();
		$(this).addClass('active');
	}

	function onDragOut(e) {
		e.preventDefault();
		e.stopPropagation();
		$(this).removeClass('active');
	}

	function onFileDrop(e) {
		e.preventDefault();
		e.stopPropagation();

		var files = e.dataTransfer.files || e.target.files;
		var count = files.length;

		if (count > 0 && count <= 1) {
			var file = files[0];
			if(file.name.toLowerCase().indexOf('.csv') >= 0) {
				processFile(file)
			} else {
				alert('Debe soltar un solo archivo del tipo CSV');
			}

		} else {
			alert('Debe soltar un solo archivo del tipo CSV');
		}
	}

	function processFile(file) {
		var reader = new FileReader();
		$('.upload_dropzone').removeClass('active');
		reader.onload = function(progressEvent) {
			$.ajax({
				url: K.base_url + 'import/upload_csv',
				data: {
					name: file.name,
					value: this.result,
				},
				dataType: 'html',
				type: 'post',
				error: function(jqXHR, error, exception) {
					console.log(error, 'error');
				},
				success: function(data, status, jqXHR) {
					$('.upload_dropzone').text(dropzonePlaceholder);
					$('#operations_holder').html(data);
				}

			});
		};

		reader.readAsDataURL(file);

		$('.upload_dropzone').text('procesando ' + file.name);
	}

})(jQuery);