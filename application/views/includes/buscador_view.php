<form class="well" id="form_buscador">
	<h3>Buscador</h3>
	<fieldset>
		<div class="control-group">
			<label class="control-label" for="type_id">Tipo</label>
			<div class="controls">
				<select name="type_id">
					<option value="">Tipo</option>
					<?php foreach($types as $type){ ?>
					<option value="<?php echo $type->id;?>"><?php echo $type->name; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="account_id">Cuenta</label>
			<div class="controls">
				<select name="account_id">
					<option value="">Cuenta</option>
					<?php foreach($accounts as $account){ ?>
					<option value="<?php echo $account->id;?>"><?php echo $account->name; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="category_id">Categoría</label>
			<div class="controls">
				<select name="category_id">
					<option value="">Categoría</option>
					<?php foreach($categories as $category){ ?>
					<option value="<?php echo $category->id;?>"><?php echo $category->name; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ammout">Monto entre</label>
			<div class="controls">
				<input type="number" class="input-small" name="ammount_from" step="0.1" min="0"/> y <input type="number" class="input-small" name="ammount_to" step="0.1" min="0"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="entry_created">Fecha entre</label>
			<div class="controls">
				<input class="input-small datepicker" type="text" name="created_from" value="" data-date-format="dd/mm/yyyy" /> y <input class="input-small datepicker" type="text" name="created_to" value="" data-date-format="dd/mm/yyyy" />
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Buscar</button>
			<button type="reset" class="btn">Limpiar</button>
		</div>
	</fieldset>
</form>