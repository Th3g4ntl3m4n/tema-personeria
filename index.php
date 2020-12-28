<?php get_header (); ?>

<!-- Contenido -->

   <!-- Carrusel-->


   <!-- Fin carrusel-->

   <!-- Suscribir-->

   <div class="container-fluid Suscribir"></div>

<

   <!-- fin Suscribir-->

   <!-- Contenido -->

   <div class="container my-5">
       <div class="row">

        <!-- Articulo -->

        <!-- Codigo loop de wordpress -->
      <?php 
        get_header();
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post(); ?>
                
           
    <!-- Plantilla de post -->
        <div class="col-12 col-sm-6 col-md-4 mb-3">
        <div class="card">
        <!-- card-img-top img-fluid -->
            <a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) {
              the_post_thumbnail('post-thumbnails', array('class' => 'card-img-top img-fluid'));
            } ?></a>
            <div class="card-block">
              <a href="<?php the_permalink(); ?>"><h5 class="card-title"><?php the_title(); ?></h5></a>
              <p class="card-text"><?php the_excerpt(); ?></p>
              <a href="#" class="btn btn-primary">Leer Mas</a>
            </div>
            <div class="card-footer">
                <small class="text-muted"><?php echo get_the_date() ; ?> / <?php the_category(',') ; ?> / <?php the_author() ; ?> </small>
            </div>
          </div>
        </div>
    <!-- fin plantilla de post -->

     <?php endwhile; endif; ?>

    <!-- Fin codigo loop wordpress -->

         <!-- Fin Articulo -->

       </div>
   </div>
   <!-- Fin contenido-->

   <?php get_footer(); ?>