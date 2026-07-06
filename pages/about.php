<? require($_SERVER["DOCUMENT_ROOT"] . "/template/header.php"); ?>

<section class="about-hero about-section about-first">
    <div class="container">
        <div class="about-hero__inner">
            <img src="/images/about.png" class="about-hero__bg" alt="">
            <div class="about-hero__row">
                <h1 class="about-hero__title">Мы вкалываем, чтобы вы могли <span>спокойно работать!</span></h1>
                <div class="about-hero__bottom">
                    <p class="about-hero__text">Удобный поиск вакансий и сотрудников. <br>Минимум действий — максимум результата!</p>
                    <div class="about-hero__actions">
                        <a href="/pages/vacancies.php" class="about-hero__btn btn btn_primary btn_size-s">Каталог вакансий</a>
                        <a href="/pages/rezumes.php" class="about-hero__btn btn btn_secondary btn_size-s">Каталог резюме</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-info about-section">
    <div class="container">
        <div class="about-info__row">
            <div class="about-info__content">
                <h2 class="about-info__title">Больше чем просто <span>поиск</span></h2>
                <p class="about-info__text about-info__text_first"><span class="about-info__accent">«Вкалывай»</span> — это место, где нанимают и работают без стресса и выгорания. Мы убрали всё лишнее: долгие анкеты, запутанные фильтры и бесконечные клики.</p>
                <p class="about-info__text about-info__text_second">Быстро, удобно и без стресса. Потому что найм и трудоустройство не должны превращаться в ещё одну работу.</p>
                <span class="about-info__caption">Здесь все просто!</span>
                <div class="about-info__steps">
                    <div class="about-info__step btn_no-hover btn_has-icon">
                        <span>Зарегистрировался</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g >
                                <path d="M10.3066 3.63764C10.5995 3.34475 11.0743 3.34475 11.3672 3.63764L17.2002 9.47065C17.4931 9.76354 17.4931 10.2383 17.2002 10.5312L11.3672 16.3652C11.0743 16.6575 10.5994 16.6577 10.3066 16.3652C10.0139 16.0724 10.0142 15.5976 10.3066 15.3046L14.8594 10.7509H3.33691C2.92296 10.7507 2.58709 10.4149 2.58691 10.0009C2.58709 9.58696 2.92296 9.2511 3.33691 9.25092H14.8594L10.3066 4.69819C10.0139 4.4054 10.0141 3.93056 10.3066 3.63764Z" fill="#141414" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4950_2861">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="about-info__step btn_no-hover btn_has-icon">
                        <span>Нашёл</span>
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g >
                                <path d="M10.3066 3.63764C10.5995 3.34475 11.0743 3.34475 11.3672 3.63764L17.2002 9.47065C17.4931 9.76354 17.4931 10.2383 17.2002 10.5312L11.3672 16.3652C11.0743 16.6575 10.5994 16.6577 10.3066 16.3652C10.0139 16.0724 10.0142 15.5976 10.3066 15.3046L14.8594 10.7509H3.33691C2.92296 10.7507 2.58709 10.4149 2.58691 10.0009C2.58709 9.58696 2.92296 9.2511 3.33691 9.25092H14.8594L10.3066 4.69819C10.0139 4.4054 10.0141 3.93056 10.3066 3.63764Z" fill="#141414" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4950_2861">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="about-info__step btn_no-hover btn_has-icon">
                        <span>Работаешь!</span>
                    </div>
                </div>
            </div>
            <div class="about-info__image">
                <img src="/images/about-2.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="about-features about-section">
    <div class="container">
        <h2 class="about-features__title">Чем мы полезны</h2>
        <ul class="about-features__list">
            <li class="about-features__item">
                <div class="about-features__image">
                    <img src="/images/about-features-1.png" alt="">
                </div>
                <span class="about-features__caption">Возможности для соискателя</span>
                <div class="about-features__tabs">
                    <a href="/lk/job_seeker/resume-form.php" class="about-features__tab tab active btn_size-s">Покажи себя</a>
                    <a href="/pages/vacancies.php" class="about-features__tab tab btn_size-s">Изучи рынок</a>
                    <a href="/pages/companies.php" class="about-features__tab tab btn_size-s">Выбирай, где работать</a>
                    <a href="/pages/help.php" class="about-features__tab tab btn_size-s">По всем вопросам</a>
                </div>
            </li>
            <li class="about-features__item">
                <div class="about-features__image">
                    <img src="/images/about-features-2.png" alt="">
                </div>
                <span class="about-features__caption">Возможности для работодателя</span>
                <div class="about-features__tabs">
                    <a href="/lk/employer/vacancy-form.php" class="about-features__tab tab active btn_size-s">Заяви о своей компании</a>
                    <a href="/pages/rezumes.php" class="about-features__tab tab btn_size-s">Выбирай лучших в штат</a>
                    <a href="/pages/companies.php" class="about-features__tab tab btn_size-s">Управляй наймом в один клик</a>
                    <a href="/pages/help.php" class="about-features__tab tab btn_size-s">По всем вопросам</a>
                </div>
            </li>
        </ul>
    </div>
</section>

<section class="about-advantages about-section">
    <div class="container">
        <div class="about-advantages__inner">
            <div class="about-advantages__left">

                <h2 class="about-advantages__title">Простой сервис без скрытых схем и сложных условий</h2>
                <ul class="about-advantages__list">
                    <li class="about-advantages__item btn btn_size-s btn_outline btn_no-hover btn_has-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g >
                                <path d="M14.9021 5.75781C15.2925 5.36747 15.9256 5.36763 16.3162 5.75781C16.7066 6.14817 16.7073 6.78127 16.3172 7.17188L9.24685 14.2432C9.05937 14.4307 8.80496 14.5361 8.53981 14.5361C8.27458 14.5361 8.02033 14.4307 7.83278 14.2432L4.29665 10.708C3.90633 10.3175 3.90633 9.68443 4.29665 9.29395C4.68714 8.90362 5.32023 8.90362 5.71071 9.29395L8.53884 12.1221L14.9021 5.75781Z" fill="#FC7827" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4956_1430">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span>Всё по делу</span>
                    </li>
                    <li class="about-advantages__item btn btn_size-s btn_outline btn_no-hover btn_has-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g >
                                <path d="M14.9021 5.75781C15.2925 5.36747 15.9256 5.36763 16.3162 5.75781C16.7066 6.14817 16.7073 6.78127 16.3172 7.17188L9.24685 14.2432C9.05937 14.4307 8.80496 14.5361 8.53981 14.5361C8.27458 14.5361 8.02033 14.4307 7.83278 14.2432L4.29665 10.708C3.90633 10.3175 3.90633 9.68443 4.29665 9.29395C4.68714 8.90362 5.32023 8.90362 5.71071 9.29395L8.53884 12.1221L14.9021 5.75781Z" fill="#FC7827" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4956_1430">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span>Чёткие и честные фильтры</span>
                    </li>
                    <li class="about-advantages__item btn btn_size-s btn_outline btn_no-hover btn_has-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g >
                                <path d="M14.9021 5.75781C15.2925 5.36747 15.9256 5.36763 16.3162 5.75781C16.7066 6.14817 16.7073 6.78127 16.3172 7.17188L9.24685 14.2432C9.05937 14.4307 8.80496 14.5361 8.53981 14.5361C8.27458 14.5361 8.02033 14.4307 7.83278 14.2432L4.29665 10.708C3.90633 10.3175 3.90633 9.68443 4.29665 9.29395C4.68714 8.90362 5.32023 8.90362 5.71071 9.29395L8.53884 12.1221L14.9021 5.75781Z" fill="#FC7827" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4956_1430">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span>Никакой путаницы в интерфейсе</span>
                    </li>
                    <li class="about-advantages__item btn btn_size-s btn_outline btn_no-hover btn_has-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g >
                                <path d="M14.9021 5.75781C15.2925 5.36747 15.9256 5.36763 16.3162 5.75781C16.7066 6.14817 16.7073 6.78127 16.3172 7.17188L9.24685 14.2432C9.05937 14.4307 8.80496 14.5361 8.53981 14.5361C8.27458 14.5361 8.02033 14.4307 7.83278 14.2432L4.29665 10.708C3.90633 10.3175 3.90633 9.68443 4.29665 9.29395C4.68714 8.90362 5.32023 8.90362 5.71071 9.29395L8.53884 12.1221L14.9021 5.75781Z" fill="#FC7827" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4956_1430">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span>Прямой контакт</span>
                    </li>
                    <li class="about-advantages__item btn btn_size-s btn_outline btn_no-hover btn_has-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g >
                                <path d="M14.9021 5.75781C15.2925 5.36747 15.9256 5.36763 16.3162 5.75781C16.7066 6.14817 16.7073 6.78127 16.3172 7.17188L9.24685 14.2432C9.05937 14.4307 8.80496 14.5361 8.53981 14.5361C8.27458 14.5361 8.02033 14.4307 7.83278 14.2432L4.29665 10.708C3.90633 10.3175 3.90633 9.68443 4.29665 9.29395C4.68714 8.90362 5.32023 8.90362 5.71071 9.29395L8.53884 12.1221L14.9021 5.75781Z" fill="#FC7827" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4956_1430">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span>Мгновенный отклик</span>
                    </li>
                    <li class="about-advantages__item btn btn_size-s btn_outline btn_no-hover btn_has-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g >
                                <path d="M14.9021 5.75781C15.2925 5.36747 15.9256 5.36763 16.3162 5.75781C16.7066 6.14817 16.7073 6.78127 16.3172 7.17188L9.24685 14.2432C9.05937 14.4307 8.80496 14.5361 8.53981 14.5361C8.27458 14.5361 8.02033 14.4307 7.83278 14.2432L4.29665 10.708C3.90633 10.3175 3.90633 9.68443 4.29665 9.29395C4.68714 8.90362 5.32023 8.90362 5.71071 9.29395L8.53884 12.1221L14.9021 5.75781Z" fill="#FC7827" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4956_1430">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span>Поиск в пару кликов</span>
                    </li>
                    <li class="about-advantages__item btn btn_size-s btn_outline btn_no-hover btn_has-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g >
                                <path d="M14.9021 5.75781C15.2925 5.36747 15.9256 5.36763 16.3162 5.75781C16.7066 6.14817 16.7073 6.78127 16.3172 7.17188L9.24685 14.2432C9.05937 14.4307 8.80496 14.5361 8.53981 14.5361C8.27458 14.5361 8.02033 14.4307 7.83278 14.2432L4.29665 10.708C3.90633 10.3175 3.90633 9.68443 4.29665 9.29395C4.68714 8.90362 5.32023 8.90362 5.71071 9.29395L8.53884 12.1221L14.9021 5.75781Z" fill="#FC7827" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4956_1430">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span>Реальная экономия времени</span>
                    </li>
                </ul>
            </div>
            <div class="about-advantages__right">
                <img class="about-advantages__img" src="/images/about-advantages.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="about-video video-block about-section">
    <div class="container">
        <h2 class="about-video__title">Как быстро найти работу и сотрудников</h2>
        <div class="video-block__inner">
            <img class="video-block__poster" src="/images/video-poster.jpg" alt="">
            <div class="video-block__content">
                <button class="video-block__play">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g >
                            <path d="M24 6.00208C33.9414 6.00208 42 14.0607 42 24.0021C42 33.9435 33.9414 42.0021 24 42.0021C14.0586 42.0021 5.99997 33.9435 5.99997 24.0021C5.99997 14.0607 14.0586 6.00208 24 6.00208ZM21.1552 17.4288C21.0253 17.4225 20.896 17.4516 20.7812 17.5128C20.6663 17.5741 20.57 17.6658 20.5029 17.7775C20.4359 17.889 20.4006 18.0165 20.4004 18.1466V29.8575C20.4006 29.9877 20.4359 30.1151 20.5029 30.2267C20.57 30.3383 20.6663 30.43 20.7812 30.4913C20.896 30.5526 21.0253 30.5817 21.1552 30.5753C21.2853 30.5689 21.4112 30.5274 21.5195 30.4552L30.3017 24.6017C30.4005 24.536 30.4811 24.4465 30.5371 24.3419C30.5931 24.2373 30.623 24.1207 30.623 24.0021C30.623 23.8834 30.5931 23.7668 30.5371 23.6622C30.4811 23.5577 30.4005 23.4682 30.3017 23.4025L21.5175 17.549H21.5195C21.4112 17.4767 21.2853 17.4352 21.1552 17.4288Z" fill="#FC7827" />
                        </g>
                        <defs>
                            <clipPath id="clip0_4956_909">
                                <rect width="48" height="48" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<section class="about-philosophy about-section">
    <div class="container">
        <h2 class="about-philosophy__title">Наша философия</h2>
        <div class="about-philosophy__list swiper">
            <div class="swiper-wrapper">
                <div class="about-philosophy__item swiper-slide">
                    <div class="about-philosophy__image btn btn_icon btn_light btn_no-hover">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g >
                                <path d="M8.00213 5.52651C8.80247 5.24093 9.67109 5.20484 10.4924 5.42299C11.3137 5.64124 12.0496 6.10392 12.6027 6.74917C13.1558 7.39442 13.4999 8.19219 13.59 9.03725C13.6801 9.88234 13.5123 10.7352 13.1076 11.4826L25.9582 24.3341L24.2609 26.0314L11.4094 13.1789C10.6618 13.5819 9.80942 13.7492 8.96502 13.6583C8.12077 13.5675 7.32348 13.2228 6.67889 12.6701C6.03436 12.1173 5.57221 11.3822 5.35369 10.5617C5.13517 9.74107 5.17096 8.87357 5.45526 8.07338L8.13983 10.757C8.30587 10.9289 8.5042 11.0669 8.72381 11.1613C8.94324 11.2555 9.17936 11.3047 9.41815 11.3068C9.65705 11.3089 9.89428 11.2634 10.1154 11.173C10.3366 11.0825 10.5382 10.9484 10.7072 10.7794C10.876 10.6105 11.0093 10.4096 11.0998 10.1886C11.1903 9.96741 11.2357 9.73035 11.2336 9.49135C11.2315 9.25235 11.1824 9.01565 11.0881 8.79604C10.9937 8.57658 10.8566 8.378 10.6847 8.21206L8.00116 5.52553L8.00213 5.52651ZM14.0783 19.2423L7.71502 25.6066C7.49866 25.8236 7.20685 25.949 6.90057 25.9581C6.59438 25.9673 6.29646 25.859 6.06756 25.6554C5.83866 25.4518 5.69579 25.1686 5.66912 24.8634C5.6425 24.5582 5.73379 24.254 5.92401 24.0138L6.01776 23.9093L12.381 17.546L14.0783 19.2423ZM25.9582 7.36245L23.8361 11.1808L21.715 11.6056L19.1711 14.1515L17.4728 12.4542L20.0178 9.90932L20.4426 7.78725L24.2609 5.66616L25.9582 7.36245Z" fill="#FC7827" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4956_1668">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <span class="about-philosophy__caption">Удобно для каждого</span>
                    <p class="about-philosophy__text">Наш сайт одинаково удобен для всех. Здесь просто договориться обычному человеку и любому работодателю. Мы помогаем и малым фирмам, и среднему бизнесу, и крупным компаниям, и госучреждениям.</p>
                </div>

                <div class="about-philosophy__item swiper-slide">
                    <div class="about-philosophy__image btn btn_icon btn_light btn_no-hover">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M17.2041 12.4016H26.8037L14.8037 30.4016V19.6008H6.4043L17.2041 1.60083V12.4016ZM10.6426 17.2014H17.2041V22.4739L22.3193 14.801H14.8037V10.2649L10.6426 17.2014Z" fill="#FC7827" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4956_308">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <span class="about-philosophy__caption">Честная работа</span>
                    <p class="about-philosophy__text">Мы за то, чтобы работники и работодатели относились друг к другу уважительно. Мы помогаем делиться только правдивой информацией, честно выполнять договоренности и вместе приходить к успеху.</p>
                </div>

                <div class="about-philosophy__item swiper-slide">
                    <div class="about-philosophy__image btn btn_icon btn_light btn_no-hover">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M16.0039 4.00122C22.6315 4.00122 28.0039 9.37362 28.0039 16.0012C28.0039 22.6288 22.6315 28.0012 16.0039 28.0012C9.37631 28.0012 4.00391 22.6288 4.00391 16.0012C4.00391 9.37362 9.37631 4.00122 16.0039 4.00122ZM16.0039 6.40161C13.4578 6.40161 11.0162 7.41279 9.21582 9.21313C7.41547 11.0135 6.4043 13.4551 6.4043 16.0012C6.4043 18.5473 7.41547 20.989 9.21582 22.7893C11.0162 24.5897 13.4578 25.6008 16.0039 25.6008C18.55 25.6008 20.9916 24.5897 22.792 22.7893C24.5923 20.989 25.6035 18.5473 25.6035 16.0012C25.6035 13.4551 24.5923 11.0135 22.792 9.21313C20.9916 7.41279 18.55 6.40161 16.0039 6.40161ZM12.4043 16.0012C12.4043 16.956 12.7829 17.872 13.458 18.5471C14.1331 19.2223 15.0491 19.6008 16.0039 19.6008C16.9587 19.6008 17.8747 19.2223 18.5498 18.5471C19.2249 17.872 19.6035 16.956 19.6035 16.0012H22.0039C22.0039 17.5925 21.3713 19.1182 20.2461 20.2434C19.1209 21.3686 17.5952 22.0012 16.0039 22.0012C14.4126 22.0012 12.8869 21.3686 11.7617 20.2434C10.6365 19.1182 10.0039 17.5925 10.0039 16.0012H12.4043Z" fill="#FC7827" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4956_363">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

                    </div>
                    <span class="about-philosophy__caption">Дополнительные возможности</span>
                    <p class="about-philosophy__text">У нас можно не только искать работу или кадры. Используйте наши рекламные инструменты, чтобы продвигать свои вакансии, находить клиентов и развивать свое дело.</p>
                </div>

                <div class="about-philosophy__item swiper-slide">
                    <div class="about-philosophy__image btn btn_icon btn_light btn_no-hover">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path d="M14.8037 4.00122C20.7652 4.00122 25.6034 8.83952 25.6035 14.801C25.607 17.2513 24.7737 19.6294 23.2412 21.5413L28.3809 26.6799L26.6826 28.3782L21.5439 23.2385C19.6321 24.7711 17.254 25.6043 14.8037 25.6008C8.8422 25.6007 4.00391 20.7626 4.00391 14.801C4.00401 8.83958 8.84227 4.00133 14.8037 4.00122ZM14.8037 6.40161C10.1623 6.40172 6.4044 10.1596 6.4043 14.801C6.4043 19.4414 10.1622 23.2013 14.8037 23.2014C16.9882 23.2049 19.0882 22.3542 20.6543 20.8313L20.834 20.6516C22.3569 19.0855 23.2075 16.9855 23.2041 14.801C23.204 10.1595 19.444 6.40161 14.8037 6.40161ZM16.0039 13.6008H19.6035V16.0012H16.0039V19.6008H13.6035V16.0012H10.0039V13.6008H13.6035V10.0012H16.0039V13.6008Z" fill="#FC7827" />
                            </g>
                            <defs>
                                <clipPath id="clip0_4956_1674">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <span class="about-philosophy__caption">Всё по закону</span>
                    <p class="about-philosophy__text">На сайте действуют четкие внутренние правила. Они полностью опираются на законы и честные правила ведения бизнеса, чтобы защитить интересы обеих сторон.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about-cta cta cta_big about-section">
    <div class="container">
        <div class="cta__inner">
            <img class="cta__bg" src="/images/cta.png" alt="">
            <div class="cta__row">
                <span class="cta__title">Мы уже всё нашли для вас!</span>
                <p class="cta__description">Забудьте про сложные анкеты и бесконечные проверки. Просто открывайте нужный каталог и выбирайте лучшее прямо сейчас.</p>
                <div class="cta__actions">
                    <a href="/pages/vacancies.php" class="cta__btn btn btn_primary">Каталог вакансий</a>
                    <a href="/pages/rezumes.php" class="cta__btn btn btn_secondary">Каталог резюме</a>
                </div>
            </div>
        </div>
    </div>
</section>

<? require($_SERVER["DOCUMENT_ROOT"] . "/template/footer.php"); ?>