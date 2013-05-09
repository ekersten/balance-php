<div class="well">
	<h6>Períodos</h6>
	<?php echo Form::open(null, array('id' => 'form_params', 'class' =>  'form-inline')); ?>
	<select name="period">
		<?php foreach($periods as $period) { ?>
		<option value="<?php echo $period['period']; ?>"><?php echo $period['period']; ?></option>
		<?php } ?>
	</select>
	<button type="submit" class="btn">Buscar</button>
	<input type="hidden" name="type" value="monthly"/>
	<?php echo Form::close(); ?>
</div>