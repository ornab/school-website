<?php
if (!defined('ABSPATH')) die('-1');
// Class started
class themeeVCExtendAddonClass {
    function __construct() {
        // We safely integrate with VC with this hook
        add_action( 'init', array( $this, 'themeeIntegrateWithVC' ) );
    }

    public function themeeIntegrateWithVC() {
        // Checks if Visual composer is not installed
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
            add_action('admin_notices', array( $this, 'themeeShowVcVersionNotice' ));
            return;
        }

        // visual composer addons.
        //include THEMEE_ACC_PATH . '/vc-addons/vc-sitemap-shortcode.php';
        include THEMEE_ACC_PATH . '/vc-addons/vc-slides.php';
        include THEMEE_ACC_PATH . '/vc-addons/vc-service.php';
        include THEMEE_ACC_PATH . '/vc-addons/vc-stat.php';
        include THEMEE_ACC_PATH . '/vc-addons/vc-themee-btn.php';
        include THEMEE_ACC_PATH . '/vc-addons/vc-staff-box.php';
        include THEMEE_ACC_PATH . '/vc-addons/vc-tile-gallery.php';
        include THEMEE_ACC_PATH . '/vc-addons/vc-video.php';
        include THEMEE_ACC_PATH . '/vc-addons/vc-grid-gallery.php';
        include THEMEE_ACC_PATH . '/vc-addons/vc-head-mistress.php';

    }
    // show visual composer version
    public function themeeShowVcVersionNotice() {
        $theme_data = wp_get_theme();
        echo '
        <div class="notice notice-warning">
          <p>'.sprintf(__('<strong>%s</strong> recommends <strong><a href="'.site_url().'/wp-admin/themes.php?page=tgmpa-install-plugins" target="_blank">Visual Composer</a></strong> plugin to be installed and activated on your site.', 'themee'), $theme_data->get('Name')).'</p>
        </div>';
    }
}
// Finally initialize code
new themeeVCExtendAddonClass();
