<? require($_SERVER["DOCUMENT_ROOT"] . "/template/header.php"); ?>

<div class="lk">
    <div class="container">
        <div class="lk__wrapper">
            <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/employer/lk_sidebar.php"); ?>
            <div class="lk__wrapper-content prices-page">
                <h1 class="prices-page__title page-title lk__page-title">Цены и тарифы</h1>

                <div class="prices-page__banner">
                    <div class="prices-page__row">
                        <span class="prices-page__label">Ваш текущий тариф</span>
                        <span class="prices-page__caption">БЕСПЛАТНЫЙ</span>
                        <p class="prices-page__text">Вы можете просматривать 15 резюме в день и отправлять 15 приглашений на собеседование.<br>Счетчик обнуляется в 00:00</p>
                    </div>
                    <img class="prices-page__img" src="/images/prices-banner.png" alt="">
                </div>

                <div class="prices-page__grid">
                    <div class="prices-page__item">
                        <span class="prices-page__cap">Тариф «Базовый»</span>
                        <p class="prices-page__descr">300 резюме и 300 собеседований в сутки</p>
                        <button class="prices-page__btn btn btn_primary btn_size-m" data-call-modal="modal-prices">Подключить</button>
                    </div>
                    <div class="prices-page__item">
                        <span class="prices-page__cap">Тариф «Полный»</span>
                        <p class="prices-page__descr">Безлимит на просмотр резюме и приглашения на собеседования</p>
                        <button class="prices-page__btn btn btn_primary btn_size-m" data-call-modal="modal-prices">Подключить</button>
                    </div>
                    <div class="prices-page__item">
                        <span class="prices-page__cap">Тариф «Ультра»</span>
                        <p class="prices-page__descr">Включает безлимитный доступ и дополнительные услуги продвижения</p>
                        <button class="prices-page__btn btn btn_primary btn_size-m" data-call-modal="modal-prices">Подключить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div data-modal="modal-prices" class="modal prices-modal">
    <div class="modal__wrapper">
        <button class="modal__close js-modal-close icon-button">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path
                        d="M15.8212 6.91005C16.1726 6.55863 16.7432 6.55863 17.0946 6.91005C17.4456 7.26148 17.4458 7.83123 17.0946 8.18251L13.9823 11.2938C13.592 11.6843 13.592 12.3174 13.9823 12.7079L17.0946 15.8192C17.446 16.1706 17.446 16.7413 17.0946 17.0927C16.7432 17.4441 16.1726 17.4441 15.8212 17.0927L12.7099 13.9804C12.3194 13.5901 11.6863 13.59 11.2958 13.9804L8.18446 17.0927C7.83318 17.4439 7.26343 17.4436 6.912 17.0927C6.56058 16.7412 6.56058 16.1706 6.912 15.8192L10.0233 12.7079C10.4137 12.3174 10.4137 11.6843 10.0233 11.2938L6.912 8.18251C6.56058 7.83109 6.56058 7.26147 6.912 6.91005C7.26342 6.55863 7.83304 6.55863 8.18446 6.91005L11.2958 10.0214C11.6863 10.4118 12.3193 10.4117 12.7099 10.0214L15.8212 6.91005Z"
                        fill="#999999" />
                </g>
                <defs>
                    <clipPath>
                        <rect width="24" height="24" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </button>
        <div class="modal__content">
            <span class="prices-modal__title">Название тарифа</span>
            <p class="prices-modal__text">В данный момент этот тариф предоставляется бесплатно в рамках стартовой акции! Все лимиты расширены автоматически</p>
            <button class="prices-modal__btn btn btn_size-m btn_primary js-modal-close">Понятно</button>
        </div>
    </div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/template/footer.php"); ?>