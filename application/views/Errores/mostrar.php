 <section class="content">
 <div class="row">


    <!-- para columnas -->
  <div class="col-md-4">

<?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
?>
    
 
<div class="form-group">
<label for="textarea" class="col-sm-3 control-label no-padding-right">Año:</label>


<div class="row">
    <div class="col-xs-10 col-sm-6">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'año',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',     
              'class'          => 'form-control',
              'value'   => $datos->año,
                          
            );

echo form_input($dato,'');
?>
                                  
                                 
                    </div>
        </div>
  </div>


</div>


<div class="form-group">

<label for="sel1" class="col-sm-3 control-label no-padding-right">Mes:</label>

<div class="row">
    <div class="col-xs-10 col-sm-6">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->Mes,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  </div>
</div>


<div class="form-group">

  <label for="sel1" class="col-sm-3 control-label no-padding-right">MicroRed:</label>

<div class="row">
    <div class="col-xs-10 col-sm-4">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->MicroRed,
            
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  </div>
</div>
         

<div class="form-group">

  <label for="sel1" class="col-sm-3 control-label no-padding-right">Establecimiento:</label>

<div class="row">
    <div class="col-xs-10 col-sm-4">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->Establecimiento,

            
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  </div>
</div>                         

<div class="form-group">

  <label for="sel1" class="col-sm-3 control-label no-padding-right">Lote:</label>

<div class="row">
    <div class="col-xs-10 col-sm-4">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->Lote,

            
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  </div>
</div>

<div class="form-group">

  <label for="sel1" class="col-sm-3 control-label no-padding-right">Pagina:</label>

<div class="row">
    <div class="col-xs-10 col-sm-4">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->Num_pag,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  </div>
</div>


<div class="form-group">

  <label for="sel1" class="col-sm-3 control-label no-padding-right">Registro:</label>

<div class="row">
    <div class="col-xs-10 col-sm-4">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
              'id'=>'disabledInput',
             'disabled'=>'',
              'class'          => 'form-control',
              'value'   => $datos->Num_Reg,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  </div>
</div>

</form>


</div>





<div class="col-md-4">

<?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
?>
    
 
<div class="form-group">

<label for="sel1" class="col-sm-3 control-label no-padding-right">DNI:</label>

<div class="row">
    <div class="col-xs-10 col-sm-3">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->Nro_Doc,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  </div>
</div>


<div class="form-group">
<label for="textarea" class="col-sm-3 control-label no-padding-right">Nombre y Apellidos:</label>


<div class="row">
    <div class="col-xs-16 col-sm-6">
      

  <?php 

$dato = array(
              'name'        => 'Nombre',
              'type'        =>'label',
               'id'         =>'disabledInput',
             'disabled'    =>'',     
              'class'          => 'form-control',
              'value'   => $datos->Nombre.' '.$datos->Paterno.' '.$datos->Materno,
                          
            );

echo form_input($dato,'');
?>
                                  
                                 
                    </div>
        
  </div>


</div>





<div class="form-group">

  <label for="sel1" class="col-sm-3 control-label no-padding-right">Fecha Nac.</label>

<div class="row">
    <div class="col-xs-10 col-sm-3">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->FECHA_NAC,
            
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  </div>
</div>
         

<div class="form-group">

  <label for="sel1" class="col-sm-3 control-label no-padding-right">Edad:</label>

<div class="row">
    <div class="col-xs-10 col-sm-1">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->Dia,

            
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  </div>
</div>                         

<div class="form-group">

  <label for="sel1" class="col-sm-3 control-label no-padding-right">Genero:</label>

<div class="row">
    <div class="col-xs-10 col-sm-1">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->Género,

            
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  </div>
</div>

<div class="form-group">

  <label for="sel1" class="col-sm-3 control-label no-padding-right">Personal que Atiende :</label>

<div class="row">
    <div class="col-xs-10 col-sm-6">
   

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->ATIENDE,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
  
  </div>
</div>


<div class="form-group">

  <label for="sel1" class="col-sm-3 control-label no-padding-right">Digitador:</label>

<div class="row">
    <div class="col-xs-6 col-sm-6">
      

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
              'id'=>'disabledInput',
             'disabled'=>'',
              'class'          => 'form-control',
              'value'   => $datos->REGISTRADOR,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    
  </div>
</div>

</form>

</div>


<div class="col-md-4">

<?php
$atributos = array( 'id' => 'miformulario','name'=>'form','class'=>'form-horizontal');
//echo form_open(null, $atributos);
?>
    
 


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Diagnostico</th>
      <th scope="col">Valor lab</th>
      <th scope="col">Codigo CIE</th>
      
    </tr>
  </thead>
  <tbody>
    <tr class="table-active">
      <th scope="row">


      
          <div class="col-xs-4 col-sm-4">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->id_tipdiag1,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  

      </th>
      <td>
        
    <div class="col-xs-4 col-sm-5">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->valor_lab1,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
 

      </td>
      <td>


          <div class="col-xs-10 col-sm-6">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->id_ciex1,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
</div>






</div>
</td>
      
    </tr>
    <tr>
      <th scope="row">
        
          <div class="col-xs-4 col-sm-4">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->id_tipdiag2,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  

      </th>
      <td>
        

       <div class="col-xs-10 col-sm-5">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->valor_lab2,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
</div>


      </td>
      <td>
        
 <div class="col-xs-10 col-sm-6">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->id_ciex2,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
</div>


      </td>
     
        </tr>
    <tr class="table-primary">
      <th scope="row">
        
  <div class="col-xs-4 col-sm-4">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->id_tipdiag3,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  

      </th>
      <td>
        
<div class="col-xs-10 col-sm-5">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->valor_lab3,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
</div>



      </td>
      <td>
        

 <div class="col-xs-10 col-sm-6">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->id_ciex3,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
</div>


      </td>
     
    </tr>
    <tr class="table-secondary">
      <th scope="row">
        
  <div class="col-xs-4 col-sm-4">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->id_tipdiag4,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  


      </th>
      <td>
        
<div class="col-xs-10 col-sm-5">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->valor_lab4,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
</div>


      </td>
      <td>
        

 <div class="col-xs-10 col-sm-6">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->id_ciex4,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
</div>

      </td>
    
    </tr>
    <tr class="table-success">
      <th scope="row">
        

  <div class="col-xs-4 col-sm-4">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->id_tipdiag5,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  


      </th>
      <td>
        
<div class="col-xs-10 col-sm-5">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->valor_lab5,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
</div>


      </td>
      <td>
        
 <div class="col-xs-10 col-sm-6">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->id_ciex5,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
</div>



      </td>
     
    </tr>
        <tr class="table-success">
      <th scope="row">
        

  <div class="col-xs-4 col-sm-4">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->id_tipdiag6,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
    </div>
  

      </th>
      <td>
        
<div class="col-xs-10 col-sm-5">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->valor_lab6,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
</div>


      </td>
      <td>
        

 <div class="col-xs-10 col-sm-6">
      <div class="input-group">

  <?php 
$dato = array(
              'name'        => 'Mes',
              'type'        =>'text',
               'id'=>'disabledInput',
             'disabled'=>'',
             
              'class'          => 'form-control',
              'value'   => $datos->id_ciex6,

              
              
            );

echo form_input($dato,'');
?>
                                  
                                
      </div>
</div>


      </td>
     
    </tr>
   
  </tbody>
</table>





  


</section>














