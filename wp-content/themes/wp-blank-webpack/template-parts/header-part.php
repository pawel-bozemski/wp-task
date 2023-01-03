<?php
$fields = get_fields();
$section = $fields['header'];
?>
<div class="container gradient header">
    <div class="wrapper">
        <div class="header">
            <div class="header__logo">
                <img src="<?= $section['image'] ?>" alt="logo">
            </div>
            <div class="header__menu">
                <div class="header__menu__menu">
                    <?php
                    wp_nav_menu();
                    ?>
                </div>
                <div class="header__menu__button button--secondary">
                    <a href="<?= $section['button_url'] ?>"><?= $section['button_text'] ?></a>
                </div>

                <div class="header__menu__hamburger">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
            </div>
        </div>
        <div class="header__mobile">

            <?php
            wp_nav_menu();
            ?>
            <div class="header__mobile__button button--secondary">
                <a href="<?= $section['button_url'] ?>"><?= $section['button_text'] ?></a>
            </div>


        </div>
        <?php include('section-1.php'); ?>
    </div>
</div>