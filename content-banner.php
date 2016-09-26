<?php if (has_post_thumbnail( $post->ID ) ): ?>

 <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
 $image = $image[0]; ?>

 <?php else :

 $image = get_bloginfo( 'stylesheet_directory') . '/img/backgrounds/download2.jpg'; ?>

<?php endif; ?>

<div class="blog_item">
  <a class="full_link" href="<?php the_permalink(); ?>"></a>
  <div class="abs_bg" style="background-image: url('<?php echo $image; ?>')" ></div>
  <div class="blog_item_inner">
    <h3 class="post-title"><?php the_title(); ?></h3>
    <p class="date"><?php the_date(); ?></p>
  </div>
</div>


