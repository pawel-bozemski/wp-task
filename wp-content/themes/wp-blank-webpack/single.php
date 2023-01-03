<?php

/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header();

include('template-parts/header-part.php');

?>

<div class="container white single">
    <div class="wrapper">
        <div class="post">
            <?php
            // Start the Loop.
            while (have_posts()) :
                the_post();
                the_post_thumbnail();
                the_title();
            endwhile;
            ?>
        </div>
    </div>
</div>

<?php
include('template-parts/footer-part.php');
get_footer();
