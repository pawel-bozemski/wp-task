<?php
$fields = get_fields(114);
$section_top = $fields['footer_top'];
$section_bottom = $fields['footer_bottom'];
?>
<div class="container gradient footer">
    <div class="wrapper">
        <div class="footer footer--top">
            <div class="footer__logo">
                <img class="logo" src="<?= $section_top['logo'] ?>" alt="logo">
                <img class="logo__md" src="<?= $section_top['logo_2'] ?>" alt="logo">
                <p class="footer__logo__subtitle h400">
                    <?= $section_top['subtitle'] ?>
                </p>
            </div>
            <div class="footer__menu">
                <div class="footer__menu__menu">
                    <?php
                    wp_nav_menu(array('menu' => 'footer'));
                    ?>
                </div>
            </div>
        </div>
        <div class="footer footer--bottom">
            <div class="footer__copy">
                <div class="footer__copy__left">
                    <p class="h400">
                        <i class="far fa-copyright"></i>
                        <?= $section_bottom['copyright'] ?>
                    </p>
                    <a href="#">Polityka Prywatności</a>
                </div>
                <div class="footer__copy__right">
                    <p class="h400">
                        <?= $section_bottom['copy'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>