<?php

namespace DreamManWP\Pages;

class HomePage {
    /**
     * Retrieve the page content fields.
     *
     * @return array The page content fields.
     */
    public function get_page_content() {
        global $post;

        $page_id = $post->ID;
                
        $page_content = [
            'download'              => get_field('download_link', $page_id),
            'title'                 => get_field('title', $page_id),
            'video'                 => get_field('video_file', $page_id),
            'footer_links'          => get_field('footer_links', $page_id),
            'download_button_text'  => get_field('download_button_text', $page_id),
            'stream_button_text'    => get_field('stream_button_text', $page_id)
        ];

        return $page_content;
    }
    

    /**
     * Get the singleton instance of HomePage.
     *
     * @return HomePage The singleton instance.
     */
    public static function get_instance() {
        static $instance = null;

        if (is_null($instance)) {
            $instance = new self();
        }

        return $instance;
    }
}
