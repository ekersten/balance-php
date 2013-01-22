<form class="well" id="form_transferencia">
	<h3>Nueva transferencia</h3>
	<fieldset>
		
		<div class="control-group">
			<label class="control-label" for="ortigin_account_id">Origen</label>
			<div class="controls">
				<select name="account_from_id">
					<?php foreach($accounts as $account){ ?>
					<option value="<?php echo $account->id;?>"><?php echo $account->name; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="destination_account_id">Destino</label>
			<div class="controls">
				<select name="account_to_id">
					<?php foreach($accounts as $account){ ?>
					<option value="<?php echo $account->id;?>"><?php echo $account->name; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label" for="ammout">Monto</label>
			<div class="controls">
				<input type="number" class="input" name="ammount" step="0.1" min="0" value="0.0"/>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="transfer_created">Fecha</label>
			<div class="controls">
				<input class="input datepicker" type="text" name="created" id="transfer_created" value="<?php echo date('d/m/Y'); ?>" data-date-format="dd/mm/yyyy" />
			</div>
		</div>

		<div class="form-actions">
			<button type="submit" class="btn btn-primary">Transferir</button>
			<button type="reset" class="btn">Limpiar</button>
		</div>
	</fieldset>
	
</form>