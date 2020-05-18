<div class="col-sm-12">
                                        <h3 class="row header smaller lighter blue">
                                            <span class="col-xs-6"> Atendidos y Atenciones por Años </span><!-- /.col -->

                                            
                                        </h3>

                                        <div id="accordion" class="accordion-style1 panel-group">
                                            
                                            

                                <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                            <i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                                                            &nbsp; Atendidos y Atenciones Año 2017
                                                        </a>
                                                    </h4>
                                                </div>

                                                <div class="panel-collapse collapse" id="collapseOne">
                                                    <div class="panel-body">


                                                        <div class="widget-box widget-color-blue" id="widget-box-2">
                                                <div class="widget-header">
                                                    <h5 class="widget-title bigger lighter">
                                                        <i class="ace-icon fa fa-table"></i>
                                                        Archivos
                                                    </h5>

                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead class="thin-border-bottom">

                                                                <tr>
                                                                    <th>
                                                                        
                                                                        Descripcion
                                                                    </th>

                                                                    <th>
                                                                        
                                                                        Detalle
                                                                    </th>
                                                                    
                                                                </tr>
                                                            </thead>

                                                           <tbody>
                                                            <?php
                                                             $dir = 'uploads/info_esta/';
                                                            foreach ($atcatn_17 as $row) {
                                  
                                                                     ?>
                                                                <tr>
                                                                    <td ><?php echo $row->descripcion ?></td>

                                                                    

                                                                    <td >
                                                                        <a href="<?php echo base_url().$dir.$row->archivo ?>" title="Descargar"><center><i class="ace-icon fa fa-cloud-download bigger-200"></i></center></a>
                                                                    </td>
                                                                </tr>

                                                               <?php
                                                           }
                                                           ?>

                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                            <i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                                                            &nbsp; Atendidos y Atenciones Año 2016
                                                        </a>
                                                    </h4>
                                                </div>

                                                <div class="panel-collapse collapse" id="collapseTwo">
                                                    <div class="panel-body">


                                                        <div class="widget-box widget-color-blue" id="widget-box-2">

<div class='tableauPlaceholder' id='viz1488326141035' style='position: relative'><noscript><a href='#'><img alt='ATENDIDOS Y ATENCIONES RED LA CONVENCIÓN 2016 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;at&#47;atd_atc&#47;Hoja1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='site_root' value='' /><param name='name' value='atd_atc&#47;Hoja1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;at&#47;atd_atc&#47;Hoja1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1488326141035');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='100%';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>

                                                <div class="widget-header">
                                                    <h5 class="widget-title bigger lighter">
                                                        <i class="ace-icon fa fa-table"></i>
                                                        Archivos
                                                    </h5>

                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead class="thin-border-bottom">

                                                                <tr>
                                                                    <th>
                                                                        
                                                                        Descripcion
                                                                    </th>

                                                                    <th>
                                                                        
                                                                        Detalle
                                                                    </th>
                                                                    
                                                                </tr>
                                                            </thead>

                                                           <tbody>
                                                            <?php
                                                             $dir = 'uploads/info_esta/';
                                                            foreach ($atcatn_16 as $row) {
                                  
                                                                     ?>
                                                                <tr>
                                                                    <td ><?php echo $row->descripcion ?></td>

                                                                    

                                                                    <td >
                                                                        <a href="<?php echo base_url().$dir.$row->archivo ?>" title="Descargar"><center><i class="ace-icon fa fa-cloud-download bigger-200"></i></center></a>
                                                                    </td>
                                                                </tr>

                                                               <?php
                                                           }
                                                           ?>

                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                                            <i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                                                            &nbsp;Atendidos y Atenciones Año 2015
                                                        </a>
                                                    </h4>
                                                </div>

                                                <div class="panel-collapse collapse" id="collapseThree">
                                                    <div class="panel-body">
                                                        
                                                    <div class="widget-box widget-color-blue" id="widget-box-2">
                                                <div class="widget-header">
                                                    <h5 class="widget-title bigger lighter">
                                                        <i class="ace-icon fa fa-table"></i>
                                                        Archivos
                                                    </h5>

                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead class="thin-border-bottom">

                                                                 <tr>
                                                                    <th>
                                                                        
                                                                        Descripcion
                                                                    </th>

                                                                    <th>
                                                                        
                                                                        Detalle
                                                                    </th>
                                                                    
                                                                </tr>
                                                            </thead>

                                                           <tbody>
                                                            <?php
                                                             $dir = 'uploads/info_esta/';
                                                            foreach ($atcatn_15 as $row) {
                                  
                                                                     ?>
                                                                <tr>
                                                                    <td ><?php echo $row->descripcion ?></td>

                                                                    

                                                                    <td >
                                                                        <a href="<?php echo base_url().$dir.$row->archivo ?>" title="Descargar"><center><i class="ace-icon fa fa-cloud-download bigger-200"></i></center></a>
                                                                    </td>
                                                                </tr>

                                                               <?php
                                                           }
                                                           ?>

                                                                
                                                            
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                                            <i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                                                            &nbsp;Atendidos y Atenciones Año 2014
                                                        </a>
                                                    </h4>
                                                </div>

                                                <div class="panel-collapse collapse" id="collapseFour">
                                                    <div class="panel-body">
                                                        
                                                    <div class="widget-box widget-color-blue" id="widget-box-2">
                                                <div class="widget-header">
                                                    <h5 class="widget-title bigger lighter">
                                                        <i class="ace-icon fa fa-table"></i>
                                                        Archivos
                                                    </h5>

                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead class="thin-border-bottom">

                                                                <tr>
                                                                    <th>
                                                                        
                                                                        Descripcion
                                                                    </th>

                                                                    <th>
                                                                        
                                                                        Detalle
                                                                    </th>
                                                                    
                                                                </tr>
                                                            </thead>

                                                           <tbody>
                                                            <?php
                                                             $dir = 'uploads/info_esta/';
                                                            foreach ($atcatn_14 as $row) {
                                  
                                                                     ?>
                                                                <tr>
                                                                    <td ><?php echo $row->descripcion ?></td>

                                                                    

                                                                    <td >
                                                                        <a href="<?php echo base_url().$dir.$row->archivo ?>" title="Descargar"><center><i class="ace-icon fa fa-cloud-download bigger-200"></i></center></a>
                                                                    </td>
                                                                </tr>

                                                               <?php
                                                           }
                                                           ?>
                                                            
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                                            <i class="ace-icon fa fa-angle-right bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                                                            &nbsp;Atendidos y Atenciones Año 2013
                                                        </a>
                                                    </h4>
                                                </div>

                                                <div class="panel-collapse collapse" id="collapseFive">
                                                    <div class="panel-body">
                                                        
                                                        <div class="widget-box widget-color-blue" id="widget-box-2">
                                                <div class="widget-header">
                                                    <h5 class="widget-title bigger lighter">
                                                        <i class="ace-icon fa fa-table"></i>
                                                        Archivos
                                                    </h5>

                                                    
                                                </div>

                                                <div class="widget-body">
                                                    <div class="widget-main no-padding">
                                                        <table class="table table-striped table-bordered table-hover">
                                                            <thead class="thin-border-bottom">

                                                                 <tr>
                                                                    <th>
                                                                        
                                                                        Descripcion
                                                                    </th>

                                                                    <th>
                                                                        
                                                                        Detalle
                                                                    </th>
                                                                    
                                                                </tr>
                                                            </thead>

                                                           <tbody>
                                                            <?php
                                                             $dir = 'uploads/info_esta/';
                                                            foreach ($atcatn_13 as $row) {
                                  
                                                                     ?>
                                                                <tr>
                                                                    <td ><?php echo $row->descripcion ?></td>

                                                                    

                                                                    <td >
                                                                        <a href="<?php echo base_url().$dir.$row->archivo ?>" title="Descargar"><center><i class="ace-icon fa fa-cloud-download bigger-200"></i></center></a>
                                                                    </td>
                                                                </tr>

                                                               <?php
                                                           }
                                                           ?>
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- /.col -->