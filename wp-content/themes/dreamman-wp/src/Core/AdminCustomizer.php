<?php

namespace DreamManWP\Core;

class AdminCustomizer {

    public function __construct() {
        add_action( 'customize_register', [$this, 'register']);
        add_action( 'customize_preview_init', [$this, 'dreamman_wp_theme_customize_preview_js']);
    }

    public function register( $wp_customize ) {
        $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
        $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
        $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

        if ( isset ( $wp_customize->selective_refresh ) ) {
            $wp_customize->selective_refresh->add_partial(
                'blogname',
                [
                    'selector'              => '.site-title a',
                    'render_callback'       => [$this, 'dreamman_wp_theme_customize_partial_blogname'],
                ]
            );
            $wp_customize->selective_refresh->add_partial(
                'blogdescription',
                [
                    'selector'              => '.site-description',
                    'render_callback'       => [$this, 'dreamman_wp_theme_customize_partial_blogdescription'],
                ]
            );
        }

        // Main Panel
        $wp_customize->add_panel( 'dreamman-panel', [
            'title'         => __('Dream Man Settings', 'dreamman-wp'),
            'description'   => '<p> Dream Man Settings </p>',
            'priority'      => 10
        ]);

        // Section
        $wp_customize->add_section( 'dreamman-section', [
            'title'         => __('Dream Extra Details', 'dreamman-wp'),
            'priority'      => 20,
            'panel'         => 'dreamman-panel'
        ]);

        // Settings/Controls
        $extra_links = [
            'mailchimp'     => 'Mailchimp Code',
            'audius'        => 'Audius',
            'audiomack'     => 'Audiomack',
            'soundcloud'    => 'SoundCloud',
            'youtube'       => 'YouTube',
            'bandcamp'      => 'BandCamp'
        ];

        foreach ($extra_links as $key => $label){
            $wp_customize->add_setting("dreamman-wp-$key", [
                'default'   => '',
            ]);

            $wp_customize->add_control(new \WP_Customize_Control($wp_customize,
            "dreamman-wp-$key-control", [
                'label'     => __($label, 'dreamman-wp'),
                'section'   => 'dreamman-section',
                'settings'  => "dreamman-wp-$key",
                'type'  => 'text'
            ]));
        }

        $logos = [
            'audius_logo'      =>  'Audius Logo',
            'audiomack_logo'   =>  'AudioMack Logo',
            'soundcloud_logo'  =>  'SoundCloud Logo',
            'youtube_logo'     =>  'Youtube Logo',
            'bandcamp_logo'    =>  'BandCamp Logo'
        ];

        foreach ($logos as $key => $label){
            $wp_customize->add_setting("dreamman-wp-$key", [
                'default'      => '',
            ]);

            $wp_customize->add_control( new \WP_Customize_Image_Control($wp_customize, "dreamman-wp-$key-control", [
                'label'     =>  __($label, 'dreamman-wp'),
                'section'   =>  'dreamman-section',
                'settings'  =>  "dreamman-wp-$key",
            ]));
        }
    }


    public function dreamman_wp_theme_customize_partial_blogname() {
        bloginfo( 'name' );
    }

    public function dreamman_wp_theme_customize_partial_blogdescription() {
        bloginfo( 'description' );
    }

    public function dreamman_wp_theme_customize_preview_js() {
        wp_enqueue_script( 'dreamman-wp-theme-customizer', get_template_directory_uri() . '/js/customizer.js', ['customize-preview'], DREAMMAN_WP_THEME_VERSION, true );
    }

    /**
     * Singleton poop
     * 
     * @return AdminCustomizer|null
     */
    public static function get_instance() {
        static $instance = null;

        if (is_null($instance)) {
            $instance = new self();
        }

        return $instance;
    }
}