<?php
$config=array(
		
		
          'subir_archivos/registro'=>array(
                  
            array(
                  'field' => 'titulo', 
                  'label' => 'Titulo',
                  'rules' => 'trim|required|is_string'),

             array(
                  'field' => 'descripcion',
                  'label' => 'Descripción',
                  'rules' => 'required'),
             array(
                  'field' => 'programa',
                  'label' => 'Programa Estartegico',
                  'rules' => 'required')
             
             ),

            'Estrategia/registro'=>array(
                  
      
             array(
                  'field' => 'descripcion',
                  'label' => 'Descripción',
                  'rules' => 'required')
             
                 ),

             'Info_esta_admin/registro_info'=>array(
                  
             array(
                  'field' => 'descripcion',
                  'label' => 'Descripción',
                  'rules' => 'required')
             
                 ),
             'Estrategia/registro_comprimido'=>array(
                array(
                  'field'=>'archivo',
                  'label'=>'Archivo',
                  'rules'=>'xss_clean')
              )
	);