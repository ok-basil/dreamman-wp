<?php
global $user_ID;
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rotech
 */
$main_class = 'site-main';
if (is_page(['about-us', 'about'])) {
	$main_class = 'about-main';
} elseif (is_page(['my-account', 'account'])) {
	$main_class = 'account-main';
} elseif (!is_user_logged_in() && is_page(['sign-in', 'sign-up', 'my-account'])) {
	$main_class = 'sign-in';
} elseif (is_page_template('page-terms.php')) {
	$main_class = 'terms-and-conditions_wrapper';
}

get_header();

if (!is_user_logged_in() && is_page(['my-account', 'account', 'login'])) {
	$main_class = apply_filters('main_tag_class','sign-in'); 

} 

$core_pages = ['login', 'register', 'signup', 'reset', 'reset-password', 'password-reset', 'forgot-password', 'signup-success', 'edit-profile-business-logged-in'];
$current_page_slug = (array)basename(get_permalink());

if( count(array_intersect( $current_page_slug, $core_pages ) ) == 0) {
    echo"<main id='primary' class='$main_class'>";
 }
 ?>

    <?php
	while (have_posts()) :
		the_post();

		get_template_part('template-parts/content', 'page');

	endwhile; // End of the loop.
	?>

 
<?php
if( count(array_intersect( $current_page_slug, $core_pages ) ) == 0) {
    echo"</main> <!-- #main -->";
 }

get_footer();
