<?php $this->load->view('viewCabeceraLoggin');?>
<div id="columnacentral">
    <div class="panel panel-primary">
        <div class="panel-heading">
        <!--F <h3 class="panel-title">Nueva Historia</h3> -->
    <h3 class="panel-title">Nueva Historia de Usuario</h3>
  </div>
  <div class="panel-body" align="center">
   <div class="btn-group">
      
     <form class="navbar-form navbar-left" role="form" action="historiaTareas" method="post">
          <div class="panel panel-default">
            <div class="panel-body">
             <!--<?php //echo form_dropdown('historias',$hitos, set_value('historias')); ?>-->
               <?php echo form_dropdown('historias',$hitos, set_value('historias'),'class="form-control"'); ?>
                <h5><?php echo form_error('historias'); ?></h5>
              </div>
         </div>
         <div class="form-group">
        <input  type="text" class="form-control" size="60" name="nuevaTarea" id="nuevaTarea" onkeypress="return soloLetrasHead(event)" placeholder="Nueva Historia de Usuario">
                 <div>
            <h5><?php echo form_error('nuevaTarea');?></h5>
         </div>
         </div>
          <div class="panel panel-default">
            <div class="panel-body">
               <!-- F <?php// echo form_dropdown('integrante',$equipo, set_value('integrante')); ?>
                -->
               <?php echo form_dropdown('integrante',$equipo, set_value('integrante'),'class="form-control"'); ?>
                <h5><?php echo form_error('integrante'); ?></h5>
              </div>
         </div>
         <button onsubmit="texto()"type="submit" class="btn btn-primary">Aceptar</button>
        
    </form>   
  
       
      </div>
<div id="listaHistorias">
    <ul class="list-group">
        <?php if(count($tareas)>0)
        {  foreach($tareas as $valor){ ?>
     
     <li class="list-group-item"><?php echo $valor['historia']."==>".$valor['responsable']; ?></li>
        <?php 
            }
        }?>
    </ul>
</div>
</div>  
</div>
</div>

<?php $this->load->view('viewDerecha');?>
<?php $this->load->view('viewPiePagina');?>