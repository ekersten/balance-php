<form class="well" id="form_operacion">
	<h3>Nueva operación</h3>
	<fieldset>
		<div class="control-group">
			<label class="control-label" for="type_id">Tipo</label>
			<div class="controls">
				<select name="type_id">
					<?php foreach($types as $type){ ?>
						<?php if($type->id != 3){ ?>
						<option value="<?php echo $type->id;?>"><?php echo $type->name; ?></option>
						<?php } ?>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="account_id">Cuenta</label>
			<div class="controls">
				<select name="account_id">
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
					<?php foreach($categories as $category){ ?>
					<option value="<?php echo $category->id;?>"><?php echo $category->name; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="ammout">Monto</label>
			<div class="controls">
				<input type="text" class="input" name="ammount" value="0.0"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="entry_created">Fecha</label>
			<div class="controls">
				<input class="input datepicker" type="text" name="created" id="entry_created" value="<?php echo date('d/m/Y'); ?>" data-date-format="dd/mm/yyyy" />
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="comment">Comment</label>
			<div class="controls">
				<textarea class="input" name="comment" rows="4" placeholder="Comentario..."></textarea>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Crear</button>
			<button type="reset" class="btn">Limpiar</button>
		</div>
	</fieldset>

</form>