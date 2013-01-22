<div class="container">
	<div class="row">
		<div class="span4 offset4">
			<form class="well" id="login_form" method="POST" action="<?php echo Kohana::$base_url; ?>login/check_credentials">
				<h2>Balance Login</h2>
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="ammout"><i class="icon-user"></i> Email</label>
						<div class="controls">
							<input type="email" class="input-xlarge" name="email" id="email" autofocus="autofocus"/>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password"><i class="icon-lock"></i> Contraseña</label>
						<div class="controls">
							<input type="password" class="input-xlarge" name="password" id="password"/>
						</div>
					</div>
					<div class="control-group">
						<label class="checkbox"><input type="checkbox" name="remember" value="1"> Recordarme</label>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Ingresar</button>
						<button type="reset" class="btn">Limpiar</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>