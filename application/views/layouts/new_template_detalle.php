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

        <!-- SECTION 2 --> 



        

   <?php echo $content_for_layout; ?>

         <section class="section-small-padding">
       
        <div class="grid margin margin-top-100">
         
          <h2 class="s-12 text-center">
          <a href="<?php echo base_url()?>" class="s-12 m-6 l-3 margin-bottom button background-blue text-white border-radius s-12">Retornar</a>
         </h2>
        </div>
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