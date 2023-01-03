<?php
$fields = get_fields();

?>
<div class="container white">
    <div class="wrapper">
        <div class="section_2">
            <div class="section__image section--child">
                <img src="<?= $fields['section_2']['image'] ?>" alt="image">
            </div>
            <div class="section__text section--child">
                <?= $fields['section_2']['title'] ?>

                <div class="section__text__list">
                    <div class="section__text__list__item">
                        <img src="<?= $fields['section_2']['list_image'] ?>" alt="list tick"> <span class="h400"><?= $fields['section_2']['list_1'] ?></span>
                    </div>
                    <div class="section__text__list__item">
                        <img src="<?= $fields['section_2']['list_image'] ?>" alt="list tick"> <span class="h400"><?= $fields['section_2']['list_2'] ?></span>
                    </div>
                    <div class="section__text__list__item">
                        <img src="<?= $fields['section_2']['list_image'] ?>" alt="list tick"> <span class="h400"><?= $fields['section_2']['list_3'] ?></span>
                    </div>
                    <div class="section__text__list__item">
                        <img src="<?= $fields['section_2']['list_image'] ?>" alt="list tick"> <span class="h400"><?= $fields['section_2']['list_4'] ?></span>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>