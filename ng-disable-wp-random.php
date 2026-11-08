<?php
/**
 * Plugin Name: NG Disable WP Random
 * Description: Disables the `/random/` endpoint.
 * Author: Ashley Gibson
 * License: MIT
 *
 * @copyright Copyright (c) 2026, Ashley Gibson
 * @license   MIT
 */

add_filter('wp_enable_random_content_redirect', '__return_false');
