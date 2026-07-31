<div class="select" data-id="month">
    <label class="filter-group__input select__input input input_has-icon">
        <input class="input__field" type="text" name="month" data-id="month" readonly placeholder="Месяц">
        <span class="input__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4736 8.97065C17.7665 8.67775 18.2412 8.67775 18.5341 8.97065C18.827 9.26354 18.827 9.73832 18.5341 10.0312L12.5341 16.0312C12.2595 16.3058 11.8248 16.3232 11.5302 16.083L11.4736 16.0312L5.47358 10.0312C5.18068 9.7383 5.18068 9.26354 5.47358 8.97065C5.76647 8.67775 6.24123 8.67775 6.53412 8.97065L12.0038 14.4404L17.4736 8.97065Z" fill="#232323" />
                </g>
                <defs>
                    <clipPath>
                        <rect width="24" height="24" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </span>
    </label>

    <div class="select__dropdown">
        <ul class="select__dropdown-list" data-id="month">
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
                <li class="select__option" data-value="<?= $month ?>">
                    <?= $month ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
