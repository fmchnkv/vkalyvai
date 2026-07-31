<div class="filter modal">
    <div class="filter__wrapper modal__wrapper">
        <button class="modal__close js-modal-close icon-button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path d="M15.8212 6.91005C16.1726 6.55863 16.7432 6.55863 17.0946 6.91005C17.4456 7.26148 17.4458 7.83123 17.0946 8.18251L13.9823 11.2938C13.592 11.6843 13.592 12.3174 13.9823 12.7079L17.0946 15.8192C17.446 16.1706 17.446 16.7413 17.0946 17.0927C16.7432 17.4441 16.1726 17.4441 15.8212 17.0927L12.7099 13.9804C12.3194 13.5901 11.6863 13.59 11.2958 13.9804L8.18446 17.0927C7.83318 17.4439 7.26343 17.4436 6.912 17.0927C6.56058 16.7412 6.56058 16.1706 6.912 15.8192L10.0233 12.7079C10.4137 12.3174 10.4137 11.6843 10.0233 11.2938L6.912 8.18251C6.56058 7.83109 6.56058 7.26147 6.912 6.91005C7.26342 6.55863 7.83304 6.55863 8.18446 6.91005L11.2958 10.0214C11.6863 10.4118 12.3193 10.4117 12.7099 10.0214L15.8212 6.91005Z" fill="#999999" />
                </g>
                <defs>
                    <clipPath>
                        <rect width="24" height="24" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </button>
        <div class="filter__inner modal__inner">
            <div class="filter__content modal__content">

                <div class="filter__list">
                    <div class="filter__group filter-group filter-group_price">
                        <span class="filter-group__title">Уровень дохода</span>
                        <label class="filter-group__price-checkbox checkbox">
                            <input class="checkbox__input js-prices-checkbox" type="checkbox" name="has_salary" value="1" >
                            <span class="checkbox__label">Указана желаемая зарплата</span>
                        </label>
                        <div class="js-prices-wrapper">

                            <div class="filter-group__price-wrapper">
                                <label class="filter-group__input input input_has-icon">
                                    <input class="input__field" type="text" placeholder="от" name="salary_from" value="0">
                                    <span class="input__icon js-currency-icon">
                                        <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M13.3672 5.00098C15.1131 5.00098 16.4858 5.40122 17.4854 6.20117C18.4975 6.98784 19.0039 8.15451 19.0039 9.70117C19.0039 11.2344 18.4975 12.4012 17.4854 13.2012C16.4859 13.9877 15.113 14.3809 13.3672 14.3809H10.3691V15.5205H14.5439V16.9209H10.3691V19.001H7.90137V16.9209H6.00391V15.5205H7.90137V5.00098H13.3672ZM10.3691 12.2812H13.3486C14.3606 12.2812 15.1386 12.061 15.6826 11.6211C16.2393 11.1678 16.5176 10.534 16.5176 9.7207C16.5175 8.90755 16.2392 8.28794 15.6826 7.86133C15.1386 7.42136 14.3607 7.2012 13.3486 7.20117H10.3691V12.2812Z" fill="#C2C2C2" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg> -->
                                        ₽
                                    </span>
                                </label>
                                <label class="filter-group__input input input_has-icon">
                                    <input class="input__field" type="text" placeholder="до" name="salary_to" value="900000">
                                    <span class="input__icon js-currency-icon">
                                        <!-- <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M13.3672 5.00098C15.1131 5.00098 16.4858 5.40122 17.4854 6.20117C18.4975 6.98784 19.0039 8.15451 19.0039 9.70117C19.0039 11.2344 18.4975 12.4012 17.4854 13.2012C16.4859 13.9877 15.113 14.3809 13.3672 14.3809H10.3691V15.5205H14.5439V16.9209H10.3691V19.001H7.90137V16.9209H6.00391V15.5205H7.90137V5.00098H13.3672ZM10.3691 12.2812H13.3486C14.3606 12.2812 15.1386 12.061 15.6826 11.6211C16.2393 11.1678 16.5176 10.534 16.5176 9.7207C16.5175 8.90755 16.2392 8.28794 15.6826 7.86133C15.1386 7.42136 14.3607 7.2012 13.3486 7.20117H10.3691V12.2812Z" fill="#C2C2C2" />
                                            </g>
                                            <defs>
                                                <clipPath>
                                                    <rect width="24" height="24" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg> -->
                                        ₽
                                    </span>
                                </label>
                            </div>
    
                            <div class="filter-group__range">
                                <div class="range-slider" data-min="0" data-max="900000"></div>
                            </div>
    
                            <div class="filter-group__periods">
                                <div class="select" data-id="period">
                                    <label class="filter-group__input select__input input input_has-icon">
                                        <input class="input__field" type="text" name="period" data-id="period" readonly placeholder="Период выплат">
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
                                        <ul class="select__dropdown-list" data-id="period">
                                            <li class="select__option" data-value="за месяц">за месяц</li>
                                            <li class="select__option" data-value="за смену">за смену</li>
                                            <li class="select__option" data-value="за час">за час</li>
                                            <li class="select__option" data-value="за вахту">за вахту</li>
                                        </ul>
                                    </div>
                                </div>
                                <? 
                                /* 
                            
                                <div class="select" data-id="currency">
                                    <label class="filter-group__input select__input input input_has-icon">
                                        <input class="input__field" name="currency" type="text" readonly value="₽">
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
                                        <ul class="select__dropdown-list">
                                            <li class="select__option active" data-value="₽" data-min="1000" data-max="900000">₽</li>
                                            <li class="select__option" data-value="$" data-min="100" data-max="50000">$</li>
                                            <li class="select__option" data-value="€" data-min="50" data-max="40000">€</li>
                                        </ul>
                                    </div>
                                </div>
                                */
                                ?>
                            </div>
    
                            <button class="filter-group__reset btn-link js-prices-reset">
                                <span>Сбросить</span>
                            </button>
                        </div>
                    </div>

                    <div class="filter__group filter-group">
                        <span class="filter-group__title">Формат работы и график</span>
                        <div class="filter-group__checkboxes">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Полный день (в офисе/на объекте)</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Сменный график</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Удаленная работа</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Гибридный график</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Вахтовый метод</span>
                            </label>
                        </div>
                    </div>

                    <div class="filter__group filter-group">
                        <span class="filter-group__title">Тип занятости</span>
                        <div class="filter-group__checkboxes">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Полная занятость</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Частичная занятость / Подработка</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Проектная работа / Разовый заказ</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Стажировка / Практика</span>
                            </label>
                        </div>
                    </div>

                    <div class="filter__group filter-group">
                        <span class="filter-group__title">Статус соискателя</span>
                        <div class="filter-group__checkboxes">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Только самозанятые</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Только граждане РФ (или ЕАЭС)</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Есть медицинская книжка</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Не имеет значения</span>
                            </label>
                        </div>
                    </div>

                    <? 
                    /*
                    <div class="filter__group filter-group filter-group_multiple">
                        <span class="filter-group__title">Категория прав</span>
                        <div class="multiple-select" data-id="category">
                            <label class="filter-group__input multiple-select__input">
                                <div class="multiple-select__choices"></div>
                                <input class="multiple-select__field" type="text" name="category" placeholder="Выберите из списка" readonly>
                                <span class="multiple-select__icon">
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
                            <div class="multiple-select__dropdown">
                                <ul class="multiple-select__dropdown-list">
                                    <li class="multiple-select__option" data-value="A">
                                        <span class="multiple-select__option-checkbox">
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.10397 6.2539L10.6808 0.213809C10.836 0.0712696 11.017 0 11.224 0C11.4309 0 11.612 0.0712696 11.7672 0.213809C11.9224 0.356348 12 0.525731 12 0.72196C12 0.918189 11.9224 1.08733 11.7672 1.2294L4.64718 7.78619C4.49198 7.92873 4.31091 8 4.10397 8C3.89703 8 3.71596 7.92873 3.56075 7.78619L0.223853 4.7216C0.0686483 4.57906 -0.00585002 4.40992 0.000358164 4.21416C0.00656635 4.01841 0.0875312 3.84903 0.243253 3.70601C0.398975 3.563 0.58341 3.49173 0.796558 3.4922C1.00971 3.49268 1.19388 3.56395 1.34909 3.70601L4.10397 6.2539Z" fill="white"/>
                                            </svg>
                                        </span>
                                        <span>A</span>
                                    </li>
                                    <li class="multiple-select__option" data-value="B">
                                        <span class="multiple-select__option-checkbox">
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.10397 6.2539L10.6808 0.213809C10.836 0.0712696 11.017 0 11.224 0C11.4309 0 11.612 0.0712696 11.7672 0.213809C11.9224 0.356348 12 0.525731 12 0.72196C12 0.918189 11.9224 1.08733 11.7672 1.2294L4.64718 7.78619C4.49198 7.92873 4.31091 8 4.10397 8C3.89703 8 3.71596 7.92873 3.56075 7.78619L0.223853 4.7216C0.0686483 4.57906 -0.00585002 4.40992 0.000358164 4.21416C0.00656635 4.01841 0.0875312 3.84903 0.243253 3.70601C0.398975 3.563 0.58341 3.49173 0.796558 3.4922C1.00971 3.49268 1.19388 3.56395 1.34909 3.70601L4.10397 6.2539Z" fill="white"/>
                                            </svg>
                                        </span>
                                        <span>B</span>
                                    </li>
                                    <li class="multiple-select__option" data-value="C">
                                        <span class="multiple-select__option-checkbox">
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.10397 6.2539L10.6808 0.213809C10.836 0.0712696 11.017 0 11.224 0C11.4309 0 11.612 0.0712696 11.7672 0.213809C11.9224 0.356348 12 0.525731 12 0.72196C12 0.918189 11.9224 1.08733 11.7672 1.2294L4.64718 7.78619C4.49198 7.92873 4.31091 8 4.10397 8C3.89703 8 3.71596 7.92873 3.56075 7.78619L0.223853 4.7216C0.0686483 4.57906 -0.00585002 4.40992 0.000358164 4.21416C0.00656635 4.01841 0.0875312 3.84903 0.243253 3.70601C0.398975 3.563 0.58341 3.49173 0.796558 3.4922C1.00971 3.49268 1.19388 3.56395 1.34909 3.70601L4.10397 6.2539Z" fill="white"/>
                                            </svg>
                                        </span>
                                        <span>C</span>
                                    </li>
                                    <li class="multiple-select__option" data-value="D">
                                        <span class="multiple-select__option-checkbox">
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.10397 6.2539L10.6808 0.213809C10.836 0.0712696 11.017 0 11.224 0C11.4309 0 11.612 0.0712696 11.7672 0.213809C11.9224 0.356348 12 0.525731 12 0.72196C12 0.918189 11.9224 1.08733 11.7672 1.2294L4.64718 7.78619C4.49198 7.92873 4.31091 8 4.10397 8C3.89703 8 3.71596 7.92873 3.56075 7.78619L0.223853 4.7216C0.0686483 4.57906 -0.00585002 4.40992 0.000358164 4.21416C0.00656635 4.01841 0.0875312 3.84903 0.243253 3.70601C0.398975 3.563 0.58341 3.49173 0.796558 3.4922C1.00971 3.49268 1.19388 3.56395 1.34909 3.70601L4.10397 6.2539Z" fill="white"/>
                                            </svg>
                                        </span>
                                        <span>D</span>
                                    </li>
                                    <li class="multiple-select__option" data-value="M">
                                        <span class="multiple-select__option-checkbox">
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.10397 6.2539L10.6808 0.213809C10.836 0.0712696 11.017 0 11.224 0C11.4309 0 11.612 0.0712696 11.7672 0.213809C11.9224 0.356348 12 0.525731 12 0.72196C12 0.918189 11.9224 1.08733 11.7672 1.2294L4.64718 7.78619C4.49198 7.92873 4.31091 8 4.10397 8C3.89703 8 3.71596 7.92873 3.56075 7.78619L0.223853 4.7216C0.0686483 4.57906 -0.00585002 4.40992 0.000358164 4.21416C0.00656635 4.01841 0.0875312 3.84903 0.243253 3.70601C0.398975 3.563 0.58341 3.49173 0.796558 3.4922C1.00971 3.49268 1.19388 3.56395 1.34909 3.70601L4.10397 6.2539Z" fill="white"/>
                                            </svg>
                                        </span>
                                        <span>M</span>
                                    </li>
                                    <li class="multiple-select__option" data-value="A1">
                                        <span class="multiple-select__option-checkbox">
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.10397 6.2539L10.6808 0.213809C10.836 0.0712696 11.017 0 11.224 0C11.4309 0 11.612 0.0712696 11.7672 0.213809C11.9224 0.356348 12 0.525731 12 0.72196C12 0.918189 11.9224 1.08733 11.7672 1.2294L4.64718 7.78619C4.49198 7.92873 4.31091 8 4.10397 8C3.89703 8 3.71596 7.92873 3.56075 7.78619L0.223853 4.7216C0.0686483 4.57906 -0.00585002 4.40992 0.000358164 4.21416C0.00656635 4.01841 0.0875312 3.84903 0.243253 3.70601C0.398975 3.563 0.58341 3.49173 0.796558 3.4922C1.00971 3.49268 1.19388 3.56395 1.34909 3.70601L4.10397 6.2539Z" fill="white"/>
                                            </svg>
                                        </span>
                                        <span>A1</span>
                                    </li>
                                    <li class="multiple-select__option" data-value="B1">
                                        <span class="multiple-select__option-checkbox">
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.10397 6.2539L10.6808 0.213809C10.836 0.0712696 11.017 0 11.224 0C11.4309 0 11.612 0.0712696 11.7672 0.213809C11.9224 0.356348 12 0.525731 12 0.72196C12 0.918189 11.9224 1.08733 11.7672 1.2294L4.64718 7.78619C4.49198 7.92873 4.31091 8 4.10397 8C3.89703 8 3.71596 7.92873 3.56075 7.78619L0.223853 4.7216C0.0686483 4.57906 -0.00585002 4.40992 0.000358164 4.21416C0.00656635 4.01841 0.0875312 3.84903 0.243253 3.70601C0.398975 3.563 0.58341 3.49173 0.796558 3.4922C1.00971 3.49268 1.19388 3.56395 1.34909 3.70601L4.10397 6.2539Z" fill="white"/>
                                            </svg>
                                        </span>
                                        <span>B1</span>
                                    </li>
                                    <li class="multiple-select__option" data-value="BE">
                                        <span class="multiple-select__option-checkbox">
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.10397 6.2539L10.6808 0.213809C10.836 0.0712696 11.017 0 11.224 0C11.4309 0 11.612 0.0712696 11.7672 0.213809C11.9224 0.356348 12 0.525731 12 0.72196C12 0.918189 11.9224 1.08733 11.7672 1.2294L4.64718 7.78619C4.49198 7.92873 4.31091 8 4.10397 8C3.89703 8 3.71596 7.92873 3.56075 7.78619L0.223853 4.7216C0.0686483 4.57906 -0.00585002 4.40992 0.000358164 4.21416C0.00656635 4.01841 0.0875312 3.84903 0.243253 3.70601C0.398975 3.563 0.58341 3.49173 0.796558 3.4922C1.00971 3.49268 1.19388 3.56395 1.34909 3.70601L4.10397 6.2539Z" fill="white"/>
                                            </svg>
                                        </span>
                                        <span>BE</span>
                                    </li>
                                    <li class="multiple-select__option" data-value="C1">
                                        <span class="multiple-select__option-checkbox">
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.10397 6.2539L10.6808 0.213809C10.836 0.0712696 11.017 0 11.224 0C11.4309 0 11.612 0.0712696 11.7672 0.213809C11.9224 0.356348 12 0.525731 12 0.72196C12 0.918189 11.9224 1.08733 11.7672 1.2294L4.64718 7.78619C4.49198 7.92873 4.31091 8 4.10397 8C3.89703 8 3.71596 7.92873 3.56075 7.78619L0.223853 4.7216C0.0686483 4.57906 -0.00585002 4.40992 0.000358164 4.21416C0.00656635 4.01841 0.0875312 3.84903 0.243253 3.70601C0.398975 3.563 0.58341 3.49173 0.796558 3.4922C1.00971 3.49268 1.19388 3.56395 1.34909 3.70601L4.10397 6.2539Z" fill="white"/>
                                            </svg>
                                        </span>
                                        <span>C1</span>
                                    </li>
                                    <li class="multiple-select__option" data-value="CE/C1E">
                                        <span class="multiple-select__option-checkbox">
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.10397 6.2539L10.6808 0.213809C10.836 0.0712696 11.017 0 11.224 0C11.4309 0 11.612 0.0712696 11.7672 0.213809C11.9224 0.356348 12 0.525731 12 0.72196C12 0.918189 11.9224 1.08733 11.7672 1.2294L4.64718 7.78619C4.49198 7.92873 4.31091 8 4.10397 8C3.89703 8 3.71596 7.92873 3.56075 7.78619L0.223853 4.7216C0.0686483 4.57906 -0.00585002 4.40992 0.000358164 4.21416C0.00656635 4.01841 0.0875312 3.84903 0.243253 3.70601C0.398975 3.563 0.58341 3.49173 0.796558 3.4922C1.00971 3.49268 1.19388 3.56395 1.34909 3.70601L4.10397 6.2539Z" fill="white"/>
                                            </svg>
                                        </span>
                                        <span>CE/C1E</span>
                                    </li>
                                    <li class="multiple-select__option" data-value="D1">
                                        <span class="multiple-select__option-checkbox">
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.10397 6.2539L10.6808 0.213809C10.836 0.0712696 11.017 0 11.224 0C11.4309 0 11.612 0.0712696 11.7672 0.213809C11.9224 0.356348 12 0.525731 12 0.72196C12 0.918189 11.9224 1.08733 11.7672 1.2294L4.64718 7.78619C4.49198 7.92873 4.31091 8 4.10397 8C3.89703 8 3.71596 7.92873 3.56075 7.78619L0.223853 4.7216C0.0686483 4.57906 -0.00585002 4.40992 0.000358164 4.21416C0.00656635 4.01841 0.0875312 3.84903 0.243253 3.70601C0.398975 3.563 0.58341 3.49173 0.796558 3.4922C1.00971 3.49268 1.19388 3.56395 1.34909 3.70601L4.10397 6.2539Z" fill="white"/>
                                            </svg>
                                        </span>
                                        <span>D1</span>
                                    </li>
                                    <li class="multiple-select__option" data-value="D1/D1E">
                                        <span class="multiple-select__option-checkbox">
                                            <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M4.10397 6.2539L10.6808 0.213809C10.836 0.0712696 11.017 0 11.224 0C11.4309 0 11.612 0.0712696 11.7672 0.213809C11.9224 0.356348 12 0.525731 12 0.72196C12 0.918189 11.9224 1.08733 11.7672 1.2294L4.64718 7.78619C4.49198 7.92873 4.31091 8 4.10397 8C3.89703 8 3.71596 7.92873 3.56075 7.78619L0.223853 4.7216C0.0686483 4.57906 -0.00585002 4.40992 0.000358164 4.21416C0.00656635 4.01841 0.0875312 3.84903 0.243253 3.70601C0.398975 3.563 0.58341 3.49173 0.796558 3.4922C1.00971 3.49268 1.19388 3.56395 1.34909 3.70601L4.10397 6.2539Z" fill="white"/>
                                            </svg>
                                        </span>
                                        <span>D1/D1E</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <ul class="select__tags">
                            <li class="select__tag btn btn_size-s btn_light js-multiple-tag" data-id="category" data-value="A">A</li>
                            <li class="select__tag btn btn_size-s btn_light js-multiple-tag" data-id="category" data-value="B">B</li>
                            <li class="select__tag btn btn_size-s btn_light js-multiple-tag" data-id="category" data-value="C">C</li>
                            <li class="select__tag btn btn_size-s btn_light js-multiple-tag" data-id="category" data-value="D">D</li>
                            <li class="select__tag btn btn_size-s btn_light js-multiple-tag" data-id="category" data-value="CE">CE</li>
                            <li class="select__tag btn btn_size-s btn_light js-multiple-tag" data-id="category" data-value="E">E</li>
                        </ul>
                        <button class="filter-group__reset btn-link js-reset-multiple">
                            <span>Сбросить</span>
                        </button>

                        <label class="filter-group__checkbox checkbox" style="margin-top: 12px;">
                            <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                            <span class="checkbox__label">Со своим автомобилем</span>
                        </label>
                    </div>   
                    */
                    ?>

                    <div class="filter__group filter-group">
                        <span class="filter-group__title">Категория прав</span>
                        <div class="filter-group__checkboxes">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">A</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="2">
                                <span class="checkbox__label">B</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="2">
                                <span class="checkbox__label">C</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="2">
                                <span class="checkbox__label">D</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="2">
                                <span class="checkbox__label">CE</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="2">
                                <span class="checkbox__label">E</span>
                            </label>
                            <label class="filter-group__checkbox checkbox" style="margin-top: 12px;">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Со своим автомобилем</span>
                            </label>
                        </div>
                    </div>

                    <div class="filter__group filter-group">
                        <span class="filter-group__title">Опыт работы</span>
                        <div class="filter-group__checkboxes">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Без опыта / Студенты </span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="2">
                                <span class="checkbox__label">От 1 года до 3 лет</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="2">
                                <span class="checkbox__label">От 3 до 6 лет</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="2">
                                <span class="checkbox__label">Более 6 лет</span>
                            </label>
                        </div>
                    </div>

                    <div class="filter__group filter-group">
                        <span class="filter-group__title">Гражданство / Патент</span>
                        <div class="filter-group__checkboxes">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Гражданство РФ</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="2">
                                <span class="checkbox__label">Гражданство ЕАЭС (Беларусь, Казахстан, Армения, Киргизия)</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="2">
                                <span class="checkbox__label">Есть патент на работу в РФ</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="2">
                                <span class="checkbox__label">Не имеет значения</span>
                            </label>
                        </div>
                    </div>

                    <div class="filter__group filter-group">
                        <span class="filter-group__title">Образование</span>
                        <div class="filter-group__checkboxes">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Высшее</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="2">
                                <span class="checkbox__label">Среднее специальное (колледжи, техникумы)</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="2">
                                <span class="checkbox__label">Среднее (школа)</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="2">
                                <span class="checkbox__label">Не имеет значения</span>
                            </label>
                        </div>
                    </div>

                    <div class="filter__group filter-group">
                        <span class="filter-group__title">Знание языков</span>
                        <div class="filter-group__checkboxes">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Русский</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Узбекский</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Казахский</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Таджикский</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Киргизский</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Армянский</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Азербайджанский</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Китайский</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">Английский</span>
                            </label>
                        </div>

                        <button class="filter-group__more btn-link js-show-checkboxes">
                            <span>Показать все</span>
                        </button>
                    </div>

                    <div class="filter__group filter-group">
                        <span class="filter-group__title">Регион</span>
                        <div class="filter-group__checkboxes">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">В моем регионе</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">По всей России</span>
                            </label>
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="has_salary" value="1">
                                <span class="checkbox__label">По всему миру</span>
                            </label>
                        </div>
                    </div>                

                </div>

                <div class="filter__actions">
                    <button class="filter__reset js-filter-reset btn btn_neutral btn_size-m">Сбросить все</button>
                    <button class="filter__apply js-filter-apply btn btn_primary btn_size-m">Применить</button>
                </div>
            </div>
        </div>
    </div>
</div>