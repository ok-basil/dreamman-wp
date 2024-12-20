<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dreamman-wp
 */

 global $post;

 $page_content = $post->post_content;
 
?> 
 <main class="tos__main" id="main-content">
     <h1 class="tos__heading"><?php echo the_title();?></h1>
     <?php echo apply_filters('the_content', $page_content); ?>
 </main>
 
