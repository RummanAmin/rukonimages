<?php get_header(); ?>

			<?php get_template_part( 'content', 'heading' ); ?>

        
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="band main">
          <section class="layout">
            
            <article><?php the_content(); ?></article>

          </section>
        </div>

        <?php endwhile; else : ?>

  			<div class="band main">
          <section class="layout">

  				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

  				</section>
        </div>

			<?php endif; ?>

<?php get_footer(); ?>