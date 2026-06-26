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
        <div class="constructor__form-helper active" data-block="1">
            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/search.php"); ?>
        </div>

        <div class="constructor__forms">
            <!-- Шаг 1 -->
            <form class="active grid-list step-form" id="step-form-profession" data-form="1"
                data-title="Выберите или укажите профессию" method="post">
                <div class="constructor__inputs-list grid-list">
                    <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                        <label class="filter-group__checkbox checkbox">
                            <input class="checkbox__input" type="checkbox" name="profession" value="1">
                            <span class="checkbox__label">Пункт из списка</span>
                        </label>
                    </div>
                    <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                        <label class="filter-group__checkbox checkbox">
                            <input class="checkbox__input" type="checkbox" name="profession" value="1">
                            <span class="checkbox__label">Пункт из списка</span>
                        </label>
                    </div>
                    <div class="constructor__inputs-checkbox lk-bubble tight-bubble bright-bubble">
                        <label class="filter-group__checkbox checkbox">
                            <input class="checkbox__input" type="checkbox" name="profession" value="1">
                            <span class="checkbox__label">Пункт из списка</span>
                        </label>
                    </div>
                </div>
                <div class="constructor__forms-actions">
                    <button type="button" disabled class="btn btn_light btn_size-m preview-btn" data-call-modal="resume-page">Предпросмотр</button>
                    <div class="prev-back__actions">
                        <button type="button" disabled class="btn btn_neutral prev-step btn_size-m">Назад</button>
                        <button type="submit" class="btn btn_primary btn-next btn_size-m" data-next-step="2">Далее</button>
                    </div>
                </div>
                <input type="hidden" name="step" value="1">
                <input type="hidden" name="form_action" value="save_step">
            </form>

            <!-- Шаг 2 -->
            <form class="grid-list step-form constructor__contact-form" id="step-form-contact" data-form="2" data-title="Основная информация" method="post">
                <div class="constructor__inputs-set">
                    <span class="subcaption">ФИО</span>
                    <div class="constructor__inputs-list grid-list grid-3-columns">
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
                    <div class="lk__radio-buttons gender-select">
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="gender" value="male" checked="">
                            <span class="radio__label">Мужской</span>
                        </label>
                        <label class="lk__input-radio radio">
                            <input class="radio__input" type="radio" name="gender" value="female">
                            <span class="radio__label">Женский</span>
                        </label>
                    </div>
                </div>
                <div class="constructor__inputs-set constructor-select big-select">
                    <span class="subcaption">Дата рождения</span>
                    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/date-fields.php"); ?>
                </div>
                <div class="constructor__inputs-set constructor-select">
                    <span class="subcaption">Гражданство</span>
                    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/country-field.php"); ?>
                </div>
                <div class="constructor__inputs-set">
                    <span class="subcaption">Контактная информация</span>
                    <div class="grid-bubbles grid-list personal-bubbles">
                        <div class="lk-bubble input-edit-form tight-bubble with-icon bright-bubble">
                            <div class="lk-bubble__content">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g >
                                        <path
                                            d="M10.7002 5.20117C10.849 5.20102 10.9931 5.25665 11.1035 5.35645C11.2138 5.45616 11.2829 5.59331 11.2979 5.74121C11.3255 6.01721 11.351 6.2375 11.375 6.4043C11.6135 8.06842 12.1019 9.68703 12.8242 11.2051C12.9382 11.445 12.8643 11.7321 12.6484 11.8857L10.0586 13.7363C11.642 17.4255 14.5823 20.365 18.2715 21.9482L20.1191 19.3643C20.1947 19.2587 20.305 19.1821 20.4307 19.1494C20.5563 19.1168 20.6893 19.1301 20.8066 19.1855C22.3245 19.9065 23.9429 20.3934 25.6064 20.6309C25.7732 20.6549 25.9931 20.6816 26.2666 20.708C26.4145 20.7232 26.5518 20.7929 26.6514 20.9033C26.7508 21.0137 26.8058 21.1571 26.8057 21.3057H26.8047V25.5488C26.8048 25.8525 26.6894 26.145 26.4824 26.3672C26.2753 26.5894 25.9915 26.7248 25.6885 26.7461C25.1641 26.7821 24.7355 26.8018 24.4043 26.8018C13.8 26.8017 5.20414 18.2059 5.2041 7.60156C5.2041 7.27036 5.22257 6.84178 5.25977 6.31738C5.28106 6.01436 5.41644 5.73053 5.63867 5.52344C5.86088 5.31643 6.15334 5.20108 6.45703 5.20117H10.7002Z"
                                            fill="#FC7827" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_7081_845">
                                            <rect width="32" height="32" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="lk-bubble__text-wrapper">
                                    <span>Телефон</span>
                                    <p>88888888888</p>
                                    <input type="tel" data-mask="tel" value="" class="lk-bubble__hidden-input">
                                </div>
                            </div>
                            <div class="lk-bubble__buttons-wrapper">
                                <button class="btn--edit btn">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g >
                                            <path
                                                d="M20.1035 21.001H3.9043V19.2012H20.1035V21.001ZM14.832 3.02734C15.0706 3.02743 15.2991 3.12237 15.4678 3.29102L18.0137 5.83691C18.1824 6.00569 18.2773 6.23499 18.2773 6.47363C18.2772 6.71212 18.1823 6.94071 18.0137 7.10938L7.72266 17.4014H3.9043V13.582L14.1953 3.29102C14.3641 3.12229 14.5934 3.02734 14.832 3.02734ZM5.7041 14.3281V15.6006H6.97656L16.1045 6.47363L14.832 5.2002L5.7041 14.3281Z"
                                                fill="#999999" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7002_2334">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <button type="submit" name="action" value="delete"
                                    class="contact--submit btn btn--delete">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g >
                                            <path
                                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                                fill="#999999" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7002_2339">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <button type="submit" name="action" value="save" class="contact--submit btn--ok btn">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 0.5H12C16.1421 0.5 19.5 3.85786 19.5 8V12C19.5 16.1421 16.1421 19.5 12 19.5H8C3.85786 19.5 0.5 16.1421 0.5 12V8C0.5 3.85786 3.85786 0.5 8 0.5Z"
                                            fill="#FC7827" />
                                        <path
                                            d="M8 0.5H12C16.1421 0.5 19.5 3.85786 19.5 8V12C19.5 16.1421 16.1421 19.5 12 19.5H8C3.85786 19.5 0.5 16.1421 0.5 12V8C0.5 3.85786 3.85786 0.5 8 0.5Z"
                                            stroke="#FC7827" />
                                        <path
                                            d="M8.10397 12.2539L14.6808 6.21381C14.836 6.07127 15.017 6 15.224 6C15.4309 6 15.612 6.07127 15.7672 6.21381C15.9224 6.35635 16 6.52573 16 6.72196C16 6.91819 15.9224 7.08733 15.7672 7.2294L8.64718 13.7862C8.49198 13.9287 8.31091 14 8.10397 14C7.89703 14 7.71596 13.9287 7.56075 13.7862L4.22385 10.7216C4.06865 10.5791 3.99415 10.4099 4.00036 10.2142C4.00657 10.0184 4.08753 9.84903 4.24325 9.70601C4.39898 9.563 4.58341 9.49173 4.79656 9.4922C5.00971 9.49268 5.19388 9.56395 5.34909 9.70601L8.10397 12.2539Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="lk-bubble input-edit-form tight-bubble with-icon bright-bubble">
                            <div class="lk-bubble__content">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20.1035 4.50098C20.3422 4.50098 20.5715 4.59587 20.7402 4.76465C20.909 4.93343 21.0039 5.16267 21.0039 5.40137V18.6006C21.0039 18.8393 20.909 19.0685 20.7402 19.2373C20.5715 19.4061 20.3422 19.501 20.1035 19.501H3.9043C3.6656 19.501 3.43636 19.4061 3.26758 19.2373C3.0988 19.0685 3.00391 18.8393 3.00391 18.6006V5.40137C3.00391 5.16267 3.0988 4.93343 3.26758 4.76465C3.43636 4.59587 3.6656 4.50098 3.9043 4.50098H20.1035ZM4.80371 17.7012H19.2041V8.31543L12.0684 14.7051L4.80371 8.29492V17.7012ZM12.0586 12.2969L18.7559 6.30078H5.26367L12.0586 12.2969Z"
                                        fill="#FC7827" />
                                </svg>
                                <div class="lk-bubble__text-wrapper">
                                    <span>Почта</span>
                                    <p>ivanov@mail.ru</p>
                                    <input type="text" data-mask="email" value="" class="lk-bubble__hidden-input">
                                </div>
                            </div>
                            <div class="lk-bubble__buttons-wrapper">
                                <button class="btn--edit btn">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g >
                                            <path
                                                d="M20.1035 21.001H3.9043V19.2012H20.1035V21.001ZM14.832 3.02734C15.0706 3.02743 15.2991 3.12237 15.4678 3.29102L18.0137 5.83691C18.1824 6.00569 18.2773 6.23499 18.2773 6.47363C18.2772 6.71212 18.1823 6.94071 18.0137 7.10938L7.72266 17.4014H3.9043V13.582L14.1953 3.29102C14.3641 3.12229 14.5934 3.02734 14.832 3.02734ZM5.7041 14.3281V15.6006H6.97656L16.1045 6.47363L14.832 5.2002L5.7041 14.3281Z"
                                                fill="#999999" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7002_2334">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <button type="submit" name="action" value="delete"
                                    class="contact--submit btn btn--delete">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g >
                                            <path
                                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                                fill="#999999" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7002_2339">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <button type="submit" name="action" value="save" class="contact--submit btn--ok btn">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 0.5H12C16.1421 0.5 19.5 3.85786 19.5 8V12C19.5 16.1421 16.1421 19.5 12 19.5H8C3.85786 19.5 0.5 16.1421 0.5 12V8C0.5 3.85786 3.85786 0.5 8 0.5Z"
                                            fill="#FC7827" />
                                        <path
                                            d="M8 0.5H12C16.1421 0.5 19.5 3.85786 19.5 8V12C19.5 16.1421 16.1421 19.5 12 19.5H8C3.85786 19.5 0.5 16.1421 0.5 12V8C0.5 3.85786 3.85786 0.5 8 0.5Z"
                                            stroke="#FC7827" />
                                        <path
                                            d="M8.10397 12.2539L14.6808 6.21381C14.836 6.07127 15.017 6 15.224 6C15.4309 6 15.612 6.07127 15.7672 6.21381C15.9224 6.35635 16 6.52573 16 6.72196C16 6.91819 15.9224 7.08733 15.7672 7.2294L8.64718 13.7862C8.49198 13.9287 8.31091 14 8.10397 14C7.89703 14 7.71596 13.9287 7.56075 13.7862L4.22385 10.7216C4.06865 10.5791 3.99415 10.4099 4.00036 10.2142C4.00657 10.0184 4.08753 9.84903 4.24325 9.70601C4.39898 9.563 4.58341 9.49173 4.79656 9.4922C5.00971 9.49268 5.19388 9.56395 5.34909 9.70601L8.10397 12.2539Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="lk-bubble input-edit-form tight-bubble with-icon bright-bubble">
                            <div class="lk-bubble__content">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g >
                                        <path
                                            d="M18.6709 2.66821C22.4038 2.66821 24.2703 2.66848 25.6963 3.39478C26.9507 4.03393 27.9712 5.05442 28.6104 6.30884C29.3366 7.7348 29.3369 9.60128 29.3369 13.3342V18.6682C29.3369 22.4012 29.3366 24.2676 28.6104 25.6936C27.9712 26.948 26.9507 27.9685 25.6963 28.6077C24.2703 29.334 22.4038 29.3342 18.6709 29.3342H13.3369C9.60397 29.3342 7.73748 29.334 6.31152 28.6077C5.05711 27.9685 4.03662 26.948 3.39746 25.6936C2.67116 24.2676 2.6709 22.4012 2.6709 18.6682V13.3342C2.6709 9.60128 2.67116 7.7348 3.39746 6.30884C4.03662 5.05442 5.05711 4.03393 6.31152 3.39478C7.73748 2.66848 9.60397 2.66821 13.3369 2.66821H18.6709ZM7.1709 10.7795C7.31555 17.7125 10.7819 21.8791 16.8594 21.8792H17.2041V17.9124C18.2759 18.0469 19.2844 18.4952 20.1025 19.2004C20.9208 19.906 21.5129 20.8386 21.8037 21.8792H24.96C24.636 20.6812 24.0605 19.5652 23.2734 18.6057C22.4864 17.6464 21.5049 16.8646 20.3936 16.3127C21.3887 15.7085 22.2481 14.9049 22.9189 13.9534C23.5899 13.0014 24.0584 11.9203 24.293 10.7795H21.4258C20.8035 12.979 18.9593 14.979 17.2041 15.1682V10.7795H14.3369V18.469C12.5592 18.0244 10.315 15.8678 10.2148 10.7795H7.1709Z"
                                            fill="#FC7827" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_7081_631">
                                            <rect width="32" height="32" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="lk-bubble__text-wrapper">
                                    <span>Вконтакте</span>
                                    <p>id221396498</p>
                                    <input type="text" data-mask="soc" value="" class="lk-bubble__hidden-input">
                                </div>
                            </div>
                            <div class="lk-bubble__buttons-wrapper">
                                <button class="btn--edit btn">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g >
                                            <path
                                                d="M20.1035 21.001H3.9043V19.2012H20.1035V21.001ZM14.832 3.02734C15.0706 3.02743 15.2991 3.12237 15.4678 3.29102L18.0137 5.83691C18.1824 6.00569 18.2773 6.23499 18.2773 6.47363C18.2772 6.71212 18.1823 6.94071 18.0137 7.10938L7.72266 17.4014H3.9043V13.582L14.1953 3.29102C14.3641 3.12229 14.5934 3.02734 14.832 3.02734ZM5.7041 14.3281V15.6006H6.97656L16.1045 6.47363L14.832 5.2002L5.7041 14.3281Z"
                                                fill="#999999" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7002_2334">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <button type="submit" name="action" value="delete"
                                    class="contact--submit btn btn--delete">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g >
                                            <path
                                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                                fill="#999999" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7002_2339">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <button type="submit" name="action" value="save" class="contact--submit btn--ok btn">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 0.5H12C16.1421 0.5 19.5 3.85786 19.5 8V12C19.5 16.1421 16.1421 19.5 12 19.5H8C3.85786 19.5 0.5 16.1421 0.5 12V8C0.5 3.85786 3.85786 0.5 8 0.5Z"
                                            fill="#FC7827" />
                                        <path
                                            d="M8 0.5H12C16.1421 0.5 19.5 3.85786 19.5 8V12C19.5 16.1421 16.1421 19.5 12 19.5H8C3.85786 19.5 0.5 16.1421 0.5 12V8C0.5 3.85786 3.85786 0.5 8 0.5Z"
                                            stroke="#FC7827" />
                                        <path
                                            d="M8.10397 12.2539L14.6808 6.21381C14.836 6.07127 15.017 6 15.224 6C15.4309 6 15.612 6.07127 15.7672 6.21381C15.9224 6.35635 16 6.52573 16 6.72196C16 6.91819 15.9224 7.08733 15.7672 7.2294L8.64718 13.7862C8.49198 13.9287 8.31091 14 8.10397 14C7.89703 14 7.71596 13.9287 7.56075 13.7862L4.22385 10.7216C4.06865 10.5791 3.99415 10.4099 4.00036 10.2142C4.00657 10.0184 4.08753 9.84903 4.24325 9.70601C4.39898 9.563 4.58341 9.49173 4.79656 9.4922C5.00971 9.49268 5.19388 9.56395 5.34909 9.70601L8.10397 12.2539Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="lk-bubble input-edit-form tight-bubble with-icon bright-bubble">
                            <div class="lk-bubble__content">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g >
                                        <path
                                            d="M18.6709 2.66821C22.4038 2.66821 24.2703 2.66848 25.6963 3.39478C26.9507 4.03393 27.9712 5.05442 28.6104 6.30884C29.3366 7.7348 29.3369 9.60128 29.3369 13.3342V18.6682C29.3369 22.4012 29.3366 24.2676 28.6104 25.6936C27.9712 26.948 26.9507 27.9685 25.6963 28.6077C24.2703 29.334 22.4038 29.3342 18.6709 29.3342H13.3369C9.60397 29.3342 7.73748 29.334 6.31152 28.6077C5.05711 27.9685 4.03662 26.948 3.39746 25.6936C2.67116 24.2676 2.6709 22.4012 2.6709 18.6682V13.3342C2.6709 9.60128 2.67116 7.7348 3.39746 6.30884C4.03662 5.05442 5.05711 4.03393 6.31152 3.39478C7.73748 2.66848 9.60397 2.66821 13.3369 2.66821H18.6709ZM21.4844 10.7073C20.9777 10.7073 20.2172 10.9742 16.5107 12.5208C15.2174 13.0541 12.6304 14.1742 8.7373 15.8674C8.11107 16.1206 7.77697 16.36 7.75 16.5999C7.69667 17.0665 8.35056 17.2141 9.19043 17.4807C9.87011 17.7073 10.7768 17.9604 11.2568 17.9739C11.6833 17.9871 12.1632 17.7995 12.6963 17.4397C16.3363 14.9864 18.2042 13.7466 18.3242 13.72C18.4174 13.7066 18.5246 13.6808 18.6045 13.7473C18.634 13.7788 18.6554 13.818 18.667 13.8596C18.6783 13.901 18.68 13.9446 18.6709 13.9866C18.6042 14.2666 15.1912 17.3745 14.9912 17.5745C14.2313 18.3477 13.3771 18.8272 14.6963 19.6936C15.8296 20.4403 16.4976 20.9203 17.6709 21.6936C18.4174 22.1869 19.0041 22.7603 19.7773 22.6936C20.1239 22.6535 20.4969 22.3201 20.6836 21.3206C21.1236 18.9605 21.9904 13.8393 22.1904 11.7327C22.2036 11.5463 22.1772 11.3069 22.1904 11.2268C22.177 11.1203 22.1368 10.9739 22.0039 10.8674C21.8442 10.7343 21.5914 10.7074 21.4844 10.7073Z"
                                            fill="#FC7827" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_7081_1003">
                                            <rect width="32" height="32" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="lk-bubble__text-wrapper">
                                    <span>Телеграм</span>
                                    <p>@asdasdasd</p>
                                    <input type="text" data-mask="soc" value="" class="lk-bubble__hidden-input">
                                </div>
                            </div>
                            <div class="lk-bubble__buttons-wrapper">
                                <button class="btn--edit btn">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g >
                                            <path
                                                d="M20.1035 21.001H3.9043V19.2012H20.1035V21.001ZM14.832 3.02734C15.0706 3.02743 15.2991 3.12237 15.4678 3.29102L18.0137 5.83691C18.1824 6.00569 18.2773 6.23499 18.2773 6.47363C18.2772 6.71212 18.1823 6.94071 18.0137 7.10938L7.72266 17.4014H3.9043V13.582L14.1953 3.29102C14.3641 3.12229 14.5934 3.02734 14.832 3.02734ZM5.7041 14.3281V15.6006H6.97656L16.1045 6.47363L14.832 5.2002L5.7041 14.3281Z"
                                                fill="#999999" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7002_2334">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <button type="submit" name="action" value="delete"
                                    class="contact--submit btn btn--delete">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g >
                                            <path
                                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                                fill="#999999" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7002_2339">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <button type="submit" name="action" value="save" class="contact--submit btn--ok btn">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 0.5H12C16.1421 0.5 19.5 3.85786 19.5 8V12C19.5 16.1421 16.1421 19.5 12 19.5H8C3.85786 19.5 0.5 16.1421 0.5 12V8C0.5 3.85786 3.85786 0.5 8 0.5Z"
                                            fill="#FC7827" />
                                        <path
                                            d="M8 0.5H12C16.1421 0.5 19.5 3.85786 19.5 8V12C19.5 16.1421 16.1421 19.5 12 19.5H8C3.85786 19.5 0.5 16.1421 0.5 12V8C0.5 3.85786 3.85786 0.5 8 0.5Z"
                                            stroke="#FC7827" />
                                        <path
                                            d="M8.10397 12.2539L14.6808 6.21381C14.836 6.07127 15.017 6 15.224 6C15.4309 6 15.612 6.07127 15.7672 6.21381C15.9224 6.35635 16 6.52573 16 6.72196C16 6.91819 15.9224 7.08733 15.7672 7.2294L8.64718 13.7862C8.49198 13.9287 8.31091 14 8.10397 14C7.89703 14 7.71596 13.9287 7.56075 13.7862L4.22385 10.7216C4.06865 10.5791 3.99415 10.4099 4.00036 10.2142C4.00657 10.0184 4.08753 9.84903 4.24325 9.70601C4.39898 9.563 4.58341 9.49173 4.79656 9.4922C5.00971 9.49268 5.19388 9.56395 5.34909 9.70601L8.10397 12.2539Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="lk-bubble input-edit-form tight-bubble with-icon bright-bubble">
                            <div class="lk-bubble__content">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g >
                                        <path
                                            d="M22.6787 2.66919C26.3553 2.66934 29.3358 5.6498 29.3359 9.32642V22.676C29.3358 26.3526 26.3553 29.3331 22.6787 29.3333H9.3291C5.65249 29.3331 2.67203 26.3526 2.67188 22.676V9.32642C2.67203 5.6498 5.65249 2.66934 9.3291 2.66919H22.6787ZM16.1699 5.85571C10.5544 5.85571 5.81453 10.2007 5.81445 15.9768C5.81445 18.3953 6.2621 20.0649 6.65625 21.5637C6.98711 22.7801 7.2793 23.8946 7.2793 25.2131C7.42073 26.9695 10.6569 25.943 11.6787 24.6292C13.294 25.7968 14.2238 26.0891 16.2236 26.0891C21.7521 26.0594 26.2132 21.559 26.1943 16.0305C26.1943 10.4151 21.7902 5.85583 16.1699 5.85571ZM16.3057 10.8479V10.8528C19.1397 11.0151 21.3216 13.4177 21.2109 16.2542C21.0207 19.0847 18.5993 21.242 15.7656 21.1057C14.8786 21.0346 14.0261 20.7307 13.2939 20.2249C12.8512 20.6676 12.1407 21.242 11.8584 21.1741C11.2696 21.0184 10.5786 18.0259 10.9678 15.5686C11.4398 12.6004 13.571 10.7069 16.3057 10.8479Z"
                                            fill="#FC7827" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_7081_356">
                                            <rect width="32" height="32" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <div class="lk-bubble__text-wrapper">
                                    <span>МАХ</span>
                                    <p>88888888888</p>
                                    <input type="text" data-mask="soc" value="" class="lk-bubble__hidden-input">
                                </div>
                            </div>
                            <div class="lk-bubble__buttons-wrapper">
                                <button class="btn--edit btn">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g >
                                            <path
                                                d="M20.1035 21.001H3.9043V19.2012H20.1035V21.001ZM14.832 3.02734C15.0706 3.02743 15.2991 3.12237 15.4678 3.29102L18.0137 5.83691C18.1824 6.00569 18.2773 6.23499 18.2773 6.47363C18.2772 6.71212 18.1823 6.94071 18.0137 7.10938L7.72266 17.4014H3.9043V13.582L14.1953 3.29102C14.3641 3.12229 14.5934 3.02734 14.832 3.02734ZM5.7041 14.3281V15.6006H6.97656L16.1045 6.47363L14.832 5.2002L5.7041 14.3281Z"
                                                fill="#999999" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7002_2334">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <button type="submit" name="action" value="delete"
                                    class="contact--submit btn btn--delete">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g >
                                            <path
                                                d="M16.5039 4.80078H21.0039V6.60059H19.2041V20.1006C19.2041 20.3392 19.1092 20.5685 18.9404 20.7373C18.7716 20.9061 18.5424 21.001 18.3037 21.001H5.7041C5.46541 21.001 5.23617 20.9061 5.06738 20.7373C4.89866 20.5685 4.80371 20.3392 4.80371 20.1006V6.60059H3.00391V4.80078H7.50391V3.00098H16.5039V4.80078ZM6.60352 19.2012H17.4043V6.60059H6.60352V19.2012ZM11.1035 16.501H9.30371V9.30078H11.1035V16.501ZM14.7041 16.501H12.9043V9.30078H14.7041V16.501Z"
                                                fill="#999999" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_7002_2339">
                                                <rect width="24" height="24" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </button>
                                <button type="submit" name="action" value="save" class="contact--submit btn--ok btn">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 0.5H12C16.1421 0.5 19.5 3.85786 19.5 8V12C19.5 16.1421 16.1421 19.5 12 19.5H8C3.85786 19.5 0.5 16.1421 0.5 12V8C0.5 3.85786 3.85786 0.5 8 0.5Z"
                                            fill="#FC7827" />
                                        <path
                                            d="M8 0.5H12C16.1421 0.5 19.5 3.85786 19.5 8V12C19.5 16.1421 16.1421 19.5 12 19.5H8C3.85786 19.5 0.5 16.1421 0.5 12V8C0.5 3.85786 3.85786 0.5 8 0.5Z"
                                            stroke="#FC7827" />
                                        <path
                                            d="M8.10397 12.2539L14.6808 6.21381C14.836 6.07127 15.017 6 15.224 6C15.4309 6 15.612 6.07127 15.7672 6.21381C15.9224 6.35635 16 6.52573 16 6.72196C16 6.91819 15.9224 7.08733 15.7672 7.2294L8.64718 13.7862C8.49198 13.9287 8.31091 14 8.10397 14C7.89703 14 7.71596 13.9287 7.56075 13.7862L4.22385 10.7216C4.06865 10.5791 3.99415 10.4099 4.00036 10.2142C4.00657 10.0184 4.08753 9.84903 4.24325 9.70601C4.39898 9.563 4.58341 9.49173 4.79656 9.4922C5.00971 9.49268 5.19388 9.56395 5.34909 9.70601L8.10397 12.2539Z"
                                            fill="white" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <button data-call-modal="add__contacts"
                            class="contact-add btn btn_light btn_size-m lk__btn_has-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g >
                                    <path
                                        d="M10.7529 9.25098H15.2529V10.751H10.7529V15.251H9.25293V10.751H4.75293V9.25098H9.25293V4.75098H10.7529V9.25098Z"
                                        fill="#FC7827" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_7081_644">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <span>Добавить</span>
                        </button>
                    </div>
                </div>
                <div class="constructor__forms-actions">
                    <button type="button" class="btn btn_light btn_size-m preview-btn" data-call-modal="resume-page">Предпросмотр</button>
                    <div class="prev-back__actions">
                        <button type="button" class="btn btn_neutral prev-step btn_size-m" data-prev-step="1">Назад</button>
                        <button type="submit" class="btn btn_primary btn-next btn_size-m" data-next-step="3">Далее</button>
                    </div>
                </div>
                <input type="hidden" name="step" value="2">
                <input type="hidden" name="form_action" value="save_step">
            </form>

            <!-- Шаг 3 -->
            <form class="grid-list step-form" id="step-form-education" data-form="3" data-title="Образование"
                method="post">
                <div class="education-wrapper grid-list">
                    <?php if(isset($_GET['fill']) && $_GET['fill'] == 'Y'): ?>
                    <div class="institutions-list grid-list">
                        <label class="lk-bubble lk-bubble__education checkbox institutions-bubble big-bubble">
                            <input class="checkbox__input" type="checkbox" name="institution" value="1" checked>
                            <span class="checkbox__label"></span>
                            <div class="date">
                                <span>Среднее специальное</span>
                                <p>2009</p>
                            </div>
                            <div class="text">
                                <span>Сибирский государственный университет телекоммуникаций и информатики</span>
                                <p>Фундаментальная информатика и информационные технологии</p>
                            </div>
                        </label>
                        <label class="lk-bubble lk-bubble__education checkbox institutions-bubble big-bubble">
                            <input class="checkbox__input" type="checkbox" name="institution" value="2">
                            <span class="checkbox__label"></span>
                            <div class="date">
                                <span>Среднее специальное</span>
                                <p>2009</p>
                            </div>
                            <div class="text">
                                <span>Сибирский государственный университет телекоммуникаций и информатики</span>
                                <p>Фундаментальная информатика и информационные технологии</p>
                            </div>
                        </label>
                    </div>
                    <?php else: ?>

                    <div class="education-templates-wrapper grid-list template-wrapper">
                        <template id="education-base">
                            <div class="constructor__inputs-set grid-list">
                                <div class="constructor__inputs-group">
                                    <div class="constructor__inputs-block constructor-select">
                                        <span class="subcaption">Основное образование</span>
                                        <div class="select big-select" data-id="education">
                                            <label class="filter-group__input select__input input input_has-icon">
                                                <input class="input__field" type="text" name="education" data-id="education" readonly placeholder="Уровень образования">
                                                <div class="input__icon">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4736 8.97065C17.7665 8.67775 18.2412 8.67775 18.5341 8.97065C18.827 9.26354 18.827 9.73832 18.5341 10.0312L12.5341 16.0312C12.2595 16.3058 11.8248 16.3232 11.5302 16.083L11.4736 16.0312L5.47358 10.0312C5.18068 9.7383 5.18068 9.26354 5.47358 8.97065C5.76647 8.67775 6.24123 8.67775 6.53412 8.97065L12.0038 14.4404L17.4736 8.97065Z" fill="#232323" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_4687_14543">
                                                                <rect width="24" height="24" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </div>
                                            </label>

                                            <div class="select__dropdown">
                                                <ul class="select__dropdown-list" data-id="education">
                                                    <li class="select__option active" data-value="Высшее">Высшее</li>
                                                    <li class="select__option" data-value="Средне-специальное">Средне-специальное</li>
                                                    <li class="select__option" data-value="Среднее">Среднее</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-2-columns constructor__inputs-list grid-list">
                                        <div class="lk__input-wrapper">
                                            <input type="text" value="" placeholder="Название учебного заведения">
                                        </div>
                                        <div class="lk__input-wrapper">
                                            <input type="text" value="" placeholder="Специальность">
                                        </div>
                                    </div>
                                </div>
                                <div class="constructor-select">
                                    <div class="grid-2-columns constructor__inputs-set grid-list">
                                        <div class="grid-2-columns date-columns constructor__inputs-list grid-list">
                                            <div class="grid-2-columns__with-title">
                                                <span>Начало</span>
                                                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                                            </div>
                                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                                        </div>
                                        <div class="grid-2-columns date-columns constructor__inputs-list grid-list">
                                            <div class="grid-2-columns__with-title">
                                                <span>Окончание</span>
                                                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                                            </div>
                                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                                        </div>
                                    </div>
                                    <div class="lk__input-element">
                                        <p>Если ещё учитесь, укажите год предполагаемого окончания</p>
                                    </div>
                                </div>
                            </div>
                        </template>
                        
                        <div class="constructor__inputs-set grid-list">
                            <div class="constructor__inputs-group">
                                <div class="constructor__inputs-block constructor-select">
                                    <span class="subcaption">Основное образование</span>
                                    <div class="select big-select" data-id="education">
                                        <label class="filter-group__input select__input input input_has-icon">
                                            <input class="input__field" type="text" name="education" data-id="education" readonly placeholder="Уровень образования">
                                            <div class="input__icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4736 8.97065C17.7665 8.67775 18.2412 8.67775 18.5341 8.97065C18.827 9.26354 18.827 9.73832 18.5341 10.0312L12.5341 16.0312C12.2595 16.3058 11.8248 16.3232 11.5302 16.083L11.4736 16.0312L5.47358 10.0312C5.18068 9.7383 5.18068 9.26354 5.47358 8.97065C5.76647 8.67775 6.24123 8.67775 6.53412 8.97065L12.0038 14.4404L17.4736 8.97065Z" fill="#232323" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_4687_14543">
                                                            <rect width="24" height="24" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </label>

                                        <div class="select__dropdown">
                                            <ul class="select__dropdown-list" data-id="education">
                                                <li class="select__option active" data-value="Высшее">Высшее</li>
                                                <li class="select__option" data-value="Средне-специальное">Средне-специальное</li>
                                                <li class="select__option" data-value="Среднее">Среднее</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-2-columns constructor__inputs-list grid-list">
                                    <div class="lk__input-wrapper">
                                        <input type="text" value="" placeholder="Название учебного заведения">
                                    </div>
                                    <div class="lk__input-wrapper">
                                        <input type="text" value="" placeholder="Специальность">
                                    </div>
                                </div>
                            </div>
                            <div class="constructor-select">
                                <div class="grid-2-columns constructor__inputs-set grid-list">
                                    <div class="grid-2-columns date-columns constructor__inputs-list grid-list">
                                        <div class="grid-2-columns__with-title">
                                            <span>Начало</span>
                                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                                        </div>
                                        <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                                    </div>
                                    <div class="grid-2-columns date-columns constructor__inputs-list grid-list">
                                        <div class="grid-2-columns__with-title">
                                            <span>Окончание</span>
                                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                                        </div>
                                        <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                                    </div>
                                </div>
                                <div class="lk__input-element">
                                    <p>Если ещё учитесь, укажите год предполагаемого окончания</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <button data-add-block="education-base"
                        class="education-add btn btn_light btn_size-m lk__btn_has-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g >
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

                    <?php endif; ?>
                </div>

                <div class="education-wrapper grid-list">
                    <div class="education-templates-wrapper grid-list template-wrapper">
                        <template id="education-dop">
                            <div class="constructor__inputs-set grid-list">
                                <div class="constructor__inputs-block">
                                    <span class="subcaption">Повышение квалификации</span>
                                    <div class="constructor__inputs-list grid-2-columns grid-list">
                                        <div class="lk__input-wrapper">
                                            <input type="text" value="" placeholder="Название курса">
                                        </div>
                                        <div class="lk__input-wrapper">
                                            <input type="text" value="" placeholder="Специальность">
                                        </div>
                                    </div>
                                </div>
                                <div class="constructor-select">
                                    <div class="grid-2-columns constructor__inputs-set grid-list">
                                        <div class="grid-2-columns date-columns constructor__inputs-list grid-list">
                                            <div class="grid-2-columns__with-title">
                                                <span>Начало</span>
                                                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                                            </div>
                                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                                        </div>
                                        <div class="grid-2-columns date-columns constructor__inputs-list grid-list">
                                            <div class="grid-2-columns__with-title">
                                                <span>Окончание</span>
                                                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                                            </div>
                                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                                        </div>
                                    </div>
                                    <div class="lk__input-element">
                                        <p>Если ещё учитесь, укажите год предполагаемого окончания</p>
                                    </div>
                                </div>
                            </div>
                        </template>
                        <div class="constructor__inputs-set grid-list">
                            <div class="constructor__inputs-block">
                                <span class="subcaption">Повышение квалификации</span>
                                <div class="constructor__inputs-list grid-list grid-2-columns">
                                    <div class="lk__input-wrapper">
                                        <input type="text" value="" placeholder="Название курса">
                                    </div>
                                    <div class="lk__input-wrapper">
                                        <input type="text" value="" placeholder="Специальность">
                                    </div>
                                </div>
                            </div>
                            <div class="constructor-select">
                                <div class="grid-2-columns constructor__inputs-set grid-list">
                                    <div class="grid-2-columns date-columns constructor__inputs-list grid-list">
                                        <div class="grid-2-columns__with-title">
                                            <span>Начало</span>
                                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                                        </div>
                                        <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                                    </div>
                                    <div class="grid-2-columns date-columns constructor__inputs-list grid-list">
                                        <div class="grid-2-columns__with-title">
                                            <span>Окончание</span>
                                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                                        </div>
                                        <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                                    </div>
                                </div>
                                <div class="lk__input-element">
                                    <p>Если ещё учитесь, укажите год предполагаемого окончания</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <button data-add-block="education-dop"
                        class="education-add btn btn_light btn_size-m lk__btn_has-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g >
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

                <div class="constructor__forms-actions">
                    <button type="button" class="btn btn_light btn_size-m preview-btn" data-call-modal="resume-page">Предпросмотр</button>
                    <div class="prev-back__actions">
                        <button type="button" class="btn btn_neutral prev-step btn_size-m" data-prev-step="2">Назад</button>
                        <button type="submit" class="btn btn_primary btn-next btn_size-m" data-next-step="4">Далее</button>
                    </div>
                </div>
                <input type="hidden" name="step" value="3">
                <input type="hidden" name="form_action" value="save_step">
            </form>

            <!-- Шаг 4 -->
            <div class="grid-list step-form skills-block" data-form="4" data-title="Навыки">
                <div class="constructor__bubbles-list bright-bubbles">
                    <div class="constructor__bubbles-item remove-skill">
                        <span>Коммуникабельность</span>
                        <button class="btn transp-btn">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g >
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
                        </button>
                    </div>
                    <div class="constructor__bubbles-item remove-skill">
                        <span>Выявление потребностей</span>
                        <button class="btn transp-btn"><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g >
                                    <path
                                        d="M8.86426 3.77246L6.63672 6L8.86426 8.22754L8.22754 8.86426L6.00098 6.63672L3.77344 8.86426L3.13672 8.22754L5.36426 6L3.13672 3.77246L3.77344 3.13672L6.00098 5.36328L8.22754 3.13672L8.86426 3.77246Z"
                                        fill="#232323" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_4827_39596">
                                        <rect width="12" height="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></button>

                    </div>
                    <div class="constructor__bubbles-item remove-skill">
                        <span>Уравновешенность</span>
                        <button class="btn transp-btn"><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g >
                                    <path
                                        d="M8.86426 3.77246L6.63672 6L8.86426 8.22754L8.22754 8.86426L6.00098 6.63672L3.77344 8.86426L3.13672 8.22754L5.36426 6L3.13672 3.77246L3.77344 3.13672L6.00098 5.36328L8.22754 3.13672L8.86426 3.77246Z"
                                        fill="#232323" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_4827_39596">
                                        <rect width="12" height="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></button>

                    </div>
                    <div class="constructor__bubbles-item remove-skill">
                        <span>Консультирование клиентов</span>
                        <button class="btn transp-btn"><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g >
                                    <path
                                        d="M8.86426 3.77246L6.63672 6L8.86426 8.22754L8.22754 8.86426L6.00098 6.63672L3.77344 8.86426L3.13672 8.22754L5.36426 6L3.13672 3.77246L3.77344 3.13672L6.00098 5.36328L8.22754 3.13672L8.86426 3.77246Z"
                                        fill="#232323" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_4827_39596">
                                        <rect width="12" height="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></button>

                    </div>
                    <div class="constructor__bubbles-item remove-skill">
                        <span>Составление договоров</span>
                        <button class="btn transp-btn"><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g >
                                    <path
                                        d="M8.86426 3.77246L6.63672 6L8.86426 8.22754L8.22754 8.86426L6.00098 6.63672L3.77344 8.86426L3.13672 8.22754L5.36426 6L3.13672 3.77246L3.77344 3.13672L6.00098 5.36328L8.22754 3.13672L8.86426 3.77246Z"
                                        fill="#232323" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_4827_39596">
                                        <rect width="12" height="12" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg></button>

                    </div>
                </div>
                <div class="constructor__form-helper skills-search" data-block="4">
                    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/search.php"); ?>
                </div>
                <form class="grid-list" id="step-form-skills" method="post">
                    <div class="constructor__skills top-skills grid-list">
                        <input type="hidden" name="skills" id="skills">
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
                    <div class="constructor__forms-actions">
                        <button type="button" class="btn btn_light btn_size-m preview-btn" data-call-modal="resume-page">Предпросмотр</button>
                        <div class="prev-back__actions">
                            <button type="button" class="btn btn_neutral prev-step btn_size-m" data-prev-step="3">Назад</button>
                            <button type="submit" class="btn btn_primary btn-next btn_size-m" data-next-step="5">Далее</button>
                        </div>
                    </div>
                    <input type="hidden" name="step" value="4">
                    <input type="hidden" name="form_action" value="save_step">
                </form>
            </div>

            <!-- Шаг 5 -->
            <form class="grid-list step-form" id="step-form-experience" data-form="5" data-title="Опыт работы"
                method="post">
                <div class="experience-wrapper grid-list template-wrapper">
                    <template id="company">
                        <div class="experience-block grid-list">
                            <div class="constructor__inputs-set grid-list">
                                <div class="constructor__inputs-list grid-list grid-2-columns">
                                    <div class="lk__input-wrapper">
                                        <input type="text" value="" placeholder="Компания">
                                    </div>
                                    <div class="lk__input-wrapper">
                                        <input type="text" value="" placeholder="Должность">
                                    </div>
                                </div>
                                <div class="constructor-select">
                                    <div class="grid-2-columns constructor__inputs-set grid-list">
                                        <div class="date-columns grid-2-columns constructor__inputs-list grid-list">
                                            <div class="grid-2-columns__with-title">
                                                <span>Начало</span>
                                                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                                            </div>
                                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                                        </div>
                                        <div class="date-columns grid-2-columns constructor__inputs-list grid-list">
                                            <div class="grid-2-columns__with-title">
                                                <span>Окончание</span>
                                                <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                                            </div>
                                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                                        </div>
                                        <label class="filter-group__checkbox checkbox">
                                            <input class="checkbox__input" type="checkbox" name="working" value="1">
                                            <span class="checkbox__label">Работаю по настоящее время</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="constructor__inputs-set grid-list duties">
                                <span class="subcaption">Основные обязанности</span>
                                <div class="constructor__textarea-wrapper textarea">
                                    <textarea name="descr" id="" placeholder="Описание работы"></textarea>
                                </div>
                                <div class="constructor__hints-wrapper swiper">
                                    <div class="swiper-wrapper">
                                        <div class="lk__input-wrapper hint swiper-slide">
                                            Подсказки для описания, которые наиболее соответствуют общему описанию указанной должности.
                                            При клике появляются текстом в поле описания.
                                        </div>
                                        <div class="lk__input-wrapper hint swiper-slide">
                                            Подсказки для описания, которые наиболее соответствуют общему описанию указанной должности.
                                            При клике появляются текстом в поле описания.
                                        </div>
                                        <div class="lk__input-wrapper hint swiper-slide">
                                            Подсказки для описания, которые наиболее соответствуют общему описанию указанной должности.
                                            При клике появляются текстом в поле описания.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                    <div class="experience-block grid-list">
                        <div class="constructor__inputs-set grid-list">
                            <div class="constructor__inputs-list grid-list grid-2-columns">
                                <div class="lk__input-wrapper">
                                    <input type="text" value="" placeholder="Компания">
                                </div>
                                <div class="lk__input-wrapper">
                                    <input type="text" value="" placeholder="Должность">
                                </div>
                            </div>
                            <div class="constructor-select">
                                <div class="grid-2-columns constructor__inputs-set grid-list">
                                    <div class="date-columns grid-2-columns constructor__inputs-list grid-list">
                                        <div class="grid-2-columns__with-title">
                                            <span>Начало</span>
                                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                                        </div>
                                        <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                                    </div>
                                    <div class="date-columns grid-2-columns constructor__inputs-list grid-list">
                                        <div class="grid-2-columns__with-title">
                                            <span>Окончание</span>
                                            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/month-field.php"); ?>
                                        </div>
                                        <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/fields/year-field.php"); ?>
                                    </div>
                                    <label class="filter-group__checkbox checkbox">
                                        <input class="checkbox__input" type="checkbox" name="working" value="1">
                                        <span class="checkbox__label">Работаю по настоящее время</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="constructor__inputs-set grid-list duties">
                            <span class="subcaption">Основные обязанности</span>
                            <div class="constructor__textarea-wrapper textarea">
                                <textarea name="descr" id="" placeholder="Описание работы"></textarea>
                            </div>
                            <div class="constructor__hints-wrapper swiper">
                                <div class="swiper-wrapper">
                                    <div class="lk__input-wrapper hint swiper-slide">
                                        Подсказки для описания, которые наиболее соответствуют общему описанию указанной должности.
                                        При клике появляются текстом в поле описания.
                                    </div>
                                    <div class="lk__input-wrapper hint swiper-slide">
                                        Подсказки для описания, которые наиболее соответствуют общему описанию указанной должности.
                                        При клике появляются текстом в поле описания.
                                    </div>
                                    <div class="lk__input-wrapper hint swiper-slide">
                                        Подсказки для описания, которые наиболее соответствуют общему описанию указанной должности.
                                        При клике появляются текстом в поле описания.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button data-add-block="company" class="contact-add btn btn_light btn_size-m lk__btn_has-icon">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g >
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
                <div class="constructor__forms-actions">
                    <button type="button" class="btn btn_light btn_size-m preview-btn" data-call-modal="resume-page">Предпросмотр</button>
                    <div class="prev-back__actions">
                        <button type="button" class="btn btn_neutral prev-step btn_size-m" data-prev-step="4">Назад</button>
                        <button type="submit" class="btn btn_primary btn-next btn_size-m" data-next-step="6">Далее</button>
                    </div>
                </div>
                <input type="hidden" name="step" value="5">
                <input type="hidden" name="form_action" value="save_step">
            </form>
            <form id="step-form-files" data-form="6" data-title="Портфолио и сертификаты" class="step-form"
                method="post" enctype="multipart/form-data">
                <div class="resume-file-inputs-wrapper grid-list">
                    <div class="construstor__inputs-files-block" data-files-type="portfolio">
                        <div class="constructor__inputs-title">
                            <span class="subcaption">Портфолио</span>
                            <p>Вы можете добавить фото или видео, отражающие вашу квалификацию</p>
                        </div>
                        <label class="constructor__files-input-wrapper">
                            <input type="file" name="portfolio[]" multiple accept="image/png, image/jpeg">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g >
                                    <path
                                        d="M20 7.08313C20.6902 7.08313 21.2498 7.64292 21.25 8.33313V18.7501H31.667C32.3572 18.7503 32.917 19.3099 32.917 20.0001C32.917 20.6904 32.3572 21.2499 31.667 21.2501H21.25V31.6671C21.2498 32.3573 20.6902 32.9171 20 32.9171C19.3098 32.9171 18.7502 32.3573 18.75 31.6671V21.2501H8.33301C7.6428 21.2499 7.08301 20.6904 7.08301 20.0001C7.08301 19.3099 7.6428 18.7503 8.33301 18.7501H18.75V8.33313C18.7502 7.64292 19.3098 7.08313 20 7.08313Z"
                                        fill="#FC7827" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_7542_2494">
                                        <rect width="40" height="40" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="constructor__files-input-text">
                                <div class="file-input-title">
                                    <span>Нажмите чтобы загрузить</span> или перетащите файлы
                                </div>
                                <p>Вы можете загрузить до 10 фото в формате PNG, JPG общим размером не более 10мб.</p>
                            </div>
                        </label>
                        <div class="constructor__files-result-wrapper"></div>
                        <div class="constructor__files-result-noties">
                            <div class="info"></div>
                            <div class="errors"></div>
                        </div>
                    </div>
                    <div class="construstor__inputs-files-block" data-files-type="certificates">
                        <div class="constructor__inputs-title">
                            <span class="subcaption">Сертификаты</span>
                            <p>Вы можете добавить фото или видео, отражающие вашу квалификацию</p>
                        </div>
                        <label class="constructor__files-input-wrapper">
                            <input type="file" name="certificates[]" multiple accept="image/png, image/jpeg">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g >
                                    <path
                                        d="M20 7.08313C20.6902 7.08313 21.2498 7.64292 21.25 8.33313V18.7501H31.667C32.3572 18.7503 32.917 19.3099 32.917 20.0001C32.917 20.6904 32.3572 21.2499 31.667 21.2501H21.25V31.6671C21.2498 32.3573 20.6902 32.9171 20 32.9171C19.3098 32.9171 18.7502 32.3573 18.75 31.6671V21.2501H8.33301C7.6428 21.2499 7.08301 20.6904 7.08301 20.0001C7.08301 19.3099 7.6428 18.7503 8.33301 18.7501H18.75V8.33313C18.7502 7.64292 19.3098 7.08313 20 7.08313Z"
                                        fill="#FC7827" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_7542_2494">
                                        <rect width="40" height="40" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <div class="constructor__files-input-text">
                                <div class="file-input-title">
                                    <span>Нажмите чтобы загрузить</span> или перетащите файлы
                                </div>
                                <p>Вы можете загрузить до 10 фото в формате PNG, JPG общим размером не более 10мб.</p>
                            </div>
                        </label>
                        <div class="constructor__files-result-wrapper"></div>
                        <div class="constructor__files-result-noties">
                            <div class="info"></div>
                            <div class="errors"></div>
                        </div>
                    </div>
                    <div class="constructor__forms-actions">
                        <button type="button" class="btn btn_light btn_size-m preview-btn" data-call-modal="resume-page">Предпросмотр</button>
                        <div class="prev-back__actions">
                            <button type="button" class="btn btn_neutral prev-step btn_size-m"
                                data-prev-step="5">Назад</button>
                            <button type="submit" class="btn btn_primary btn-next btn_size-m">Опубликовать</button>
                        </div>
                    </div>
                    <input type="hidden" name="step" value="5">
                    <input type="hidden" name="form_action" value="save_step">
                </div>
            </form>
        </div>
    </div>
</section>
<? require($_SERVER["DOCUMENT_ROOT"] . "/template/footer.php"); ?>
