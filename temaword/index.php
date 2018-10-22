

<?php get_header();?>
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
                <h2 align="center">ETEC de Praia Grande</h2>
        </div>
    </div>
</div>
    <div class="row">
        <div class="col-md-9">
        <?php masterslider(2); ?>
        <br>
        </div>
    <div class="col-md-3">
        <h2>Essa coisa e aquilo</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eu scelerisque orci, eget sodales velit. Curabitur eget tempus lorem. Ut sit amet sapien imperdiet, posuere diam vel, pharetra tortor. Praesent quis interdum ante. Quisque pulvinar, nunc a bibendum malesuada, nunc turpis tempor libero, sed laoreet dolor massa non nibh. Maecenas varius maximus leo, in vehicula diam commodo at. Quisque quis ex nulla. Nunc rutrum venenatis orci sit amet lobortis.

Morbi id viverra nisi. Nunc euismod tristique sem, non tincidunt libero. Sed at scelerisque odio, vel lobortis orci. Mauris nec diam nec mi convallis eleifend. Fusce congue dapibus velit et scelerisque. Cras maximus, augue vel mollis sollicitudin, nisl odio malesuada quam, ut dapibus risus massa at urna.</p>
    </div>
        </div>

<div class="row">

<?php
$cont = 0;
    if ( have_posts() ) {
        while ( have_posts()) {
            the_post();
            $cont++;
        if($cont <= 6){

?>
<div class="col-md-4">
            
        <h3 ><?php the_title(); ?></h3>
        <div class="img-responsive img-thumbnail foto" ><?php the_post_thumbnail(); ?></div>
        <p><?php the_excerpt(); ?></p>
        <a class="btn btn-danger" href="<?php the_permalink();?>">Leia Mais</a>
        
</div>

<?php 
        } //fim do contador
        } //fim do while
    } //fim do if
?>

    <!-- teste 
    <div class="col-md-3">
    <div class="menulateral">
        <div class="link1">
	    	<img src="/wp-content/themes/teminha/temaword/assets/images/link1.png" width="60px" height="60px"></img><a href="link1.htm" align="center">NSA</a>
	    </div>
		<div class="link2">
	        <img src="/wp-content/themes/teminha/temaword/assets/images/link2.png" width="60px" height="60px"></img><a href="Cursos.html" align="center">Cursos</a>
	    </div>
		<div class="link3">
	    	<img src="/wp-content/themes/teminha/temaword/assets/images/link3.png"  width="60px" height="60px"></img><a href="Professores.html" align="center">Professores</a>
	    </div>
	</div>
	</div>
     teste fim -->
</div>






<?php get_footer();?>