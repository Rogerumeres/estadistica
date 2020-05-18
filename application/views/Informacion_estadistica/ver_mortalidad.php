<div class="col-sm-6">
                                        <h3 class="row header smaller lighter blue">
                                            <span class="col-xs-6"> Mortalidad por Años </span><!-- /.col -->

                                            
                                        </h3>

                                        <div id="accordion" class="accordion-style1 panel-group">

                                <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
                                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                                            <i class="ace-icon fa fa-angle-down bigger-110" data-icon-hide="ace-icon fa fa-angle-down" data-icon-show="ace-icon fa fa-angle-right"></i>
                                                            &nbsp; Mortalidad Año 2017
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
                                                             $dir = 'uploads/info_esta';
                                                            foreach ($morta_17 as $row) {
                                  
                                                                     ?>
                                                                <tr>
                                                                    <td ><?php echo $row->descripcion ?></td>

                                                                    

                                                                    <td >
                                                                        <a href="<?php echo base_url().$dir.$row->archivo ?>" title="Descargar"><center><i class="ace-icon fa fa-cloud-download"></i></center></a>
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
                                                            &nbsp; Mortalidad Año 2016
                                                        </a>
                                                    </h4>
                                                </div>

                                                <div class="panel-collapse collapse in" id="collapseTwo">
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
                                                             $dir = 'uploads/info_esta';
                                                            foreach ($morta_16 as $row) {
                                  
                                                                     ?>
                                                                <tr>
                                                                    <td ><?php echo $row->descripcion ?></td>

                                                                    

                                                                    <td >
                                                                        <a href="<?php echo base_url().$dir.$row->archivo ?>" title="Descargar"><center><i class="ace-icon fa fa-cloud-download"></i></center></a>
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
                                                            &nbsp;Mortalidad Año 2015
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
                                                             $dir = 'uploads/info_esta';
                                                            foreach ($morta_15 as $row) {
                                  
                                                                     ?>
                                                                <tr>
                                                                    <td ><?php echo $row->descripcion ?></td>

                                                                    

                                                                    <td >
                                                                        <a href="<?php echo base_url().$dir.$row->archivo ?>" title="Descargar"><center><i class="ace-icon fa fa-cloud-download"></i></center></a>
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
                                                            &nbsp;Mortalidad Año 2014
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
                                                             $dir = 'uploads/info_esta';
                                                            foreach ($morta_14 as $row) {
                                  
                                                                     ?>
                                                                <tr>
                                                                    <td ><?php echo $row->descripcion ?></td>

                                                                    

                                                                    <td >
                                                                        <a href="<?php echo base_url().$dir.$row->archivo ?>" title="Descargar"><center><i class="ace-icon fa fa-cloud-download"></i></center></a>
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
                                                            &nbsp;Mortalidad Año 2013
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
                                                             $dir = 'uploads/info_esta';
                                                            foreach ($morta_13 as $row) {
                                  
                                                                     ?>
                                                                <tr>
                                                                    <td ><?php echo $row->descripcion ?></td>

                                                                    

                                                                    <td >
                                                                        <a href="<?php echo base_url().$dir.$row->archivo ?>" title="Descargar"><center><i class="ace-icon fa fa-cloud-download"></i></center></a>
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