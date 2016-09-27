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
        <!-- <img src="<?php bloginfo('template_directory'); ?>/img/garden/image1.jpg"> -->
      </article>
      <article>
        <h5>Pre-wedding shoot</h5>
        <p>Why not have a Pre-Wedding shoot on a location of your choice from a cityscape, landscape or even on a location with sentimental values in this way we can break the ice and get to know each other.</p>
      </article>
    </section>
  </div>

  <div class="band main">
    <section class="layout">
      <article>
        <!-- <img src="<?php bloginfo('template_directory'); ?>/img/garden/image3.jpg"> -->
      </article>
      <article>
        <h5>Investment</h5>
        <p>Your wedding is one of the most precious and special moments of your life and we aim to create a package which is unique to your requirements. We would love to be apart of your wedding & craft a story through your images.</p>
      </article>
    </section>
  </div>
  
  <div class="band main">
    <section class="layout">
      <article>
        <!-- <img src="<?php bloginfo('template_directory'); ?>/img/garden/image3.jpg"> -->
      </article>
      <article>
        <h5>Album</h5>
        <p>Cherish your most precious moments, relive the laughter, tears, and excitement with digital images and share it with friends and family. Complement it with a personalised classic storybook for keepsakes.</p>
        <p><a href="/contact">Contact me</a> today.</p>
      </article>
    </section>
  </div>

<?php get_footer(); ?>