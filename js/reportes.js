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
})(jQuery);