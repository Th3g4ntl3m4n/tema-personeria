<?php get_header(); ?>

   <!-- contenido Menu -->
   <div class="container my-5">

<!--- Loop de worpress para contenido dinamico -->

<?php if ( have_posts()) : while (have_posts()) : the_post(); ?>

   <h2> <?php the_title(); ?> </h2>
   <div class="text-justify">
       
   <!-- Toma Utomaticamente el contenido -->
   <?php the_content(); ?>

   
   </div>

   <?php endwhile; endif; ?>
   </div>


   <!-- fin contenido menu-->
   
   <?php get_footer(); ?>

 <!-- Script Bootstrap -->

 <script src="JS/bootstrap.min.js"></script>   

</body>
</html>