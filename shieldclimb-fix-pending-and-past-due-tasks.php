<?php

/**
 * Plugin Name: ShieldClimb – Fix Pending and Past-due Tasks for WooCommerce
 * Plugin URI: https://shieldclimb.com/free-woocommerce-plugins/fix-pending-and-past-due-tasks/
 * Description: Fix Pending and Past-due Tasks for WooCommerce – Speed up order processing, prevent stuck scheduled tasks, and optimize performance.
 * Version: 1.0.2
 * Requires Plugins: woocommerce
 * Requires at least: 5.8
 * Tested up to: 6.8
 * WC requires at least: 5.8
 * WC tested up to: 10.0.2
 * Requires PHP: 7.2
 * Author: shieldclimb.com
 * Author URI: https://shieldclimb.com/about-us/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

add_filter('action_scheduler_queue_runner_concurrent_batches', 'shieldclimb_set_concurrent_batches');
function shieldclimb_set_concurrent_batches() {
    return 2;
}

add_filter('action_scheduler_queue_runner_batch_size', 'shieldclimb_set_batch_size');
function shieldclimb_set_batch_size() {
    return 15;
}

?>