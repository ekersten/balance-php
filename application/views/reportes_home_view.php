<?php echo View::factory('includes/nav_view'); ?>

<div class="container">
	<div class="row" style="margin-bottom: 20px">
		<div class="span12">
			<h1>Reportes</h1>
		</div>
	</div>
	<div class="row" id="reportTypes">
		<div class="span4">
			<div class="well">
				<ul class="nav nav-list">
					<li class="nav-header">Reportes disponibles</li>
					<li><a href="javascript:void(0);" rel="report-type" data-type="monthly">Mensual</a></li>
				</ul>
			</div>
		</div>
		<div class="span8" id="reportOptions"></div>
	</div>

	<hr/>
	<div class="row" id="reportResult">
		<div class="span12"></div>
	</div>
</div>