<?php get_header(); ?>


   <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) :
         the_post();

         $titulo = get_the_title();
         $fecha = get_the_date();
         $contenido = get_the_content();
         $imagen = get_the_post_thumbnail();
         ?>

         <article id="entrada_<?php echo get_the_ID(); ?>" class="entrada small-12 columns p2">

               <div class="titulo row">
                  <h3>
                     <?php echo $titulo; ?>
                  </h3>
               </div>
               <div class="fecha row">
                  <?php echo $fecha; ?>
               </div>
               <div class="imagen row">
                  <?php echo $imagen; ?>
               </div>
               <div class="contenido row">
                  <?php echo $contenido; ?>
               </div>

         </article>

      <?php endwhile; ?>
   <?php endif; ?>


<?php get_footer(); ?>
