<? require($_SERVER["DOCUMENT_ROOT"] . "/template/header.php"); ?>
<section class="lk constructor">
    <div class="container">
        <!-- Шаги -->
        <div class="constructor__steps">
            <span class="progress-step active" data-step="1"></span>
            <span class="progress-step" data-step="2"></span>
            <span class="progress-step" data-step="3"></span>
            <span class="progress-step" data-step="4"></span>
            <span class="progress-step" data-step="5"></span>
            <span class="progress-step" data-step="6"></span>
        </div>
        <h1 class="constructor-title page-title lk__page-title">Выберите или укажите профессию</h1>
        <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/responces/responces-search.php"); ?>

        <!-- Шаг 1 -->
        <form id="step-form-profession" data-target-step="1" data-title="Выберите или укажите профессию"
            class="step-form active" method="post">
            <div class="constructor__inputs-list">
                <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                    <label class="custom-checkbox">
                        <input type="checkbox" name="profession" value="point1">
                        <span class="custom-checkbox__checkmark"></span>
                        <span class="custom-checkbox__text">
                            Пункт из списка
                        </span>
                    </label>
                </div>
                <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                    <label class="custom-checkbox">
                        <input type="checkbox" name="profession" value="point2">
                        <span class="custom-checkbox__checkmark"></span>
                        <span class="custom-checkbox__text">
                            Пункт из списка
                        </span>
                    </label>
                </div>
                <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                    <label class="custom-checkbox">
                        <input type="checkbox" name="profession" value="point3">
                        <span class="custom-checkbox__checkmark"></span>
                        <span class="custom-checkbox__text">
                            Пункт из списка
                        </span>
                    </label>
                </div>
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-next">Далее</button>
            </div>
            <input type="hidden" name="step" value="1">
            <input type="hidden" name="form_action" value="save_step">
        </form>

        <!-- Шаг 2 -->
        <form id="step-form-contact" data-target-step="2" data-title="Основная информация" class="step-form"
            method="post">
            <div class="constructor__inputs-set">
                <span class="subcaption">ФИО</span>
                <div class="constructor__inputs-list">
                    <div class="lk__input-wrapper">
                        <input type="text" value="" name="secondName" placeholder="Фамилия">
                    </div>
                    <div class="lk__input-wrapper">
                        <input type="text" value="" name="name" placeholder="Имя">
                    </div>
                    <div class="lk__input-wrapper">
                        <input type="text" value="" name="patronymic" placeholder="Отчество">
                    </div>
                </div>
            </div>
            <div class="constructor__inputs-set">
                <span class="subcaption">Пол</span>
                <div class="lk__radio-buttons">
                    <label class="lk__input-wrapper">
                        <input type="radio" name="gender" value="male">
                        <span class="lk__input-label">Мужской</span>
                    </label>
                    <label class="lk__input-wrapper">
                        <input type="radio" name="gender" value="female">
                        <span class="lk__input-label">Женский</span>
                    </label>
                </div>
            </div>
            <div class="constructor__inputs-set">
                <span class="subcaption">Дата рождения</span>
                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/date-fields.php"); ?>
            </div>
            <div class="constructor__inputs-set">
                <span class="subcaption">Гражданство</span>
                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/country-field.php"); ?>
            </div>
            <div class="constructor__inputs-set">
                <span class="subcaption">Контактная информация</span>
                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/contact-fields.php"); ?>
            </div>
            <div class="form-actions">
                <button type="button" class="btn btn-secondary prev-step">Назад</button>
                <button type="submit" class="btn btn-primary btn-next">Далее</button>
            </div>
            <input type="hidden" name="step" value="2">
            <input type="hidden" name="form_action" value="save_step">
        </form>

        <!-- Шаг 3 -->
        <form id="step-form-education" data-target-step="3" data-title="Образование" class="step-form" method="post">
            <div class="constructor__inputs-set">
                <div class="constructor__inputs-block">
                    <span class="subcaption">Основное образование</span>
                    <div class="lk__input-wrapper constructor__inputs-block__field">
                        <div class="lk__custom-select">
                            <input type="hidden" id="education" value="" name="">
                            <div class="lk__custom-select-choise">Уровень образования</div>
                        </div>
                        <div class="lk__custom-select-list">
                            <div class="lk__custom-select-list-container">
                                <div class="lk__custom-select-item active">Высшее</div>
                                <div class="lk__custom-select-item">Средне-специальное</div>
                                <div class="lk__custom-select-item">Среднее</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="constructor__inputs-block grid-2-columns">
                    <div class="lk__input-wrapper">
                        <input type="text" value="" placeholder="Название учебного заведения">
                    </div>
                    <div class="lk__input-wrapper">
                        <input type="text" value="" placeholder="Специальность">
                    </div>
                </div>
                <div class="constructor__inputs-block">
                    <div class="grid-2-columns">
                        <div class="grid-2-columns">
                            <div class="grid-2-columns__with-title">
                                <span>Начало</span>
                                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                            </div>
                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                        </div>
                        <div class="grid-2-columns">
                            <div class="grid-2-columns__with-title">
                                <span>Окончание</span>
                                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                            </div>
                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                        </div>
                    </div>
                    <p>Если ещё учитесь, укажите год предполагаемого окончания</p>
                </div>
                <button data-call-modal="add__contacts" class="contact-add btn btn_light btn_size-xl lk__btn_has-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_7081_644)">
                            <path
                                d="M10.7529 9.25098H15.2529V10.751H10.7529V15.251H9.25293V10.751H4.75293V9.25098H9.25293V4.75098H10.7529V9.25098Z"
                                fill="#FC7827"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_7081_644">
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <span>Добавить</span>
                </button>
            </div>
            <div class="constructor__inputs-set">
                <div class="constructor__inputs-block">
                    <span class="subcaption">Повышение квалификации</span>
                </div>
                <div class="constructor__inputs-block grid-2-columns">
                    <div class="lk__input-wrapper">
                        <input type="text" value="" placeholder="Название курса">
                    </div>
                    <div class="lk__input-wrapper">
                        <input type="text" value="" placeholder="Специальность">
                    </div>
                </div>
                <div class="constructor__inputs-block">
                    <div class="grid-2-columns">
                        <div class="grid-2-columns">
                            <div class="grid-2-columns__with-title">
                                <span>Начало</span>
                                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                            </div>
                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                        </div>
                        <div class="grid-2-columns">
                            <div class="grid-2-columns__with-title">
                                <span>Окончание</span>
                                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                            </div>
                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                        </div>
                    </div>
                </div>
                <button data-call-modal="add__contacts" class="contact-add btn btn_light btn_size-xl lk__btn_has-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_7081_644)">
                            <path
                                d="M10.7529 9.25098H15.2529V10.751H10.7529V15.251H9.25293V10.751H4.75293V9.25098H9.25293V4.75098H10.7529V9.25098Z"
                                fill="#FC7827"></path>
                        </g>
                        <defs>
                            <clipPath id="clip0_7081_644">
                                <rect width="20" height="20" fill="white"></rect>
                            </clipPath>
                        </defs>
                    </svg>
                    <span>Добавить</span>
                </button>
            </div>
            <div class="form-actions">
                <button type="button" class="btn btn-secondary prev-step">Назад</button>
                <button type="submit" class="btn btn-primary btn-next">Далее</button>
            </div>
            <input type="hidden" name="step" value="3">
            <input type="hidden" name="form_action" value="save_step">
        </form>

        <!-- Шаг 4 -->
        <form id="step-form-skills" data-target-step="4" data-title="Навыки" class="step-form" method="post">
            <div class="constructor__skills">
                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/search.php"); ?>
                <input type="hidden" name="skills" id="skills">
                <div class="constructor__bubbles-list bright-bubbles">
                    <div class="constructor__bubbles-item">
                        <span>Коммуникабельность</span>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4827_39596)">
                                <path
                                    d="M8.86426 3.77246L6.63672 6L8.86426 8.22754L8.22754 8.86426L6.00098 6.63672L3.77344 8.86426L3.13672 8.22754L5.36426 6L3.13672 3.77246L3.77344 3.13672L6.00098 5.36328L8.22754 3.13672L8.86426 3.77246Z"
                                    fill="#232323" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4827_39596">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <div class="constructor__bubbles-item">
                        <span>Выявление потребностей</span>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4827_39596)">
                                <path
                                    d="M8.86426 3.77246L6.63672 6L8.86426 8.22754L8.22754 8.86426L6.00098 6.63672L3.77344 8.86426L3.13672 8.22754L5.36426 6L3.13672 3.77246L3.77344 3.13672L6.00098 5.36328L8.22754 3.13672L8.86426 3.77246Z"
                                    fill="#232323" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4827_39596">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <div class="constructor__bubbles-item">
                        <span>Уравновешенность</span>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4827_39596)">
                                <path
                                    d="M8.86426 3.77246L6.63672 6L8.86426 8.22754L8.22754 8.86426L6.00098 6.63672L3.77344 8.86426L3.13672 8.22754L5.36426 6L3.13672 3.77246L3.77344 3.13672L6.00098 5.36328L8.22754 3.13672L8.86426 3.77246Z"
                                    fill="#232323" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4827_39596">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <div class="constructor__bubbles-item">
                        <span>Консультирование клиентов</span>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4827_39596)">
                                <path
                                    d="M8.86426 3.77246L6.63672 6L8.86426 8.22754L8.22754 8.86426L6.00098 6.63672L3.77344 8.86426L3.13672 8.22754L5.36426 6L3.13672 3.77246L3.77344 3.13672L6.00098 5.36328L8.22754 3.13672L8.86426 3.77246Z"
                                    fill="#232323" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4827_39596">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <div class="constructor__bubbles-item">
                        <span>Составление договоров</span>
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4827_39596)">
                                <path
                                    d="M8.86426 3.77246L6.63672 6L8.86426 8.22754L8.22754 8.86426L6.00098 6.63672L3.77344 8.86426L3.13672 8.22754L5.36426 6L3.13672 3.77246L3.77344 3.13672L6.00098 5.36328L8.22754 3.13672L8.86426 3.77246Z"
                                    fill="#232323" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4827_39596">
                                    <rect width="12" height="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                </div>
                <div class="constructor__bubbles-list gray-bubbles">
                    <div class="constructor__bubbles-item">Коммуникабельность</div>
                    <div class="constructor__bubbles-item">Выявление потребностей</div>
                    <div class="constructor__bubbles-item">Уравновешенность</div>
                    <div class="constructor__bubbles-item">Консультирование клиентов</div>
                    <div class="constructor__bubbles-item">Составление договоров</div>
                    <div class="constructor__bubbles-item">Пассивные продажи</div>
                    <div class="constructor__bubbles-item">Аудит компании</div>
                    <div class="constructor__bubbles-item">Анализ целевой аудитории</div>
                    <div class="constructor__bubbles-item">Наставничество</div>
                    <div class="constructor__bubbles-item">Планирование продаж</div>
                </div>
            </div>
            <div class="form-actions">
                <button type="button" class="btn btn-secondary prev-step">Назад</button>
                <button type="submit" class="btn btn-primary btn-next">Далее</button>
            </div>
            <input type="hidden" name="step" value="4">
            <input type="hidden" name="form_action" value="save_step">
        </form>

        <!-- Шаг 5 -->
        <form id="step-form-experience" data-target-step="5" data-title="Опыт работы" class="step-form" method="post">
            <div class="constructor__inputs-set">
                <div class="constructor__inputs-block grid-2-columns">
                    <div class="lk__input-wrapper">
                        <input type="text" value="" placeholder="Название учебного заведения">
                    </div>
                    <div class="lk__input-wrapper">
                        <input type="text" value="" placeholder="Специальность">
                    </div>
                </div>
                <div class="constructor__inputs-block">
                    <div class="grid-2-columns">
                        <div class="grid-2-columns">
                            <div class="grid-2-columns__with-title">
                                <span>Начало</span>
                                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                            </div>
                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                        </div>
                        <div class="grid-2-columns">
                            <div class="grid-2-columns__with-title">
                                <span>Окончание</span>
                                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                            </div>
                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                        </div>
                    </div>
                    <label class="custom-checkbox">
                        <input type="checkbox" name="profession" value="point1">
                        <span class="custom-checkbox__checkmark"></span>
                        <span class="custom-checkbox__text">
                            Работаю по настоящее время
                        </span>
                    </label>
                </div>
            </div>
            <div class="constructor__inputs-set">
                <span class="subcaption">Основные обязанности</span>
                <div class="lk__input-wrapper">
                    <textarea name="descr" id="" placeholder="Описание работы"></textarea>
                </div>
                <div class="constructor__hints-wrapper">
                    <div class="lk__input-wrapper hint">
                        Подсказки для описания, которые наиболее соответствуют общему описанию указанной должности. При
                        клике появляются текстом в поле описания.
                    </div>
                    <div class="lk__input-wrapper hint">
                        Подсказки для описания, которые наиболее соответствуют общему описанию указанной должности. При
                        клике появляются текстом в поле описания.
                    </div>
                    <div class="lk__input-wrapper hint">
                        Подсказки для описания, которые наиболее соответствуют общему описанию указанной должности. При
                        клике появляются текстом в поле описания.
                    </div>
                </div>
            </div>
            <button data-call-modal="add__contacts" class="contact-add btn btn_light btn_size-xl lk__btn_has-icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_7081_644)">
                        <path
                            d="M10.7529 9.25098H15.2529V10.751H10.7529V15.251H9.25293V10.751H4.75293V9.25098H9.25293V4.75098H10.7529V9.25098Z"
                            fill="#FC7827"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_7081_644">
                            <rect width="20" height="20" fill="white"></rect>
                        </clipPath>
                    </defs>
                </svg>
                <span>Добавить место работы</span>
            </button>
            <div class="form-actions">
                <button type="button" class="btn btn-secondary prev-step">Назад</button>
                <button type="submit" class="btn btn-primary btn-next">Далее</button>
            </div>
            <input type="hidden" name="step" value="5">
            <input type="hidden" name="form_action" value="save_step">
        </form>
    </div>
</section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/template/footer.php"); ?>