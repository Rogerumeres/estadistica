<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>

<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php echo $this->layout->getTitle(); ?></title>
      <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/css/components.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/css/icons.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/css/responsee.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/css/owl.carousel.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/css/owl.theme.css">
      <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/css/lightcase.css">
      <!-- CUSTOM STYLE -->      
      <link rel="stylesheet" href="<?php echo base_url()?>assets/new_template/css/template-style.css">
     
      <script type="text/javascript" src="<?php echo base_url()?>assets/new_template/js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/new_template/js/jquery-ui.min.js"></script> 
      <script type="text/javascript" src="<?php echo base_url()?>assets/new_template/js/validation.js"></script>    


      <?php echo $this->layout->css; ?> 

      <?php echo $this->layout->js; ?> 
   </head>
   
  
   <body class="size-1520 primary-color-red background-parallax-container" data-image-src="<?php echo base_url()?>assets/new_template/img/Mojave.jpg">
      <!-- Page overlay with fade out effect after page load. Try to change class background-dark to another color (for example white or primary color) -->
      <div id="page-overlay" class="background-dark" style="display: none;"></div>
      
      <!-- HEADER 
      <header class="grid">
        Top Navigation 
        <nav class="s-12 grid background-none background-primary-hightlight">
            logo 
           
           <p class="nav-text"><span></span></p><div class="top-nav s-12 l-9">
              
              <ul class="top-ul right chevron">
                 
                <li><a href="http://www.estadistica.redsaludlaconvencion.gob.pe">His</a></li>
                 <li><a href="http://www.estadistica.redsaludlaconvencion.gob.pe/Errores/errores_his">Errores HIS</a></li>
                  <li><a href="http://www.estadistica.redsaludlaconvencion.gob.pe">Reportes HIS</a></li>
                <li><a href="http://www.estadistica.redsaludlaconvencion.gob.pe">Convenio FED</a></li>
                <li><a href="http://www.estadistica.redsaludlaconvencion.gob.pe">Anemia</a></li>
                               
                
              
               
               
                
              </ul>
           </div>
        </nav>
      </header>
      
      MAIN -->

        <!-- TOP SECTION --
        <section class="grid">
          <div class="m-12 l-3 padding-2x background-primary margin-bottom">
            <h1 class="text-m-size-40 text-xl-size-50 text-size-70 text-extra-strong text-white text-line-height-1 text-uppercase">This is The Bricker</h1>
           
          </div>
          
           Main Carousel 
          
        </section> -->
        
        <!-- SECTION 1 -->
      <section class="grid padding-2x margin-bottom background-dark">
            
          
            <div class="s-12 m-6 l-2  background-dark"> 
              <img src="<?php echo base_url()?>assets/new_template/img/logo.png" width="150px" height="150px">
            </div>
            <div class="s-12 m-6 l-10  background-dark">
          <h1 class="text-m-size-40 center text-xl-size-50 text-size-50 text-extra-strong text-white text-line-height-1 text-uppercase"><b>Sistema de Información estadistica</b></h1>
          <h1 class="m-12 l-10 center text-thin text-size-30 text-white text-uppercase margin-bottom-30"><b>Red de Servicios de salud la Convención</b></h1>
          </div>
        </section> 


 <section class="grid margin">
        <h2 class="s-12 text-white text-thin text-size-30 text-white text-uppercase margin-top-bottom-20 center text-center"><b>Reporte Estrategias</b></h2> 
                
        <!-- Image-->
       
      </section> 







        <!-- SECTION 2 --> 
        <section class="grid margin text-center">


          <a href="<?php echo base_url()?>Mostrar_programa/ver_art" class="s-10 m-6 l-3 padding-2x vertical-center margin-bottom background-green hover-zoom">
            <i class="icon-sli-chart text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Articulado Nutricional</h3>
          </a>


          <a href="<?php echo base_url()?>Mostrar_programa/ver_mat" class="s-10 m-6 l-3 padding-2x vertical-center margin-bottom background-orange hover-zoom">
            <i class="icon-sli-graph text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase"> Materno Neonatal</h3>
          </a>

           <a href="<?php echo base_url()?>Mostrar_programa/ver_tras" class="s-10 m-6 l-3 padding-2x vertical-center margin-bottom background-purple hover-zoom">
            <i class="icon-sli-pie-chart text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Transmisibles</h3>
          </a>
          <a href="<?php echo base_url()?>Mostrar_programa/ver_no_tras" class="s-10 m-6 l-3 padding-2x vertical-center margin-bottom background-aqua hover-zoom">
            <i class="icon-sli-layers text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">No Transmisibles</h3>
          </a>
          
              
          
          <a href="<?php echo base_url()?>Mostrar_programa/ver_pro_saludf" class="s-10 m-6 l-3 padding-2x vertical-center margin-bottom background-red hover-zoom">
            <i class="icon-sli-folder-alt text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">PROMSA y Salud Familiar</h3>
          </a>

           <a href="<?php echo base_url()?>./uploads/reporte_2019/REPORTE 2015-2019 ANEMIA Y DESNUTRICION POR MICRORED.xlsx" class="s-10 m-6 l-3 padding-2x vertical-center margin-bottom background-blue hover-zoom">
            <i class="icon-sli-folder-alt text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Reporte Sien</h3>
          </a>
              
             

        <a href="<?php echo base_url()?>./uploads/reporte_2019/reportes 2019.zip" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom block-bordered border-light-blue hover-zoom">
          <i class="icon-sli-docs text-size-60 text-white center margin-bottom-15 text-light-blue"></i>
          <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase text-light-blue">Reporte Consolidado 2019 Final</h3>
        </a>   
              
               <a href="<?php echo base_url()?>./uploads/reporte_2019/AtcAtdTodasActividades2019-HisMinsaNominal.xlsx" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom block-bordered border-orange hover-zoom">
          <i class="icon-sli-docs text-size-60 text-white center margin-bottom-15 text-orange"></i>
          <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase text-orange">Atc y Atd por todas las actividades</h3>
        </a>    

        </section>


      <section class="grid margin">
        <h2 class="s-12 text-white text-thin text-size-30 text-white text-uppercase margin-top-bottom-20 center text-center"><b>Metas Y Población Asignada</b></h2> 
                
        <!-- Image-->
       
      </section> 

         <section class="grid margin text-center">
          <a href="<?php echo base_url()?>./uploads/reporte_2019/Metas 2015-2019.rar" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom block-bordered border-purple hover-zoom">
          <i class="icon-sli-docs text-size-60 text-white center margin-bottom-15 text-purple"></i>
          <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase text-purple"> Metas 2015-2019</h3>
        </a>
        <a href="<?php echo base_url()?>./uploads/reporte_2019/Poblacion 2015-2019.rar" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom block-bordered border-pink hover-zoom">
          <i class="icon-sli-docs text-size-60 text-white center margin-bottom-15 text-pink"></i>
          <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase text-pink"> Población 2015-2019</h3>
        </a>
                          
        </section>







         <section class="grid margin">
        <h2 class="s-12 text-white text-thin text-size-30 text-white text-uppercase margin-top-bottom-20 center text-center"><b>Sistemas de Errores y Indicadores de gestión</b></h2> 
                
        <!-- Image-->
       
      </section> 

         <section class="grid margin text-center">
          <a href="<?php echo base_url()?>User/ingresar" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-light-blue hover-zoom" target="_blank">
            <i class="icon-sli-fire text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Errores HIS</h3>
          </a>
          <a href="http://www.redsaludlaconvencion.gob.pe/indicadores/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom background-pink hover-zoom" target="_blank">
            <i class="icon-sli-info text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase">Indicadores de gestión</h3>
          </a>


          
                 
                       
        </section>




         <section class="grid margin">
        <h2 class="s-12 text-white text-thin text-size-30 text-white text-uppercase margin-top-bottom-20 center text-center"><b>Padron Nominal</b></h2> 
                
        <!-- Image-->
       
      </section> 

         <section class="grid margin text-center">
         
            <a href="<?php echo base_url()?>./uploads/reporte_2020/Tablero_PadronN.xlsm" class="s-10 m-6 l-3 padding-2x vertical-center margin-bottom background-orange hover-zoom">
            <i class="icon-sli-graph text-size-60 text-white center margin-bottom-15"></i>
            <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase"> Tablero de mando Padron Nominal</h3>
          </a>             
        </section>





 <section class="grid margin">
        <h2 class="s-12 text-white text-thin text-size-30 text-white text-uppercase margin-top-bottom-20 center text-center"><b>Reporte Anteriores</b></h2> 
                
        <!-- Image-->
       
      </section> 

        <section class="grid margin text-center">

           <a href="<?php echo base_url()?>./uploads/reporte_2015/reportes 2015.zip" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom block-bordered border-light-blue hover-zoom">
          <i class="icon-sli-docs text-size-60 text-white center margin-bottom-15 text-light-blue"></i>
          <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase text-light-blue"> Reporte Consolidado 2015</h3>
        </a>
        <a href="<?php echo base_url()?>./uploads/reporte_2016/consolidado_2016.zip" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom block-bordered border-green hover-zoom">
          <i class="icon-sli-docs text-size-60 text-white center margin-bottom-15 text-green"></i>
          <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase text-green"> Reporte Consolidado 2016</h3>
        </a>
        <a href="<?php echo base_url()?>./uploads/reporte_2017/Consolidado_2017.zip" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom block-bordered border-aqua hover-zoom">
          <i class="icon-sli-docs text-size-60 text-white center margin-bottom-15 text-aqua"></i>
          <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase text-aqua">Reporte Consolidado 2017</h3>
        </a>          
        <a href="<?php echo base_url()?>./uploads/reporte_2018/reportes 2018.zip" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom block-bordered border-blue hover-zoom">
          <i class="icon-sli-docs text-size-60 text-white center margin-bottom-15 text-blue"></i>
          <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase text-blue">Reporte Consolidado 2018</h3>
        </a>
        <a href="<?php echo base_url()?>./uploads/reporte_2019/reportes 2019.zip" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom block-bordered border-red hover-zoom">
          <i class="icon-sli-docs text-size-60 text-white center margin-bottom-15 text-red"></i>
          <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase text-red">Reporte Consolidado 2019 Final</h3>
        </a>
        <!-- SECTION 2 --
        <a href="https://www.myresponsee.com/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom block-bordered border-light-blue hover-zoom">
          <i class="icon-sli-docs text-size-60 text-white center margin-bottom-15 text-light-blue"></i>
          <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase text-light-blue">Parallax Background</h3>
        </a>
        <a href="https://www.myresponsee.com/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom block-bordered border-pink hover-zoom">
          <i class="icon-sli-docs text-size-60 text-white center margin-bottom-15 text-pink"></i>
          <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase text-pink">Responsive Image Carousel</h3>
        </a>          
        <a href="https://www.myresponsee.com/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom block-bordered border-purple hover-zoom">
          <i class="icon-sli-rocket text-size-60 text-white center margin-bottom-15 text-purple"></i>
          <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase text-purple">Many Animated Elements</h3>
        </a>
        <a href="https://www.myresponsee.com/" class="s-12 m-6 l-3 padding-2x vertical-center margin-bottom block-bordered border-orange hover-zoom">
          <i class="icon-sli-star text-size-60 text-white center margin-bottom-15 text-orange"></i>
          <h3 class="text-strong text-size-20 text-line-height-1 margin-bottom-30 text-uppercase text-orange">And many more...</h3>
        </a>
      -->
      </section>
        
        
      <SECTION>
      <DIV>
        <P>
          <BR>
          <BR>
          <BR>
        </P>
      </DIV>
    </SECTION>
        
       
      
       
      <!-- FOOTER -->
      <footer class="grid">
        <!-- Footer - top -->
        <!-- Image-->
       <div class="s-12 m-6 l-3 padding-2x margin-bottom background-dark">
             <h2 class="text-strong text-uppercase"></h2>
             <p></p>
          </div>
        
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase"></h2>
           <p></p>
        </div>
        
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
          
        </div>
        
        <div class="s-12 m-9 l-3 padding-2x margin-bottom background-dark">
           <h2 class="text-strong text-uppercase">Contacto</h2>
           <p><b class="text-primary margin-right-10">P</b> +51-958752485</p>
           <p><b class="text-primary margin-right-10">M</b> <a class="text-primary-hover" href="mailto:red_estadistica@hotmail.com">red_estadistica@hotmail.com</a></p>
           
        </div>
        
        <!-- Footer - bottom -->
        <div class="s-12 text-center margin-bottom">
          <p class="text-size-12">Copyright 2019, Estadistica Red de Servicios de Salud la Convención</p>
        
          <p><a class="text-size-12 text-primary-hover" href="#" title="Responsee - lightweight responsive framework">Diseñado para Dispositivos Moviles y de escritorio</a></p>
        </div>
      </footer>                                                                    
      <script type="text/javascript" src="<?php echo base_url()?>assets/new_template/js/responsee.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/new_template/js/plugins.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/new_template/js/owl.carousel.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/new_template/js/jquery.easypiechart.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url()?>assets/new_template/js/template-scripts.js."></script>

   
<div class="background-parallax" style="background-color:#466675;"></div></body></html>