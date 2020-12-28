<?php get_header(); ?>
  
   <!-- Contenido Articulo -->
   <div class="container">
       <div class="row">
           <!-- Articulo  -->
           <div class="col-12 col-md-9 my-5">

           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

               <?php if ( has_post_thumbnail()) {
                   the_post_thumbnail('post-thumbnails' , array ('class' => ' img-fluid'));
               } ?>
               <h2 class="my-3"><?php the_title(); ?></h2>
                <p class="lead"><?php echo get_the_date(); ?></p>
                <div class="text-justify">
                   
                <?php the_content(); ?>
                </div>
           </div>
            <!-- aside -->

   <div class="col-12 col-md-3">
       <!-- LLama a los aside o sidebar sidebar.php -->
   <?php get_sidebar(); ?>
   </div>


<!-- fin aside -->
       </div>
   </div>
   <!-- Fin Articulo -->

  

   <!-- Footer -->

   <?php get_footer(); ?>
<!-- Fin Footer -->

 <!-- Script Bootstrap -->

 <script src="JS/bootstrap.min.js"></script>   

</body>
</html>