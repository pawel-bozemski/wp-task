<?php
$fields = get_fields();
$section = $fields['section_3'];
?>
<div class="container gradient">
    <div class="wrapper">
        <div class="section_3">
            <ul class="section__list">
                <div class="section__list__item">
                    <span class="bullet"></span>
                    <li class="h400 white--text"><?= $section['title_list_1'] ?></li>
                    <span class="h400 grey--text"><?= $section['subtitle_list_1'] ?></span>
                </div>
                <div class="section__list__item">
                    <span class="bullet"></span>
                    <li class="h400 white--text"><?= $section['title_list_2'] ?></li>
                    <span class="h400 grey--text"><?= $section['subtitle_list_2'] ?></span>
                </div>
                <div class="section__list__item">
                    <span class="bullet"></span>
                    <li class="h400 white--text"><?= $section['title_list_3'] ?></li>
                    <span class="h400 grey--text"><?= $section['subtitle_list_3'] ?></span>
                </div>
                <div class="section__list__item">
                    <span class="bullet"></span>
                    <li class="h400 white--text"><?= $section['title_list_4'] ?></li>
                    <span class="h400 grey--text"><?= $section['subtitle_list_4'] ?></span>
                </div>
                <div class="section__list__item">
                    <span class="bullet"></span>
                    <li class="h400 white--text"><?= $section['title_list_5'] ?></li>
                    <span class="h400 grey--text"><?= $section['subtitle_list_5'] ?></span>
                </div>
                <div class="section__list__item">
                    <span class="bullet"></span>
                    <li class="h400 white--text"><?= $section['title_list_6'] ?></li>
                    <span class="h400 grey--text"><?= $section['subtitle_list_6'] ?></span>
                </div>

            </ul>
            <div class="section__button">
                <div class="section__button__button button--primary">
                    <a href="<?= $section['button_url'] ?>"><?= $section['button_text'] ?></a>
                </div>
            </div>
        </div>
    </div>
</div>