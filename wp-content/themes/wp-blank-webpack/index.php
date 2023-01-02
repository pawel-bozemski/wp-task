<?php

get_header();


// The Query
query_posts(array(
  'post_type' => 'section',
  'posts_per_page' => -1,
));

// The Loop
if (have_posts()) {
  while (have_posts()) {
    the_post();
    include('single-section.php');
  }
}

wp_reset_postdata();


get_footer();
