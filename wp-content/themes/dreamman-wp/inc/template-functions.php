<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package rotech_wp
 */

/**
 * Initialize Core Classes.
 */
DreamManWP\Core\Core::get_instance();

/**
 * Page Development Class
 */
DreamManWP\Pages\Init::init();
