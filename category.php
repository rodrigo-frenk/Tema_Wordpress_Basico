<?php get_header(); ?>


   <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) :
         the_post();

         $titulo = get_the_title();
         $fecha = get_the_date();
         $extracto = get_the_excerpt();
         $imagen = get_the_post_thumbnail();
         $link = get_the_permalink( get_the_ID() );
         ?>

         <article id="entrada_<?php echo get_the_ID(); ?>" class="entrada small-12 medium-4 columns p2">

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
               <div class="extracto row">
                  <?php echo $extracto; ?>
               </div>

         </article>

      <?php endwhile; ?>
   <?php endif; ?>


<?php get_footer(); ?>
