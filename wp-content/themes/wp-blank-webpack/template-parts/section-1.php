<?php
$fields = get_fields(9);
$section = $fields['section_1'];
?>
<div class="section_1">
    <div class="section__text section--child">
        <h1 class="section__text__title h700 white--text "><?= $section['title'] ?></h1>
        <p class="section__text__subtitle h400 grey--text">
            <?= $section['subtitle'] ?>
        </p>
        <div class="section__text__contact">
            <div class="section__text__contact__button button--primary">
                <a href="<?= $section['button_url'] ?>"><?= $section['button_text'] ?></a>
            </div>
            <a href="tel:<?= $section['telephone'] ?>" class="section__text__contact__phone h700"><?= $section['telephone'] ?></a>
        </div>
    </div>
    <div class="section__image section--child">
        <img src="<?= $section['image'] ?>" alt="image">
    </div>
</div>