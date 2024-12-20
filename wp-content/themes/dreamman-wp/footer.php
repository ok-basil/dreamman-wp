<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dreamman-wp
 */

 $mailchimp_code = get_theme_mod('dreamman-wp-mailchimp');
 $audius = get_theme_mod('dreamman-wp-audius');
 $audiomack = get_theme_mod('dreamman-wp-audiomack');
 $soundcloud = get_theme_mod('dreamman-wp-soundcloud');
 $youtube = get_theme_mod('dreamman-wp-youtube');
 $bandcamp = get_theme_mod('dreamman-wp-bandcamp');

 $audius_logo = get_theme_mod('dreamman-wp-audius_logo');
 $audiomack_logo = get_theme_mod('dreamman-wp-audiomack_logo');
 $soundcloud_logo = get_theme_mod('dreamman-wp-soundcloud_logo');
 $youtube_logo = get_theme_mod('dreamman-wp-youtube_logo');
 $bandcamp_logo = get_theme_mod('dreamman-wp-bandcamp_logo');


 $root_url = "/wp-content/themes/dreamman-wp/assets/";
?>

	<footer id="colophon" class="site-footer" ><!-- #colophon -->
		
	</footer><!-- #colophon -->
	
	<div id="mailchimpModal" class="modal">
		<div class="modal-content">
			<span id="closeModal" class="close">&times;</span>
			<?php 
				if(!empty($mailchimp_code)):
					echo do_shortcode($mailchimp_code);
				endif;
			?>
		</div>
	</div>

	<div id="streamMusic" class="stream-music">
		<div class="stream-music-content">
			<span id="closeStreamModal" class="close">&times;</span>
			<div class="stream-music-content-container">
				<?php if (!empty($youtube)): ?>
					<a href="<?php echo esc_url($youtube); ?>" class="home-wrapper-container-content-text-socials-individual">
						<img src="<?php echo esc_url($youtube_logo); ?>" alt="YouTube">
					</a>
				<?php endif; ?>

				<?php if (!empty($bandcamp)): ?>
					<a href="<?php echo esc_url($bandcamp); ?>" class="home-wrapper-container-content-text-socials-individual">
						<img src="<?php echo esc_url($bandcamp_logo); ?>" alt="Bandcamp">
					</a>
				<?php endif; ?>

				<?php if (!empty($audius)): ?>
					<a href="<?php echo esc_url($audius); ?>" class="home-wrapper-container-content-text-socials-individual">
						<img src="<?php echo esc_url($audius_logo); ?>" alt="Audius">
					</a>
				<?php endif; ?>

				<?php if (!empty($soundcloud)): ?>
					<a href="<?php echo esc_url($soundcloud); ?>" class="home-wrapper-container-content-text-socials-individual">
						<img src="<?php echo esc_url($soundcloud_logo); ?>" alt="SoundCloud">
					</a>
				<?php endif; ?>
				
				<?php if (!empty($audiomack)): ?>
					<a href="<?php echo esc_url($audiomack); ?>" class="home-wrapper-container-content-text-socials-individual">
						<img src="<?php echo esc_url($audiomack_logo); ?>" alt="Audiomack">
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>