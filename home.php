<?php get_header(); ?>

			<div class="band heading">
			  <section class="layout">
			  	<h1>Blog</h1>
			    <h2>a collection of thoughts and interests of mine</h2>
			  </section>
			</div>


			<div class="band main">
			  <section>
			    
			    <?php get_template_part( 'content', 'blog' ); ?>

			  </section>
			</div>

			<div class="band extra">
		    <section class="layout">
		      
		      <div class="pagination">
		      	<?php posts_nav_link(); ?>
		      </div>

		    </section>
		  </div>

<?php get_footer(); ?>