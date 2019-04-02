<?php
/**
 * @link              https://
 * @since             1.0.0
 * @package           disable_wc_image_regeneration
 *
 * @wordpress-plugin
 * Plugin Name:       Disable Woocommerce Image Regeneration
 * Plugin URI:        https://
 * Description:       Disables the automatic thumbnail image regeneration in Woocommerce.
 * Version:           1.0.0
 * Author:            Mathew Callaghan
 * Author URI:        https://mathew.callaghan.xyz/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       disable-wc-image-regeneration
 * Domain Path:       /languages
 */


// If this file is called directly, abort.

  if ( ! defined( 'WPINC' ) ) {
    die;
  }

  if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {

    add_filter( 'woocommerce_background_image_regeneration', '__return_false' );

  }
