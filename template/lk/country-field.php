<?php
$countries = [
    'Российская Федерация',
    'Беларусь',
    'Казахстан',
    'Украина',
    'Узбекистан'
];
sort($countries);
?>
<div class="lk__input-wrapper">
    <div class="lk__custom-select">
        <input type="hidden" id="countrie" value="Российская Федерация" name="">
        <div class="lk__custom-select-choise">Российская Федерация</div>
    </div>
    <div class="lk__custom-select-list">
        <div class="lk__custom-select-list-container">
            <?php foreach ($countries as $country): ?>
                <div class="lk__custom-select-item">
                    <?= $country ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>