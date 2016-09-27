<?php
/**
 * Template Name: Proof Gallery
 */
get_header();


global $wpgrade_private_post;

if ( post_password_required() && ! $wpgrade_private_post['allowed'] ) {
	// password protection
	get_template_part( 'theme-partials/password-request-form' );

} else {
	global $post; ?>

	<div class="band heading">
	  <section class="layout">
	    <h1><?php the_title(); ?></h1>
	  </section>
	</div>

	<div <?php post_class( "band main content--blog-classic  content--pixproof" ); ?>>
		<div class="container--blog-classic layout">
			<section class="article__content  cf  js-post-gallery">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <article><?php the_content(); ?></article>

        <?php endwhile; else : ?>

  			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

				<?php endif; ?>
			</section>
		</div>
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
<?php }
get_footer();
