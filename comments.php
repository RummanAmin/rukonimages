<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>  	
	<?php die('You can not access this page directly!'); ?>  
<?php endif; ?>

<?php if(!empty($post->post_password)) : ?>
  	<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
		<p>This post is password protected. Enter the password to view comments.</p>
  	<?php endif; ?>
<?php endif; ?>

<article class="page_comments">
	<?php if($comments) : ?>
		<p>
		  <!-- This post currently has -->
		  <strong><?php comments_number( 'no responses', 'one response', '% responses' ); ?></strong>
		</p>
	  	<ol>
	    	<?php foreach($comments as $comment) : ?>
	  		<li id="comment-<?php comment_ID(); ?>">
	  			<?php if ($comment->comment_approved == '0') : ?>
	  				<p>Your comment is awaiting approval</p>
	  			<?php endif; ?>

	  			<h4 class="meta"><?php comment_author_link(); ?> said on <?php comment_date(); ?></h4>
	  			<?php comment_text(); ?>
	  		</li>
			<?php endforeach; ?>
		</ol>
	<?php else : ?>
		<small>No comments yet</small>
	<?php endif; ?>
</article>

<article>
	<?php if(comments_open()) : ?>

		<?php if(get_option('comment_registration') && !$user_ID) : ?>

			<small>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</small><?php else : ?>
			
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
				
				<?php if($user_ID) : ?>
					<small>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></small>
				
				<?php else : ?>
					<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" placeholder="Name"/>
					<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" placeholder="Email address"/>
				<?php endif; ?>
				
				<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4" placeholder="Message"></textarea>
				<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
				<?php do_action('comment_form', $post->ID); ?>
			</form>

		<?php endif; ?>

		<?php else : ?>
			<p>The comments are closed.</p>

	<?php endif; ?>
</article>