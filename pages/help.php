<? require($_SERVER["DOCUMENT_ROOT"] . "/template/header.php"); ?>

<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item breadcrumbs__item_home">
                <a href="/" class="link">Главная</a>
                <span>/</span>
            </li>
            <li class="breadcrumbs__item current">
                <span>Помощь</span>
            </li>
        </ul>
    </div>
</div>

<section class="help">
    <div class="container">
        <h1 class="help__title">Помощь</h1>
        <div class="catalog-nav">
            <form class="catalog-nav__form inline-form">
                <div class="inline-form__row">
                    <div class="inline-form__input-wrapper">
                        <label class="inline-form__label field">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_4466_3472)">
                                    <path d="M11.1035 3.00098C15.5746 3.00098 19.2039 6.62957 19.2041 11.1006C19.2067 12.9384 18.5811 14.7223 17.4316 16.1562L21.2861 20.0098L20.0127 21.2832L16.1592 17.4287C14.7252 18.5782 12.9413 19.2038 11.1035 19.2012C6.6325 19.201 3.00391 15.5717 3.00391 11.1006C3.00412 6.6297 6.63263 3.00119 11.1035 3.00098ZM11.1035 4.80078C7.62263 4.80099 4.80392 7.6197 4.80371 11.1006C4.80371 14.5808 7.6225 17.4012 11.1035 17.4014C12.7419 17.4039 14.3166 16.7652 15.4912 15.623L15.626 15.4883C16.7682 14.3137 17.4069 12.739 17.4043 11.1006C17.4041 7.61957 14.5837 4.80078 11.1035 4.80078Z" fill="#FC7827" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_4466_3472">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <input class="field__input" type="text" name="search" placeholder="Поиск по названию">
                        </label>
                    </div>
                </div>
                <button class="inline-form__btn btn btn_primary">
                    <span>Поиск</span>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_4499_426)">
                            <path d="M9.25391 2.50098C12.9799 2.50098 16.0039 5.52498 16.0039 9.25098C16.0061 10.7825 15.4853 12.2689 14.5273 13.4639L17.7393 16.6748L16.6777 17.7363L13.4668 14.5244C12.2719 15.4823 10.7854 16.0032 9.25391 16.001C5.52791 16.001 2.50391 12.977 2.50391 9.25098C2.50391 5.52498 5.52791 2.50098 9.25391 2.50098ZM9.25391 4.00098C6.35291 4.00098 4.00391 6.34998 4.00391 9.25098C4.00391 12.1512 6.35291 14.501 9.25391 14.501C10.6192 14.5031 11.9313 13.9714 12.9102 13.0195L13.0225 12.9072C13.9743 11.9284 14.5061 10.6163 14.5039 9.25098C14.5039 6.34998 12.1542 4.00098 9.25391 4.00098Z" fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_4499_426">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </form>

            <div class="catalog-nav__split-row">
                <div class="catalog-nav__actions">
                    <button class="catalog-nav__nav-btn btn btn_outline btn_size-s btn_has-icon js-tab-select">
                        <span>Соискателю</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_4580_8105)">
                                <path d="M10.0048 2.58398C10.4188 2.58416 10.7547 2.92003 10.7548 3.33398V14.8564L15.3085 10.3037C15.6015 10.0113 16.0764 10.011 16.3691 10.3037C16.6617 10.5965 16.6614 11.0714 16.3691 11.3643L10.5351 17.1973C10.2422 17.4902 9.76745 17.4902 9.47455 17.1973L3.64154 11.3643C3.34865 11.0714 3.34865 10.5966 3.64154 10.3037C3.93446 10.0111 4.40931 10.0109 4.70209 10.3037L9.25483 14.8564V3.33398C9.255 2.92003 9.59087 2.58416 10.0048 2.58398Z" fill="#FC7827" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4580_8105">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </button>

                    <ul class="catalog-nav__tabs tabs">
                        <li class="tabs__item">
                            <button class="tabs__link tab tab_size-m active js-tab is-catalog" data-tab="vacancies">Соискателю</button>
                        </li>
                        <li class="tabs__item">
                            <button class="tabs__link tab tab_size-m js-tab is-catalog" data-tab="rezumes">Работодателю</button>
                        </li>
                    </ul>
                </div>

                <? 
                /* 
                
                <div class="catalog-nav__sorting sorting">
                    <div class="sorting__item">
                        <button class="sorting__button accordion-button btn-link js-sort-btn">
                            <span>По новизне</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_4580_8402)">
                                    <path d="M10.0009 2.58301C10.4149 2.58318 10.7507 2.91905 10.7509 3.33301V14.8555L15.3046 10.3027C15.5976 10.0103 16.0724 10.01 16.3652 10.3027C16.6577 10.5955 16.6575 11.0704 16.3652 11.3633L10.5312 17.1963C10.2383 17.4892 9.76354 17.4892 9.47065 17.1963L3.63764 11.3633C3.34475 11.0704 3.34475 10.5956 3.63764 10.3027C3.93056 10.0102 4.4054 10.0099 4.69819 10.3027L9.25092 14.8555V3.33301C9.2511 2.91905 9.58696 2.58318 10.0009 2.58301Z" fill="#FC7827" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_4580_8402">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                        <!-- TODO: add dropdown  -->
                        <div class="sorting__dropdown" data-id="sort">
                            <ul class="sorting__dropdown-list">
                                <li class="sorting__option active" data-value="По новизне">По новизне</li>
                                <li class="sorting__option" data-value="По популярности">По популярности</li>
                                <li class="sorting__option" data-value="По рейтингу">По рейтингу</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sorting__item">
                        <button class="sorting__button accordion-button btn-link js-sort-btn">
                            <span>За все время</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_4580_8402)">
                                    <path d="M10.0009 2.58301C10.4149 2.58318 10.7507 2.91905 10.7509 3.33301V14.8555L15.3046 10.3027C15.5976 10.0103 16.0724 10.01 16.3652 10.3027C16.6577 10.5955 16.6575 11.0704 16.3652 11.3633L10.5312 17.1963C10.2383 17.4892 9.76354 17.4892 9.47065 17.1963L3.63764 11.3633C3.34475 11.0704 3.34475 10.5956 3.63764 10.3027C3.93056 10.0102 4.4054 10.0099 4.69819 10.3027L9.25092 14.8555V3.33301C9.2511 2.91905 9.58696 2.58318 10.0009 2.58301Z" fill="#FC7827" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_4580_8402">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                        <!-- TODO: add dropdown  -->
                        <div class="sorting__dropdown" data-id="sort">
                            <ul class="sorting__dropdown-list">
                                <li class="sorting__option active" data-value="За все время">За все время</li>
                                <li class="sorting__option" data-value="За месяц">За месяц</li>
                                <li class="sorting__option" data-value="За неделю">За неделю</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sorting__item">
                        <button class="sorting__button accordion-button btn-link js-sort-btn">
                            <span>Показывать по 8</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_4580_8402)">
                                    <path d="M10.0009 2.58301C10.4149 2.58318 10.7507 2.91905 10.7509 3.33301V14.8555L15.3046 10.3027C15.5976 10.0103 16.0724 10.01 16.3652 10.3027C16.6577 10.5955 16.6575 11.0704 16.3652 11.3633L10.5312 17.1963C10.2383 17.4892 9.76354 17.4892 9.47065 17.1963L3.63764 11.3633C3.34475 11.0704 3.34475 10.5956 3.63764 10.3027C3.93056 10.0102 4.4054 10.0099 4.69819 10.3027L9.25092 14.8555V3.33301C9.2511 2.91905 9.58696 2.58318 10.0009 2.58301Z" fill="#FC7827" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_4580_8402">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                        <!-- TODO: add dropdown  -->
                        <div class="sorting__dropdown" data-id="count">
                            <ul class="sorting__dropdown-list">
                                <li class="sorting__option active" data-value="8">8</li>
                                <li class="sorting__option" data-value="12">12</li>
                                <li class="sorting__option" data-value="13">13</li>
                            </ul>
                        </div>
                    </div>
                </div>
                */
                ?>
            </div>
        </div>

        <div class="help__body">
            <div class="tabs-block__content js-tab-content active" data-tab="vacancies">
                <ul class="cards cards--grid js-list" data-id="help-vacancies">
                    <? for ($i = 0; $i < 12; $i++) : ?>
                        <li class="cards__item">
                            <a href="/pages/article.php" class="card card_help">
                                <div class="card__top">
                                    <span class="card__label tag tag_light">Соискателю</span>
                                    <span class="card__date tag">26.03.2026</span>
                                </div>
                                <div class="card__content">
                                    <h2 class="card__title">Первые шаги на вкалывай.рф для соискателя. Настройка профиля</h2>
                                    <p class="card__description">Начните поиск работы на вкалывай.рф</p>
                                </div>
                                <div class="card__bottom">
                                    <span class="card__time tag">4 мин.</span>
                                </div>
                            </a>
                        </li>
                    <? endfor; ?>
                </ul>

                <div class="scroll-trigger"></div>

                <? // include $_SERVER["DOCUMENT_ROOT"] . '/include/pagination.php'; ?>
            </div>
            <div class="tabs-block__content js-tab-content" data-tab="rezumes">
                <ul class="cards cards--grid js-list" data-id="help-rezumes">
                    <? for ($i = 0; $i < 6; $i++) : ?>
                        <li class="cards__item">
                            <a href="/pages/article.php" class="card card_help">
                                <div class="card__top">
                                    <span class="card__label tag tag_light">Соискателю</span>
                                    <span class="card__date tag">26.03.2026</span>
                                </div>
                                <div class="card__content">
                                    <h2 class="card__title">Первые шаги на вкалывай.рф для соискателя. Настройка профиля</h2>
                                    <p class="card__description">Начните поиск работы на вкалывай.рф</p>
                                </div>
                                <div class="card__bottom">
                                    <span class="card__time tag">4 мин.</span>
                                </div>
                            </a>
                        </li>
                    <? endfor; ?>
                </ul>

                <? // include $_SERVER["DOCUMENT_ROOT"] . '/include/pagination.php'; ?>
            </div>
        </div>

        <div class="feedback">
            <div class="feedback__inner">
                <img src="/images/cta.png" alt="" class="feedback__bg">
                <span class="feedback__title">Не нашли свой ответ?</span>
                <p class="feedback__description">Заполните форму и мы свяжемся с вами в ближайшее время!</p>
                <form action="" class="feedback__form">
                    <div class="feedback__group-row">
                        <label class="input input_form input_size-l">
                            <input type="text" placeholder="Ваше имя">
                        </label>
                        <label class="input input_form input_size-l">
                            <input type="tel" placeholder="Ваш телефон">
                        </label>
                        <label class="input input_form input_size-l">
                            <input type="email" placeholder="Email" required>
                        </label>
                    </div>

                    <div class="textarea">
                        <textarea name="textarea" placeholder="Комментарий"></textarea>
                    </div>
                    
                    <div class="feedback__submit-row">
                        <button class="feedback__btn btn btn_primary btn_size-l">Отправить заявку</button>
                        <label class="checkbox">
                            <input type="checkbox" class="checkbox__input">
                            <p class="checkbox__label">Даю согласие на обработку персональных данных.</p>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/template/footer.php"); ?>