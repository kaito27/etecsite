

<?php get_header();?>

    <?php 
        if(have_posts()){
            while(have_posts()){
                the_post();
                
?>
    


                

    <div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h2><?php the_title(); ?></h2>
        </div>
    </div>
</div>
<?php if(!is_page('contato')){ ?>

<div class="row">
    <div class="col-md-12">
        <?php the_content(); ?>
    </div>
</div>
<?php } ?>

<?php if(is_page('contato')){ ?>
<div class="row">
    <div class="col-md-4">
        <?php the_content(); ?>
    </div>
    <div class="col-md-1"> </div>
    <div class="col-md-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.6367399081864!2d-46.4374990856093!3d-24.008601484462712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1c2b90e95c99%3A0x95c78d06367a5564!2sEtec+Praia+Grande+-+Sede!5e0!3m2!1spt-BR!2sbr!4v1539999196737" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>    
</div>
</div>

<?php } ?>

    
    
 <?php  
            }
        }
        
    ?>

<?php get_footer();?>
