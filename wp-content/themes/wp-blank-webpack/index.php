<?php

get_header();

$query = new WP_Query(array(
  'post_type' => 'section',
  'posts_per_page' => -1,
));
$posts = $query->posts;

foreach ($posts as $post) {
  include('single-section.php');
}

wp_reset_postdata();


get_footer();
