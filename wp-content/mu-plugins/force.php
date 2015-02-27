<?php
/*
Plugin Name: Just do it !
Plugin URI:
Description:
Version: 0.1
Author:
Author URI:
*/
new just_do_it();

class just_do_it {
    private $must_plugins = array(
        'Batcache Manager' => 'batcache/batcache.php',
        'Cloudinary' => 'cloudinary-image-management-and-manipulation-in-the-cloud-cdn/cloudinary.php',
        'Disable WordPress Core Updates' => 'disable-wordpress-core-update/disable-core-update.php',
        'Disable WordPress Plugin Updates' => 'disable-wordpress-plugin-updates/disable-plugin-updates.php',
        'Gigaom New Relic' => 'go-newrelic/go-newrelic.php',
        'Memcached Cloud' => 'memcached-cloud/object-cache.php',
        'Resize images before upload' => 'resize-images-before-upload/resize-images-before-upload.php',
        'SendGrid' => 'sendgrid-email-delivery-simplified/wpsendgrid.php',
        'WordPress Gzip Compression' => 'wordpress-gzip-compression/ezgz.php'
    );

    function __construct() {
        add_action('shutdown', array($this, 'plugins_loaded'));
    }

    public function plugins_loaded() {
        $activePlugins = get_option('active_plugins');
        foreach ($this->must_plugins as $key => $plugin) {
            if ( !array_search($plugin, $activePlugins) ) {
                activate_plugin( $plugin, '', $this->is_multisite() );
            }
        }
    }

    private function is_multisite() {
        return function_exists('is_multisite') && is_multisite();
    }
}
