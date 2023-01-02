<?php
$fields = get_fields();
print_r($fields);
?>
<div class="container header">
    <div class="wrapper">
        <div class="header">
            <div class="header__logo">
                <img src="<?= $fields['header']['image'] ?>" alt="logo">
            </div>
            <div class="header__menu">
                <div class="header__menu__menu">
                    <?php
                    wp_nav_menu();
                    ?>
                </div>
                <div class="header__menu__button button--secondary">

                    <a href="<?= $fields['header']['button_url'] ?>"><?= $fields['header']['button_text'] ?></a>

                </div>
            </div>
        </div>
        <div class="section">
            <div class="section__text section--child">
                <h1 class="section__text__title h700 white--text "><?= $fields['section_1']['title'] ?></h1>
                <p class="section__text__subtitle h400 grey--text">
                    <?= $fields['section_1']['subtitle'] ?>
                </p>
                <div class="section__text__contact">
                    <div class="section__text__contact__button button--primary">
                        <a href="<?= $fields['section_1']['button_url'] ?>"><?= $fields['section_1']['button_text'] ?></a>
                    </div>
                    <a href="tel:<?= $fields['section_1']['telephone'] ?>" class="section__text__contact__phone h700"><?= $fields['section_1']['telephone'] ?></a>
                </div>
            </div>
            <div class="section__image section--child">
                <img src="<?= $fields['section_1']['image'] ?>" alt="image">
            </div>

        </div>
    </div>

</div>