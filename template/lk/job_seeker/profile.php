<div class="lk__head">
    <div class="lk__person">
        <img src="/../images/avatar_rezume.png" alt="Avatar">
        <div class="lk__person-data">
            <div>Иванов Иван Иванович</div>
            <p>Гражданство РФ 01.01.1990</p>
        </div>
    </div>
    <div class="lk__buttons">
        <a href="#" data-call-modal="edit__company" class="btn btn_size-m btn_primary lk__btn_has-icon profile-btn">
            <div class="mob-elem icons-block">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                    <path d="M13.4043 14.001H2.60352V12.8008H13.4043V14.001ZM9.88867 2.01855C10.0478 2.01855 10.201 2.08185 10.3135 2.19434L12.0107 3.8916C12.1231 4.00403 12.1864 4.15647 12.1865 4.31543C12.1865 4.47453 12.1232 4.62772 12.0107 4.74023L5.14941 11.6006H2.60352V9.05566L9.46484 2.19434C9.57726 2.08196 9.72973 2.01867 9.88867 2.01855ZM3.80371 9.55273V10.4014H4.65234L10.7373 4.31543L9.88867 3.46777L3.80371 9.55273Z" fill="white"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_7002_1150">
                    <rect width="16" height="16" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
            </div>
            <span class="tab-elem desk-elem">Редактировать</span>
        </a>
        <a href="#" class="btn profile-btn detail__btn btn_neutral btn_size-m lk__btn_has-icon ">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                <path d="M8.00391 2.00098C8.9355 2.00028 9.85426 2.21717 10.6875 2.63379C11.5207 3.05041 12.2453 3.65567 12.8037 4.40137H11.1777C10.4849 3.79042 9.63027 3.39226 8.7168 3.25488C7.80344 3.11758 6.87012 3.24688 6.02832 3.62695C5.18646 4.00707 4.47175 4.62147 3.9707 5.39746C3.46966 6.17352 3.20305 7.07821 3.20312 8.00195C3.20326 8.92551 3.46967 9.82963 3.9707 10.6055C4.47178 11.3813 5.18656 11.996 6.02832 12.376C6.87023 12.7559 7.80438 12.8855 8.71777 12.748C9.63123 12.6105 10.486 12.2116 11.1787 11.6006H12.8047C12.2464 12.3462 11.5216 12.9515 10.6885 13.3682C9.85512 13.7848 8.9356 14.0018 8.00391 14.001C4.69011 14.001 2.00391 11.3148 2.00391 8.00098C2.00391 4.68718 4.69011 2.00098 8.00391 2.00098ZM15.2041 8.00098L12.2041 10.4014V8.60059H7.4043V7.40137H12.2041V5.60059L15.2041 8.00098Z" fill="white"/>
                </g>
                <defs>
                <clipPath id="clip0_7002_859">
                <rect width="16" height="16" fill="white"/>
                </clipPath>
                </defs>
            </svg>
        </a>
    </div>
</div>

<div class="lk__content detail__section">
    <span class="subcaption">Основная информация</span>
    <div class="grid-bubbles grid-list personal-bubbles">
        <div class="lk-bubble tight-bubble gray-bubble lk-bubble__text-wrapper">
            <span>ФИО</span>
            <p>Иванов Иван Иванович</p>
        </div>
        <div class="lk-bubble tight-bubble gray-bubble lk-bubble__text-wrapper">
            <span>Пол</span>
            <p>Мужской</p>
        </div>
        <div class="lk-bubble tight-bubble gray-bubble lk-bubble__text-wrapper">
            <span>Дата рождения</span>
            <p>01.01.1990</p>
        </div>
        <div class="lk-bubble tight-bubble gray-bubble lk-bubble__text-wrapper">
            <span>Место жительства</span>
            <p>Москва, Малая Тульская улица, 2/1 к5</p>
        </div>
        <div class="lk-bubble tight-bubble gray-bubble lk-bubble__text-wrapper">
            <span>Участник СВО</span>
            <p>Нет</p>
        </div>
        <div class="lk-bubble tight-bubble gray-bubble lk-bubble__text-wrapper">
            <span>Статус поиска</span>
            <p>Активно ищу работу</p>
        </div>
    </div>
</div>

<div class="lk__content detail__section">
    <span class="subcaption">Контакты</span>
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/contact-fields.php"); ?>
</div>

<div class="lk__content detail__section">
    <div class="full-width lk__section-title-wrapper">
        <span class="subcaption">Образование</span>
        <button data-call-modal="add__univercity" class="education-add transp-btn lk__btn_has-icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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

    <div class="grid-bubbles grid-list">
        <div class="lk-bubble lk-bubble__education big-bubble with-icon">
            <div class="date">
                <span>Среднее специальное</span>
                <p>2009</p>
            </div>
            <button class="education--edit btn">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path
                            d="M26.8037 28.0012H5.2041V25.6008H26.8037V28.0012ZM19.7744 4.03638C20.0926 4.03641 20.398 4.163 20.623 4.38794L24.0176 7.78247C24.2425 8.0075 24.3691 8.31293 24.3691 8.6311C24.3691 8.94907 24.2423 9.25382 24.0176 9.47876L10.2959 23.2014H5.2041V18.1096L18.9258 4.38794C19.1508 4.16297 19.4562 4.03638 19.7744 4.03638ZM7.60352 19.1047V20.801H9.30078L21.4707 8.6311L19.7744 6.93384L7.60352 19.1047Z"
                            fill="#C2C2C2" />
                    </g>
                    <defs>
                        <clipPath id="clip0_4363_22925">
                            <rect width="32" height="32" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
            <div class="text">
                <span>Сибирский государственный университет телекоммуникаций и информатики</span>
                <p>Фундаментальная информатика и информационные технологии</p>
            </div>
        </div>
        <div class="lk-bubble lk-bubble__education big-bubble with-icon">
            <div class="date">
                <span>Высшее</span>
                <p>2012</p>
            </div>
            <button class="education--edit btn">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path
                            d="M26.8037 28.0012H5.2041V25.6008H26.8037V28.0012ZM19.7744 4.03638C20.0926 4.03641 20.398 4.163 20.623 4.38794L24.0176 7.78247C24.2425 8.0075 24.3691 8.31293 24.3691 8.6311C24.3691 8.94907 24.2423 9.25382 24.0176 9.47876L10.2959 23.2014H5.2041V18.1096L18.9258 4.38794C19.1508 4.16297 19.4562 4.03638 19.7744 4.03638ZM7.60352 19.1047V20.801H9.30078L21.4707 8.6311L19.7744 6.93384L7.60352 19.1047Z"
                            fill="#C2C2C2" />
                    </g>
                    <defs>
                        <clipPath id="clip0_4363_22925">
                            <rect width="32" height="32" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
            <div class="text">
                <span>Сибирский государственный университет телекоммуникаций и информатики</span>
                <p>Фундаментальная информатика и информационные технологии</p>
            </div>
        </div>
    </div>
</div>

<div class="lk__content detail__section">
    <span class="subcaption">Опыт вождения</span>
    <div class="grid-bubbles grid-list">
        <div class="lk-bubble big-bubble with-icon">
            <div class="lk-bubble__text-wrapper">
                <span>Категория прав</span>
                <p>B, C, A</p>
            </div>
            <button data-call-modal="add__driver" class="driving-experience--edit btn">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path
                            d="M26.8037 28.0012H5.2041V25.6008H26.8037V28.0012ZM19.7744 4.03638C20.0926 4.03641 20.398 4.163 20.623 4.38794L24.0176 7.78247C24.2425 8.0075 24.3691 8.31293 24.3691 8.6311C24.3691 8.94907 24.2423 9.25382 24.0176 9.47876L10.2959 23.2014H5.2041V18.1096L18.9258 4.38794C19.1508 4.16297 19.4562 4.03638 19.7744 4.03638ZM7.60352 19.1047V20.801H9.30078L21.4707 8.6311L19.7744 6.93384L7.60352 19.1047Z"
                            fill="#C2C2C2" />
                    </g>
                    <defs>
                        <clipPath id="clip0_4363_22925">
                            <rect width="32" height="32" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
        </div>
    </div>
</div>

<div class="lk__content detail__section">
    <div class="full-width lk__section-title-wrapper">
        <span class="subcaption">Знание языков</span>
        <button data-call-modal="add__external-language" class="education-add transp-btn lk__btn_has-icon">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
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
    <div class="grid-bubbles grid-list language-list">
        <div class="lk-bubble big-bubble with-icon">
            <div class="lk-bubble__text-wrapper">
                <span>Родной</span>
                <p>Русский</p>
            </div>
            <button data-call-modal="add__internal-language" class="driving-experience--edit btn">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path
                            d="M26.8037 28.0012H5.2041V25.6008H26.8037V28.0012ZM19.7744 4.03638C20.0926 4.03641 20.398 4.163 20.623 4.38794L24.0176 7.78247C24.2425 8.0075 24.3691 8.31293 24.3691 8.6311C24.3691 8.94907 24.2423 9.25382 24.0176 9.47876L10.2959 23.2014H5.2041V18.1096L18.9258 4.38794C19.1508 4.16297 19.4562 4.03638 19.7744 4.03638ZM7.60352 19.1047V20.801H9.30078L21.4707 8.6311L19.7744 6.93384L7.60352 19.1047Z"
                            fill="#C2C2C2" />
                    </g>
                    <defs>
                        <clipPath id="clip0_4363_22925">
                            <rect width="32" height="32" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
        </div>
        <div class="lk-bubble big-bubble with-icon">
            <div class="lk-bubble__text-wrapper">
                <span>Иностранный</span>
                <p>Английский</p>
            </div>
            <button data-call-modal="add__external-language" class="driving-experience--edit btn">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                        <path
                            d="M26.8037 28.0012H5.2041V25.6008H26.8037V28.0012ZM19.7744 4.03638C20.0926 4.03641 20.398 4.163 20.623 4.38794L24.0176 7.78247C24.2425 8.0075 24.3691 8.31293 24.3691 8.6311C24.3691 8.94907 24.2423 9.25382 24.0176 9.47876L10.2959 23.2014H5.2041V18.1096L18.9258 4.38794C19.1508 4.16297 19.4562 4.03638 19.7744 4.03638ZM7.60352 19.1047V20.801H9.30078L21.4707 8.6311L19.7744 6.93384L7.60352 19.1047Z"
                            fill="#C2C2C2" />
                    </g>
                    <defs>
                        <clipPath id="clip0_4363_22925">
                            <rect width="32" height="32" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
        </div>
    </div>
</div>