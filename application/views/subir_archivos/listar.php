<section>
<div class="container">
  <div class="row">
  <div class="col-md-12">

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
        Lista de Archivos
        </h3>
        </div>
  <div class="panel-body">
 <div class="table-responsive">
  <table class="table table-striped table-hover ">
    
    <thead>
    
      <tr>
        
        <th> Titulo </th>
        <th> Nombre de Archivo</th>
        <th> Programa Estrategico</th>
        <th> Eliminar</th>
        
      </tr>
      </h3>
    </thead>
    
    </div>
      <?php
foreach ($datos as $dato) {
	
?>
<tbody>
      <tr>
        <td><?php echo $dato->titulo ?></td>
        <td><?php echo $dato->nombre_archivo ?></td>
         <td><?php echo $dato->programa ?></td>

        
        <td>
        <small> <i class="fa fa-remove fa-2x"></i></small>
        </td>
        </tr>
    </tbody>
      <?php
}
?>  
      
  </table>
  </div>
   
  </div>
</div>
</div>
</div>
</div>
</section>


<?php
 /*




<h3>su archivos a sido subido correctamente</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
*/