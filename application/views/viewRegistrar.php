<?php $this->load->view('viewCabecera');?>
<?php $this->load->view('viewIzquierda');?>

<div id="columnacentral">
    <h1> Crear una Cuenta</h1>

	<?php echo form_open('registrar');?>
	<fieldset>
	<legend >Ingrese los siguientes Datos :</legend>
		<p>
		<?php echo form_label('Nombre', 'nombre')?>
		</p>
		<p>
		<?php echo form_input(array('name'=>'nombre', 'id'=>'nombre', 'type'=>'text', 'value'=>set_value('nombre'), 'placeholder' => 'Ingrese su nombre', 'autofocus'=>'autofocus', 'size'=>'50'))?>
		<h5><?php echo form_error('nombre');?></h5>
		</p>
		<p>
		<?php echo form_label('apellidoPaterno', 'apellidoPaterno')?>
		</p>
		<p>
		<?php echo form_input(array('name'=>'apellidoP', 'id'=>'apellidoP', 'type'=>'text', 'value'=>set_value('apellidoP'), 'placeholder' => 'Ingrese su apellido', 'autofocus'=>'autofocus', 'size'=>'50'))?>
		<h5><?php echo form_error('apellidoP');?></h5>
		</p>
		<p>
		<?php echo form_label('apellidoMaterno', 'apellidoMaterno')?>
		</p>
		<p>
		<?php echo form_input(array('name'=>'apellidoM', 'id'=>'apellidoM', 'type'=>'text', 'value'=>set_value('apellidoM'), 'placeholder' => 'Ingrese su apellido', 'autofocus'=>'autofocus', 'size'=>'50'))?>
		<h5><?php echo form_error('apellidoM');?></h5>
		</p>
		<p>
		<?php echo form_label('nombre usuario', 'nombre usuario')?>
		</p>
		<p>
		<?php echo form_input(array('name'=>'loggin', 'id'=>'loggin', 'type'=>'text', 'value'=>set_value('loggin'), 'placeholder' => 'Ingrese su nombre de usuario', 'autofocus'=>'autofocus', 'size'=>'50'))?>
		<h5><?php echo form_error('loggin');?></h5>
		</p>
		<p>
		<?php echo form_label('contraseña', 'contraseña')?>
		</p>
		<p>
		<?php echo form_password(array('name'=>'passw', 'id'=>'passw', 'type'=>'text','value'=>set_value('passw'), 'placeholder' => 'Ingrese la contraseña', 'autofocus'=>'autofocus', 'size'=>'50'))?>
		<h5><?php echo form_error('passw');?></h5>
		</p>
		<p>
		<?php echo form_label('confirmar contraseña', 'confirmar contraseña')?>
		</p>
		<p>
		<?php echo form_password(array('name'=>'repassw', 'id'=>'repassw', 'type'=>'text', 'value'=>set_value('repassw'), 'placeholder' => 'Vuelva a ingresar la contraseña', 'autofocus'=>'autofocus', 'size'=>'50'))?>
		<h5><?php echo form_error('repassw');?></h5>
		</p>
		<p>
		<?php echo form_label('correo', 'correo')?>
		</p>
		<p>
		<?php echo form_input(array('name'=>'correo', 'id'=>'correo', 'type'=>'text', 'value'=>set_value('correo'), 'placeholder' => 'Ingrese su correo electronico', 'autofocus'=>'autofocus', 'size'=>'50'))?>
		<h5><?php echo form_error('correo');?></h5>
		</p>
		<p>
		<?php echo form_label('Contraseña TIS','Contraseña TIS')?>
		</p>
		<p>
		<?php echo form_label('La contraseña TIS es opcional solo para manejo de TIS','Contraseña Docente')?>
		</p>
		<p>
		<?php echo form_password(array('name'=>'passDocente', 'id'=>'passDocente', 'type'=>'text', 'value'=>set_value('passDocente'), 'placeholder' => 'Ingrese la contraseña tipo TIS', 'autofocus'=>'autofocus', 'size'=>'50'))?>
		<h5><?php echo form_error('passDocente');?></h5>
		</p>
		<p>
		<?php echo form_label('Ingrese su CI para confirmar docente','Contraseña Docente')?>
		</p>
		<p>
		<?php echo form_input(array('name'=>'ciDocente', 'id'=>'ciDocente', 'type'=>'text', 'value'=>set_value('ciDocente'), 'placeholder' => 'Ingrese su C.I.', 'autofocus'=>'autofocus', 'size'=>'50'))?>
		<h5><?php echo form_error('ciDocente');?></h5>
		</p>

		<p><?php echo form_submit('Registrar', 'Registrar')?>
	</fieldset>
	<?php echo form_close()?>
</div>

<?php $this->load->view('viewDerecha');?>
<?php $this->load->view('viewPiePagina');?>
