<h2>Reporte mensual para <?php echo $period; ?></h2>

<div class="row">
	<div class="span6">
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Categoría</th>
					<th>Ingresos</th>
					<th>Egresos</th>
				</tr>
			</thead>

			<tbody>
				<?php foreach($categories as $category) { ?>
				<tr>
					<td><?php echo $category['category']; ?></td>
					<td><?php echo ($category['ingresos'] != '') ? '$ ' . number_format($category['ingresos'], 2) : '-'; ?></td>
					<td><?php echo ($category['egresos'] != '') ? '$ ' . number_format($category['egresos'], 2) : '-'; ?></td>
				</tr>
				<?php } ?>
			</tbody>

			<tfoot>
				<tr>
					<td><strong>TOTALES</strong></td>
					<td><?php echo ($totals[0]['ingresos'] != '') ? '$ ' . number_format($totals[0]['ingresos'], 2) : '-'; ?></td>
					<td><?php echo ($totals[0]['egresos'] != '') ? '$ ' . number_format($totals[0]['egresos'], 2) : '-'; ?></td>
				</tr>
				<tr>
					<td><strong>Balance</strong></td>
					<td colspan="2" style="text-align: center;">
						<?php
						$balance = number_format($totals[0]['ingresos'] - $totals[0]['egresos'], 2);
						$class = ($balance > 0) ? 'success' : 'important';
						$balance = '$ ' . $balance;
						echo sprintf('<span class="label label-%s">&nbsp;%s&nbsp;</span>', $class, $balance);
						?>
					</td>
				</tr>
			</tfoot>

		</table>
	</div>
</div>