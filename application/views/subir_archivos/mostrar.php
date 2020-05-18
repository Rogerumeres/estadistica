<section class="bar background-white no-mb">
            <div class="container">

                <div class="col-md-12">
<div class="row">
  

<?php
$dir = 'uploads/archivos';               //Especifica el directorio a leer
$rep	=	opendir($dir);    //Abrimos el directorio
while ($arc = readdir($rep)) {	//Leemos el arreglo de archivos contenidos en el directorio: readdir recibe como parametro el directorio abierto
if($arc != ".." && $arc !="." && $arc !=""){
?>
 				<div class="col-md-3 col-sm-6">
                            <div class="box-image-text blog">
                                <div class="top">
                                    <div class="image">
                                        <?php
echo "<img src=".base_url().$dir."/".$arc." alt='' class='img-responsive' style='width:240px;height:240px;'><br />"; //Imprimimos el nombre del archivo con un link
?>
                                    </div>
                                    <div class="bg"></div>
                                    <div class="text">
                                        <p class="buttons">
                                            <a href="blog-post.html" class="btn btn-template-transparent-primary"><i class="fa fa-link"></i> Read more</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="content">
                                    <h4><a href="blog-post.html">Fashion now</a></h4>
                                    <p class="author-category">By <a href="#">John Snow</a> in <a href="blog.html">Webdesign</a>
                                    </p>
                                    <p class="intro">Fifth abundantly made Give sixth hath. Cattle creature i be don't them behold green moved fowl Moved life us beast good yielding. Have bring.</p>
                                    <p class="read-more"><a href="blog-post.html" class="btn btn-template-main">Continue reading</a>
                                    </p>
                                </div>
                            </div>
                            </div>
	

<?php

}
}
closedir($rep);         //Cerramos el directorio
clearstatcache();     //Limpia la caché de estado de un archivo
?>

</div>
</div>
</div>
</section>