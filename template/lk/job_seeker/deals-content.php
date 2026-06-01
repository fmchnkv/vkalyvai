<h1 class="deals__title page-title">Контакты</h1>
<div class="deals-wrapper">
    <? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/deals/deals-list.php"); ?>
    <button class="btn add-resume-btn detail__btn btn_primary btn_size-l">Добавить резюме</button>
</div>
<div class="section-title__wrapper">
    <h2 class="section-title vacancies-title">Вакансии для вас</h2>
    <button class="vacancies-all transp-btn btn_has-icon">
        <span>Смотреть все</span>
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_7142_9460)">
                <path
                    d="M7.38666 4.46985C7.67957 4.17708 8.15436 4.177 8.44721 4.46985L13.4472 9.46985C13.7398 9.76273 13.7399 10.2376 13.4472 10.5304L8.44721 15.5304C8.1544 15.8232 7.67958 15.823 7.38666 15.5304C7.09377 15.2375 7.09377 14.7627 7.38666 14.4699L11.8564 10.0001L7.38666 5.5304C7.09377 5.23751 7.09377 4.76275 7.38666 4.46985Z"
                    fill="#FC7827" />
            </g>
            <defs>
                <clipPath id="clip0_7142_9460">
                    <rect width="20" height="20" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </button>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/template/lk/deals/vacancies-list.php"); ?>