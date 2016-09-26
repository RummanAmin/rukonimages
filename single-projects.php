<?php get_header(); ?>

<?php get_template_part( 'content', 'heading' ); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
  <!-- <div class="band intro">
    <section class="layout">
      <article>
        
        <?php the_content(); ?>
      
      </article>
      <article class="panel">

      	<?php the_field('details'); ?>

      </article>
    </section>
  </div> -->

  <div class="band main">
    <section class="layout">
      <?php the_field('gallery'); ?>
    </section>
  </div>

  <?php get_template_part( 'content', 'testimonial' ); ?>


<?php endwhile; endif; ?>

<?php get_footer(); ?>