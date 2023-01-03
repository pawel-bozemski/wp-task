<?php
$fields = get_fields();
?>
<div class="container gradient footer">
    <div class="wrapper">
        <div class="footer">
            <div class="footer__logo">
                <img class="logo" src="<?= $fields['logo'] ?>" alt="logo">
                <img class="logo__md" src="<?= $fields['logo_2'] ?>" alt="logo">
                <p class="footer__logo__subtitle h400">
                    <?= $fields['subtitle'] ?>
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
    </div>
</div>