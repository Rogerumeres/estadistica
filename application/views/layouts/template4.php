<!DOCTYPE html>
<html lang="es">
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        
        <title><?php echo $this->layout->getTitle(); ?></title>


        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <meta name="description" content="<?php echo $this->layout->getDescripcion(); ?>">

        <meta name="keywords" content="<?php echo $this->layout->getKeywords(); ?>">


        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />
            
        <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/css/tooltip.css" />
        
        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/jquery-ui.custom.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/chosen.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-datepicker3.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-timepicker.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/daterangepicker.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-datetimepicker.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-colorpicker.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <!-- text fonts -->
        <!--progress bar -->
        <!-- <link rel="stylesheet" href="<?php //echo base_url()?>assets/css/custom.css">-->
    
         <link href="<?php echo base_url()?>assets/css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/ace-rtl.min.css" />


        <link rel="stylesheet" href="<?php echo base_url()?>assets/lightbox/colorbox.css" />

         <link rel="stylesheet" href="<?php echo base_url()?>assets/css/select2.min.css" />
        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->
          <!-- <link rel="stylesheet" href="<?php // echo base_url()?>assets/tables/css/AdminLTE.css" /> -->
          <!--  <link rel="stylesheet" href="<?php // echo base_url()?>assets/tables/datatables.net-bs/css/dataTables.bootstrap.min.css"> -->
         <!-- <link rel="stylesheet" href="<?php // echo base_url()?>assets/dist/css/skins/_all-skins.min.css"> -->
        <!--[if lte IE 9]>
            <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
       
       

        <script src="<?php echo base_url()?>assets/js/ace-extra.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/funciones.js"></script>


        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->

<script language="javascript" type="text/javascript">
    function ilumina(celda)
        {
            celda.style.backgroundColor="#135899";
            celda.style.color = "#FEFEFE";
        }
    function iluminaDoubleClick(celda)
        {
            celda.style.backgroundColor="#75DBE8";
            celda.style.color = "#040000";
        }

</script>
<?php echo $this->layout->css; ?> 

<?php echo $this->layout->js; ?> 

</head>

    <body class="skin-2">
        <div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
            <div class="navbar-container ace-save-state" id="navbar-container">
                <div class="navbar-header pull-left">
                    <a href="#" class="navbar-brand">
                       <i class="menu-icon fa fa-user"></i>
                               
                                    
                                    <small>Bienvenido <?php echo $this->session->userdata('usuario'); ?></small>

                                                                       
                               
                    </a>
                  
                    <button class="pull-right navbar-toggle navbar-toggle-img collapsed" type="button" data-toggle="collapse" data-target=".navbar-buttons,.navbar-menu">
                        <span class="sr-only">Toggle user menu</span>
                        <center></center>
                       
                    </button>

                    <button class="pull-right navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#sidebar">
                        <span class="sr-only">Toggle sidebar</span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>

                        <span class="icon-bar"></span>
                    </button>
                </div>
           </div><!-- /.navbar-container -->
        </div>

        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try{ace.settings.loadState('main-container')}catch(e){}
            </script>

            <div id="sidebar" class="sidebar      h-sidebar                navbar-collapse collapse          ace-save-state">
                <script type="text/javascript">
                    try{ace.settings.loadState('sidebar')}catch(e){}
                </script>


               

                        <ul class="nav nav-list">
                                
                     <!-- articulado -->

                                <?php
                                $dato=$this->layout->getMenu_activo();
                                if($dato=='-1') {
                                ?>

                            <li class="hover active">
                                 <?php }else{?>
                   
                                <li class="hover">
                                 <?php } ?>
                                 <a href="#" class="dropdown-toggle">
                                 <i class="menu-icon fa fa-home"></i>
                                 <span class="menu-text">
                                 Promoci&oacute;n de la Salud
                                 </span>
                                 <b class="arrow fa fa-angle-down"></b>
                                </a>
                                 <ul class="submenu">
                                   <li class="hover">
                                       <a href="<?php echo base_url()?>Seguimiento_PROMSA/Listar_errores_promsa" >
                                  <i class="menu-icon fa fa-caret-right"></i>
                                 Errores Promsa
                                  <b class="arrow"></b>
                                 </a>
                                 </li>
                                </ul>
                            </li>


            <!-- articulado -->

                             <?php
                                $dato=$this->layout->getMenu_activo();
                                 if($dato=='0') {
                                    ?>

                                <li class="hover active">
                                <?php }else{?>

                            <li class="hover">
                               <?php } ?>
                                <a href="#" class="dropdown-toggle">
                                <i class="menu-icon fa fa-bar-chart"></i>
                                <span class="menu-text">
                                Indicadores FED
                                </span>
                                <b class="arrow fa fa-angle-down"></b>
                                </a>
                                    <ul class="submenu">
                                    <li class="hover">
                                    <a href="<?php echo base_url()?>IndicadorFed/Mostrar_indicador_fed_materno" >
                                    <i class="menu-icon fa fa-caret-right"></i>
                                    Compromiso SII-01
                                    <b class="arrow"></b>
                                    </a>
                                    </li>
                                    <li class="hover">
                                        <a href="<?php echo base_url()?>IndicadorFed/Mostrar_indicador_fed_nino110a130" >
                                        Compromiso SIII-03
                                        <b class="arrow"></b>
                                        </a>
                                    </li>
                                    </ul>
                            </li>
                <!-- articulado  -->
                             <?php
                                $dato=$this->layout->getMenu_activo();
                                 if($dato=='1') {
                                    ?>
                                <li class="hover active">
                                <?php }else{?>
                                <li class="hover">
                                <?php } ?>
                                <a href="#" class="dropdown-toggle">
                                <i class="menu-icon fa fa-eyedropper"></i>
                                <span class="menu-text">
                                Articulado Nutricional
                                </span>
                                <b class="arrow fa fa-angle-down"></b>
                                </a>
                                    <ul class="submenu">
                                    <li class="hover">
                                        <a href="<?php echo base_url()?>SeguimientoCRED/Mostrar_Seguimiento_CRED_Errores" >
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Errores Varios
                                            <b class="arrow"></b>
                                        </a>
                                    </li>
                                    <li class="hover">
                                        <a href="<?php echo base_url()?>SeguimientoCRED/Mostrar_Seguimiento_CRED_MenorMes" >
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            CRED Menor 1m
                                            <b class="arrow"></b>
                                        </a>
                                    </li>
                                    <li class="hover">
                                        <a href="<?php echo base_url()?>SeguimientoCRED/Mostrar_Seguimiento_CRED_MenorAnio" >
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            CRED Menor 1a
                                            <b class="arrow"></b>
                                        </a>
                                    </li>
                                    <li class="hover">
                                        <a href="<?php echo base_url()?>SeguimientoCRED/Mostrar_Seguimiento_CRED_PoliSeisMeses" >
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Polimaltosado 4,5,6m
                                            <b class="arrow"></b>
                                        </a>
                                    </li>
                                    <li class="hover">
                                        <a href="<?php echo base_url()?>SeguimientoCRED/Mostrar_Seguimiento_CRED_SuplePrev" >
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Suple Preventiva
                                            <b class="arrow"></b>
                                        </a>
                                    </li>
                                    <li class="hover">
                                        <a href="<?php echo base_url()?>SeguimientoCRED/Mostrar_Seguimiento_CRED_SupleTera" >
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Suple Terapeutico
                                            <b class="arrow"></b>
                                        </a>
                                    </li>
                                    <li class="hover">
                                        <a href="<?php echo base_url()?>SeguimientoCRED/Mostrar_Seguimiento_CRED_Vacunas" >
                                            <i class="menu-icon fa fa-caret-right"></i>
                                            Seg Vacunas
                                            <b class="arrow"></b>
                                        </a>
                                    </li>
                                    </ul>
                                </li>

            <!-- materno  -->

                                    <?php
                                    $dato=$this->layout->getMenu_activo();
                                     if($dato=='2') {
                                        ?>

                                    <li class="hover active">
                                    <?php }else{?>

                                 <li class="hover">
                                   <?php } ?>
                                                      <a href="#" class="dropdown-toggle">
                                                            <i class="menu-icon fa fa-users"></i>
                                                            <span class="menu-text">
                                                                Materno neonatal
                                                            </span>

                                                            <b class="arrow fa fa-angle-down"></b>
                                                        </a>

                                                            <ul class="submenu">

                                                           <li class="hover">
                                                                <a href="<?php echo base_url()?>Errores/listar_errores_Materno_Controlador">
                                                                    <i class="menu-icon fa fa-caret-right"></i>

                                                                    Errores materno
                                                                    <b class="arrow"></b>
                                                                </a>

                                                                                              
                                                            </li>

                                                            <li class="hover">
                                                                <a href="<?php echo base_url()?>Errores/listar_errores_plani_sismed_Controlador">
                                                                    <i class="menu-icon fa fa-caret-right"></i>

                                                                    Errores Planificación Familiar
                                                                    <b class="arrow"></b>
                                                                </a>

                                                                                              
                                                            </li>
                                                            <li class="hover">
                                                                <a href="<?php echo base_url()?>Errores/listar_gestantes">
                                                                    <i class="menu-icon fa fa-caret-right"></i>

                                                                    Seguimiento Gestantes
                                                                    <b class="arrow"></b>
                                                                </a>

                                                                                              
                                                            </li>
                                                        </ul>
                                                    </li>
            <!-- cancer -->

                                                <?php
                                        $dato=$this->layout->getMenu_activo();
                                         if($dato=='3') {
                                            ?>

                                        <li class="hover active">
                                        <?php }else{?>

                                     <li class="hover">
                                       <?php } ?>
                                                          <a href="#" class="dropdown-toggle">
                                                                <i class="menu-icon fa fa-plus-square"></i>
                                                                <span class="menu-text">
                                                                    Cancer
                                                                </span>

                                                                <b class="arrow fa fa-angle-down"></b>
                                                            </a>

                                                                <ul class="submenu">

                                                               <li class="hover">
                                                                    <a href="<?php echo base_url()?>Seguimiento_nt/errores_cancer">
                                                                        <i class="menu-icon fa fa-caret-right"></i>

                                                                        Errores Cancer
                                                                        <b class="arrow"></b>
                                                                    </a>

                                                                                                  
                                                                </li>

                                                                           <li class="hover">
                                                                            <a href="<?php echo base_url()?>Seguimiento_nt/listar_pap">
                                                                                <i class="menu-icon fa fa-caret-right"></i>
                                                                                Nominal PAP
                                                                            </a>

                                                                            <b class="arrow"></b>
                                                                        </li>
                                                                        <li class="hover">
                                                                            <a href="<?php echo base_url()?>Seguimiento_nt/listar_ivaa">
                                                                                <i class="menu-icon fa fa-caret-right"></i>
                                                                                Nominal IVAA
                                                                            </a>

                                                                            <b class="arrow"></b>
                                                                        </li>
                                                                         <li class="hover">
                                                                            <a href="<?php echo base_url()?>Seguimiento_nt/listar_nominales">
                                                                                <i class="menu-icon fa fa-caret-right"></i>
                                                                                Otros Nominales
                                                                            </a>

                                                                            <b class="arrow"></b>
                                                                        </li>
                                                                         <li class="hover">
                                                                            <a href="<?php echo base_url()?>Seguimiento_nt/listar_consejerias">
                                                                                <i class="menu-icon fa fa-caret-right"></i>
                                                                                Nominal Consejerias
                                                                            </a>

                                                                            <b class="arrow"></b>
                                                                        </li>
                                                                      
                                                                          <li class="hover">
                                                                            <a href="<?php echo base_url()?>Seguimiento_nt/listar_entrega_resultados_pap">
                                                                                <i class="menu-icon fa fa-caret-right"></i>
                                                                                Entrega de Resultados PAP
                                                                            </a>

                                                                            <b class="arrow"></b>
                                                                        </li>
                                                                        
                                                            </ul>
                                                        </li>
            <!-- bucal  -->

                                                 <?php
                                                    $dato=$this->layout->getMenu_activo();
                                                     if($dato=='4') {
                                                        ?>

                                                    <li class="hover active">
                                                    <?php }else{?>

                                                 <li class="hover">
                                                   <?php } ?>                      <a href="#" class="dropdown-toggle">
                                                                            <i class="menu-icon fa fa-diamond"></i>
                                                                            <span class="menu-text">
                                                                                Salud Bucal
                                                                            </span>

                                                                            <b class="arrow fa fa-angle-down"></b>
                                                                        </a>

                                                                            <ul class="submenu">

                                                                             <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento_nt/Seguimiento_bucal_nino">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Atención niño
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                                    </li>
                                                                                    <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento_nt/Seguimiento_bucal_gestante">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Atención Gestante
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                                    </li>
                                                                                    <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento_nt/Seguimiento_bucal_adulto">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Atención Adulto mayor
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                                    </li>
                                                                                    <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento_nt/listar_errores_preventivo">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Errores Salud Bucal
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                                    </li>
                                                                                  
                                                                                 </ul>
                                                                    </li>


            <!-- ntransmisibles  -->

                                                                 <?php
                                                    $dato=$this->layout->getMenu_activo();
                                                     if($dato=='5') {
                                                        ?>

                                                    <li class="hover active">
                                                    <?php }else{?>

                                                 <li class="hover">
                                                   <?php } ?>
                                                                      <a href="#" class="dropdown-toggle">
                                                                            <i class="menu-icon fa fa-heartbeat"></i>
                                                                            <span class="menu-text">
                                                                                No transmisibles
                                                                            </span>

                                                                            <b class="arrow fa fa-angle-down"></b>
                                                                        </a>

                                                                            <ul class="submenu">

                                                                             
                                                                            <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento_nt/listar_diabetes">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Diabetes
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                                    </li>
                                                                                    <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento_nt/listar_hipertension">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Hipertensión
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                                    </li>

                                                                                    <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento_nt/valoracion_clinica">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Valoración Clinica
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                                    </li>
                                                                                    <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento_nt/errores_dnt">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Errores Daños no Transmisibles
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                                    </li>

                                                                            </ul>
                                                                    </li>

            <!-- mental  -->

                                                               <?php
                                                    $dato=$this->layout->getMenu_activo();
                                                     if($dato=='6') {
                                                        ?>

                                                    <li class="hover active">
                                                    <?php }else{?>

                                                 <li class="hover">
                                                   <?php } ?>
                                                                      <a href="#" class="dropdown-toggle">
                                                                            <i class="menu-icon fa fa-users"></i>
                                                                            <span class="menu-text">
                                                                               Salud Mental
                                                                            </span>

                                                                            <b class="arrow fa fa-angle-down"></b>
                                                                        </a>

                                                                            <ul class="submenu">

                                                                              <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento/Seguimiento_mental_vif">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Violencia Familiar
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li>
                                                                              <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento/Seguimiento_mental_tdepres">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Trastornos Depresivos
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li>
                                                                              <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento/Seguimiento_mental_psicosis">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Psicosis
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li>
                                                                              <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento/Seguimiento_mental_adrogas">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Alcohol y Drogas
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li>
                                                                            <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento/Seguimiento_mental_encuesta">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Habilidades Sociales < 12
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li>
                                                                            <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento/Seguimiento_mental_encuesta_">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Habilidades Sociales > 12
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li> 
                                                                            <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento/Seguimiento_mental_ffuertes">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Familias Fuertes
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li> 
                                                                            <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento/buscar_atenciones">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Trastornos Psicosociales
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li> 
                                                                            <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento/Errores_mental">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Errores
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li> 
                                                                            

                                                                            </ul>
                                                                    </li>


            <!-- TBC  -->
                                                             <?php
                                                                $dato=$this->layout->getMenu_activo();
                                                                 if($dato=='7') {
                                                                    ?>

                                                                <li class="hover active">
                                                                <?php }else{?>

                                                             <li class="hover">
                                                               <?php } ?>
                                                                                  <a href="#" class="dropdown-toggle">
                                                                                        <i class="menu-icon fa fa-stethoscope"></i>
                                                                                        <span class="menu-text">
                                                                                            TBC 
                                                                                        </span>

                                                                                        <b class="arrow fa fa-angle-down"></b>
                                                                                    </a>

                                                                                        <ul class="submenu">

                                                                                         
                                                                                        <li class="hover">
                                                                                                    <a href="<?php echo base_url()?>TbcMetaxenicas/Tbc_toma_muestra">
                                                                                                        <i class="menu-icon fa fa-caret-right"></i>
                                                                                                Sintomatico Respiratorio
                                                                                                    </a>

                                                                                                    <b class="arrow"></b>
                                                                                        </li>

                                                                                        <li class="hover">
                                                                                                    <a href="<?php echo base_url()?>TbcMetaxenicas/Tbc_contacto">
                                                                                                        <i class="menu-icon fa fa-caret-right"></i>
                                                                                                Contactos
                                                                                                    </a>

                                                                                                    <b class="arrow"></b>
                                                                                        </li>
                                                                                         <li class="hover">
                                                                                                    <a href="<?php echo base_url()?>TbcMetaxenicas/Tbc_errores">
                                                                                                        <i class="menu-icon fa fa-caret-right"></i>
                                                                                                Errores
                                                                                                    </a>

                                                                                                    <b class="arrow"></b>
                                                                                        </li>

                                                                                        </ul>
                                                                                </li>

                                                         <?php
                                                            $dato=$this->layout->getMenu_activo();
                                                             if($dato=='8') {
                                                                ?>

                                                            <li class="hover active">
                                                            <?php }else{?>

                                                         <li class="hover">
                                                           <?php } ?>
                                                                              <a href="#" class="dropdown-toggle">
                                                                                    <i class="menu-icon fa fa-bug"></i>
                                                                                    <span class="menu-text">
                                                                                        Metaxenicas
                                                                                    </span>

                                                                                    <b class="arrow fa fa-angle-down"></b>
                                                                                </a>

                                                                                    <ul class="submenu">

                                                                                     
                                                                                    <li class="hover">
                                                                                                <a href="<?php echo base_url()?>TbcMetaxenicas/errores_malaria">
                                                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                                            Toma Muestra Malaria
                                                                                                </a>

                                                                                                <b class="arrow"></b>
                                                                                    </li>

                                                                                    <li class="hover">
                                                                                                <a href="<?php echo base_url()?>TbcMetaxenicas/errores_bartonela">
                                                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                                             Toma Muestra Bartonela
                                                                                                </a>

                                                                                                <b class="arrow"></b>
                                                                                    </li>
                                                                                     <li class="hover">
                                                                                                <a href="<?php echo base_url()?>TbcMetaxenicas/errores_rbartonela">
                                                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                                            R-Bartonela
                                                                                                </a>

                                                                                                <b class="arrow"></b>
                                                                                    </li>
                                                                                    <li class="hover">
                                                                                                <a href="<?php echo base_url()?>TbcMetaxenicas/errores_leishmania">
                                                                                                    <i class="menu-icon fa fa-caret-right"></i>
                                                                                             Toma Muestra Leishmaniasis
                                                                                                </a>

                                                                                                <b class="arrow"></b>
                                                                                    </li>

                                                                                    </ul>
                                                                            </li>


            <!-- Buscar atenciones  -->
                                                <?php
                                                    $dato=$this->layout->getMenu_activo();
                                                         if($dato=='10') {
                                                        ?>

                                                            <li class="hover active">
                                                         <?php }else{?>

                                                            <li class="hover">
                                                                <?php } ?>
                                                                      <a href="#" class="dropdown-toggle">
                                                                            <i class="menu-icon fa fa-binoculars"></i>
                                                                            <span class="menu-text">
                                                                                VIH/ITS
                                                                            </span>

                                                                            <b class="arrow fa fa-angle-down"></b>
                                                                        </a>

                                                                            <ul class="submenu">

                                                                             
                                                                            <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento_ITS/Listar_errores_its">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                    Errores ITS
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li>
                                                                            <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento_ITS/Listar_vih_positivo">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                    Tamisajes Positivos VIH
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li>
                                                                            <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento_ITS/Listar_hepatitis_positivo">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                    Tamisajes Positivos Hepatitis B,C
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li>
                                                                            <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento_ITS/Listar_sifilis_positivo">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                    Tamisajes Positivos Sifilis
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li>
                                                                           
                                                                            </ul>
                                                                    </li>


            <!-- Buscar atenciones  -->
                                                 <?php
                                                    $dato=$this->layout->getMenu_activo();
                                                     if($dato=='9') {
                                                        ?>

                                                        <li class="hover active">
                                                          <?php }else{?>

                                                        <li class="hover">
                                                                    <?php } ?>
                                                                      <a href="#" class="dropdown-toggle">
                                                                            <i class="menu-icon fa fa-search"></i>
                                                                            <span class="menu-text">
                                                                                Busqueda de Atenciones
                                                                            </span>

                                                                            <b class="arrow fa fa-angle-down"></b>
                                                                        </a>

                                                                    <ul class="submenu">

                                                                             
                                                                            <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento/buscar_atenciones">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                    X Paciente
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li>

                                                                            <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento/buscar_atenciones_cie">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                    X Cie
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li>
                                                                            
                                                                            <li class="hover">
                                                                                        <a href="<?php echo base_url()?>Seguimiento/Buscar_VacunaInfluenza">
                                                                                            <i class="menu-icon fa fa-caret-right"></i>
                                                                                    Inluenza - 2020
                                                                                        </a>

                                                                                        <b class="arrow"></b>
                                                                            </li>

                                                                    </ul>
                                                        </li>

                  <!--  salir -->                


                                                    <li class="hover">
                                                      <a href="<?php echo base_url() ?>User_admin/retornar_reportes">
                                                            <i class="menu-icon fa fa-random"></i>
                                                            <span class="menu-text">
                                                                Retornar a Reportes
                                                            </span>

                                                            <b class="arrow fa fa-angle-down"></b>
                                                        </a>
                                                       
                                                    </li>


            <!-- menu 3 -->


                                                        <li class="hover">
                                                      
                                                            <a href="<?php echo base_url() ?>User_admin/salir">
                                                                <i class="menu-icon fa fa-power-off"></i>
                                                                <span class="menu-text">
                                                                    Salir
                                                                </span>

                                                                <b class="arrow fa fa-angle-down"></b>
                                                            </a>

                                                            
                                                        </li>
                           
                    </ul><!-- /.nav-list -->
            </div>

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="page-content">
                        
                        
                        <div class="page-header">
                            <h1>
                                <?php echo $this->layout->getMensaje(); ?>
                            </h1>
                        </div><!-- /.page-header -->

                        <div class="row">
                            <div class="col-xs-12">
                                <!-- PAGE CONTENT BEGINS -->
                                

                                

                                  <?php echo $content_for_layout; ?>


                                <!-- PAGE CONTENT ENDS -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            <span class="blue bolder">RSSLC</span>
                            Estadistica e Informatica &copy; 2020
                        </span>

                        &nbsp; &nbsp;
                        <span class="action-buttons">
                            <a href="#">
                                <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
                            </a>

                            <a href="#">
                                <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
                            </a>
                        </span>
                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
       </div>
        <!-- basic scripts -->

        <!--[if !IE]> -->
       <script src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>


 <!-- ligtbox -->

         <script src="<?php echo base_url()?>assets/lightbox/jquery.colorbox.js"></script> 

        <script>
            $(document).ready(function(){
                //Examples of how to assign the Colorbox event to elements
               
                
                $(".iframe").colorbox({iframe:true, width:"90%", height:"90%"});
              
               

              
                //Example of preserving a JavaScript event for inline calls.
               
            });

        </script>

 <!-- <![endif]-->
 
        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url()?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
        </script>
        <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>

          <!-- page specific plugin scripts -->
        <script src="<?php echo base_url()?>assets/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/jquery.dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/buttons.flash.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/buttons.colVis.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/dataTables.select.min.js"></script>

        <!-- ace scripts -->
       

        <!-- page specific plugin scripts -->
        <script src="<?php echo base_url()?>assets/js/jquery-ui.custom.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/spinbox.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/bootstrap-timepicker.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/moment.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/daterangepicker.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/bootstrap-datetimepicker.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/bootstrap-colorpicker.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/jquery.knob.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/autosize.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/jquery.inputlimiter.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/jquery.maskedinput.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/bootstrap-tag.min.js"></script>
        <!-- ace scripts -->
        
        <script src="<?php echo base_url()?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/ace.min.js"></script> 

        <script src="<?php echo base_url()?>assets/js/jasny-bootstrap.min.js"></script>    
        <script src="<?php echo base_url()?>assets/js/custom.js"></script> 



<script type="text/javascript">
            jQuery(function($) {
                $('#id-disable-check').on('click', function() {
                    var inp = $('#form-input-readonly').get(0);
                    if(inp.hasAttribute('disabled')) {
                        inp.setAttribute('readonly' , 'true');
                        inp.removeAttribute('disabled');
                        inp.value="This text field is readonly!";
                    }
                    else {
                        inp.setAttribute('disabled' , 'disabled');
                        inp.removeAttribute('readonly');
                        inp.value="This text field is disabled!";
                    }
                });
            
            
                if(!ace.vars['touch']) {
                    $('.chosen-select').chosen({allow_single_deselect:true}); 
                    //resize the chosen on window resize
            
                    $(window)
                    .off('resize.chosen')
                    .on('resize.chosen', function() {
                        $('.chosen-select').each(function() {
                             var $this = $(this);
                             $this.next().css({'width': $this.parent().width()});
                        })
                    }).trigger('resize.chosen');
                    //resize chosen on sidebar collapse/expand
                    $(document).on('settings.ace.chosen', function(e, event_name, event_val) {
                        if(event_name != 'sidebar_collapsed') return;
                        $('.chosen-select').each(function() {
                             var $this = $(this);
                             $this.next().css({'width': $this.parent().width()});
                        })
                    });
            
            
                    $('#chosen-multiple-style .btn').on('click', function(e){
                        var target = $(this).find('input[type=radio]');
                        var which = parseInt(target.val());
                        if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
                         else $('#form-field-select-4').removeClass('tag-input-style');
                    });
                }
            
            
                $('[data-rel=tooltip]').tooltip({container:'body'});
                $('[data-rel=popover]').popover({container:'body'});
            
                autosize($('textarea[class*=autosize]'));
                
                $('textarea.limited').inputlimiter({
                    remText: '%n character%s remaining...',
                    limitText: 'max allowed : %n.'
                });
            
                $.mask.definitions['~']='[+-]';
                $('.input-mask-date').mask('99/99/9999');
                $('.input-mask-phone').mask('(999) 999-9999');
                $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
                $(".input-mask-product").mask("a*-999-a999",{placeholder:" ",completed:function(){alert("You typed the following: "+this.val());}});
            
            
            
                $( "#input-size-slider" ).css('width','200px').slider({
                    value:1,
                    range: "min",
                    min: 1,
                    max: 8,
                    step: 1,
                    slide: function( event, ui ) {
                        var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                        var val = parseInt(ui.value);
                        $('#form-field-4').attr('class', sizing[val]).attr('placeholder', '.'+sizing[val]);
                    }
                });
            
                $( "#input-span-slider" ).slider({
                    value:1,
                    range: "min",
                    min: 1,
                    max: 12,
                    step: 1,
                    slide: function( event, ui ) {
                        var val = parseInt(ui.value);
                        $('#form-field-5').attr('class', 'col-xs-'+val).val('.col-xs-'+val);
                    }
                });
            
            
                
                //"jQuery UI Slider"
                //range slider tooltip example
                $( "#slider-range" ).css('height','200px').slider({
                    orientation: "vertical",
                    range: true,
                    min: 0,
                    max: 100,
                    values: [ 17, 67 ],
                    slide: function( event, ui ) {
                        var val = ui.values[$(ui.handle).index()-1] + "";
            
                        if( !ui.handle.firstChild ) {
                            $("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>")
                            .prependTo(ui.handle);
                        }
                        $(ui.handle.firstChild).show().children().eq(1).text(val);
                    }
                }).find('span.ui-slider-handle').on('blur', function(){
                    $(this.firstChild).hide();
                });
                
                
                $( "#slider-range-max" ).slider({
                    range: "max",
                    min: 1,
                    max: 10,
                    value: 2
                });
                
                $( "#slider-eq > span" ).css({width:'90%', 'float':'left', margin:'15px'}).each(function() {
                    // read initial values from markup and remove that
                    var value = parseInt( $( this ).text(), 10 );
                    $( this ).empty().slider({
                        value: value,
                        range: "min",
                        animate: true
                        
                    });
                });
                
                $("#slider-eq > span.ui-slider-purple").slider('disable');//disable third item
            
                
                $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                    no_file:'No hay archivo ...',
                    btn_choose:'Seleccionar',
                    btn_change:'Cambiar',
                    droppable:false,
                    onchange:null,
                    thumbnail:false //| true | large
                    //whitelist:'gif|png|jpg|jpeg'
                    //blacklist:'exe|php'
                    //onchange:''
                    //
                });
                //pre-show a file name, for example a previously selected file
                //$('#id-input-file-1').ace_file_input('show_file_list', ['myfile.txt'])
            
            
                $('#id-input-file-3').ace_file_input({
                    style: 'well',
                    btn_choose: 'Arrastra archivos Aquí o has Click',
                    btn_change: null,
                    no_icon: 'ace-icon fa fa-cloud-upload',
                    droppable: true,
                    thumbnail: 'small'//large | fit
                    //,icon_remove:null//set null, to hide remove/reset button
                    /**,before_change:function(files, dropped) {
                        //Check an example below
                        //or examples/file-upload.html
                        return true;
                    }*/
                    /**,before_remove : function() {
                        return true;
                    }*/
                    ,
                    preview_error : function(filename, error_code) {
                        //name of the file that failed
                        //error_code values
                        //1 = 'FILE_LOAD_FAILED',
                        //2 = 'IMAGE_LOAD_FAILED',
                        //3 = 'THUMBNAIL_FAILED'
                        //alert(error_code);
                    }
            
                }).on('change', function(){
                    //console.log($(this).data('ace_input_files'));
                    //console.log($(this).data('ace_input_method'));
                });
                
                
                //$('#id-input-file-3')
                //.ace_file_input('show_file_list', [
                    //{type: 'image', name: 'name of image', path: 'http://path/to/image/for/preview'},
                    //{type: 'file', name: 'hello.txt'}
                //]);
            
                
                
            
                //dynamically change allowed formats by changing allowExt && allowMime function
                $('#id-file-format').removeAttr('checked').on('change', function() {
                    var whitelist_ext, whitelist_mime;
                    var btn_choose
                    var no_icon
                    if(this.checked) {
                        btn_choose = "Drop images here or click to choose";
                        no_icon = "ace-icon fa fa-picture-o";
            
                        whitelist_ext = ["jpeg", "jpg", "png", "gif" , "bmp"];
                        whitelist_mime = ["image/jpg", "image/jpeg", "image/png", "image/gif", "image/bmp"];
                    }
                    else {
                        btn_choose = "Drop files here or click to choose";
                        no_icon = "ace-icon fa fa-cloud-upload";
                        
                        whitelist_ext = null;//all extensions are acceptable
                        whitelist_mime = null;//all mimes are acceptable
                    }
                    var file_input = $('#id-input-file-3');
                    file_input
                    .ace_file_input('update_settings',
                    {
                        'btn_choose': btn_choose,
                        'no_icon': no_icon,
                        'allowExt': whitelist_ext,
                        'allowMime': whitelist_mime
                    })
                    file_input.ace_file_input('reset_input');
                    
                    file_input
                    .off('file.error.ace')
                    .on('file.error.ace', function(e, info) {
                        //console.log(info.file_count);//number of selected files
                        //console.log(info.invalid_count);//number of invalid files
                        //console.log(info.error_list);//a list of errors in the following format
                        
                        //info.error_count['ext']
                        //info.error_count['mime']
                        //info.error_count['size']
                        
                        //info.error_list['ext']  = [list of file names with invalid extension]
                        //info.error_list['mime'] = [list of file names with invalid mimetype]
                        //info.error_list['size'] = [list of file names with invalid size]
                        
                        
                        /**
                        if( !info.dropped ) {
                            //perhapse reset file field if files have been selected, and there are invalid files among them
                            //when files are dropped, only valid files will be added to our file array
                            e.preventDefault();//it will rest input
                        }
                        */
                        
                        
                        //if files have been selected (not dropped), you can choose to reset input
                        //because browser keeps all selected files anyway and this cannot be changed
                        //we can only reset file field to become empty again
                        //on any case you still should check files with your server side script
                        //because any arbitrary file can be uploaded by user and it's not safe to rely on browser-side measures
                    });
                    
                    
                    /**
                    file_input
                    .off('file.preview.ace')
                    .on('file.preview.ace', function(e, info) {
                        console.log(info.file.width);
                        console.log(info.file.height);
                        e.preventDefault();//to prevent preview
                    });
                    */
                
                });
            
                $('#spinner1').ace_spinner({value:0,min:0,max:200,step:10, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
                .closest('.ace-spinner')
                .on('changed.fu.spinbox', function(){
                    //console.log($('#spinner1').val())
                }); 
                $('#spinner2').ace_spinner({value:0,min:0,max:10000,step:100, touch_spinner: true, icon_up:'ace-icon fa fa-caret-up bigger-110', icon_down:'ace-icon fa fa-caret-down bigger-110'});
                $('#spinner3').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});
                $('#spinner4').ace_spinner({value:0,min:-100,max:100,step:10, on_sides: true, icon_up:'ace-icon fa fa-plus', icon_down:'ace-icon fa fa-minus', btn_up_class:'btn-purple' , btn_down_class:'btn-purple'});
            
                //$('#spinner1').ace_spinner('disable').ace_spinner('value', 11);
                //or
                //$('#spinner1').closest('.ace-spinner').spinner('disable').spinner('enable').spinner('value', 11);//disable, enable or change value
                //$('#spinner1').closest('.ace-spinner').spinner('value', 0);//reset to 0
            
            
                //datepicker plugin
                //link
                $('.date-picker').datepicker({
                    autoclose: true,
                    todayHighlight: true
                })
                //show datepicker when clicking on the icon
                .next().on(ace.click_event, function(){
                    $(this).prev().focus();
                });
            
                //or change it into a date range picker
                $('.input-daterange').datepicker({autoclose:true});
            
            
                //to translate the daterange picker, please copy the "examples/daterange-fr.js" contents here before initialization
                $('input[name=date-range-picker]').daterangepicker({
                    'applyClass' : 'btn-sm btn-success',
                    'cancelClass' : 'btn-sm btn-default',
                    locale: {
                        applyLabel: 'Apply',
                        cancelLabel: 'Cancel',
                    }
                })
                .prev().on(ace.click_event, function(){
                    $(this).next().focus();
                });
            
            
                $('#timepicker1').timepicker({
                    minuteStep: 1,
                    showSeconds: true,
                    showMeridian: false,
                    disableFocus: true,
                    icons: {
                        up: 'fa fa-chevron-up',
                        down: 'fa fa-chevron-down'
                    }
                }).on('focus', function() {
                    $('#timepicker1').timepicker('showWidget');
                }).next().on(ace.click_event, function(){
                    $(this).prev().focus();
                });
                
                
            
                
                if(!ace.vars['old_ie']) $('#date-timepicker1').datetimepicker({
                 //format: 'MM/DD/YYYY h:mm:ss A',//use this option to display seconds
                 icons: {
                    time: 'fa fa-clock-o',
                    date: 'fa fa-calendar',
                    up: 'fa fa-chevron-up',
                    down: 'fa fa-chevron-down',
                    previous: 'fa fa-chevron-left',
                    next: 'fa fa-chevron-right',
                    today: 'fa fa-arrows ',
                    clear: 'fa fa-trash',
                    close: 'fa fa-times'
                 }
                }).next().on(ace.click_event, function(){
                    $(this).prev().focus();
                });
                
            
                $('#colorpicker1').colorpicker();
                //$('.colorpicker').last().css('z-index', 2000);//if colorpicker is inside a modal, its z-index should be higher than modal'safe
            
                $('#simple-colorpicker-1').ace_colorpicker();
                //$('#simple-colorpicker-1').ace_colorpicker('pick', 2);//select 2nd color
                //$('#simple-colorpicker-1').ace_colorpicker('pick', '#fbe983');//select #fbe983 color
                //var picker = $('#simple-colorpicker-1').data('ace_colorpicker')
                //picker.pick('red', true);//insert the color if it doesn't exist
            
            
                $(".knob").knob();
                
                
                var tag_input = $('#form-field-tags');
                try{
                    tag_input.tag(
                      {
                        placeholder:tag_input.attr('placeholder'),
                        //enable typeahead by specifying the source array
                        source: ace.vars['US_STATES'],//defined in ace.js >> ace.enable_search_ahead
                        /**
                        //or fetch data from database, fetch those that match "query"
                        source: function(query, process) {
                          $.ajax({url: 'remote_source.php?q='+encodeURIComponent(query)})
                          .done(function(result_items){
                            process(result_items);
                          });
                        }
                        */
                      }
                    )
            
                    //programmatically add/remove a tag
                    var $tag_obj = $('#form-field-tags').data('tag');
                    $tag_obj.add('Programmatically Added');
                    
                    var index = $tag_obj.inValues('some tag');
                    $tag_obj.remove(index);
                }
                catch(e) {
                    //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
                    tag_input.after('<textarea id="'+tag_input.attr('id')+'" name="'+tag_input.attr('name')+'" rows="3">'+tag_input.val()+'</textarea>').remove();
                    //autosize($('#form-field-tags'));
                }
                
                
                /////////
                $('#modal-form input[type=file]').ace_file_input({
                    style:'well',
                    btn_choose:'Drop files here or click to choose',
                    btn_change:null,
                    no_icon:'ace-icon fa fa-cloud-upload',
                    droppable:true,
                    thumbnail:'large'
                })
                
                //chosen plugin inside a modal will have a zero width because the select element is originally hidden
                //and its width cannot be determined.
                //so we set the width after modal is show
                $('#modal-form').on('shown.bs.modal', function () {
                    if(!ace.vars['touch']) {
                        $(this).find('.chosen-container').each(function(){
                            $(this).find('a:first-child').css('width' , '210px');
                            $(this).find('.chosen-drop').css('width' , '210px');
                            $(this).find('.chosen-search input').css('width' , '200px');
                        });
                    }
                })
                /**
                //or you can activate the chosen plugin after modal is shown
                //this way select element becomes visible with dimensions and chosen works as expected
                $('#modal-form').on('shown', function () {
                    $(this).find('.modal-chosen').chosen();
                })
                */
            
                
                
                $(document).one('ajaxloadstart.page', function(e) {
                    autosize.destroy('textarea[class*=autosize]')
                    
                    $('.limiterBox,.autosizejs').remove();
                    $('.daterangepicker.dropdown-menu,.colorpicker.dropdown-menu,.bootstrap-datetimepicker-widget.dropdown-menu').remove();
                });
            
            });
</script>

<script type="text/javascript">
            jQuery(function($) {
                //initiate dataTables plugin
                var myTable = 
                $('#dynamic-table')
                //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                .DataTable( {
                    bAutoWidth: false,
                    "aoColumns": [
                      { "aSortable": false },
                      null, null,null, null, null,null,
                      { "bSortable": false }
                    ],
                    "aaSorting": [],
                    
                    
                    //"bProcessing": true,
                    //"bServerSide": true,
                    //"sAjaxSource": "http://127.0.0.1/table.php"   ,
            
                    //,
                    //"sScrollY": "200px",
                    //"bPaginate": false,
            
                    //"sScrollX": "100%",
                    //"sScrollXInner": "120%",
                    //"bScrollCollapse": true,
                    //Note: if you are applying horizontal scrolling (sScrollX) on a ".table-bordered"
                    //you may want to wrap the table inside a "div.dataTables_borderWrap" element
            
                    //"iDisplayLength": 50
            
            
                    select: {
                        style: 'multi'
                    }
                } );
            
                
                
                $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
                
                new $.fn.dataTable.Buttons( myTable, {
                    buttons: [
                      {
                        "extend": "colvis",
                        "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                        "className": "btn btn-white btn-primary btn-bold",
                        columns: ':not(:first):not(:last)'
                      },
                      {
                        "extend": "copy",
                        "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                        "extend": "csv",
                        "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                        "extend": "excel",
                        "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                        "extend": "pdf",
                        "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                        "className": "btn btn-white btn-primary btn-bold"
                      },
                      {
                        "extend": "print",
                        "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                        "className": "btn btn-white btn-primary btn-bold",
                        autoPrint: false,
                        message: 'This print was produced using the Print button for DataTables'
                      }       
                    ]
                } );
                myTable.buttons().container().appendTo( $('.tableTools-container') );
                
                //style the message box
                var defaultCopyAction = myTable.button(1).action();
                myTable.button(1).action(function (e, dt, button, config) {
                    defaultCopyAction(e, dt, button, config);
                    $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                });
                
                
                var defaultColvisAction = myTable.button(0).action();
                myTable.button(0).action(function (e, dt, button, config) {
                    
                    defaultColvisAction(e, dt, button, config);
                    
                    
                    if($('.dt-button-collection > .dropdown-menu').length == 0) {
                        $('.dt-button-collection')
                        .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                        .find('a').attr('href', '#').wrap("<li />")
                    }
                    $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
                });
            
                ////
            
                setTimeout(function() {
                    $($('.tableTools-container')).find('a.dt-button').each(function() {
                        var div = $(this).find(' > div').first();
                        if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
                        else $(this).tooltip({container: 'body', title: $(this).text()});
                    });
                }, 500);
                
                
                
                
                
                myTable.on( 'select', function ( e, dt, type, index ) {
                    if ( type === 'row' ) {
                        $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
                    }
                } );
                myTable.on( 'deselect', function ( e, dt, type, index ) {
                    if ( type === 'row' ) {
                        $( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
                    }
                } );
            
            
            
            
                /////////////////////////////////
                //table checkboxes
                $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);
                
                //select/deselect all rows according to table header checkbox
                $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $('#dynamic-table').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) myTable.row(row).select();
                        else  myTable.row(row).deselect();
                    });
                });
                
                //select/deselect a row when the checkbox is checked/unchecked
                $('#dynamic-table').on('click', 'td input[type=checkbox]' , function(){
                    var row = $(this).closest('tr').get(0);
                    if(this.checked) myTable.row(row).deselect();
                    else myTable.row(row).select();
                });
            
            
            
                $(document).on('click', '#dynamic-table .dropdown-toggle', function(e) {
                    e.stopImmediatePropagation();
                    e.stopPropagation();
                    e.preventDefault();
                });
                
                
                
                //And for the first simple table, which doesn't have TableTools or dataTables
                //select/deselect all rows according to table header checkbox
                var active_class = 'active';
                $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function(){
                    var th_checked = this.checked;//checkbox inside "TH" table header
                    
                    $(this).closest('table').find('tbody > tr').each(function(){
                        var row = this;
                        if(th_checked) $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                        else $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                    });
                });
                
                //select/deselect a row when the checkbox is checked/unchecked
                $('#simple-table').on('click', 'td input[type=checkbox]' , function(){
                    var $row = $(this).closest('tr');
                    if($row.is('.detail-row ')) return;
                    if(this.checked) $row.addClass(active_class);
                    else $row.removeClass(active_class);
                });
            
                
            
                /********************************/
                //add tooltip for small view action buttons in dropdown menu
                $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
                
                //tooltip placement on right or left
                function tooltip_placement(context, source) {
                    var $source = $(source);
                    var $parent = $source.closest('table')
                    var off1 = $parent.offset();
                    var w1 = $parent.width();
            
                    var off2 = $source.offset();
                    //var w2 = $source.width();
            
                    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                    return 'left';
                }
                
                
                
                
                /***************/
                $('.show-details-btn').on('click', function(e) {
                    e.preventDefault();
                    $(this).closest('tr').next().toggleClass('open');
                    $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                });
                /***************/
                
                
                
                
                
                /**
                //add horizontal scrollbars to a simple table
                $('#simple-table').css({'width':'2000px', 'max-width': 'none'}).wrap('<div style="width: 1000px;" />').parent().ace_scroll(
                  {
                    horizontal: true,
                    styleClass: 'scroll-top scroll-dark scroll-visible',//show the scrollbars on top(default is bottom)
                    size: 2000,
                    mouseWheelLock: true
                  }
                ).css('padding-top', '12px');
                */
            
            
            })
</script>



<!-- inline scripts related to this page -->


   





       

    </body>
</html>
