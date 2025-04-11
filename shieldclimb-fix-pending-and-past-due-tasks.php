<?php

/**
 * Plugin Name: ShieldClimb – Fix Pending and Past-due Tasks for WooCommerce
 * Plugin URI: https://shieldclimb.com/free-woocommerce-plugins/fix-pending-and-past-due-tasks/
 * Description: Fix Pending and Past-due Tasks for WooCommerce – Speed up order processing, prevent stuck scheduled tasks, and optimize performance.
 * Version: 1.0.1
 * Requires Plugins: woocommerce
 * Requires at least: 5.8
 * Tested up to: 6.8
 * WC requires at least: 5.8
 * WC tested up to: 9.8.1
 * Requires PHP: 7.2
 * Author: shieldclimb.com
 * Author URI: https://shieldclimb.com/about-us/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

add_filter('action_scheduler_queue_runner_concurrent_batches', 'shieldclimb_async_action_concurrent_batches');
function shieldclimb_async_action_concurrent_batches($batches) {
    return 3; // Adjust the number to increase concurrent batches
}

?>