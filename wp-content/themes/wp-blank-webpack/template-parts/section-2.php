<?php
$fields = get_fields();
$section = $fields['section_2'];

?>
<div class="container white">
    <div class="wrapper">
        <div class="section_2">
            <div class="section__image section--child">
                <img src="<?= $section['image'] ?>" alt="image">
            </div>
            <div class="section__text section--child">
                <?= $section['title'] ?>

                <div class="section__text__list">
                    <div class="section__text__list__item">
                        <img src="<?= $section['list_image'] ?>" alt="list tick"> <span class="h400"><?= $section['list_1'] ?></span>
                    </div>
                    <div class="section__text__list__item">
                        <img src="<?= $section['list_image'] ?>" alt="list tick"> <span class="h400"><?= $section['list_2'] ?></span>
                    </div>
                    <div class="section__text__list__item">
                        <img src="<?= $section['list_image'] ?>" alt="list tick"> <span class="h400"><?= $section['list_3'] ?></span>
                    </div>
                    <div class="section__text__list__item">
                        <img src="<?= $section['list_image'] ?>" alt="list tick"> <span class="h400"><?= $section['list_4'] ?></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>