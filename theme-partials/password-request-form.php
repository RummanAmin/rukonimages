<?php global $wpgrade_private_post; ?>

<div class="content--client-area">
    <div class="content-helper">
        <div class="content_item">
            <div class="form-container">
                <div class="lock-icon">
                    <img src="<?php bloginfo('template_directory'); ?>/img/icons/locked.svg" alt="Locked">
                </div>
                <div class="protected-area-text">
                    <?php
                    _e('This is a protected area.', 'border');

                    if($wpgrade_private_post['error']) {
                        echo $wpgrade_private_post['error']; ?>
                        <span class="gray"><?php _e('Please enter your password again.', 'border' );?></span>
                    <?php } else { ?>
                        <span class="gray"><?php _e('Please enter your password to continue.', 'border' );?></span>
                    <?php } ?>

                </div>
                <form class="auth-form" method="post" action="<?php echo wp_login_url().'?action=postpass'; // just keep this action path ... wordpress will refear for us?>">
                    <?php wp_nonce_field('password_protection','submit_password_nonce'); ?>
                    <input type="hidden" name="submit_password" value="1" />
                    <input type="password" name="post_password" id="auth_password" class="auth__pass" placeholder="<?php _e("Password", 'border') ?>" />
                    <input type="submit" name="Submit" id="auth_submit" class="auth__submit  btn" value="<?php _e("Authenticate", 'border') ?>" />
                </form>
            </div>
        </div>
    </div>
</div><!-- .content -->