<?php $this->load->view('viewCabeceraLoggin');?>

<div id="columnacentral">
<div class="navbar-collapse collapse center-block">	
 <div class='conteiner'>
	<span style=";font-family:arial black;font-size:18px;color:black;" align="center" > Inscribirse Grupo-Empresa</span>
		<?php
		echo form_open('registrarseGrupo',array('class'=>"navbar-form navbar-center", 'role'=>"form-horizontal")); ?>
		<p>        
		    <?php echo form_label('Grupo', 'grupo');?><br/>
		    <!-- F <?php //echo form_dropdown('grupo', $lista, set_value('grupo')); ?>-->

		    <?php echo form_dropdown('grupo', $lista, set_value('grupo'),'class="form-control"'); ?>
		    <h5><?php echo form_error('grupo'); ?></h5>
		</p>
		<p>
		        <?php echo form_label('Contraseña','contrasenya');?><br/>
		        <?php echo form_input(array('class'=>"form-control",'name'=>'contrasenya', 'id'=>'contrasenya', 'type'=>'password', 'placeholder' => 'Ingrese contraseña al grupo', 'autofocus'=>'autofocus', 'size'=>'30')); ?>
		        <h5><?php echo form_error('contrasenya'); ?></h5>
		</p>
		        <h5><?php echo form_error('integrante');?></h5>
		<p>
		        <button type="submit" id="Ingresar" class="btn btn-success">Ingresar</button>
		</p>

		<?php echo form_close(); ?>
	</div>
</div>
</div>
<?php $this->load->view('viewDerecha');?>
<?php $this->load->view('viewPiePagina');?>
