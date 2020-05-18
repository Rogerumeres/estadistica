<section>
<div class="container">
  <div class="row">
  <div class="col-md-12">

<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title">
        Lista de Usuarios
        </h3>
        </div>
  <div class="panel-body">
 <div class="table-responsive">
  <table class="table table-striped table-hover ">
    
    <thead>
    
      <tr>
        
        <th>
 Nombre de Usuario </th>
        <th> Email</th>
       
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
        <td><?php echo $dato->username ?></td>
        <td><?php echo $dato->email ?></td>
                
                
        <td>
        <a href="javascript:void(0);" onclick="eliminar('<?php echo base_url()?>User_admin/delete/<?php echo $dato->id?>')"><i class="ace-icon fa fa-trash"></i></a>
      
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
 