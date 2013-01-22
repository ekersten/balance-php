<?php echo View::factory('includes/nav_view'); ?>

<div class="container">
	<div class="row">
		<div class="span8">
			<div id="entries_holder"></div>
			<div id="entries_loader">
				<p>&nbsp;Cargando...<br/><img src="img/ajax-loader.gif"/></p>
			</div>
		</div>
		<div class="span4">
			<?php echo View::factory('includes/accounts_view')->render(); ?>
			<?php echo View::factory('includes/operacion_form_view')->render(); ?>
			<?php echo View::factory('includes/buscador_view')->render(); ?>
			<?php echo View::factory('includes/transferencia_form_view')->render(); ?>
		</div>
	</div>
</div>