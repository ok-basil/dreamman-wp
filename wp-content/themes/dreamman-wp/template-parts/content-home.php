<?php
/**
 * Template part for Homepage
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * 
 * @package dreamman-wp
 * 
 */

use DreamManWP\Pages\HomePage;

$homepage_content = HomePage::get_instance()->get_page_content();

$downloadLink = $homepage_content['download'] ?? '';
$title = $homepage_content['title'] ?? '';
$video = $homepage_content['video'] ?? '';
$linktree = $homepage_content['footer_links']['footer_left_items']['linktree_link'] ?? '';
$linktree_title = $homepage_content['footer_links']['footer_left_items']['link_title'] ?? '';
$instagram = $homepage_content['footer_links']['footer_right_items']['instagram'] ?? '';
$twitter = $homepage_content['footer_links']['footer_right_items']['twitter'] ?? '';
$facebook = $homepage_content['footer_links']['footer_right_items']['facebook'] ?? '';
$instagram_icon = $homepage_content['footer_links']['footer_right_items']['instagram_icon'] ?? '';
$twitter_icon = $homepage_content['footer_links']['footer_right_items']['twitter_icon'] ?? '';
$facebook_icon = $homepage_content['footer_links']['footer_right_items']['facebook_icon'] ?? '';
$download_button = $homepage_content['download_button_text'] ?? '';
$stream_button = $homepage_content['stream_button_text'] ?? '';


?>

<section class="home">
  <div class="home-wrapper">
    <div class="home-wrapper-container">
      <!-- Video Background -->
      <video autoplay playsinline muted loop class="home-wrapper-container-video">
        <source src="<?php echo $video; ?>" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <!-- Content -->
      <div class="home-wrapper-container-content">
        <div class="home-wrapper-container-content-text" id="textDetails">
          <h1 class="home-wrapper-container-content-text-heading"><?php echo esc_html($title); ?></h1>
          <a id="downloadLink" target="_blank" href="<?php echo esc_url($downloadLink); ?>" data-url="<?php echo esc_url($downloadLink); ?>"></a>
          <div class="home-wrapper-container-content-text-buttons">
            <button id="openFormButton"><?php echo esc_html($download_button); ?></button>
            <button id="openStreamModal"><?php echo esc_html($stream_button); ?></button>
          </div>
        </div>
      </div>

      <div class="home-wrapper-container-footer">
        <div class="home-wrapper-container-footer-first-half">
          <a href="<?php echo esc_url($linktree); ?>"><?php echo esc_html($linktree_title); ?></a>
        </div>

        <div class="home-wrapper-container-footer-second-half">
          <?php if (!empty($instagram)): ?>
            <a href="<?php echo esc_url($instagram); ?>">
              <img src="<?php echo esc_url($instagram_icon); ?>" alt="Instagram">
            </a>
          <?php endif; ?>

          <?php if (!empty($twitter)): ?>
            <a href="<?php echo esc_url($twitter); ?>">
              <img src="<?php echo esc_url($twitter_icon); ?>" alt="X/Twitter">
            </a>
          <?php endif; ?>

          <?php if (!empty($facebook)): ?>
            <a href="<?php echo esc_url($facebook); ?>">
              <img src="<?php echo esc_url($facebook_icon); ?>" alt="Facebook">
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
