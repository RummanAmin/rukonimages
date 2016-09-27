<?php get_header(); ?>

	<?php get_template_part( 'content', 'heading' ); ?>

  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
      $image = $image[0]; ?>
  <?php else :
  $image = get_bloginfo( 'stylesheet_directory') . '/img/backgrounds/download2.jpg'; ?>
  <?php endif; ?>
  <div class="band banner" style="background-image: url('<?php echo $image; ?>')" ></div>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="band main">
      <section class="layout">
        
        <h5>I belive in the perfect shot</h5>
        <article class="columns"><?php the_content(); ?></article>

      </section>
    </div>

    <?php endwhile; else : ?>

    <div class="band main">
      <section class="layout">

      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

      </section>
    </div>

  <?php endif; ?>
  
  <?php get_template_part( 'content', 'testimonial' ); ?>

  <div class="band extra">
    <?php echo do_shortcode('[instagram-feed id="21946312"]'); ?>
  </div>

<?php get_footer(); ?>