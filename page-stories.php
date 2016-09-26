<?php get_header(); ?>

	<div class="band heading">
    <section class="layout">
      <h1><?php the_title(); ?></h1>
      <h2><?php the_field('introduction'); ?></h2>
    </section>
  </div>

  <?php 
    $args = array(
      'post_type' => 'projects'
    );
    $query = new WP_Query($args);
  ?>

  <div class="band main">
    <section>
      <ul>

        <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

        <?php get_template_part( 'content', 'banner' ); ?>

        <?php endwhile; endif; wp_reset_postdata(); ?>

      </ul>
    </section>
  </div>

<?php get_footer(); ?>