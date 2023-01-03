<?php
$fields = get_fields();
?>
<div class="section_1">
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