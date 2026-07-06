<? require($_SERVER["DOCUMENT_ROOT"] . "/template/header.php"); ?>
<section class="lk constructor">
    <div class="container">
        <!-- Шаги -->
        <div class="constructor__steps">
            <span class="progress-step active" data-step="1"></span>
            <span class="progress-step" data-step="2"></span>
            <span class="progress-step" data-step="3"></span>
        </div>
        <h1 class="constructor-title page-title lk__page-title">Основная информация</h1>
        <div class="constructor__forms">
            <!-- Шаг 1 -->
            <form class="active grid-list step-form" id="step-form-base" data-form="1"
                data-title="Основная информация" class="step-form active" method="post">
                <div class="constructor__inputs-set">
                    <span class="subcaption">Название и специальность</span>
                    <div class="constructor__inputs-list grid-list vacancy-form__titles-inputs grid-2-columns">
                        <div class="lk__input-wrapper">
                            <input type="text" value="" name="vacancyName" placeholder="Название вакансии">
                        </div>
                        <div class="lk__input-wrapper">
                            <input type="text" value="" name="special" placeholder="Специальность">
                        </div>
                    </div>
                </div>
                <div class="constructor__inputs-set">
                    <span class="subcaption">Требуемый опыт</span>
                    <div class="lk__radio-buttons vacancy-form__radios">
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="experience" value="no" checked="">
                            <span class="radio__label">Без опыта</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="experience" value="1-3y">
                            <span class="radio__label">От 1 года до 3 лет</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="experience" value="3-6y">
                            <span class="radio__label">От 3 до 6 лет</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="experience" value="6y">
                            <span class="radio__label">Более 6 лет</span>
                        </label>
                    </div>
                </div>
                <div class="constructor__inputs-set">
                    <span class="subcaption">Какого сотрудника вы ищете</span>
                    <div class="lk__radio-buttons vacancy-form__radios">
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="employee_type" value="permanent" checked="">
                            <span class="radio__label">Постоянного</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="employee_type" value="temporary">
                            <span class="radio__label">Временного</span>
                        </label>
                    </div>
                </div>
                <div class="constructor__inputs-set">
                    <span class="subcaption">Тип занятости</span>
                    <div class="lk__radio-buttons vacancy-form__radios">
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="employment_type" value="full">
                            <span class="radio__label">Полная занятость</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="employment_type" value="part">
                            <span class="radio__label">Частичная занятость</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="employment_type" value="shift" checked="">
                            <span class="radio__label">Проектная работа</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="employment_type" value="shift" checked="">
                            <span class="radio__label">Стажировка</span>
                        </label>
                    </div>
                </div>
                <div class="constructor__inputs-set">
                    <span class="subcaption">Укажите количество смен</span>
                    <div class="lk__radio-buttons vacancy-form__radios">
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="shifts_count" value="15" checked="">
                            <span class="radio__label">15</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="shifts_count" value="20">
                            <span class="radio__label">20</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="shifts_count" value="30">
                            <span class="radio__label">30</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="shifts_count" value="40">
                            <span class="radio__label">40</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="shifts_count" value="45">
                            <span class="radio__label">45</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="shifts_count" value="60">
                            <span class="radio__label">60</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="shifts_count" value="90">
                            <span class="radio__label">90</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="shifts_count" value="120">
                            <span class="radio__label">120</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="shifts_count" value="180">
                            <span class="radio__label">180</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="shifts_count" value="other">
                            <span class="radio__label">Другое</span>
                        </label>
                    </div>
                </div>

                <div class="constructor__inputs-set">
                    <span class="subcaption">Формат работы</span>
                    <div class="constructor__inputs-list flex-list">
                        <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="work_format[]" value="employer_place">
                                <span class="checkbox__label">На месте работодателя</span>
                            </label>
                        </div>
                        <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="work_format[]" value="remote">
                                <span class="checkbox__label">Удаленно</span>
                            </label>
                        </div>
                        <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="work_format[]" value="hybrid">
                                <span class="checkbox__label">Гибрид</span>
                            </label>
                        </div>
                        <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="work_format[]" value="mobile">
                                <span class="checkbox__label">Разъездной</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="constructor__inputs-set">
                    <span class="subcaption">Оформление</span>
                    <div class="constructor__inputs-list flex-list">
                        <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="employment_registration[]" value="tk_rf">
                                <span class="checkbox__label">ТК РФ</span>
                            </label>
                        </div>
                        <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="employment_registration[]" value="internship">
                                <span class="checkbox__label">Стажировка</span>
                            </label>
                        </div>
                        <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="employment_registration[]" value="gph_self_employed">
                                <span class="checkbox__label">Договор ГПХ с самозанятым</span>
                            </label>
                        </div>
                        <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="employment_registration[]" value="gph_ip">
                                <span class="checkbox__label">Договор ГПХ с ИП</span>
                            </label>
                        </div>
                        <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="employment_registration[]" value="gph_person">
                                <span class="checkbox__label">Договор ГПХ с физлицом</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="constructor__inputs-set">
                    <span class="subcaption">Город публикации</span>
                    <div class="select" data-id="vacancy-city">
                        <label class="filter-group__input select__input input input_has-icon">
                            <input class="input__field" type="text" name="vacancy-city" data-id="education" readonly="" placeholder="Укажите один или несколько городов">
                            <div class="input__icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4736 8.97065C17.7665 8.67775 18.2412 8.67775 18.5341 8.97065C18.827 9.26354 18.827 9.73832 18.5341 10.0312L12.5341 16.0312C12.2595 16.3058 11.8248 16.3232 11.5302 16.083L11.4736 16.0312L5.47358 10.0312C5.18068 9.7383 5.18068 9.26354 5.47358 8.97065C5.76647 8.67775 6.24123 8.67775 6.53412 8.97065L12.0038 14.4404L17.4736 8.97065Z" fill="#232323"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4687_14543">
                                            <rect width="24" height="24" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </label>

                        <div class="select__dropdown">
                            <ul class="select__dropdown-list" data-id="vacancy-city">
                                <li class="select__option active" data-value="Москва">Москва</li>
                                <li class="select__option" data-value="Санкт-Петербург">Санкт-Петербург</li>                            
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="constructor__inputs-set">
                    <span class="subcaption">Адрес</span>
                    <div class="vacancy-form__map grid-list">
                        <div class="main-hero__input-wrapper main-hero__input-wrapper_text">
                            <label class="main-hero__label field field_text lk__input-wrapper" data-id="vacancy_address">
                                <input class="field__input js-autocomplete-input" type="text" name="vacancy_address" placeholder="Введите адрес">
                            </label>
                            <div class="field__dropdown js-without-choice" data-id="vacancy_address">
                                <ul class="field__dropdown-list">
                                    <li class="field__option js-select-item hidden" data-value="Ленина">Ленина</li>
                                    <li class="field__option js-select-item hidden" data-value="Островского">Островского</li>                            
                                </ul>
                            </div>
                        </div>
                        <div class="map">
                            <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ad76751831d36b11e1c8803309d605bf4767a55ea748f6bf38622a6c75ffe23b9&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
                        </div>
                        <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="show_adderss" value="N">
                                <span class="checkbox__label">Не показывать адрес в вакансии</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="constructor__forms-actions">
                    <button type="button" class="btn btn_light btn_size-m preview-btn" data-call-modal="show_vacancy-preview">Предпросмотр</button>
                    <div class="prev-back__actions">
                        <button type="button" class="btn btn_neutral prev-step btn_size-m" disabled>Назад</button>
                        <button type="submit" class="btn btn_primary btn-next btn_size-m" data-next-step="2">Далее</button>
                    </div>
                </div>
                <input type="hidden" name="step" value="1">
                <input type="hidden" name="form_action" value="save_step">
            </form>

            <!-- Шаг 2 -->
            <form class="grid-list step-form" id="step-form-conditions" data-form="2"
                data-title="Условия и график" class="step-form" method="post">
                <div class="constructor__inputs-set vacancy-form__pay-block">
                    <span class="subcaption">Оплата работы</span>
                    <div class="constructor__inputs-block flex-list vacancy-form__pay-section">
                        <div class="constructor__inputs-list grid-list grid-2-columns vacancy-form__prices-inputs">
                            <div class="lk__input-wrapper">
                                <input type="text" data-mask="number" value="" name="from" placeholder="От">
                            </div>
                            <div class="lk__input-wrapper">
                                <input type="text" value="" data-mask="number" name="before" placeholder="До">
                            </div>
                        </div>
                        <div class="constructor__inputs-list grid-list vacancy-form__currency-inputs">
                            <div class="select" data-id="vacancy-currency">
                                <label class="filter-group__input select__input input input_has-icon">
                                    <input class="input__field" type="text" name="vacancy-currency" data-id="vacancy-currency" readonly="" placeholder="₽">
                                    <div class="input__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4736 8.97065C17.7665 8.67775 18.2412 8.67775 18.5341 8.97065C18.827 9.26354 18.827 9.73832 18.5341 10.0312L12.5341 16.0312C12.2595 16.3058 11.8248 16.3232 11.5302 16.083L11.4736 16.0312L5.47358 10.0312C5.18068 9.7383 5.18068 9.26354 5.47358 8.97065C5.76647 8.67775 6.24123 8.67775 6.53412 8.97065L12.0038 14.4404L17.4736 8.97065Z" fill="#232323"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4687_14543">
                                                    <rect width="24" height="24" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </label>

                                <div class="select__dropdown">
                                    <ul class="select__dropdown-list" data-id="vacancy-currency">
                                        <li class="select__option active" data-value="₽">₽</li>
                                        <li class="select__option" data-value="$">$</li>
                                        <li class="select__option" data-value="€">€</li>                            
                                    </ul>
                                </div>
                            </div>
                            <div class="select" data-id="vacancy-space">
                                <label class="filter-group__input select__input input input_has-icon">
                                    <input class="input__field" type="text" name="vacancy-space" data-id="vacancy-space" readonly="" placeholder="За месяц">
                                    <div class="input__icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4736 8.97065C17.7665 8.67775 18.2412 8.67775 18.5341 8.97065C18.827 9.26354 18.827 9.73832 18.5341 10.0312L12.5341 16.0312C12.2595 16.3058 11.8248 16.3232 11.5302 16.083L11.4736 16.0312L5.47358 10.0312C5.18068 9.7383 5.18068 9.26354 5.47358 8.97065C5.76647 8.67775 6.24123 8.67775 6.53412 8.97065L12.0038 14.4404L17.4736 8.97065Z" fill="#232323"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4687_14543">
                                                    <rect width="24" height="24" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </label>

                                <div class="select__dropdown">
                                    <ul class="select__dropdown-list" data-id="vacancy-space">
                                        <li class="select__option active" data-value="За месяц">За месяц</li>
                                        <li class="select__option" data-value="За день">За день</li>                            
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="constructor__inputs-set">
                    <span class="subcaption">Частота выплат</span>
                    <div class="lk__radio-buttons vacancy-form__radios">
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="payment_frequency" value="daily" checked="">
                            <span class="radio__label">Ежедневно</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="payment_frequency" value="weekly">
                            <span class="radio__label">Раз в неделю</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="payment_frequency" value="twice_month">
                            <span class="radio__label">Два раза в месяц</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="payment_frequency" value="monthly">
                            <span class="radio__label">Раз в месяц</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="payment_frequency" value="project">
                            <span class="radio__label">За проект</span>
                        </label>
                    </div>
                </div>
                <div class="constructor__inputs-set">
                    <span class="subcaption">График работы</span>
                    <div class="lk__radio-buttons vacancy-form__radios">
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="work_schedule" value="6_1" checked="">
                            <span class="radio__label">6/1</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="work_schedule" value="5_2">
                            <span class="radio__label">5/2</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="work_schedule" value="4_4">
                            <span class="radio__label">4/4</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="work_schedule" value="4_3">
                            <span class="radio__label">4/3</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="work_schedule" value="4_2">
                            <span class="radio__label">4/2</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="work_schedule" value="3_3">
                            <span class="radio__label">3/3</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="work_schedule" value="3_2">
                            <span class="radio__label">3/2</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="work_schedule" value="2_2">
                            <span class="radio__label">2/2</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="work_schedule" value="2_1">
                            <span class="radio__label">2/1</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="work_schedule" value="1_3">
                            <span class="radio__label">1/3</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="work_schedule" value="1_2">
                            <span class="radio__label">1/2</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="work_schedule" value="weekends">
                            <span class="radio__label">По выходным</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="work_schedule" value="free">
                            <span class="radio__label">Свободный</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="work_schedule" value="other">
                            <span class="radio__label">Другое</span>
                        </label>
                    </div>
                </div>
                <div class="constructor__inputs-set">
                    <span class="subcaption">Рабочие часы в день</span>
                    <div class="constructor__inputs-set grid-list">
                        <div class="lk__radio-buttons vacancy-form__radios">
                            <label class="lk__input-radio radio">
                                <input class="radio__input" type="radio" name="work_hours" value="2" checked="">
                                <span class="radio__label">2</span>
                            </label>
                            <label class="lk__input-radio radio">
                                <input class="radio__input" type="radio" name="work_hours" value="3">
                                <span class="radio__label">3</span>
                            </label>
                            <label class="lk__input-radio radio">
                                <input class="radio__input" type="radio" name="work_hours" value="4">
                                <span class="radio__label">4</span>
                            </label>
                            <label class="lk__input-radio radio">
                                <input class="radio__input" type="radio" name="work_hours" value="5">
                                <span class="radio__label">5</span>
                            </label>
                            <label class="lk__input-radio radio">
                                <input class="radio__input" type="radio" name="work_hours" value="6">
                                <span class="radio__label">6</span>
                            </label>
                            <label class="lk__input-radio radio">
                                <input class="radio__input" type="radio" name="work_hours" value="7">
                                <span class="radio__label">7</span>
                            </label>
                            <label class="lk__input-radio radio">
                                <input class="radio__input" type="radio" name="work_hours" value="8">
                                <span class="radio__label">8</span>
                            </label>
                            <label class="lk__input-radio radio">
                                <input class="radio__input" type="radio" name="work_hours" value="9">
                                <span class="radio__label">9</span>
                            </label>
                            <label class="lk__input-radio radio">
                                <input class="radio__input" type="radio" name="work_hours" value="10">
                                <span class="radio__label">10</span>
                            </label>
                            <label class="lk__input-radio radio">
                                <input class="radio__input" type="radio" name="work_hours" value="11">
                                <span class="radio__label">11</span>
                            </label>
                            <label class="lk__input-radio radio">
                                <input class="radio__input" type="radio" name="work_hours" value="12">
                                <span class="radio__label">12</span>
                            </label>
                            <label class="lk__input-radio radio">
                                <input class="radio__input" type="radio" name="work_hours" value="24">
                                <span class="radio__label">24</span>
                            </label>
                            <label class="lk__input-radio radio">
                                <input class="radio__input" type="radio" name="work_hours" value="by_agreement">
                                <span class="radio__label">По договоренности</span>
                            </label>
                            <label class="lk__input-radio radio">
                                <input class="radio__input" type="radio" name="work_hours" value="other">
                                <span class="radio__label">Другое</span>
                            </label>
                        </div>
                        <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="night_hours" value="Y">
                                <span class="checkbox__label">Есть вечерние или ночные смены</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="constructor__inputs-set">
                    <span class="subcaption">Требуемые навыки</span>
                    <div class="skills-block vacancy-form__skills">
                        <div class="lk__input-wrapper bright-bubble vacancy-form__skills-wrapper input_has-icon">
                            <div class="constructor__bubbles-list bright-bubbles">
                                <div class="constructor__bubbles-item remove-skill">
                                    <span>Коммуникабельность</span>
                                    <button class="btn transp-btn">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M8.86426 3.77246L6.63672 6L8.86426 8.22754L8.22754 8.86426L6.00098 6.63672L3.77344 8.86426L3.13672 8.22754L5.36426 6L3.13672 3.77246L3.77344 3.13672L6.00098 5.36328L8.22754 3.13672L8.86426 3.77246Z" fill="#232323"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4827_39596">
                                                    <rect width="12" height="12" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                                <div class="constructor__bubbles-item remove-skill">
                                    <span>Выявление потребностей</span>
                                    <button class="btn transp-btn">
                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <path d="M8.86426 3.77246L6.63672 6L8.86426 8.22754L8.22754 8.86426L6.00098 6.63672L3.77344 8.86426L3.13672 8.22754L5.36426 6L3.13672 3.77246L3.77344 3.13672L6.00098 5.36328L8.22754 3.13672L8.86426 3.77246Z" fill="#232323"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_4827_39596">
                                                    <rect width="12" height="12" fill="white"></rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <input type="text" name="vacancy-search-skill">
                            <div class="input__icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4736 8.97065C17.7665 8.67775 18.2412 8.67775 18.5341 8.97065C18.827 9.26354 18.827 9.73832 18.5341 10.0312L12.5341 16.0312C12.2595 16.3058 11.8248 16.3232 11.5302 16.083L11.4736 16.0312L5.47358 10.0312C5.18068 9.7383 5.18068 9.26354 5.47358 8.97065C5.76647 8.67775 6.24123 8.67775 6.53412 8.97065L12.0038 14.4404L17.4736 8.97065Z" fill="#232323"></path>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_4687_14543">
                                            <rect width="24" height="24" fill="white"></rect>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="constructor__bubbles-list gray-bubbles">
                            <div class="constructor__bubbles-item add-skill">Коммуникабельность</div>
                            <div class="constructor__bubbles-item add-skill">Выявление потребностей</div>
                            <div class="constructor__bubbles-item add-skill">Уравновешенность</div>
                            <div class="constructor__bubbles-item add-skill">Консультирование клиентов</div>
                            <div class="constructor__bubbles-item add-skill">Составление договоров</div>
                            <div class="constructor__bubbles-item add-skill">Пассивные продажи</div>
                            <div class="constructor__bubbles-item add-skill">Аудит компании</div>
                            <div class="constructor__bubbles-item add-skill">Анализ целевой аудитории</div>
                            <div class="constructor__bubbles-item add-skill">Наставничество</div>
                            <div class="constructor__bubbles-item add-skill">Планирование продаж</div>
                        </div>
                    </div>
                    
                </div>

                <div class="constructor__forms-actions">
                    <button type="button" class="btn btn_light btn_size-m preview-btn" data-call-modal="show_vacancy-preview">Предпросмотр</button>
                    <div class="prev-back__actions">
                        <button type="button" class="btn btn_neutral prev-step btn_size-m" data-prev-step="1">Назад</button>
                        <button type="submit" class="btn btn_primary btn-next btn_size-m" data-next-step="3">Далее</button>
                    </div>
                </div>
                <input type="hidden" name="step" value="2">
                <input type="hidden" name="form_action" value="save_step">
            </form>

            <!-- Шаг 3 -->
            <form class="grid-list step-form" id="step-form-description" data-form="3"
                data-title="Описание вакансии" class="step-form" method="post">
                <div class="constructor__inputs-set">
                    <div class="constructor__inputs-title">
                        <span class="subcaption">Описание</span>
                        <p>Проверьте, чтобы в тексте не было <a href="javascript:void(0)">дискриминации</a>: упоминаний пола, возраста и национальности. Заодно посмотрите, нет ли нарушений <a href="javascript:void(0)">правил</a> или ошибок генерации</p>
                    </div>
                    <div class="constructor__textarea-wrapper textarea">
                        <textarea name="descr" id="" placeholder="Описание работы"></textarea>
                    </div>
                </div>
                <div class="construstor__inputs-files-block" data-files-type="portfolio">
                    <div class="constructor__inputs-title">
                        <span class="subcaption">Медиа</span>
                        <p>Вы можете добавить фото или видео, отражающие вашу вакансию</p>
                    </div>
                    <label class="constructor__files-input-wrapper">
                        <input type="file" name="portfolio[]" multiple="" accept="image/png, image/jpeg">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M20 7.08313C20.6902 7.08313 21.2498 7.64292 21.25 8.33313V18.7501H31.667C32.3572 18.7503 32.917 19.3099 32.917 20.0001C32.917 20.6904 32.3572 21.2499 31.667 21.2501H21.25V31.6671C21.2498 32.3573 20.6902 32.9171 20 32.9171C19.3098 32.9171 18.7502 32.3573 18.75 31.6671V21.2501H8.33301C7.6428 21.2499 7.08301 20.6904 7.08301 20.0001C7.08301 19.3099 7.6428 18.7503 8.33301 18.7501H18.75V8.33313C18.7502 7.64292 19.3098 7.08313 20 7.08313Z" fill="#FC7827"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_7542_2494">
                                    <rect width="40" height="40" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="constructor__files-input-text">
                            <div class="file-input-title">
                                <span>Нажмите чтобы загрузить</span> или перетащите файлы
                            </div>
                            <p>Вы можете загрузить до 10 фото в формате PNG, JPG, JPEG, WEBP, PDF, DOC, DOCX общим размером не более 10мб.</p>
                        </div>
                    </label>
                    <div class="constructor__files-result-wrapper"></div>
                    <div class="constructor__files-result-noties">
                        <div class="info"></div>
                        <div class="errors"></div>
                    </div>
                </div>
                <div class="constructor__inputs-set">
                    <div class="grid-list template-wrapper">
                        <template id="languages">
                            <div class="vacancy__multi-blocks-wrapper template-element">
                                <span class="subcaption">Знание языков</span>
                                <div class="constructor__inputs-block">
                                    <div class="vacancy__multi-blocks-selects constructor__inputs-list grid-list">
                                        <div class="select" data-id="vacancy_language">
                                            <label class="filter-group__input select__input input input_has-icon">
                                                <input class="input__field" type="text" name="vacancy_language" data-id="vacancy_language" readonly="" placeholder="Выберите язык">
                                                <div class="input__icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4736 8.97065C17.7665 8.67775 18.2412 8.67775 18.5341 8.97065C18.827 9.26354 18.827 9.73832 18.5341 10.0312L12.5341 16.0312C12.2595 16.3058 11.8248 16.3232 11.5302 16.083L11.4736 16.0312L5.47358 10.0312C5.18068 9.7383 5.18068 9.26354 5.47358 8.97065C5.76647 8.67775 6.24123 8.67775 6.53412 8.97065L12.0038 14.4404L17.4736 8.97065Z" fill="#232323"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_4687_14543">
                                                                <rect width="24" height="24" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </label>

                                            <div class="select__dropdown">
                                                <ul class="select__dropdown-list" data-id="vacancy_language">
                                                    <li class="select__option active" data-value="Русский">Русский</li>
                                                    <li class="select__option" data-value="Узбекский">Узбекский</li>
                                                    <li class="select__option" data-value="Казахский">Казахский</li>
                                                    <li class="select__option" data-value="Таджикский">Таджикский</li>
                                                    <li class="select__option" data-value="Киргизский">Киргизский</li>
                                                    <li class="select__option" data-value="Армянский">Армянский</li>
                                                    <li class="select__option" data-value="Азербайджанский">Азербайджанский</li>
                                                    <li class="select__option" data-value="Китайский">Китайский</li>
                                                    <li class="select__option" data-value="Английский">Английский</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <? 
                                        /* 
                                        <div class="select" data-id="vacancy_language_level">
                                            <label class="filter-group__input select__input input input_has-icon">
                                                <input class="input__field" type="text" name="vacancy_language_level" data-id="vacancy_language_level" readonly="" placeholder="Уровень владения">
                                                <div class="input__icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4736 8.97065C17.7665 8.67775 18.2412 8.67775 18.5341 8.97065C18.827 9.26354 18.827 9.73832 18.5341 10.0312L12.5341 16.0312C12.2595 16.3058 11.8248 16.3232 11.5302 16.083L11.4736 16.0312L5.47358 10.0312C5.18068 9.7383 5.18068 9.26354 5.47358 8.97065C5.76647 8.67775 6.24123 8.67775 6.53412 8.97065L12.0038 14.4404L17.4736 8.97065Z" fill="#232323"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_4687_14543">
                                                                <rect width="24" height="24" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </label>

                                            <div class="select__dropdown">
                                                <ul class="select__dropdown-list" data-id="vacancy_language_level">
                                                    <li class="select__option active" data-value="А1-Начальный">А1-Начальный</li>
                                                    <li class="select__option" data-value="А2-Элементарный">А2-Элементарный</li>
                                                    <li class="select__option" data-value="B1-Средний">B1-Средний</li>                            
                                                </ul>
                                            </div>
                                        </div>
                                        */
                                        ?>
                                    </div>
                                    <button data-remove-block="languages" class="language-block-remove transp-btn lk__btn_has-icon">
                                        <span>Удалить</span>
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                            <path d="M11.8242 5.03125L8.85352 8.00098L11.8242 10.9707L10.9756 11.8193L8.00586 8.84961L5.03516 11.8193L4.1875 10.9707L7.15723 8.00098L4.1875 5.03125L5.03516 4.18262L8.00586 7.15234L10.9756 4.18262L11.8242 5.03125Z" fill="#C2C2C2"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_7339_34040">
                                            <rect width="16" height="16" fill="white"/>
                                            </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </template>
                        <div class="vacancy__multi-blocks-wrapper template-element">
                            <span class="subcaption">Знание языков</span>
                            <div class="constructor__inputs-block">
                                <div class="vacancy__multi-blocks-selects constructor__inputs-list grid-list">
                                    <div class="select" data-id="vacancy_language">
                                        <label class="filter-group__input select__input input input_has-icon">
                                            <input class="input__field" type="text" name="vacancy_language" data-id="vacancy_language" readonly="" placeholder="Выберите язык">
                                            <div class="input__icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4736 8.97065C17.7665 8.67775 18.2412 8.67775 18.5341 8.97065C18.827 9.26354 18.827 9.73832 18.5341 10.0312L12.5341 16.0312C12.2595 16.3058 11.8248 16.3232 11.5302 16.083L11.4736 16.0312L5.47358 10.0312C5.18068 9.7383 5.18068 9.26354 5.47358 8.97065C5.76647 8.67775 6.24123 8.67775 6.53412 8.97065L12.0038 14.4404L17.4736 8.97065Z" fill="#232323"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_4687_14543">
                                                            <rect width="24" height="24" fill="white"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </label>

                                        <div class="select__dropdown">
                                            <ul class="select__dropdown-list" data-id="vacancy_language">
                                                    <li class="select__option active" data-value="Русский">Русский</li>
                                                    <li class="select__option" data-value="Узбекский">Узбекский</li>
                                                    <li class="select__option" data-value="Казахский">Казахский</li>
                                                    <li class="select__option" data-value="Таджикский">Таджикский</li>
                                                    <li class="select__option" data-value="Киргизский">Киргизский</li>
                                                    <li class="select__option" data-value="Армянский">Армянский</li>
                                                    <li class="select__option" data-value="Азербайджанский">Азербайджанский</li>
                                                    <li class="select__option" data-value="Китайский">Китайский</li>
                                                    <li class="select__option" data-value="Английский">Английский</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <? 
                                    /*
                                    <div class="select" data-id="vacancy_language_level">
                                        <label class="filter-group__input select__input input input_has-icon">
                                            <input class="input__field" type="text" name="vacancy_language_level" data-id="vacancy_language_level" readonly="" placeholder="Уровень владения">
                                            <div class="input__icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4736 8.97065C17.7665 8.67775 18.2412 8.67775 18.5341 8.97065C18.827 9.26354 18.827 9.73832 18.5341 10.0312L12.5341 16.0312C12.2595 16.3058 11.8248 16.3232 11.5302 16.083L11.4736 16.0312L5.47358 10.0312C5.18068 9.7383 5.18068 9.26354 5.47358 8.97065C5.76647 8.67775 6.24123 8.67775 6.53412 8.97065L12.0038 14.4404L17.4736 8.97065Z" fill="#232323"></path>
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_4687_14543">
                                                            <rect width="24" height="24" fill="white"></rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </label>

                                        <div class="select__dropdown">
                                            <ul class="select__dropdown-list" data-id="vacancy_language_level">
                                                    <li class="select__option active" data-value="А1-Начальный">А1-Начальный</li>
                                                    <li class="select__option" data-value="А2-Элементарный">А2-Элементарный</li>
                                                    <li class="select__option" data-value="B1-Средний">B1-Средний</li>                            
                                            </ul>
                                        </div>
                                    </div>
                                    */
                                    ?>
                                </div>
                                <button data-remove-block="languages" class="language-block-remove transp-btn lk__btn_has-icon">
                                    <span>Удалить</span>
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                        <path d="M11.8242 5.03125L8.85352 8.00098L11.8242 10.9707L10.9756 11.8193L8.00586 8.84961L5.03516 11.8193L4.1875 10.9707L7.15723 8.00098L4.1875 5.03125L5.03516 4.18262L8.00586 7.15234L10.9756 4.18262L11.8242 5.03125Z" fill="#C2C2C2"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_7339_34040">
                                        <rect width="16" height="16" fill="white"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <button data-add-block="languages" class="contact-add btn btn_light btn_size-m lk__btn_has-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M10.7529 9.25098H15.2529V10.751H10.7529V15.251H9.25293V10.751H4.75293V9.25098H9.25293V4.75098H10.7529V9.25098Z" fill="#FC7827"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_7081_644">
                                    <rect width="20" height="20" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        <span>Добавить еще</span>
                    </button>
                </div>
                <div class="constructor__inputs-set">
                    <span class="subcaption">Водительские права</span>
                    <div class="lk__checkbox-buttons flex-list grid-list">
                        <label class="lk__input-wrapper driver-item">
                            <input type="checkbox" name="driver_license[]" value="A" checked="">
                            <span class="lk__input-label">A</span>
                        </label>
                        <label class="lk__input-wrapper driver-item">
                            <input type="checkbox" name="driver_license[]" value="B">
                            <span class="lk__input-label">B</span>
                        </label>
                        <label class="lk__input-wrapper driver-item">
                            <input type="checkbox" name="driver_license[]" value="C">
                            <span class="lk__input-label">C</span>
                        </label>
                        <label class="lk__input-wrapper driver-item">
                            <input type="checkbox" name="driver_license[]" value="D">
                            <span class="lk__input-label">D</span>
                        </label>
                        <label class="lk__input-wrapper driver-item">
                            <input type="checkbox" name="driver_license[]" value="CE">
                            <span class="lk__input-label">CE</span>
                        </label>
                        <label class="lk__input-wrapper driver-item">
                            <input type="checkbox" name="driver_license[]" value="E">
                            <span class="lk__input-label">E</span>
                        </label>
                    </div>
                </div>
                <div class="constructor__inputs-set">
                    <span class="subcaption">Особая отметка</span>
                    <div class="constructor__inputs-list grid-list">
                        <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="special_marker[]" value="invalid">
                                <span class="checkbox__label">Подходит для соискателей с инвалидностью</span>
                            </label>
                        </div>
                        <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                            <label class="filter-group__checkbox checkbox">
                                <input class="checkbox__input" type="checkbox" name="special_marker[]" value="other">
                                <span class="checkbox__label">Другой параметр</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="constructor__forms-actions">
                    <button type="button" class="btn btn_light btn_size-m preview-btn" data-call-modal="show_vacancy-preview">Предпросмотр</button>
                    <div class="prev-back__actions">
                        <button type="button" class="btn btn_neutral prev-step btn_size-m" data-prev-step="2">Назад</button>
                        <button type="submit" class="btn btn_primary btn-next btn_size-m">Опубликовать</button>
                    </div>
                </div>
                <input type="hidden" name="step" value="2">
                <input type="hidden" name="form_action" value="save_step">
            </form>
        </div>
    </div>
</section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/template/footer.php"); ?>
