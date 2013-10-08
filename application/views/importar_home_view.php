<?php echo View::factory('includes/nav_view'); ?>

<div class="container">
	<div class="row" style="margin-bottom: 20px">
		<div class="span12">
			<h1>Importar</h1>
		</div>
	</div>
	<div class="row" id="reportTypes">
		<div class="span4">
			<div class="well">
				<ul class="nav nav-list">
					<li class="nav-header">Subir archivo CSV</li>
					<li><div class="upload_dropzone">Arrastre archivo CSV aquí</div></li>
				</ul>
			</div>
		</div>
		<div class="span8" id="reportOptions"></div>
	</div>

	<hr/>
	<div class="row" id="reportResult">
		<div class="span12" id="operations_holder"></div>
	</div>
</div>