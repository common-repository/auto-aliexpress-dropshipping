<?php
$current_addon_data = auto_aliexpress_get_addon_data('aliexpress');
?>
<div class="aliexpress-box" role="document">

    <div class="aliexpress-box-header aliexpress-block-content-center">

        <div class="aliexpress-dialog-image" aria-hidden="true">

            <img src="<?php echo esc_url(AUTO_ALIEXPRESS_URL.'/assets/images/aliexpress-sketched.png'); ?>" alt="<?php esc_attr_e( 'Aliexpress SessionID', Auto_Aliexpress::DOMAIN ); ?>">

        </div>

        <div class="aliexpress-box-content integration-header">

            <h3 class="aliexpress-box-title" id="dialogTitle2"><?php esc_html_e( 'Setup Aliexpress SessionID', Auto_Aliexpress::DOMAIN ); ?></h3>

			<span class="aliexpress-description">
                <?php esc_html_e( 'Setup Aliexpress SessionID to be used by Auto Aliexpress to display feeds on your blog.', Auto_Aliexpress::DOMAIN ); ?>
			</span>

        </div>

    </div>

    <div class="aliexpress-box-body">
        <form class="aliexpress-integration-form" method="post" name="aliexpress-integration-form" action="">

            <div class="aliexpress-form-field">
                <label class="aliexpress-label"><?php esc_html_e( 'Session ID', Auto_Aliexpress::DOMAIN ); ?></label>
                <div class="aliexpress-control-with-icon">
                    <ion-icon class="aliexpress-icon-key" name="key"></ion-icon>
                    <input name="session_id" placeholder="<?php esc_html_e( 'Session ID', Auto_Aliexpress::DOMAIN ); ?>" value="<?php if(!empty($current_addon_data['session_id'])){echo $current_addon_data['session_id'];}?>" class="aliexpress-form-control">
                </div>
            </div>

            <input type="hidden" name="slug" value="<?php echo esc_attr('aliexpress');?>" >
            <input type="hidden" name="is_connected" value="<?php echo esc_attr($current_addon_data['is_connected']);?>" >

            <div class="aliexpress-border-frame aliexpress-description">

                <span>
                    <?php
                    printf(
                        esc_html__( 'Follow %1$s your Aliexpress SessionID.', Auto_Aliexpress::DOMAIN ),
                        '<a href="https://wpautorobot.com/document/">these instructions to retrieve</a>'
                    );
                    ?>
                </span>

            </div>

        </form>

    </div>

    <div class="aliexpress-box-footer aliexpress-box-footer-center">
        <button type="button" class="aliexpress-button aliexpress-addon-connect">
            <span class="aliexpress-loading-text"><?php esc_html_e( 'Connect', Auto_Aliexpress::DOMAIN ); ?></span>
        </button>
    </div>

</div>