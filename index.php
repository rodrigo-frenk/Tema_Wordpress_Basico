<?php get_header(); ?>

      <?php

      $pagina = get_page_by_title('Portada');

      $imagen = get_the_post_thumbnail( $pagina -> ID, 'large' );

      $contenido = apply_filters('the_content', $pagina -> post_content );

      ?>

      <!-- section#portada.small-12.columns.h_100 -->
      <section id="portada" class="small-12 columns h_100">
         <!-- #portada-imagen.small-12.medium-6.columns.h_sm_50.h_100 -->
         <div id="portada-imagen" class="small-12 medium-6 columns h_sm_50 h_100 imgLiquid imgLiquidFill">
            <!-- img[src=http://fakeimg.pl/950x500] -->
            <!-- <img src="http://fakeimg.pl/950x500" alt=""> -->
            <?php echo $imagen; ?>
         </div>
         <!-- #portada-texto.small-12.medium-6.columns.h_sm_50.h_100 -->
         <div id="portada-texto" class="small-12 medium-6 columns h_sm_50 h_100 p2">
            <!-- .titulo.row>h1{Nombre de Mi Sitio} -->
            <div class="titulo row p1">
               <h1>
                  <?php bloginfo('title'); ?>
               </h1>
            </div>
            <!-- .contenido.row>(p>lorem8)*2 -->
            <div class="contenido row font_sm_S p2">
               <?php echo $contenido; ?>
            </div>
         </div>
      </section>



      <!-- section#blog.small-12.columns.h_100 -->
      <!-- section#registro.small-12.columns.h_100 -->

      <section id="blog" class="small-12 columns h_100">

         <!-- #categorias.medium-3.large-2.columns.p1 -->
         <!-- #entradas.medium-9.large-10.columns.p1 -->
         <div id="categorias" class="medium-3 large-2 columns p1">
            <!-- h2{Categorías} -->
            <h2>Categorías</h2>
            <!-- ul>(li.p1>a{Categoría $})*6 -->
            <?php
               $categorias = get_categories();
            ?>
            <ul>
               <?php foreach( $categorias as $categoria ) : ?>

               <?php
               $link = get_category_link( $categoria -> term_id );
               $nombre = $categoria->name;
               ?>

                  <li class="p1"><a href="<?php echo $link; ?>"><?php echo $nombre; ?></a></li>

               <?php endforeach; ?>
            </ul>
         </div>

         <div id="entradas" class="medium-9 large-10 columns p1">

            <!-- article#entrada_1.entrada.small-12.medium-6.large-4.columns -->
            <?php if ( have_posts() ) : ?>
               <?php while ( have_posts() ) :
                  the_post();

                  $titulo = get_the_title();
                  $fecha = get_the_date();
                  $extracto = get_the_excerpt();
                  $imagen = get_the_post_thumbnail();
                  $link = get_the_permalink( get_the_ID() );
                  ?>

                  <article id="entrada_<?php echo get_the_ID(); ?>" class="entrada small-12 medium-6 large-4 columns p2">
                     <a href="<?php echo $link; ?>">

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

                     </a>
                  </article>

               <?php endwhile; ?>
            <?php endif; ?>

         </div>

      </section>

      <section id="registro" class="small-12 columns h_100">
         Registro
      </section>


<?php get_footer(); ?>
