<?php $this->load->view('viewCabeceraLogginDocente');?>
<div id="columnacentral">
<div class="navbar-collapse collapse center-block">
<script> 
		var textareaContent = "" ; 
		var numCaracteresValidos = 250;

		function validar_long(){ 
		   var numCaracteresIntro = document.forms[0].txtsms.value.length; 

		   if (numCaracteresIntro > numCaracteresValidos){ 
		      document.forms[0].txtsms.value = textareaContent; 
		   }else{ 
		      textareaContent = document.forms[0].txtsms.value;	
		   } 

		   if (numCaracteresIntro >= numCaracteresValidos){ 
		      document.forms[0].caracteres.style.color="#ff0000"; 
		   }else{ 
		      document.forms[0].caracteres.style.color="gray"; 
		   } 

		   score() 
		} 

		function score(){ 
		   document.forms[0].caracteres.value=document.forms[0].txtsms.value.length; 
		} 
</script> 
	
	<h1>Publicar Aviso:</h1>
	
		<div id="contenedorSubirDoc">
		
			<?php echo form_open_multipart('enviarSms');?>

					<fieldset id="select">
						<label class="control-label">Para : </label>
         				</br>
						 <div align="rigth" width = "20%">
				            <select class = "form-control" name="nombre" id='nombre'>  
				                  <option value="Todos">Todos </option>
				                   <?php
				                           foreach ($grupos as $value) {
				                   ?>
				                     <option value="<?php echo $value; ?>"><?php echo $value; ?></option>        
				                            <?php
				                        }
				                    ?> 
				                
				            </select>
				        </div>
					</fieldset>
					<fieldset>
					</br>
						<label class="control-label">Aviso : </label>
         				</br>
						<span>Numero de caracteres permitidos 250.</span><br/>
						<input class="control-input" type="text" name="caracteres" value = 0 size=2><br/>
						<td><textarea class = "form-control" name="txtsms" id = "txtsms" maxLength = "250" onKeyDown="validar_long()" onKeyUp="validar_long()" style = "width:400px; height:150px"></textarea></td> 
						<!--?php echo form_textarea(array('class' =>'form-control' ,'name' => 'txtsms' ,'maxLength' => '250', 'id' => 'txtsms', 'style' =>'width:400px; height:200px'))?-->
						<br/>
						<div id="divError"><?php echo form_error('txtsms');?></div>
					</fieldset>
					<div aling="right">
						<input class="btn btn-primary" type="submit" name="submit" value="Publicar Aviso" />
					</div>
				</form>
					<div id = "barra1">
					<p>
			        	<li><a href="verMensajes">Publicaciones</a></li>
			        </p>
		      		</div>	
		      		 <?php $this->load->view('viewDerecha');?>
					<?php $this->load->view('viewPiePagina');?>	
		</div>
	</div>
	</div>

