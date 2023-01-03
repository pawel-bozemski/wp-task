<?php
$fields = get_fields();
$section = $fields['section_5'];
?>
<div class="container white">
    <div class="wrapper">
        <div class="section_5">
            <div class="section__title">
                <h2 class="section__title__title h600 black--text"><?= $section['title'] ?></h2>
                <div class="section__title__button button--primary">
                    <a href="<?= $section['button_url'] ?>"><?= $section['button_text'] ?></a>
                </div>
            </div>
            <div class="section__articles">

                <?php

                query_posts(array(
                    'type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order'   => 'ASC',
                )); ?>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div class="section__articles__article">
                            <?php the_post_thumbnail() ?>
                            <h3 class="h400 black--text"><?php the_title(); ?></h3>
                            <div class="section__articles__article__date">
                                <p><?php the_time('j F Y'); ?></p>
                                <a href="<?php the_permalink(); ?>">Czytaj <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif;
                wp_reset_postdata(); ?>

            </div>
        </div>
    </div>
</div>