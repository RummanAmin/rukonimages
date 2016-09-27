<?php get_header(); ?>

<div class="band heading">
  <section class="layout">
    <h1><?php the_title(); ?></h1>
    <h2><?php the_field('introduction'); ?></h2>
  </section>
</div>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="band main">
      <section class="layout">
        
        <?php $the_query = new WP_Query( 'post_type=proof_gallery' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('square');?></a>
            <a href="<?php the_permalink(); ?>"><h4 class="post-title"><?php the_title(); ?></h4></a>
          </article>
        <?php endwhile; wp_reset_postdata(); ?>

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