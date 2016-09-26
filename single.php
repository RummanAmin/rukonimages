<?php get_header(); ?>

<?php get_template_part( 'content', 'heading' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
  <div class="band main">
    <section class="layout">
      <article>
        
        <?php the_content(); ?>
        
      </article>
      <article class="pagination">
        <hr>
        <h5>Post navigation</h5>
        <p>
          <?php previous_post_link(); ?> -
          <a href="<?php bloginfo('url'); ?>/blog">Return</a> -
          <?php next_post_link(); ?>
        </p>
      </article>
    </section>
  </div>

	<div class="band extra">
    <section class="layout">
      <h5>Comments</h5>

      <?php 
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
      ?>

    </section>
  </div>

<?php endwhile; endif; ?>


<?php get_footer(); ?>