<div class="lk__input-wrapper">
    <div class="lk__custom-select">
        <input type="hidden" id="month" name="">
        <div class="lk__custom-select-choise">Месяц</div>
    </div>
    <div class="lk__custom-select-list">
        <div class="lk__custom-select-list-container">
            <?php
            $months = [
                'Январь',
                'Февраль',
                'Март',
                'Апрель',
                'Май',
                'Июнь',
                'Июль',
                'Август',
                'Сентябрь',
                'Октябрь',
                'Ноябрь',
                'Декабрь'
            ];
            foreach ($months as $month):
                ?>
                <div class="lk__custom-select-item">
                    <?= $month ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>