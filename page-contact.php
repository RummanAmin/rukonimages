<?php get_header(); ?>

	<?php get_template_part( 'content', 'heading' ); ?>

  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
      $image = $image[0]; ?>
  <?php else :
  $image = get_bloginfo( 'stylesheet_directory') . '/img/backgrounds/download2.jpg'; ?>
  <?php endif; ?>
  <div class="band banner" style="background-image: url('<?php echo $image; ?>')" ></div>

	<div class="band main">
    <section class="layout">
      <article>
        <h5>Contact form</h5>
        <p>Please go through the form and try to complete all the fields with as much information as you can. This will help me give you the best options available.</p>
      </article>
      <article>
        <div class="contact-info">
          <h4>Contact</h4>
          <p>Alternatively, you can use a more direct approach.</p>
          <ul>
            <li>E: <a href="mailto:info@rukonimages.com">info@rukonimages.com</a></li>
            <li>P: <a href="tel:07545281028" target="_self">+44 (0)7545281028</a></li>
          </ul>
        </div>
        <div class="contact-info">
          <h4>Social</h4>
          <p>Follow us on Social Media to get all our updates.</p>
          <ul class="social-links">
            <li><a href="http://www.twitter.com//rukonimages" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/icons/twitter_dark.svg" alt=""></a></li>
            <li><a href="http://www.facebook.com/pages/RukonImages/176364775764367?fref=ts" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/icons/facebook_dark.svg" alt=""></a></li>
            <li><a href="http://www.instagram.com/rukonimages" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/icons/instagram_dark.svg" alt=""></a></li>
          </ul>
        </div>
      </article>
      <div class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="61" title="Contact form 1"]'); ?>
      </div>
    </section>
  </div>

  <?php 

    $args = array(
      'post_type' => 'faq'
    );
    $query = new WP_Query($args);
  ?>

  <div class="band extra">
    <section class="layout">
      <h3>Frequently asked questions</h3>
      <ul class="columns">

        <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

        <li>
          <h5><?php the_title(); ?></h5>
          <p><?php the_content(); ?></p>
        </li>

        <?php endwhile; endif; wp_reset_postdata(); ?>

      </ul>
    </section>
  </div>

<?php get_footer(); ?>