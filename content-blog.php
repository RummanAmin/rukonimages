  <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      'paged' => $paged,
      'ignore_sticky_posts' => 1
    );

    query_posts($args); 
  ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', 'banner' ); ?>

    <?php endwhile; else : ?>

    <div class="band main">
      <section class="layout">

      <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

      </section>
    </div>

  <?php endif; ?>