(function($) {
	$('a[rel="report-type"]').on('click', function(e) {
		e.preventDefault();
		var $this = $(this);
		
		$('a[rel="report-type"]').removeClass('active');
		$this.addClass('active');

		
		$.post(K.base_url + 'reportes/get_options/' + $this.data('type'), function(data) {
			$('#reportOptions').html(data);
		});
	});

	$('#reportOptions').on('click', 'button[type="submit"]', function(e) {
		e.preventDefault();

		$.ajax({
			url: K.base_url + 'reportes/results',
			data: $('#form_params').serialize(),
			type: 'post',
			dataType: 'html',
			success: function(html) {
				$('#reportResult > .span12').html(html);
			}
		});
	});
})(jQuery);