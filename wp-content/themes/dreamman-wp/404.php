<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Rotech
 */

get_header();
?>
    <main class="not-found__main error-page">
        <svg class="login_bg" width="1440" height="964" viewBox="0 0 1440 964" fill="none" focusable="false"
                xmlns="http://www.w3.org/2000/svg">
            <path
                    d="M59.675 -85.8076C106.731 -83.3484 205.592 -52.7312 224.592 50.0633C248.341 178.556 394.04 694.361 737.626 744.998C1107.44 799.5 1022.95 480.5 1398.9 458.558C1623.81 445.432 1528.84 675.675 1587.37 737.779"
                    stroke="#9BBFD4" stroke-opacity="0.7" stroke-width="2" />
            <path
                    d="M117.239 -141.179C163.938 -134.899 259.98 -96.3385 270.553 7.66118C283.768 137.661 385.545 670.225 725.337 742.038C1065.13 813.85 1153.45 431 1407.73 510.358C1622.79 577.475 1519.57 737.328 1572.85 803.989"
                    stroke="#9DCC9F" stroke-opacity="0.7" stroke-width="2" />
        </svg>
        <div class="not-found__wrapper">
            <h1 class="not-found__status"><?php esc_html_e('404', 'dreamman-wp'); ?></h1>
            <h2 class="not-found__title"><?php esc_html_e('Oops.. This page could not be found', 'dreamman-wp'); ?></h2>
            <p class="not-found__description">
                <?php esc_html_e('This page doesn\'t seem to exist. Don\'t worry let us help you back to your way', 'dreamman-wp'); ?>
            </p>
            <a class="not-found__link" href="<?php echo home_url(); ?>" title="Back to Home"><?php esc_html_e('Back to Home', 'dreamman-wp'); ?></a>
        </div>
    </main>
<?php
