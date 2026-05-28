<? require($_SERVER["DOCUMENT_ROOT"] . "/template/header.php"); ?>

<div class="breadcrumbs">
    <div class="container">
        <ul class="breadcrumbs__list">
            <li class="breadcrumbs__item breadcrumbs__item_home">
                <a href="/" class="link">Главная</a>
                <span>/</span>
            </li>
            <li class="breadcrumbs__item current">
                <span>Контакты</span>
            </li>
        </ul>
    </div>
</div>

<section class="contacts">
    <div class="container">
        <h1 class="contacts__title">Контакты</h1>
        
        <ul class="contacts__list">
            <? 
            $arr = ['Работодателям', 'Соискателям', 'PR и Маркетинг'];
            ?>
            <? for ($i = 0; $i < 3; $i++) : ?>
                <li class="contacts__item contact-card">
                    <span class="contact-card__title"><?= $arr[$i] ?></span>
                    <p class="contact-card__description">Поможем решить любой вопрос!</p>
                    <div class="contact-card__group">
                        <span class="contact-card__label">E-mail</span>
                        <a href="mailto:email@email.com" class="contact-card__link link">email@email.com</a>
                    </div>
                    <div class="contact-card__group">
                        <span class="contact-card__label">Телефон</span>
                        <a href="tel:8 888 888 88 88" class="contact-card__link link">8 888 888 88 88</a>
                        <a href="tel:8 888 888 88 88" class="contact-card__link link">8 888 888 88 88</a>
                        <a href="tel:8 888 888 88 88" class="contact-card__link link">8 888 888 88 88</a>
                    </div>
                    <ul class="contact-card__socials socials-list">
                        <li class="socials-list__item">
                            <a href="#" class="socials-list__link btn btn_icon btn_light btn_size-s">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_5041_2314)">
                                        <path d="M14.0039 2.00098C16.8039 2.00098 18.2039 2.00111 19.2734 2.5459C20.2142 3.02527 20.9796 3.79063 21.459 4.73145C22.0038 5.80096 22.0039 7.20102 22.0039 10.001V14.001C22.0039 16.8009 22.0038 18.201 21.459 19.2705C20.9796 20.2113 20.2142 20.9767 19.2734 21.4561C18.2039 22.0008 16.8039 22.001 14.0039 22.001H10.0039C7.20395 22.001 5.80389 22.0008 4.73438 21.4561C3.79356 20.9767 3.02819 20.2113 2.54883 19.2705C2.00404 18.201 2.00391 16.8009 2.00391 14.001V10.001C2.00391 7.20102 2.00404 5.80096 2.54883 4.73145C3.02819 3.79063 3.79356 3.02527 4.73438 2.5459C5.80389 2.00111 7.20395 2.00098 10.0039 2.00098H14.0039ZM16.1143 8.03027C15.7343 8.03027 15.1638 8.23063 12.3838 9.39062C11.4137 9.79065 9.47357 10.6305 6.55371 11.9004C6.08383 12.0904 5.83351 12.2702 5.81348 12.4502C5.77348 12.8002 6.26365 12.9104 6.89355 13.1104C7.40335 13.2803 8.08324 13.4703 8.44336 13.4805C8.76332 13.4905 9.1235 13.35 9.52344 13.0801C12.2534 11.2401 13.6541 10.31 13.7441 10.29C13.8141 10.28 13.8942 10.2606 13.9541 10.3105C13.9763 10.3342 13.9923 10.3633 14.001 10.3945C14.0096 10.4258 14.0108 10.4586 14.0039 10.4902C13.9539 10.7002 11.3941 13.0307 11.2441 13.1807C10.6742 13.7606 10.0337 14.1206 11.0234 14.7705C11.8734 15.3305 12.3739 15.6905 13.2539 16.2705C13.8138 16.6405 14.254 17.0705 14.834 17.0205C15.0939 16.9904 15.3737 16.7401 15.5137 15.9902C15.8437 14.2202 16.4936 10.3798 16.6436 8.7998C16.6535 8.65987 16.6336 8.47986 16.6436 8.41992C16.6335 8.33998 16.6037 8.23026 16.5039 8.15039C16.3841 8.05058 16.1945 8.03035 16.1143 8.03027Z" fill="#FC7827" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5041_2314">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        <li class="socials-list__item">
                            <a href="#" class="socials-list__link btn btn_icon btn_light btn_size-s">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_5041_2890)">
                                        <path d="M17.0098 2.00195C19.7672 2.00207 22.0028 4.23766 22.0029 6.99512V17.0068C22.0028 19.7643 19.7672 21.9999 17.0098 22H6.99805C4.24058 21.9999 2.005 19.7643 2.00488 17.0068V6.99512C2.005 4.23765 4.24058 2.00207 6.99805 2.00195H17.0098ZM12.1289 4.3916C7.91737 4.3916 4.3625 7.6505 4.3623 11.9824C4.3623 13.7963 4.69755 15.0488 4.99316 16.1729C5.24131 17.0852 5.46094 17.9212 5.46094 18.9102C5.56734 20.227 7.99343 19.457 8.75977 18.4717C9.97124 19.3474 10.6691 19.5674 12.1689 19.5674C16.315 19.545 19.6603 16.1695 19.6465 12.0234C19.6465 7.81201 16.3439 4.39196 12.1289 4.3916ZM12.2305 8.13574V8.13965C14.3558 8.26151 15.992 10.0632 15.9092 12.1904C15.7665 14.3133 13.9504 15.9313 11.8252 15.8291C11.16 15.7757 10.5207 15.5482 9.97168 15.1689C9.63962 15.501 9.10628 15.9318 8.89453 15.8809C8.45302 15.7636 7.93483 13.5195 8.22656 11.6768C8.58056 9.45057 10.1795 8.03003 12.2305 8.13574Z" fill="#FC7827" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_5041_2890">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </li>
            <? endfor; ?>
        </ul>

        <div class="contacts__map map map_contacts">
            <div class="map__wrapper">
                <div class="map__overlay">
                    <button class="map__open btn btn_primary btn_size-s js-map-open">Посмотреть на карте</button>
                </div>
                <div style="position:relative;overflow:hidden;">
                    <a href="https://yandex.ru/maps/2/saint-petersburg/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Санкт‑Петербург</a>
                    <a href="https://yandex.ru/maps/2/saint-petersburg/?ll=30.332720%2C59.926167&mode=whatshere&utm_medium=mapframe&utm_source=maps&whatshere%5Bpoint%5D=30.321142%2C59.924176&whatshere%5Bzoom%5D=13.4&z=13.4" style="color:#eee;font-size:12px;position:absolute;top:14px;">Муниципальный округ Сенной — Яндекс Карты</a>
                    <iframe src="https://yandex.ru/map-widget/v1/?ll=30.332720%2C59.926167&mode=whatshere&whatshere%5Bpoint%5D=30.321142%2C59.924176&whatshere%5Bzoom%5D=13.4&z=13.4" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe>
                </div>
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